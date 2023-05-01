<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="/assets/js/jaus-validae.js"></script>
    <script defer src="/assets/js/input-mask.js"></script>
    <script defer src="/assets/js/main.js"></script>
    <script defer src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            ymaps.ready(init);

            function init() {
                const map = document.querySelector('#map');

                if (map) {
                    var myMap = new ymaps.Map("map", {
                        center: [55.758468, 37.601088],
                        zoom: 14,
                    });

                    var myPlacemark = new ymaps.Placemark([55.758468, 37.601088], {}, {
                        iconLayout: 'default#image',
                    });

                    myMap.geoObjects.add(myPlacemark);
                    myMap.behaviors.disable('scrollZoom');
                }
            }
        });
    </script>
    <title>Biorise</title>
</head>

<body>
    <header class="header padding-lock">
        <div class="header__container">
            <a href="/" class="header__logo logo">
                <img src="/assets/img/logo.svg" alt="Логотип клиники Biorise" class="logo__img">
            </a>
            <p class="header__text">
                Клиника IV-терапии
            </p>
            <a href="#services" class="header__btn btn">
                Услуги и капельницы
            </a>
            <a href="tel:88002223344" class="header__phone">
                8 (800) 222-33-44
            </a>
            <button class="header__menu-burger menu-burger open-menu">
                <span class="menu-burger-line"></span>
            </button>
        </div>
    </header>
    <div class="menu-dropdown">
        <div class="menu-dropdown__background close-menu"></div>
        <div class="menu-dropdown__content">
            <button class="menu-dropdown__close close-menu">
                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4.22168" y="0.807617" width="24" height="2.00001" transform="rotate(45 4.22168 0.807617)" fill="white" />
                    <rect x="2.80762" y="17.7782" width="24" height="2.00001" transform="rotate(-45 2.80762 17.7782)" fill="white" />
                </svg>
            </button>
            <picture class="menu-dropdown__logo">
                <img src="/assets/img/logo-white.svg" alt="" class="menu-dropdown__logo-img">
            </picture>
            <ul class="menu-dropdown__list">
                <li class="menu-dropdown__item">
                    <a href="#about-therapy" class="menu-dropdown__link">
                        Что такое IV-терапия
                    </a>
                </li>
                <li class="menu-dropdown__item">
                    <a href="#problems" class="menu-dropdown__link">
                        Чем мы можем помочь
                    </a>
                </li>
                <li class="menu-dropdown__item">
                    <a href="#services" class="menu-dropdown__link">
                        Услуги клиники
                    </a>
                </li>
                <li class="menu-dropdown__item">
                    <a href="#assortment" class="menu-dropdown__link">
                        Ассортимент капельниц
                    </a>
                </li>
                <li class="menu-dropdown__item">
                    <a href="#faq" class="menu-dropdown__link">
                        Ответы на вопросы
                    </a>
                </li>
            </ul>
            <p class="menu-dropdown__text">
                Клиника IV-терапии
            </p>
            <button class="menu-dropdown__btn btn popup-btn" data-path="form" data-additional="Форма 'Записаться на консультацию' в скрытом меню в шапке">
                Записаться на консультацию
            </button>
        </div>
    </div>
    <main class="main">
        <section class="promo">
            <div class="promo__container">
                <div class="promo__content">
                    <div class="promo__address">
                        <p class="promo__address-text">
                            Попробуйте IV-терапию в Ростове-на-Дону,
                        </p>
                        <button class="promo__address-btn">проспект Чехова, 51</button>
                    </div>
                    <h1 class="promo__title">
                        <span class="promo__title-text">Клиника</span>
                        <span class="promo__title-text">биохакинга</span>
                    </h1>
                    <p class="promo__descr section-descr">
                        IV-терапия для сохранения и восстановления здоровья
                    </p>
                    <button class="promo__btn btn-send popup-btn" data-path="form" data-additional="Форма в попапе при нажатии на кнопку в первом блоке">
                        <span class="btn-send__wrapper">Записаться</span>
                    </button>
                </div>
            </div>
            <img src="/assets/img/sections/promo/decor.png" alt="" class="promo__decor">
            <picture class="promo__picture">
                <source media="(max-width: 767px)" srcset="/assets/img/sections/promo/preview-360.png">
                <source media="(max-width: 991px)" srcset="/assets/img/sections/promo/preview-768.png">
                <source media="(max-width: 1200px)" srcset="/assets/img/sections/promo/preview-1024.png">
                <img src="/assets/img/sections/promo/preview.png" alt="" class="promo__image">
            </picture>
        </section>
        <section class="about-company section-offset">
            <div class="about-company__container container">
                <div class="about-company__top section-top">
                    <h2 class="about-company__title section-title">
                        <span class="section-title__text">BIORISE — это</span>
                    </h2>
                    <p class="about-company__descr section-descr">
                        cеть клиник IV-терапии нового формата для заботы о здоровье
                    </p>
                </div>
                <div class="about-company__content">
                    <div class="about-company__cards row main-container">
                        <div class="about-company__card card-company col-4">
                            <img src="/assets/img/sections/about-company/card-1.svg" alt="" aria-label="presentation" class="card-company__img">
                            <p class="card-company__text">
                                Программы витаминных комплексов для восстановления
                                и сохранения здоровья.
                            </p>
                        </div>
                        <div class="about-company__card card-company col-4">
                            <img src="/assets/img/sections/about-company/card-2.svg" alt="" aria-label="presentation" class="card-company__img">
                            <p class="card-company__text">
                                Анализы и комплексные чек-апы по приятным ценам.
                            </p>
                        </div>
                        <div class="about-company__card card-company col-4">
                            <img src="/assets/img/sections/about-company/card-3.svg" alt="" aria-label="presentation" class="card-company__img">
                            <p class="card-company__text">
                                Профессиональная команда специалистов и опытных врачей.
                            </p>
                        </div>
                        <div class="about-company__card card-company col-4">
                            <img src="/assets/img/sections/about-company/card-4.svg" alt="" aria-label="presentation" class="card-company__img">
                            <p class="card-company__text">
                                Комфортная атмосфера, удобные кресла и высокий уровень сервиса.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-therapy" class="about-therapy section-offset">
            <div class="about-therapy__container container">
                <div class="about-therapy__elipses-decor">
                    <div class="about-therapy__big-elipse"></div>
                    <div class="about-therapy__center-elipse"></div>
                    <div class="about-therapy__small-elipse"></div>
                    <img src="/assets/img/sections/about-therapy/decor-img.png" alt="" class="about-therapy__decor-img">
                </div>
                <div class="about-therapy__top section-top">
                    <h2 class="about-therapy__title section-title">
                        <span class="section-title__text">IV-терапия —</span>
                        <span class="section-title__text">что это?</span>
                    </h2>
                </div>
                <div class="about-therapy__content main-container">
                    <div class="about-therapy__wrapper">
                        <img src="/assets/img/sections/about-therapy/therapy.png" alt="" class="about-therapy__img">
                        <p class="about-therapy__quote">
                            IV-терапия — это внутривенное введение полезных веществ с помощью капельниц.
                        </p>
                        <div class="about-therapy__list">
                            <div class="about-therapy__item">
                                <p class="about-therapy__item-num">
                                    01
                                </p>
                                <div class="about-therap__item-decor"></div>
                                <p class="about-therapy__item-text">
                                    Вещества поступают сразу в кровь, минуя ЖКТ
                                </p>
                            </div>
                            <div class="about-therapy__item">
                                <p class="about-therapy__item-num">
                                    02
                                </p>
                                <div class="about-therap__item-decor"></div>
                                <p class="about-therapy__item-text">
                                    Действие состава начинается мгновенно
                                </p>
                            </div>
                            <div class="about-therapy__item">
                                <p class="about-therapy__item-num">
                                    03
                                </p>
                                <div class="about-therap__item-decor"></div>
                                <p class="about-therapy__item-text">
                                    Остатки быстро выводятся из организма
                                </p>
                            </div>
                            <div class="about-therapy__item">
                                <p class="about-therapy__item-num">
                                    04
                                </p>
                                <div class="about-therap__item-decor"></div>
                                <p class="about-therapy__item-text">
                                    Эффект заметен уже после первой процедуры
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="safety">
            <div class="safety__container container">
                <div class="safety__top section-top">
                    <h2 class="safety__title section-title">
                        <span class="section-title__text">IV-терапия —</span>
                        <span class="section-title__text">это безопасно</span>
                    </h2>
                </div>
                <div class="safety__cards row main-container">
                    <div class="safety__card col-3">
                        <p class="safety__card-text">
                            Составы для капельниц подбирает опытный врач и только по результатам анализа.
                        </p>
                    </div>
                    <div class="safety__card col-3">
                        <p class="safety__card-text">
                            Процедура проходит под наблюдением профессионального медицинского персонала.
                        </p>
                    </div>
                    <div class="safety__card col-3">
                        <p class="safety__card-text">
                            В капельницах мы используем вещества только проверенных, лицензированных производителей.
                        </p>
                    </div>
                </div>
            </div>
            <div class="safety__send">
                <img src="/assets/img/sections/safety/decor.png" alt="" aria-label="presentation" class="safety__send-decor">
                <button class="safety__send-btn btn-send btn-send_bg popup-btn" data-path="form" data-additional="Форма в попапе при нажатии на кнопку в блоке про безопасность">
                    <span class="btn-send__wrapper">Записаться</span>
                </button>
            </div>
        </section>
        <section id="problems" class="problems">
            <div class="problems__container container">
                <div class="problems__content">
                    <div class="problems__top section-top">
                        <h2 class="problems__title section-title">
                            <span class="section-title__text">Поможем</span>
                            <span class="section-title__text">решить проблемы</span>
                        </h2>
                        <p class="problems__descr section-descr">
                            с помощью капельниц BIORISE
                        </p>
                    </div>
                    <div class="problems__wrapper accor-wrapper main-container" data-accordion-list>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Лечение и профилактика заболеваний
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        Консультацию проводит врач-терапевт-нутрициолог.
                                    </p>
                                    <p class="question__info-text">
                                        В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                        пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                        определитесь с анализами, необходимыми для назначения курса капельниц.
                                        Анализы вы можете сдать у нас в клинике сразу после консультации.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Как быстро приедет нарколог на дом?
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        С другой стороны новая модель организационной деятельности требуют определения и
                                        уточнения форм развития. Идейные соображения высшего порядка, а также постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа
                                        модели развития.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Как быстро приедет нарколог на дом?
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        С другой стороны новая модель организационной деятельности требуют определения и
                                        уточнения форм развития. Идейные соображения высшего порядка, а также постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа
                                        модели развития.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Как быстро приедет нарколог на дом?
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        С другой стороны новая модель организационной деятельности требуют определения и
                                        уточнения форм развития. Идейные соображения высшего порядка, а также постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа
                                        модели развития.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Как быстро приедет нарколог на дом?
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        С другой стороны новая модель организационной деятельности требуют определения и
                                        уточнения форм развития. Идейные соображения высшего порядка, а также постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа
                                        модели развития.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="problems__accor question accor">
                            <button class="question__title accor-open" data-accordion-button>
                                <span class="question__title-text">
                                    Как быстро приедет нарколог на дом?
                                </span>
                                <span class="question__title-decor accor-open-decor"></span>
                            </button>
                            <div class="question__info accor-full">
                                <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                    <p class="question__info-text">
                                        С другой стороны новая модель организационной деятельности требуют определения и
                                        уточнения форм развития. Идейные соображения высшего порядка, а также постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа
                                        модели развития.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="problems__send">
                        <div class="problems__send-elipse"></div>
                        <div class="problems__send-elipse-center"></div>
                        <img src="/assets/img/sections/problems/send-decor.png" alt="" aria-label="presentation" class="problems__send-decor">
                        <button class="problems__send-btn btn-send btn-send_bg popup-btn" data-path="form" data-additional="Форма в попапе при нажатии на кнопку в блоке с проблемами">
                            <span class="btn-send__wrapper">Записаться</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="problems__bg-decor"></div>
        </section>
        <section id="services" class="services">
            <div class="services__container main-container tabs-container">
                <div class="services__top section-top">
                    <h2 class="services__title section-title">
                        <span class="section-title__text">Наши услуги</span>
                    </h2>
                </div>
                <div class="services__tabs">
                    <div class="tabs-dropdown">
                        <button class="tabs-dropdown__active">
                            <p class="tabs-dropdown__name">
                                Консультация
                            </p>
                            <div class="tabs-dropdown__open">
                                <p class="tabs-dropdown__open-text">
                                    еще
                                </p>
                                <div class="tabs-dropdown__open-arrow">
                                    <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 2L10.0003 9" stroke="#236261" stroke-width="2" stroke-linecap="square" />
                                        <path d="M10.0005 9L18 2" stroke="#236261" stroke-width="2" stroke-linecap="square" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="services__tabs-btns tabs-wrapper">
                            <button class="services__tabs-btn tab active">Консультация</button>
                            <button class="services__tabs-btn tab">Чек-апы</button>
                            <button class="services__tabs-btn tab">Анализы</button>
                        </div>
                    </div>
                </div>
                <div class="services__tabs-info">
                    <div class="services__tabs-content services-tab-content tab-content active">
                        <div class="services-tab-content__item">
                            <div class="services-tab-content__top">
                                <p class="services-tab-content__title">
                                    Первичная консультация
                                </p>
                                <p class="services-tab-content__price">
                                    1700 ₽
                                </p>
                                <button class="services-tab-content__btn btn-main popup-btn" data-path="form" data-additional='Заявка на услугу "Первичная консультация"'>
                                    Записаться
                                </button>
                            </div>
                            <div class="services-tab-content__full">
                                <p class="services-tab-content__full-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="services-tab-content__full-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и
                                    совместимости препаратов, а также определитесь с анализами, необходимыми для назначения
                                    курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                        <div class="services-tab-content__item">
                            <div class="services-tab-content__top">
                                <p class="services-tab-content__title">
                                    Первичная консультация
                                </p>
                                <p class="services-tab-content__price">
                                    1700 ₽
                                </p>
                                <button class="services-tab-content__btn btn-main popup-btn" data-path="form" data-additional='Заявка на услугу "Первичная консультация"'>
                                    Записаться
                                </button>
                            </div>
                            <div class="services-tab-content__full">
                                <p class="services-tab-content__full-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="services-tab-content__full-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и
                                    совместимости препаратов, а также определитесь с анализами, необходимыми для назначения
                                    курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="services__tabs-content services-tab-content tab-content">
                        <div class="services-tab-content__item">
                            <div class="services-tab-content__top">
                                <p class="services-tab-content__title">
                                    Первичная консультация
                                </p>
                                <p class="services-tab-content__price">
                                    1700 ₽
                                </p>
                                <button class="services-tab-content__btn btn-main popup-btn" data-path="form" data-additional='Заявка на услугу "Первичная консультация"'>
                                    Записаться
                                </button>
                            </div>
                            <div class="services-tab-content__full">
                                <p class="services-tab-content__full-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="services-tab-content__full-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и
                                    совместимости препаратов, а также определитесь с анализами, необходимыми для назначения
                                    курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="services__tabs-content services-tab-content tab-content">
                        <div class="services-tab-content__item">
                            <div class="services-tab-content__top">
                                <p class="services-tab-content__title">
                                    Первичная консультация
                                </p>
                                <p class="services-tab-content__price">
                                    1700 ₽
                                </p>
                                <button class="services-tab-content__btn btn-main popup-btn" data-path="form" data-additional='Заявка на услугу "Первичная консультация"'>
                                    Записаться
                                </button>
                            </div>
                            <div class="services-tab-content__full">
                                <p class="services-tab-content__full-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="services-tab-content__full-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и
                                    совместимости препаратов, а также определитесь с анализами, необходимыми для назначения
                                    курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="assortment" class="assortment">
            <div class="assortment__container container">
                <div class="assortment__content">
                    <div class="assortment__top section-top">
                        <h2 class="assortment__title section-title">
                            <span class="section-title__text">Ассортимент</span>
                            <span class="section-title__text">капельниц</span>
                        </h2>
                        <p class="assortment__descr section-descr">
                            Все индивидуально - врач может менять состав капельниц в индивидуальном порядке, в зависимости
                            от вашего анамнеза.
                        </p>
                    </div>
                    <div class="assortment__tabs main-container tabs-container">
                        <div class="tabs-dropdown">
                            <button class="tabs-dropdown__active">
                                <p class="tabs-dropdown__name">
                                    Стандартные
                                </p>
                                <div class="tabs-dropdown__open">
                                    <p class="tabs-dropdown__open-text">
                                        еще
                                    </p>
                                    <div class="tabs-dropdown__open-arrow">
                                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 2L10.0003 9" stroke="#236261" stroke-width="2" stroke-linecap="square" />
                                            <path d="M10.0005 9L18 2" stroke="#236261" stroke-width="2" stroke-linecap="square" />
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="services__tabs-btns tabs-wrapper">
                                <button class="services__tabs-btn tab active">Стандартные</button>
                                <button class="services__tabs-btn tab">премиум</button>
                                <button class="services__tabs-btn tab">лаеннек</button>
                            </div>
                        </div>
                        <div class="assortment__tabs-wrapper">
                            <div class="assortment__tabs-content tab-content active">
                                <div class="assortment__tabs-row row">
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="assortment__tabs-content row tab-content">
                                <div class="assortment__tabs-row row">
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="assortment__tabs-content row tab-content">
                                <div class="assortment__tabs-row row">
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="assortment__tabs-item assortment-card card-col-3">
                                        <picture class="assortment-card__picture">
                                            <img src="/assets/img/sections/assortment/card-img.png" alt="" class="assortment-card__img">
                                        </picture>
                                        <div class="assortment-card__content">
                                            <p class="assortment-card__name">
                                                Детокс стандарт
                                            </p>
                                            <p class="assortment-card__descr">
                                                Выведение накопившихся токсинов из организма. Восполнение дефицита витаминов
                                                и минералов. Снятие неприятных симптомов интоксикации.
                                            </p>
                                            <p class="assortment-card__price">
                                                4 000 ₽
                                            </p>
                                            <div class="assortment-card__btn-group">
                                                <button class="assortment-card__btn btn-main popup-btn" data-path="form" data-additional='Заявка на капельницу "Детокс стандарт"'>
                                                    Записаться
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/assets/img/sections/assortment/decor.png" alt="" class="assortment__decor" aria-label="presentation">
        </section>
        <section class="comfort">
            <div class="comfort__container main-container">
                <div class="comfort__top section-top">
                    <h2 class="comfort__title section-title">
                        <span class="section-title__text">Удобство</span>
                        <span class="section-title__text">и комфорт</span>
                    </h2>
                </div>
                <div class="comfort__wrapper">
                    <picture class="comfort__picture">
                        <img src="/assets/img/sections/comfort/main-picture.png" alt="" class="comfort__img">
                    </picture>
                    <div class="comfort__content">
                        <div class="comfort__content-descr">
                            <p class="comfort__content-text">
                                Процедуры проходят в уютных кабинетах с мягкими кушетками и интернетом.
                            </p>
                            <p class="comfort__content-text">
                                Вы можете расслабиться и отдыхать, пока ваш организм наполняется необходимыми витаминами и
                                элементами.
                            </p>
                        </div>
                        <img src="/assets/img/sections/comfort/decor.png" alt="" class="comfort__content-decor">
                    </div>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class="steps__container main-container">
                <div class="steps__top section-top">
                    <h2 class="steps__title section-title">
                        <span class="section-title__text">Пройти курс просто</span>
                    </h2>
                </div>
                <div class="steps__wrapper row">
                    <div class="steps__card step col-3">
                        <p class="step__num">
                            01
                        </p>
                        <p class="step__title">
                            Запись на консультацию
                        </p>
                        <p class="step__descr">
                            Записаться можно позвонив по телефону, оставив заявку на сайте или написав нам в Whatsapp /
                            Telegram
                        </p>
                    </div>
                    <div class="steps__card step col-3">
                        <p class="step__num">
                            02
                        </p>
                        <p class="step__title">
                            Консультация врача
                            и сдача анализов
                        </p>
                        <p class="step__descr">
                            Врач изучает ваш анамнез и назначает медицинские анализы. По результатам прописывает курс
                            капельниц.
                        </p>
                    </div>
                    <div class="steps__card step col-3">
                        <p class="step__num">
                            03
                        </p>
                        <p class="step__title">
                            Прохождение курса
                        </p>
                        <p class="step__descr">
                            Вы проходите курс в нашей клинике под наблюдением специалистов.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="consultation section-offset">
            <div class="consultation__container container">
                <div class="consultation__wrapper">
                    <div class="consultation__content">
                        <div class="consultation__top section-top">
                            <h2 class="consultation__title section-title">
                                <span class="section-title__text">Запишитесь на консультацию</span>
                            </h2>
                            <p class="consultation__descr section-descr">
                                Запись на консультацию бесплатна,
                                а все детали наш оператор готов уточнить по телефону
                            </p>
                        </div>
                        <form id="consultation-form" method="post" class="consultation__form form form-to-telegramm" novalidate="novalidate" data-additional='Форма в блоке "запишитесь на консультацию"'>
                            <div class="form__wrapper">
                                <label class="form__label">
                                    <input name="name" placeholder="Ваше имя" type="text" class="form__field form__input name">
                                </label>
                                <label class="form__label">
                                    <input name="phone" placeholder="+7 (999) 999-99-99" type="tel" class="form__field form__input phone">
                                </label>
                                <button type="submit" class="form__btn">перезвоните мне</button>
                            </div>
                        </form>
                        <p class="consultation__sub-descr">
                            Попробуйте IV-терапию в Ростове-на-Дону на проспекте Чехова, 51
                        </p>
                    </div>
                    <div id="map" style="width: 100%; height: 420px"></div>
                </div>
            </div>
        </section>
        <section id="faq" class="faq">
            <div class="faq__container main-container">
                <div class="faq__top section-top">
                    <h2 class="faq__title section-title">
                        <span class="section-title__text">Вопросы и ответы</span>
                    </h2>
                </div>
                <div class="faq__wrapper accor-wrapper" data-accordion-list>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                                Как назначаются капельницы? Нужно ли сдавать анализы?
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <p class="question__info-text">
                                    Консультацию проводит врач-терапевт-нутрициолог.
                                </p>
                                <p class="question__info-text">
                                    В рамках первичной консультации вы совместно с врачом определитесь с целями терапии,
                                    пройдетесь по чек-листу для выявления аллергии и совместимости препаратов, а также
                                    определитесь с анализами, необходимыми для назначения курса капельниц.
                                    Анализы вы можете сдать у нас в клинике сразу после консультации.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="section-image">
        <div class="section-image__send">
            <div class="problems__send-elipse"></div>
            <div class="problems__send-elipse-center"></div>
            <img src="/assets/img/sections/problems/send-decor.png" alt="" aria-label="presentation" class="problems__send-decor">
            <button class="problems__send-btn btn-send btn-send_bg popup-btn" data-path="form" data-additional="Форма после нажатия на кнопку в блоке с картинкой перед футером">
                <span class="btn-send__wrapper">Записаться</span>
            </button>
        </div>
        <img src="/assets/img/decor-img.png" alt="" class="section-image__background" aria-label="presentation">
    </div>
    <footer class="footer">
        <div class="footer__container main-container">
            <div class="footer__block">
                <div class="footer__block-wrapper">
                    <a href="/" class="footer__logo logo">
                        <img src="/assets/img/logo-white.svg" alt="Логотип клиники Biorise" class="logo__img">
                    </a>
                    <ul class="footer__menu">
                        <li class="footer__menu-item">
                            <a href="#assortment" class="footer__menu-link">
                                Ассортимент капельниц
                            </a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#services" class="footer__menu-link">
                                Услуги клиники
                            </a>
                        </li>
                        <li class="footer__menu-item">
                            <button class="footer__menu-link popup-btn" data-path="form" data-additional='Форма в футере после нажатия на кнопку "записаться"'>
                                Записаться
                            </button>
                        </li>
                    </ul>
                </div>
                <p class="footer__copyright footer-text">
                    © ООО БИОРАЙЗ Ростов
                </p>
            </div>
            <div class="footer__block">
                <div class="footer__block-wrapper">
                    <ul class="footer__requisites">
                        <li class="footer__requisites-item footer-text">
                            ООО «БИОРАЙЗ Ростов»
                        </li>
                        <li class="footer__requisites-item footer-text">
                            ИНН 6166124259 / 616601001
                        </li>
                        <li class="footer__requisites-item footer-text">
                            ОГРН 1226100000774
                        </li>
                        <li class="footer__requisites-item footer-text">
                            Лицензия Л041-01050-61/00630131
                        </li>
                    </ul>
                    <ul class="footer__documents">
                        <li class="footer__documents-item">
                            <a href="#" class="footer__documents-link footer-text">
                                Политика конфиденциальности
                            </a>
                        </li>
                        <li class="footer__documents-item">
                            <a href="#" class="footer__documents-link footer-text">
                                Договор оферта
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__address">
                    <p class="footer__address-text footer-text">
                        344020, Россия,
                    </p>
                    <p class="footer__address-text footer-text">
                        Г. Ростов-на-Дону, пр Чехова, 51
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div data-target="form" class="form-popup popup">
        <button class="popup__close close-popup">
            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4.22168" y="0.807617" width="24" height="2.00001" transform="rotate(45 4.22168 0.807617)" fill="white" />
                <rect x="2.80762" y="17.7782" width="24" height="2.00001" transform="rotate(-45 2.80762 17.7782)" fill="white" />
            </svg>
        </button>
        <div class="popup__body">
            <div class="popup__content">
                <form id="about-form" method="post" class="form-popup__form form form-to-telegramm" novalidate="novalidate" data-additional="Неизвестная форма">
                    <p class="form__title">
                        Поможем подобрать оптимальный состав для вас
                    </p>
                    <div class="form__wrapper">
                        <label class="form__label">
                            <input name="name" placeholder="Имя" type="text" class="form__field name">
                        </label>
                        <label class="form__label">
                            <input name="phone" placeholder="+7 (___) ___-__-__" type="tel" class="form__field phone">
                        </label>
                        <button type="submit" class="form-popup__form-btn btn-main">
                            Отправить заявку
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>