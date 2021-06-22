@extends('layouts.layout')

@section('seo')
    <!-- SEO оптимизация -->
    <title>Установка систем безопасности, готовые решения в Орле | INSTALLCOM </title>
	<meta name="description" content="Компания инсталлятор Installcom. Устанавливаем системы безопасности с 2009 года. Видеонаблюдение, турникеты, шлагбаумы, СКУД в Орле." />
    <meta name="keywords" content="Системы безопасности, системы видеонаблюдения,  системы контроля и управления доступом"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://installcom.ru" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Установка систем безопасности, готовые решения в Орле | INSTALLCOM" />
	<meta property="og:description" content="Компания инсталлятор Installcom. Устанавливаем системы безопасности с 2009 года. Видеонаблюдение, турникеты, шлагбаумы, СКУД в Орле." />
	<meta property="og:url" content="https://installcom.ru/" />
	<meta property="og:site_name" content="INSTALLCOM" />
	<meta property="article:modified_time" content="2021-06-17T09:22:46+00:00" />
	<meta property="og:image" content="https://installcom.ru/assets/ognew-hero-bg.jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="yandex-verification" content="0db414af603b8441" />
    <!-- SEO оптимизация -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y9HFE4VM78"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Y9HFE4VM78');
    </script>

@endsection

@section('content')
    <!-- Первая секция -->
    <section class="first">
        <img class='fon_image' src="/assets/images/new-hero-bg.png" alt="">
        <div class="conteyner">
            <div class="first__info">
                <div class="first__subtitle">
                    Надежная компания-инсталлятор
                </div>
                <h1 class="first__title">
                    Решаем проблемы<br>
                    <strong>
                        безопасности
                    </strong>
                </h1>
                <a href="#" 
                    data-title="Заказать звонок";
                    data-mesg="Оставьте свой телефон и мы обязательно Вам перезвоним в течение некоторого времени."
                    class="open_modal complect-item__order btn-primary"
                >
                    Заказать звонок
                </a>
            </div>
            <div class="first__decor">
                <div class="grey-circle"></div>
                <div class="yellow-circle">
                    <div class="yellow-circle__text">Узнайте больше</div>
                    <div class="yellow-circle__mouse mouse">
                        <div class="mouse__body">
                            <div class="mouse__button"></div>
                        </div>
                        <div class="mouse__arrow">
                            <svg class="icon icon-arrow">
                                <use xlink:href="/assets/build/sprites/global.svg#icon-arrow" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Сервис -->
    <section class="services" id="services">
        <div class="services__main-text">
            Ритм современной жизни невольно заставляет задуматься о&nbsp;безопасности. Как
            контролировать сотрудников и&nbsp;посетителей? Как защитить свой дом или офис? Как
            обезопасить свой двор или квартиру? Эти и&nbsp;многие другие вопросы безопасности, рано
            или поздно, задает себе каждая организация или каждый человек, имеющий свой бизнес
            и&nbsp;положение в&nbsp;обществе.
        </div>
        <!-- системы безопасности -->
        <div class="services__preview">
            <h2 class="services__preview-title">
                INSTALLCOM производит монтаж систем безопасности с&nbsp;2009 года
            </h2>
            <div class="services__preview-text">
                Компания INSTALLCOM позиционирует себя как компания-инсталлятор, способная
                решить проблемы, связанные с&nbsp;безопасностью. С
                самых первых лет существования у&nbsp;компании стояла цель&nbsp;&mdash; создание
                крепкой, высококвалифицированной команды и&nbsp;построение репутации надежного партнера, которому можно доверять.
            </div>
        </div>
        <!-- Наши преимущества -->
        <div class="main-advantages">
            <h2 class="main-advantages__title">Наши преимущества</h2>
            <div class="main-advantages__list">
                <div class="main-advantages__item">
                    <div class="main-advantages__item-icon">
                        <img src="/assets/images/icons/key_bg.svg" alt="">
                    </div>
                    <div class="main-advantages__item-text"><strong>Бесплатный монтаж</strong><span> турникетов и&nbsp;шлагбаумов</span> </div>
                </div>
                <div class="main-advantages__item">
                    <div class="main-advantages__item-icon">
                        <img src="/assets/images/icons/gruzovik_bg.svg" alt="">
                    </div>
                    <div class="main-advantages__item-text"><strong>Бесплатная доставка</strong><span> до&nbsp;места установки</span></div>
                </div>
                <div class="main-advantages__item">
                    <div class="main-advantages__item-icon">
                        <img src="/assets/images/icons/lydi_bg.svg" alt="">
                    </div>
                    <div class="main-advantages__item-text"><strong>высокая квалификация</strong><span> сотрудников</span></div>
                </div>
                <div class="main-advantages__item">
                    <div class="main-advantages__item-icon">
                        <img src="/assets/images/icons/orden_bg.svg" alt="">
                    </div>
                    <div class="main-advantages__item-text"><strong>Более 10&nbsp;лет<br>опыта</strong><span> в&nbsp;установках систем безопасности</span> </div>
                </div>
            </div>
        </div>
        <!-- Установка и монтаж -->
        <div class="best" style="">
            <div class="best__left">
                <div class="best__subtitle">Установка и&nbsp;монтаж</div>
                <h2 class="best__title">
                    Лучшие на&nbsp;мировом рынке технические средства безопасности
                </h2>
                <a href="#" 
                        data-title="Заказать звонок";
                        data-mesg="Оставьте свой телефон и мы обязательно Вам перезвоним в течение некоторого времени."
                        class="open_modal complect-item__order btn-primary">
                        Заказать звонок
                    </a>
            </div>
            <div class="best__right">
                <div class="best__right-text">
                    Сегодня клиенты компании INSTALLCOM могут получить доступ к&nbsp;самым лучшим
                    на&nbsp;мировом рынке техническим средствам безопасности, а&nbsp;именно: к
                    системам контроля и&nbsp;управления доступом и&nbsp;видеонаблюдению.
                </div>
                <div class="best__right-text">
                    Системы контроля и&nbsp;управления доступом (СКУД) позволяют уберечь ваше предприятие от&nbsp;проникновения на&nbsp;него посторонних лиц.
                    Наличие подразделения охраны менее эффективно, чем наличие
                    установленной СКУД, которая может осуществлять полноценный контроль всей территории вашего предприятия в&nbsp;режиме реального времени. Только так вы&nbsp;сможете
                    максимально обеспечить свою безопасность и&nbsp;безопасность своего предприятия, офиса или дома.
                </div>
            </div>
        </div>
        <!-- информационя открытость -->
        <div class="open">
            <div class="open__text">INSTALLCOM практикует информационную
                открытость&nbsp;&mdash; вы&nbsp;всегда в&nbsp;курсе событий и&nbsp;точно знаете, за&nbsp;что платите деньги</div>
            <img src="/assets/images/open.jpg" class="open__image">
        </div>

        <!-- Наши услуги 2 -->
        <section class='services our_services margin_t140 sistem_video' >
            <h2>
                Наши услуги
            </h2>
            <div class="about__services-subtitle crop_width crop_width_plus">
                Мы поможем подобрать вам наиболее подходящий для вашего предприятия или офиса готовый комплект и произведем профессиональную установку. Компетентные специалисты, их навыки и опыт гарантируют правильную и корректную работу оборудования.
            </div>
            <div class="complects__top_">
                {{-- этот див надо бы удалить  --}}
                
            </div>
            
            <!-- Слайдер -->
            <div class="bg_gradient width_full bg_icon">
                <div class="services__list-wrapper general">
                    <div class="services__item">
                            <div class="services__item-icon">
                                <img src="/assets/images/icons/5.svg" alt="">
                            </div>
                            <div class="services__item-title">
                                Установка
                                <br>
                                <strong>шлагбаумов</strong>
                            </div>
                            <div class="services__item-text">
                                Способ ограничения проезда транспорта и&nbsp;контроля въезда и&nbsp;выезда автомобилей на&nbsp;определенной территории 
                            </div>
                            <div class="price">
                                <a href="/shlagbaumy" class="complect-item__order btn-primary">Подробнее</a>
                            </div>
                    </div>

                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="/assets/images/icons/6.svg" alt="">
                        </div>
                        <div class="services__item-title">
                            Установка
                            <br>
                            <strong>турникетов</strong>
                        </div>
                        <div class="services__item-text">
                            Гарантированное повышение уровня безопасности на&nbsp;объектах с&nbsp;большим скоплением людей
                        </div>

                        <div class="price">
                            <a href="/turnikety" class="complect-item__order btn-primary">Подробнее</a>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="/assets/images/icons/7.svg" alt="">
                        </div>
                        <div class="services__item-title">
                            Установка <br>
                            <strong>видеонаблюдения</strong>
                        </div>
                        <div class="services__item-text">
                            Готовые комплекты видеонаблюдения для монтажа на&nbsp;объектах с&nbsp;круглосуточным наблюдением
                        </div>
                        <div class="price">
                            <a href="/sistemy-videonablyudeniya" class="complect-item__order btn-primary">Подробнее</a>
                        </div>
                    </div>
                    
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="/assets/images/icons/8.svg" alt="">
                        </div>
                        <div class="services__item-title">
                            Установка
                            <br>
                            <strong>контроля доступа</strong>
                        </div>
                        <div class="services__item-text">
                            Автоматизация и&nbsp;упрощение многих функций охранного персонала и&nbsp;кадровой службы  
                        </div>
                        <div class="price">
                            <a href="/skud" class="complect-item__order btn-primary">Подробнее</a>
                        </div>
                    </div>                            
                </div>
            </div>
                    
        </section>

        <!-- Два абзаца -->
        <div class="services__after">
            <div class="services__after-text">
                <div>
                    Установка профессиональных систем контроля доступом и&nbsp;видеонаблюдения &mdash;
                    основная специализация компании INSTALLCOM. Нашим клиентам
                    предлагаются комплекты видеонаблюдения, а&nbsp;также готовые решения для организации проходной и&nbsp;автоматизации проезда на&nbsp;парковках. 
                </div>
                <div>Главной ценностью компании являются наши специалисты&nbsp;&mdash; это
                    профессионалы высокого ранга, знающие и&nbsp;любящие свою работу, которые могут наиболее эффективно решить поставленную перед
                    ними задачу. Мы&nbsp;серьезно относимся к&nbsp;подбору и&nbsp;подготовке персонала.
                </div>
            </div>
        </div>

        <!-- Залог успеха -->
        <div class="services__ps">
            <img src="/assets/images/pro.jpg" alt="" class="services__ps-image">
            <div class="services__ps-text">
                Профессиональный уровень и&nbsp;опыт каждого сотрудника&nbsp;&mdash; залог успеха нашей компании
            </div>
        </div>
    </section>

    <div class="contacts">
        <div class="contacts__form">
            <h2 class="contacts__title">Cвяжитесь с нами</h2>
            <form action="" class='no_modal'>
                @csrf
                <label for="name">Ф.И.О *</label>
                <input class='obyzatelnoe' type="text" name="fio">

                <label for="email">email*</label>
                <input class='obyzatelnoe' type="text" name="email">
                
                <label for="message">Комментарий</label>
                <textarea type="text" name="comment" id="" cols="30" rows="10"></textarea>
                <input type="hidden" class="action btn-primary" name="feedback" value='1'>
                <!-- <div class="form-response" data-id="replace-on-submit"></div>	 -->
                <button 
                    type="submit" name="action_sendContactDirectorForm" value="Отправить" class="action btn-primary"
                    id="Form_ContactDirectorForm_action_sendContactDirectorForm"
                    data-ajax-new="true"
                    >
                    Отправить
                </button>
            </form>
        </div>
        <div class="contacts__map">
            <script src="https://api-maps.yandex.ru/2.1/?apikey=26fb1d56-9ddb-40f6-b5d1-e70f4bf65c65&lang=ru_RU"></script>
            <script>
                
            </script>
            <div id="map">
                
            </div>
        </div>
    </div>
@endsection