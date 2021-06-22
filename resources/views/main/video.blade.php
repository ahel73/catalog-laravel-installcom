@extends('layouts.layout')

@section('seo')
    <!-- SEO оптимизация -->
    <title>Installcom | Установка систем видеонаблюдения в Орле </title>
	<meta name="description" content="Монтаж систем видеонаблюдения для офисов, квартир, домов, складов в Орле. Готовые комплекты. Бесплатная установка." />
    <meta name="keywords" content="системы видеонаблюдения, система видеонаблюдения, установить систему видеонаблюдения, система видеонаблюдения цена"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://installcom.ru/sistemy_videonablyudeniya" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Installcom | Установка систем видеонаблюдения в Орле" />
	<meta property="og:description" content="Монтаж систем видеонаблюдения для офисов, квартир, домов, складов в Орле. Готовые комплекты. Бесплатная установка." />
	<meta property="og:url" content="https://installcom.ru/sistemy_videonablyudeniya" />
	<meta property="og:site_name" content="INSTALLCOM" />
	<meta property="article:modified_time" content="2021-06-17T14:26:42+00:00" />
	<meta property="og:image" content="https://installcom.ru/assets/ogvideo_1.jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
    <!-- SEO оптимизация -->
@endsection

@section('content')
    <!-- Первая -->
    <section class="video-first">
        <div class="video-first__info">
            <h1 class="video-first__title">
                Видео<strong class="string">наблюдение</strong>
            </h1>
            <div class="video-first__subtitle">
                Эффективный способ повысить уровень безопасности внутри и снаружи здания – установка видеонаблюдения. Мы рекомендуем ставить видеокамеры на частных и коммерческих объектах, а также на прилегающих территориях. Везде, где нужен постоянный контроль и охрана.
            </div>	
            <div class="price">
                <a href="#" 
                    data-title="Заказать звонок";
                    data-mesg="Оставьте свой телефон и мы обязательно Вам перезвоним в течение некоторого времени."
                    class="open_modal complect-item__order btn-primary">
                    Заказать звонок
                </a>
            </div>
            
        </div>
        <img src="/assets/images/video_1.jpg" alt="" class="ridht_padding video-first__image">
    </section>

    <!-- наши приимущества -->
    <section class="preimushestva services barriers no_padding advantages" id="services_">
        <div class="services__top">
            <h2 class="services__title">Наши преимущества</h2>
        </div>
        <div class="services__list-wrapper">
            <div class="services__list bg_icon cont_item_no_slider">

                <div class="services__item">
                    <div class="cont_icon">
                        <img src="/assets/images/icons/gruzovik_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        Бесплатный
                        <br>
                        <strong>выезд на объект</strong>
                    </div>
                    <div class="services__item-text">
                        Мы бесплатно произведем все замеры для предоставления Вам окончательного коммерческого предложения
                    </div>
                </div>
                
                <div class="services__item">
                    <div class="cont_icon">
                        <img src="/assets/images/icons/personal_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        опытный <br>
                        <strong>персонал</strong>
                    </div>
                    <div class="services__item-text">
                        Наши сотрудники приобрели все навыки для быстрой и качественной установки систем видеонаблюдения
                    </div>
                </div>
                
                <div class="services__item">
                    <div class="cont_icon">
                        <img src="/assets/images/icons/menedjer_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        ваш персональный
                        <br>
                        <strong>менеджер</strong>
                    </div>
                    <div class="services__item-text">
                        Персональный менеджер будет заниматься вашим проектом с момента подписания договора и до сдачи системы в
                        пользование
                    </div>
                </div>
                
                <div class="services__item">
                    <div class="cont_icon">
                        <img src="/assets/images/icons/sistem_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        Удалённое
                        <br>
                        <strong>изучение объекта</strong>
                    </div>
                    <div class="services__item-text">
                        Вы можете получить предварительный расчет на основании предоставленного вами ТЗ
                    </div>
                </div>
                
                <div class="services__item">
                    <div class="cont_icon">
                        <img src="/assets/images/icons/search_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        Передовые
                        <br>
                        <strong>технологии</strong>
                    </div>
                    <div class="services__item-text">
                        Производим профессиональную установку современного оборудования
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Новые готовые комплекты -->
    <section class="made_complect" >
        <h2>
            Готовые комплекты <br> для установки
        </h2>
        <div class="conteyner">

            <article class="item parent_btn r1">
                <h3>
                    Дом
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/video-dom.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>J2000-MHD10Pvi20 Уличная цилиндрическая видеокамера формата AHD/TVI/CVI/CVBS  - 2шт</span>
                                <span>2 440 руб</span>
                            </li>
                            <li>
                                <span>4-х канальный IP видеорегистратор - J2000-NVR04 v.3</span>
                                <span>2 920 руб.</span>
                            </li>
                            <li>
                                <span>Блок питания</span>
                                <span>320 руб</span>
                            </li>
                            <li>
                                <span>Жесткий диск на 1 ТБ</span>
                                <span>3 190 руб.</span>
                            </li>
                            <li>
                                <span>Соединительный шнур</span>
                                <span>750 руб.</span>
                            </li>
                            <li>
                                <span>Кабель для разветвления линии питания</span>
                                <span>200 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>10 000 руб.</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                15 700 руб.
                            </span>
                        </p>
                    </div>
                </div>
                
            </article>

            <article class="item parent_btn r1">
                <h3>
                    Офис
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/video-office.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>J2000-MHD10Dvi20 Внутренняя купольная видеокамера формата AHD/TVI/CVI/CVBS - 4 шт</span>
                                <span>3 840 руб.</span>
                            </li>
                            <li>
                                <span>HiWatch DS-N204(B) Сетевой IP-видеорегистратор на 4 канала</span>
                                <span>5 410 руб.</span>
                            </li>
                            <li>
                                <span>Комплект беспроводных фотоэлементов «PR -02»</span>
                                <span>8 500 руб.</span>
                            </li>
                            <li>
                                <span>Блок питания - 4 шт.</span>
                                <span>1 280 руб.</span>
                            </li>
                            <li>
                                <span>Жесткий диск на 1 ТБ</span>
                                <span>3 190 руб.</span>
                            </li>
                            <li>
                                <span>Соединительный шнур</span>
                                <span>750 руб.</span>
                            </li>
                            <li>
                                <span>Кабель для разветвления линии питания</span>
                                <span>200 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>20 000 руб.</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                38 500 руб.
                            </span>
                        </p>
                    </div>
                </div>
            </article>

            <article class="item parent_btn r2">
                <h3>
                    Парковка
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/video-parking.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Dahua DH-HAC-HDW1000RP-0280B-S3 Уличная HD-CVI видеокамера 1Мп - 8 шт</span>
                                <span>12 720 руб.</span>
                            </li>
                            <li>
                                <span>HiWatch DS-N208(B) Сетевой IP-видеорегистратор на 8 каналов</span>
                                <span>7 490 руб.</span>
                            </li>
                            <li>
                                <span>Блок питания - 8 шт</span>
                                <span>2 560 руб.</span>
                            </li>
                            <li>
                                <span>Жесткий диск на 1 ТБ</span>
                                <span>3 190 руб.</span>
                            </li>
                            <li>
                                <span>Соединительный шнур</span>
                                <span>725 руб.</span>
                            </li>
                            <li>
                                <span>Кабель для разветвления линии питания</span>
                                <span>168 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>40 000 руб.</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                70 500 руб.
                            </span>
                        </p>
                    </div>
                </div>
            </article>

            <article class="item parent_btn r2">
                <h3>
                    Магазин
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/video-shop.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Dahua DH-HAC-HDW1400RP-0280B HD-CVI видеокамера 4Мп - 4 шт</span>
                                <span>9 960 руб.</span>
                            </li>
                            <li>
                                <span>HiWatch DS-N204(B) Сетевой IP-видеорегистратор на 4 канала	</span>
                                <span>5 410 руб.</span>
                            </li>
                            <li>
                                <span>Блок питания - 4 шт</span>
                                <span>1 280 руб.</span>
                            </li>
                            <li>
                                <span>Жесткий диск на 1 ТБ</span>
                                <span>3 190 руб.</span>
                            </li>
                            <li>
                                <span>Соединительный шнур</span>
                                <span>750 руб.</span>
                            </li>
                            <li>
                                <span>Кабель для разветвления линии питания</span>
                                <span>200 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>20 000 руб.</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                44 500 руб.
                            </span>
                        </p>
                    </div>
                </div>
            </article>

        </div>
        <div class="transition">
            <a href="/katalog" class="complect-item__order btn-primary">Перейти в каталог <img src="/assets/images/icons/strelka_right.svg" alt=""></a>
        </div>
    </section>

    <!-- заказать консультацию -->
    <section class="actual">
        <div class="actual__row">
            <aside class="actual__title variant2">
                <h2 >
                    Вы можете также выбрать оборудование из нашего каталога <span class="w1440"></span>
                    или воспользоваться бесплатной консультацией профильного <span class="w1440"></span> специалиста и подобрать решение индивидуально
                </h2>
                <a href="#" 
                    data-type="video" 
                    class="opem_modal_individual complect-item__order btn-primary"
                >
                    Заказать консультацию
                </a>
            </aside>
            
            <img src="/assets/images/rukopojatie.png" alt="" class="actual__image resaze">
        </div>
    </section>

    <!-- Мы предлогаем новое -->
    <section class="offer turnikety bg_patterns width_full ">
        <h2>
            Мы предлагаем:
        </h2>
        <div class='conteyner'>
            <div class="left">
                <div class='item mb30px'>
                    <h3>
                        СИСТЕМы ВИДЕОНАБЛЮДЕНИЯ
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/video_analogovoe.svg" alt="">
                            <span>
                                аналоговая 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/cifrovay.svg" alt="">
                            <span>
                                цифровая
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_combinirovannoe.svg" alt="">
                            <span>
                                комбинированная 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_gibridnoe.svg" alt="">
                            <span>
                                с гибридными видеорегистраторами
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_gibridnoe_2.svg" alt="">
                            <span>
                                гибридная
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_gibridnoe_3.svg" alt="">
                            <span>
                                    гибридные системы наблюдения с сетевыми видеосерверами 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/setevay_sistema.svg" alt="">
                            <span>
                                сетевая система 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/ip.svg" alt="">
                            <span>
                                IP
                            </span>
                        </div>
                    </div>
                </div>
                <div class='item'>
                    <h3>
                        Типы ВИДЕОНАБЛЮДЕНИя
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/video_ulica.svg" alt="">
                            <span>
                                уличное 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_pomeshenie.svg" alt="">
                            <span>
                                в помещении 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class='item'>
                    <h3>
                        Установку видеонаблюдения
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/raspashnie.svg" alt="">
                            <span>
                                для дома
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/video_ofis.svg" alt="">
                            <span>
                                для офиса
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/parkovka.svg" alt="">
                            <span>
                                для парковки
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/raspashnie.svg" alt="">
                            <span>
                                для склада
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/magazin.svg" alt="">
                            <span>
                                для магазина
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            
    <!-- Установка видеонаблюдения  -->
    <section class="actual videonabludenie">
        <div class="actual__row">
            <!-- <h2 class="actual__title">
                Установка видеонаблюдения профессионалами высокого уровня
            </h2> -->
            <div class="price_header">
                <p>
                    Установка и монтаж
                </p>
                <h2>
                    Важное преимущество готовых комплектов – возможность быстрой установки
                </h2>
                <a href="#" 
                    data-title="Заказать звонок";
                    data-mesg="Оставьте свой телефон и мы обязательно Вам перезвоним в течение некоторого времени."
                    class="open_modal complect-item__order btn-primary">
                    Заказать звонок
                </a>
            </div>
            <img src="/assets/images/video_2.jpg
            " alt="" class="actual__image">
        </div>
        <div class="actual__text">
            Мы готовы взять на себя ответственность за проектирование систем видеонаблюдения, последующий монтаж всего необходимого оборудования на Вашем объекте и дальнейшее обслуживание систем видеонаблюдения.
        </div>
        <div class="actual__text">
            Опираясь на собственный многолетний опыт, инженеры ИнсталлКом могут предложить готовые комплекты видеонаблюдения, подходящие для монтажа на типовых объектах. Монтируются подобные системы в максимально сжатые сроки.
        </div>
    </section>

    <!-- Проектирование и установка -->
    <section>
        <div class='crop_width'>
            <h2>
                Проектирование и установка систем видеонаблюдения
            </h2>
            <p>
                Каждый объект индивидуален. При разработке системы видеоконтроля учитываются пожелания заказчика. Изучив вашу ситуацию, мы поможем выбрать вариант, который обеспечит самый высокий уровень безопасности. Чем масштабнее проект, тем больше объем работы. 
            </p>
        </div>
        <img class="left_padding" src="/assets/images/video_3.jpg" alt="">
    </section>

    <!-- Основные этапы -->
    <section class='etapi_video'>
        <h2 class="margin_top_40p">
            Основные этапы
        </h2>
        <div class="bg_gradient width_full">
            <div class="video-description__phases-list">
                <div class="video-description__phase">
                    <div class="video-description__phase-num">01</div>
                    <div class="video-description__phase-text">
                        Сбор информации от заказчика, анализ полученных данных;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">02</div>
                    <div class="video-description__phase-text">
                        Разработка технического задания с учетом требований заказчика;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">03</div>
                    <div class="video-description__phase-text">
                        Согласование проекта и сметы;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">04</div>
                    <div class="video-description__phase-text">
                        Подготовка необходимого оборудования;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">05</div>
                    <div class="video-description__phase-text">
                        Монтаж оборудования на объекте;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">06</div>
                    <div class="video-description__phase-text">
                        Проведение пуско-наладочных работ;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">07</div>
                    <div class="video-description__phase-text">
                        Многоэтапное тестирование, в том числе в аварийном режиме;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">08</div>
                    <div class="video-description__phase-text">
                        Передача системы заказчику и подписание акта об окончании работ;
                    </div>
                </div>
                <div class="video-description__phase">
                    <div class="video-description__phase-num">09</div>
                    <div class="video-description__phase-text">
                        Проведение консультаций по мерам дополнительной безопасности.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Часто задаваемые вопросы -->
    <section class='voprosi'>
        <h2>
            Часто задаваемые вопросы
        </h2>
        <p  class="crop_width margin_vert_40px">
            Наши специалисты оперативно проконсультируют вас по поводу монтажа видеонаблюдения в частном доме или на коммерческом объекте. Ниже мы ответим на самые популярные вопросы.
        </p>
        <div class='voprosi_list'>
            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Как устроено видеонаблюдение?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    Основа всей системы – камера и видеорегистратор. Одна или несколько видеокамер, установленных на объекте, передают сигнал на видеорегистратор. Он обрабатывает эту информацию и хранит ее на встроенном накопителе. Полученные данные транслируются на монитор или роутер. Мониторы удобны, если вы просматриваете видео прямо на объекте. С помощью экрана можно наблюдать за происходящим в режиме онлайн или найти сохраненную на жестком диске видеозапись. Если информация передается на роутер, трансляция видео доступна через интернет. На телефон, планшет или ноутбук заказчика устанавливается специальная программа, через которую можно вести наблюдение за охраняемой территорией.
                </p>
            </article>

            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Какое оборудование лучше?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    Есть два основных типа систем видеонаблюдения: <br>
                    — Аналоговое комплексы (HD-TVI, HD-CVI, AHD, CVBS); <br> 
                    — Цифровые комплексы (IP системы). <br>
                    Аналоговое оборудование постепенно уходит в прошлое и сейчас практически не устанавливается. Основные варианты: технология IP и HD-формат. <br>
                    Видеорегистраторы часто бывают универсальными. К ним подходят HD-камеры и IP-оборудование. HD-камеры дают картинку хорошего качества с разрешением 1080р и 720р. Стоимость установки HD-оборудования доступная и привлекает внимание большинства заказчиков. Часто именно такая система оптимальна для монтажа видеонаблюдения в магазине или частном доме. Но есть и минусы. Сигнал с камер HD передается по коаксиальному кабелю, у которого есть особенности. Он громоздкий и плохо гнется. На этапе монтажа и подключения могут возникнуть сложности. Коаксиальный кабель требует отверстий большего диаметра, по сравнению с кабелем UTP (витая пара), c помощью которого подключается видеонаблюдение типа IP. IP-система компактнее, обеспечивает изображение высочайшего качества и выполняет более сложные задачи. Стоимость установки IP-камер выше, но зато пользователю может быть доступна аналитика, программные датчики движения, инфракрасная подсветка, а также другие опции. 
                </p>
            </article>

            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Что еще понадобится?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    В зависимости от функций, которые должна выполнять система, вам могут пригодиться: <br>
                    — Жесткий диск. Без него сохранить видеоданные не получится, а просмотр будет возможен только в режиме онлайн. Жесткий диск приобретается отдельно, его параметры зависят от количества камер, качества видео и срока хранения записей. <br>
                    — Микрофон. Если вы хотите не только видеть, что происходит на охраняемой территории, но и слышать, понадобится дополнительное оборудование. Далеко не все камеры по умолчанию оснащены микрофоном. Это дополнительная функция, которую нужно оговаривать заранее. <br>
                    — ИБП. Источник бесперебойного питания необходим, если на объекте бывают сбои электроснабжения. ИБП выпускаются разной емкости. Какое оборудование подойдет для вашей ситуации, поможет определить специалист. <br>
                    — Кабели, штекеры, гофрированные трубы, крепеж и другие вспомогательные материалы. Без них не обойтись. 
                </p>
            </article>

            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Как выбрать систему видеонаблюдения?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    У каждого из вариантов есть свои преимущества и слабые места. Перед тем как заказывать монтаж системы видеонаблюдения в офисе, на даче или на любой другой территории, проконсультируйтесь с экспертом. Сформулируйте задачи, подготовьте план помещения и вызывайте специалиста. Наши сотрудники помогут грамотно спланировать систему видеоконтроля под ваши требования и бюджет. Будьте уверены в сохранности своего имущества. Оно под пристальным контролем надежного видеооборудования.
                </p>
            </article>
        </div>
    </section> 
@endsection