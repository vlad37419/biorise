function getBodyScrollTop() {
    return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
}

function headerAddActive() {
    const header = document.querySelector('.header');
    const scrollTop = getBodyScrollTop();

    if (scrollTop > 0) {
        if (!header.classList.contains('active')) {
            header.classList.add('active');
        }
    } else {
        if (header.classList.contains('active')) {
            header.classList.remove('active');
        }
    }
}

function setWidthScrollBar() {
    let div = document.createElement('div');

    div.style.position = 'absolute';
    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';

    document.body.append(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;

    div.remove();

    return scrollWidth;
}

function menuOpen(menuSelector) {
    menuSelector.classList.add('active');
    document.body.classList.add('lock');
    document.querySelector('html').style.paddingRight = setWidthScrollBar() + 'px';
    document.querySelectorAll('.padding-lock').forEach(function (elem) {
        elem.style.paddingRight = setWidthScrollBar() + 'px';
    });
}

function menuClose(menuSelector) {
    menuSelector.classList.remove('active');
    document.body.classList.remove('lock');
    document.querySelector('html').style.paddingRight = 0;
    document.querySelectorAll('.padding-lock').forEach(function (elem) {
        elem.style.paddingRight = 0;
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenu = document.querySelector('.menu-dropdown');
    const openMenuBtns = document.querySelectorAll('.open-menu');
    const closeMenuBtns = document.querySelectorAll('.close-menu');

    headerAddActive();

    window.addEventListener('scroll', function () {
        headerAddActive();
    });

    // accordion
    const ACCORDION_LIST = 'data-accordion-list'
    const ACCORDION_BUTTON = 'data-accordion-button'
    const ACCORDION_ARROW = 'data-accordion-arrow'
    const ACCORDION_CONTENT = 'data-accordion-content'
    const SECTION_OPENED = 'active'
    const ICON_ROTATED = 'rotated'

    class Accordion {
        static apply(accordionNode) {
            if (!accordionNode) {
                return
            }

            const acc = new Accordion()
            acc.accordion = accordionNode
            accordionNode.onclick = acc.onClick.bind(acc)
        }

        handleClick(button) {
            const innerSection = button.nextElementSibling
            const isOpened = innerSection.classList.contains(SECTION_OPENED)

            if (isOpened) {
                this.close(innerSection)
                return
            }
            this.open(innerSection)
        }

        open(section) {
            const accordion = section.querySelector(`[${ACCORDION_CONTENT}`).closest('.accor');
            const accordionContent = section.querySelector(`[${ACCORDION_CONTENT}`)
            const accordionList = accordionContent.querySelector(`[${ACCORDION_LIST}`)
            const innerSectionHeight = accordionContent.clientHeight
            let countOfScrollHeight = 0;
            const allElementContentData = section.querySelectorAll(`[${ACCORDION_CONTENT}`)
            accordion.classList.add(SECTION_OPENED)
            section.classList.add(SECTION_OPENED)
            this.rotateIconFor(section.previousElementSibling)

            for (const item of allElementContentData) {
                countOfScrollHeight = countOfScrollHeight + item.scrollHeight;
            }

            if (accordionContent.contains(accordionList)) {
                section.style.maxHeight = `${innerSectionHeight + countOfScrollHeight}px`
                return
            }
            section.style.maxHeight = `${innerSectionHeight}px`
        }

        close(section) {
            const accordion = section.querySelector(`[${ACCORDION_CONTENT}`).closest('.accor');
            section.style.maxHeight = 0
            accordion.classList.remove(SECTION_OPENED)
            section.classList.remove(SECTION_OPENED)
            this.rotateIconFor(section.previousElementSibling)
        }

        rotateIconFor(button) {
            const rotatedIconClass = ICON_ROTATED
            const arrowElement = button.dataset.hasOwnProperty('accordionArrow') ?
                button :
                button.querySelector(`[${ACCORDION_ARROW}]`)

            if (!arrowElement) {
                return
            }

            const isOpened = arrowElement.classList.contains(rotatedIconClass)
            if (!isOpened) {
                arrowElement.classList.add(rotatedIconClass)
                return
            }
            arrowElement.classList.remove(rotatedIconClass)
        }

        onClick(event) {
            let button = event.target.closest(`[${ACCORDION_BUTTON}]`)
            if (button && button.dataset.accordionButton !== undefined) {
                this.handleClick(button)
            }
        }
    }

    const accorWrapperList = document.querySelectorAll('.accor-wrapper');

    if (accorWrapperList.length > 0) {
        accorWrapperList.forEach(function (elem) {
            Accordion.apply(elem);
            elem.querySelector('.accor-open').click();
        });
    }

    // Tabs
    class Tabs {

        container;
        tab_button_class;
        tab_content_class;
        tab_attribute_key;
        tab_attribute_target;
        tab_navigation_next;
        tab_navigation_prev;

        constructor(
            {
                container = '.tabs-container',
                tabs_wrapper_class = '.tabs-wrapper',
                button_class = '.tab',
                content_class = '.tab-content',
                attribute_key = 'path',
                attribute_target = 'target',
                nav_next = '.tabs__arrow_next',
                nav_prev = '.tabs__arrow_prev',
            } = {}) {
            this.container = container;
            this.tabs_wrapper_class = tabs_wrapper_class;
            this.tab_button_class = button_class;
            this.tab_content_class = content_class;
            this.tab_attribute_key = attribute_key;
            this.tab_attribute_target = attribute_target;
            this.tab_navigation_next = nav_next;
            this.tab_navigation_prev = nav_prev;
        }

        initTabs() {
            document.querySelectorAll(this.container).forEach((wrapper) => {
                this.initTabsWrapper(wrapper);
            });
        }

        initTabsWrapper(wrapper) {
            const tabsWrapper = wrapper.querySelector(this.tabs_wrapper_class);
            const tabsButtonList = wrapper.querySelectorAll(this.tab_button_class);
            const tabsContentList = wrapper.querySelectorAll(this.tab_content_class);
            const tabsNavigationNext = wrapper.querySelector(this.tab_navigation_next);
            const tabsNavigationPrev = wrapper.querySelector(this.tab_navigation_prev);
            let currentTab = 0;

            for (let index = 0; index < tabsButtonList.length; index++) {
                if (tabsButtonList[index].dataset.start === true) {
                    currentTab = index;
                }

                tabsButtonList[index].addEventListener('click', () => {
                    if (tabsContentList[index]) {
                        currentTab = index;
                        this.showTabsContent({
                            list_tabs: tabsContentList,
                            list_buttons: tabsButtonList,
                            index: currentTab,
                        });
                    }
                });
            }

            this.showTabsContent({
                list_tabs: tabsContentList,
                list_buttons: tabsButtonList,
                index: currentTab,
            });

            if (tabsNavigationNext) {
                tabsNavigationNext.addEventListener('click', () => {
                    if (currentTab + 1 < tabsButtonList.length) {
                        currentTab += 1;
                    } else {
                        currentTab = 0;
                    }

                    const tabsWrapperPositionX = tabsWrapper.getBoundingClientRect().left;
                    const currentTabPositionX = tabsButtonList[currentTab].getBoundingClientRect().left;
                    const currentTabPositionXRegardingParent = currentTabPositionX - tabsWrapperPositionX;

                    tabsWrapper.scrollBy({
                        left: currentTabPositionXRegardingParent,
                        behavior: 'smooth'
                    });

                    this.showTabsContent({
                        list_tabs: tabsContentList,
                        list_buttons: tabsButtonList,
                        index: currentTab,
                    });
                });
            }

            if (tabsNavigationPrev) {
                tabsNavigationPrev.addEventListener('click', () => {
                    if (currentTab - 1 >= 0) {
                        currentTab -= 1;
                    } else {
                        currentTab = tabsButtonList.length - 1;
                    }

                    const tabsWrapperPositionX = tabsWrapper.getBoundingClientRect().left;
                    const currentTabPositionX = tabsButtonList[currentTab].getBoundingClientRect().left;
                    const currentTabPositionXRegardingParent = currentTabPositionX - tabsWrapperPositionX;

                    tabsWrapper.scrollBy({
                        left: currentTabPositionXRegardingParent,
                        behavior: 'smooth'
                    });

                    this.showTabsContent({
                        list_tabs: tabsContentList,
                        list_buttons: tabsButtonList,
                        index: currentTab,
                    });
                });
            }
        }

        hideTabsContent({ list_tabs, list_buttons }) {
            list_buttons.forEach((el) => {
                el.classList.remove('active');
            });
            list_tabs.forEach((el) => {
                el.classList.remove('active');
            });
        }

        showTabsContent({ list_tabs, list_buttons, index }) {
            this.hideTabsContent({ list_tabs, list_buttons });

            if (list_tabs[index])
                list_tabs[index].classList.add('active');

            if (list_buttons[index])
                list_buttons[index].classList.add('active');
        }
    }

    new Tabs().initTabs();

    // Scroll to block
    document.querySelectorAll('a[href^="#"]').forEach(link => {

        link.addEventListener('click', function (e) {
            e.preventDefault();

            let href = this.getAttribute('href').substring(1);

            const scrollTarget = document.getElementById(href);

            // const topOffset = document.querySelector('.scrollto').offsetHeight;
            const topOffset = 88;
            const elementPosition = scrollTarget.getBoundingClientRect().top;
            const offsetPosition = elementPosition - topOffset;

            menuClose(mobileMenu);

            window.scrollBy({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });

    openMenuBtns.forEach(function (openMenuBtn) {
        openMenuBtn.addEventListener('click', function () {
            menuOpen(mobileMenu);
        })
    });

    closeMenuBtns.forEach(function (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', function () {
            menuClose(mobileMenu);
        })
    });

    // Popups
    function popupClose(popupActive) {
        popupActive.querySelector('.form').dataset.additional = "Неизвестная форма";
        popupActive.classList.remove('open');
        document.body.classList.remove('lock');
        document.querySelector('html').style.paddingRight = 0;
        document.querySelectorAll('.padding-lock').forEach(function (elem) {
            elem.style.paddingRight = 0;
        });
    }

    const popupOpenBtns = document.querySelectorAll('.popup-btn');
    const popups = document.querySelectorAll('.popup');
    const closePopupBtns = document.querySelectorAll('.close-popup');

    closePopupBtns.forEach(function (el) {
        el.addEventListener('click', function (e) {
            popupClose(e.target.closest('.popup'));
        });
    });

    popupOpenBtns.forEach(function (el) {
        el.addEventListener('click', function (e) {
            const path = e.currentTarget.dataset.path;
            const currentPopup = document.querySelector(`[data-target="${path}"]`);
            const currentForm = currentPopup.querySelector('.form');

            popups.forEach(function (popup) {
                popupClose(popup);
                popup.addEventListener('click', function (e) {
                    if (!e.target.closest('.popup__content')) {
                        popupClose(e.target.closest('.popup'));
                    }
                });
            });

            menuClose(mobileMenu);

            currentForm.dataset.additional = el.dataset.additional;
            currentPopup.classList.add('open');
            document.body.classList.add('lock');
            document.querySelector('html').style.paddingRight = setWidthScrollBar() + 'px';
            document.querySelectorAll('.padding-lock').forEach(function (elem) {
                elem.style.paddingRight = setWidthScrollBar() + 'px';
            });
        });
    });

    // inputmask for tel
    let telSelector = document.querySelectorAll("input[type='tel']");
    let im = new Inputmask("+7 (999) 999-99-99");
    telSelector.forEach(elem => im.mask(elem));

    // send message to telegramm
    const forms = document.querySelectorAll('.form-to-telegramm');

    for (let i = 0; i < forms.length; i += 1) {
        const currentForm = forms[i];
        const currentFormId = currentForm.id;

        // validator for form
        const validation = new JustValidate(`#${currentFormId}`);

        validation
            .addField('.name', [
                {
                    rule: 'required',
                    errorMessage: 'Вы не ввели имя',
                },
                {
                    rule: 'minLength',
                    value: 2,
                    errorMessage: 'Минимум 2 символа',
                },
                {
                    rule: 'customRegexp',
                    value: /^[а-яА-Яa-zA-Z]+$/,
                    errorMessage: 'Недопустимый формат',
                },
            ])
            .addField('.phone', [
                {
                    rule: 'required',
                    errorMessage: 'Вы не ввели телефон',
                },
                {
                    validator: () => {
                        const currentInputPhone = currentForm.querySelector('.phone');
                        const phone = currentInputPhone.inputmask.unmaskedvalue();
                        return phone.length === 10;
                    },
                    errorMessage: 'Введите номер телефона полностью',
                },
            ])
            .onSuccess((event) => {
                const successMessage = document.createElement('p');
                successMessage.classList.add('form__success-message');
                successMessage.textContent = 'Форма отправлена, скоро вам позвонят!';
                currentForm.querySelector('.form__wrapper').style.display = "none";
                console.log(currentForm);
                currentForm.append(successMessage);
            });

        currentForm.addEventListener('submit', async function (event) {
            event.preventDefault();

            if (validation.isValid) {
                let data = {};
                let fieldsResult = {};
                let fields = Object.values(currentForm).reduce((obj, field) => {
                    obj[field.name] = field.value;
                    return obj
                }, {});

                for (let key in fields) {
                    if (key && key !== 'undefined') {
                        fieldsResult[key] = {
                            NAME: key,
                            VALUE: fields[key]
                        }
                    }
                }

                data.FIELDS = fieldsResult;

                fetch("/fetch/send.php", {
                    body: JSON.stringify({
                        action: 'send',
                        "DATA": data,
                        "ADDITIONAL": currentForm.dataset.additional,
                    }),
                    headers: {
                        'Content-type': 'application/json',
                    },
                    method: "POST"
                }).then(async (resp) => {
                    event.target.reset();
                    console.log(await resp.json());
                });
            }
        });
    }

    // tabs-dropdown
    const openDropdownTabsList = document.querySelectorAll('.tabs-dropdown__active');
    const tabsList = document.querySelectorAll('.tab');
    const tabsDropdownList = document.querySelectorAll('.tabs-dropdown');

    for (let i = 0; i < openDropdownTabsList.length; i += 1) {
        const currentOpenDropdownTabs = openDropdownTabsList[i];

        currentOpenDropdownTabs.addEventListener('click', function () {
            currentOpenDropdownTabs.closest('.tabs-dropdown').classList.toggle('active');
        });
    }

    for (let i = 0; i < tabsList.length; i += 1) {
        const currentTab = tabsList[i];

        currentTab.addEventListener('click', function() {
            const currentTabText = currentTab.textContent;
            currentTab.closest('.tabs-dropdown').classList.remove('active');
            currentTab.closest('.tabs-dropdown').querySelector('.tabs-dropdown__name').textContent = currentTabText;
        });
    }

    window.addEventListener('click', function (e) {
        const target = e.target;
        if (!target.closest('.tabs-dropdown')) {
            for (let i = 0; i < tabsDropdownList.length; i += 1) {
                tabsDropdownList[i].classList.remove('active')
            }
        }
    });
});