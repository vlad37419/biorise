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

document.addEventListener('DOMContentLoaded', function () {
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

        hideTabsContent({list_tabs, list_buttons}) {
            list_buttons.forEach((el) => {
                el.classList.remove('active');
            });
            list_tabs.forEach((el) => {
                el.classList.remove('active');
            });
        }

        showTabsContent({list_tabs, list_buttons, index}) {
            this.hideTabsContent({list_tabs, list_buttons});

            if (list_tabs[index])
                list_tabs[index].classList.add('active');

            if (list_buttons[index])
                list_buttons[index].classList.add('active');
        }
    }

    new Tabs().initTabs();
});