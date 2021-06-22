@extends('layouts.layout')

@section('seo')
    <!-- SEO оптимизация -->
    <title>Installcom | Установка шлагбаумов, цена готового комплекта в Орле </title>
	<meta name="description" content="Установка шлагбаумов в Орле для автомобильных парковок торговых центров,  жилых дворов. Узнать стоимость готовых комплектов. Доставка и монтаж - бесплатно." />
    <meta name="keywords" content="Установка шлагбаума, монтаж шлагбаумов"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://installcom.ru/shlagbaumy" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Installcom | Установка шлагбаумов. Цена готового комплекта в Орле " />
	<meta property="og:description" content="Установка шлагбаумов в Орле для автомобильных парковок торговых центров,  жилых дворов. Узнать стоимость готовых комплектов. Доставка и монтаж - бесплатно." />
	<meta property="og:url" content="https://installcom.ru/shlagbaumy" />
	<meta property="og:site_name" content="INSTALLCOM" />
	<meta property="article:modified_time" content="2021-06-17T14:18:46+00:00" />
	<meta property="og:image" content="https://installcom.ru/assets/ogshlagbaumy_1.jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
    <!-- SEO оптимизация -->
@endsection

@section('content')
    <!-- Установка-->
    <section class="about turnstiles barriers visible">
        <h1 class="about__title">
            Установка
            <br>
            <strong>шлагбаума под ключ</strong>
        </h1>
        <img src="/assets/images/shlagbaumy_1.jpg" class="ridht_padding" alt="">
        <div class="about__first-text">
            <!-- <h2>
                Качественные технологии
            </h2> -->
            <div>
                Шлагбаум позволяет контролировать въезд и выезд на определенную территорию. Это один из самых оптимальных способов ограничения проезда транспорта и обеспечения безопасности объектов. Шлагбаумы востребованы во дворах жилищных комплексов, на территориях садоводств, парковок и гаражных кооперативов. Все чаще система контроля проезда устанавливается во дворах многоквартирных домов, где ограничен въезд на придомовую территорию. Стоимость пусконаладочных работ шлагбаума зависит от его конструкции, функционала и места установки. Мы предлагаем разные типы оборудования – в зависимости от бюджета и целей заказчика.
            </div>
        </div>
    </section>

    <!-- Наши преимущества -->
    <section class="services barriers serv_shl advantages" id="services_">
        <div>
            <div class="services__top">
                <h2 class="services__title">Наши преимущества</h2>
                
            </div>
            <p class='crop_width_plus'>
                Наша компания занимается установкой шлагбаумов под ключ по ценам ниже среднерыночных. Система менеджмента на предприятии соответствует общемировому стандарту ISO 9001:2015 ISO 19011:2015.
            </p>
        </div>
        <div class="services__list-wrapper">
            <div class="services__list cont_item_no_slider">
                <div class="services__item bg_hover">
                    <div class='cont_icon'>
                        <img src="/assets/images/icons/gruzovik_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        бесплатный
                        <br>
                        <strong>монтаж и доставка</strong>
                    </div>
                    <div class="services__item-text">
                        Вы платите только за оборудование и расходные материалы
                    </div>
                </div>

                <div class="services__item bg_hover">
                    <div class='cont_icon'>
                        <img src="/assets/images/icons/key_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        профессиональная
                        <br>
                        <strong>установка</strong>
                    </div>
                    <div class="services__item-text">
                        Все наши монтажники имеют большой опыт и прошли обучение у производителей оборудования
                    </div>
                </div>

                <div class="services__item bg_hover">
                    <div class='cont_icon'>
                        <img src="/assets/images/icons/menedjer_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        ваш персональный    
                        <br>
                        <strong>менеджер</strong>
                    </div>
                    <div class="services__item-text">Мы производим расчеты и представляем коммерческое предложение в день обращения</div>
                </div>

                <div class="services__item bg_hover">
                    <div class='cont_icon'>
                        <img src="/assets/images/icons/search_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        Удаленное
                        <br>
                        <strong>обследование<br>объекта</strong>
                    </div>
                    <div class="services__item-text">
                        Вы можете получить расчет на основании предоставленного вами ТЗ 
                    </div>
                </div>

                <div class="services__item bg_hover">
                    <div class='cont_icon'>
                        <img src="/assets/images/icons/sistem_bg.svg" alt="">
                    </div>
                    <div class="services__item-title">
                        Передовые <br>
                        <strong>технологии</strong>
                    </div>
                    <div class="services__item-text">
                        Мы устанавливаем шлагбаумы даже в зимний период
                    </div>
                </div>
            </div>
        </div>
    </section>
            
    <!-- Новые готовые комплекты -->
    <section class="made_complect mt100" >
        <h2>
            Готовые комплекты <br> для установки
        </h2>
        <div class="conteyner">

            <article class="item parent_btn r1">
                <h3>
                    БЮДЖЕТНЫЙ
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/complect-b-budjet.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Автоматический беспружинный шлагбаум CARDDEX серии «RBM»	</span>
                                <span>45 410 руб.</span>
                            </li>
                            <li>
                                <span>Стрела для шлагбаума «RS-04C»</span>
                                <span>4 880 руб.</span>
                            </li>
                            <li>
                                <span>Стационарный пульт для оператора  «SW-02»</span>
                                <span>1 590 руб.</span>
                            </li>
                            <li>
                                <span>Лампа сигнальная «LS-01» </span>
                                <span>2 090 руб.</span>
                            </li>
                            <li>
                                <span>Разъем опций «BM-10»</span>
                                <span>810 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>БЕСПЛАТНО</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                58 280 руб.
                            </span>
                        </p>
                    </div>
                </div>
            </article>
            
            <article class="item parent_btn r1">
                <h3>
                    оптимальный
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/complect-b-optimal.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Автоматический беспружинный шлагбаум CARDDEX серии «RBS»</span>
                                <span>53 540 руб.</span>
                            </li>
                            <li>
                                <span>Стрела для шлагбаума «RS-04C»</span>
                                <span>4 880 руб.</span>
                            </li>
                            <li>
                                <span>Комплект беспроводных фотоэлементов «PR -02»</span>
                                <span>8 660 руб.</span>
                            </li>
                            <li>
                                <span>Лампа сигнальная «LS-01» </span>
                                <span>2 090 руб.</span>
                            </li>
                            <li>
                                <span>Модуль приемника для сигнала радио пультов «PRK-400» </span>
                                <span>3 580 руб.</span>
                            </li>
                            <li>
                                <span>Разъем опций «BS-10»</span>
                                <span>990 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>БЕСПЛАТНО</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                77 240 руб.
                            </span>
                        </p>
                    </div>
                </div>
                
            </article>

            <article class="item parent_btn r2">
                <h3>
                    Шестиметровый
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/complect-b-6.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Автоматический шлагбаум CARDDEX серии «SBN»</span>
                                <span>68 790 руб.</span>
                            </li>
                            <li>
                                <span>Стрела для шлагбаума «SN-06C»</span>
                                <span>8 100 руб.</span>
                            </li>
                            <li>
                                <span>Комплект беспроводных фотоэлементов «PR -02»</span>
                                <span>8 660 руб.</span>
                            </li>
                            <li>
                                <span>Лампа сигнальная «LS-01» </span>
                                <span>2 090 руб.</span>
                            </li>
                            <li>
                                <span>Модуль приемника для сигнала радио пультов «PRK-400» </span>
                                <span>3 580 руб.</span>
                            </li>
                            <li>
                                <span>Аварийная сирена «DS-01»</span>
                                <span>1 150 руб.</span>
                            </li>
                            <li>
                                <span>Разъем опций «BN-10»</span>
                                <span>990 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>БЕСПЛАТНО</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                96 860 руб.
                            </span>
                        </p>
                    </div>
                </div>
            </article>
            
            <article class="item parent_btn r2">
                <h3>
                    МЕХАНИЧЕСКИЙ
                </h3>
                <div class="body_item">
                    <div class="left">
                        <div class="podlojka">
                            <img src="/assets/images/complect-b-mechanic.png" alt="">
                        </div>
                        
                        <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                    </div>
                    <div class="right">
                        <ol>
                            <li>
                                <span>Механический шлагбаум CARDDEX серии «MBT»</span>
                                <span>36  110 руб.</span>
                            </li>
                            <li>
                                <span>Опора стрелы со стрелоуловителем с механической блокировкой «BST-01»</span>
                                <span>8 300 руб.</span>
                            </li>
                            <li>
                                <span>Расходные материалы</span>
                                <span>3 500 руб.</span>
                            </li>
                            <li>
                                <span>Монтажные работы</span>
                                <span>БЕСПЛАТНО</span>
                            </li>
                        </ol>
                        <p class="itog">
                            <span>
                                СТОИМОСТЬ КОМПЛЕКТА ПОД КЛЮЧ
                            </span>
                            <span>
                                47 910 руб.
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
                    data-type="shlagbaumy" 
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
                        Установку шлагбаумов
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/avtomat_shlagbaum.svg" alt="">
                            <span>
                                автоматических 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/radio_brelki.svg" alt="">
                            <span>
                                открывающихся с помощью радио-брелоков
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/avtonomnie.svg" alt="">
                            <span>
                                открывающихся со смартфонов
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/raspashnie.svg" alt="">
                            <span>
                                антивандальных
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/raspoznovanie_nomera.svg" alt="">
                            <span>
                                с распознаванием номеров
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/mahanicheskie_shlagbaumi.svg" alt="">
                            <span>
                                    механических 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/rfid.svg" alt="">
                            <span>
                                открывающихся с помощью RFID-карт
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/cepnie_barieri.svg" alt="">
                            <span>
                                установка цепных барьеров
                            </span>
                        </div>
                    </div>
                </div>
                <div class='item'>
                    <h3>
                        Обслуживание шлагбаумов
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/remont.svg" alt="">
                            <span>
                                ремонт 
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/obslujivanie.svg" alt="">
                            <span>
                                техническое обслуживание 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class='item'>
                    <h3>
                        Применение
                    </h3>
                    <div class="item_body">
                        <div class="service">
                            <img src="/assets/images/block_offer/big_dom.svg" alt="">
                            <span>
                                для дворов многоквартирных домов
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/parking.svg" alt="">
                            <span>
                                для паркинга
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/garaj.svg" alt="">
                            <span>
                                для гаражного кооператива
                            </span>
                        </div>
                        <div class="service">
                            <img src="/assets/images/block_offer/raspashnie.svg" alt="">
                            <span>
                                установку шлагбаумов в СНТ и на даче
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            

    <!--  Бекграунд лево верх часть  -->
    <div class="bg_top bg_top_v2 bg_romb_left_minus_v2"></div>
    <!-- Как мы работаем -->
    <section class="install barriers bar_shl">
        <h2 class="intstall__title">
            Как мы работаем
        </h2>
        <div class="install__subtitle">
            День выезда монтажной бригады предварительно согласовывается с заказчиком. Наши специалисты приезжают в удобное для вас время. Объем и специфика работы зависят от вида устанавливаемого оборудования, габаритов стрелы, типа системы контроля и наличия дополнительных опций.

        </div>
        <img src="/assets/images/turnstiles_4.png" alt="" data-was-processed="true">
        <div class="install__list">
            <div class="install__item">
                <div class="install__item-title">Подготовка территории</div>
                <div class="install__item-subtitle">
                    Мы проводим расчистку выбранного участка и убираем все лишнее (мусор, посторонние предметы). При необходимости демонтируем старое оборудование.
                </div>
            </div>
            
            <div class="install__item">
                <div class="install__item-title">
                    Кабельные работы
                </div>
                <div class="install__item-subtitle">
                    Производим прокладку кабеля, необходимого для подключения системы. Работы проводятся с соблюдением всех стандартов электробезопасности.
                </div>
            </div>

            <div class="install__item">
                <div class="install__item-title">
                    Подготовка основания
                </div>
                <div class="install__item-subtitle">
                    Для правильной установки нужна ровная и твердая поверхность. Заливаем бетонное основание, которое станет надежной опорой для будущей тумбы.
                </div>
            </div>

            <div class="install__item">
                <div class="install__item-title">
                    Монтаж тумбы
                </div>
                <div class="install__item-subtitle">
                    Устанавливаем основную конструкцию, которая включает корпус с блоком управления, подъёмной пружиной и редуктором или линейным приводов.
                </div>
            </div>

            <div class="install__item">
                <div class="install__item-title">
                    Установка стоек для датчиков
                </div>
                <div class="install__item-subtitle">
                    Монтируем сами стойки и подключаем фотоэлементы, которые будут распознавать движение.
                </div>
            </div>

            <div class="install__item">
                <div class="install__item-title">
                    Подключение оборудования
                </div>
                <div class="install__item-subtitle">
                    Проводим финишные электромонтажные работы, запускаем и проверяем всю систему.

                </div>
            </div>
        </div>
    </section>

    <!-- Дополнительно предлогаем -->
    <section class="stand width_full">
        <div class="stand__info">
            <div class="stand__subtitle">
                Работы начнутся сразу с монтажной части
            </div>
            <h2 class="stand__title">
                Дополнительно мы предлагаем услуги установки шлагбаума на готовое основание
            </h2>
            <a href="#" 
            data-title="Заказать звонок";
            data-mesg="Оставьте свой телефон и мы обязательно Вам перезвоним в течение некоторого времени."
            class="open_modal complect-item__order btn-primary">
            Заказать звонок
        </a>    
        </div>
        <div class="stand__image">
            <img src="/assets/images/stand.png" alt="">
        </div>
    </section>

    <!-- Обычные абзацы -->
    <section class="text">
        <div>
            Преимуществами использования автоматических электромеханических моделей шлагбаумов можно назвать: простую и удобную эксплуатацию; безопасность применения; несложное техническое обслуживание; надежность и долгий срок службы.
        </div>
        <div>
            Мы предлагаем качественные модели от проверенных и надежных производителей, а также выполняем профессиональную установку шлагбаумов в коммерческих, жилых и промышленных объектах. Больше информации Вы можете получить обратившись на нашу бесплатную горячую линию 8 800 707 35 70.
        </div>
    </section>

    <!-- Часто задаваемые вопросы -->
    <section class='voprosi shl'>
        <h2>
            Часто задаваемые вопросы
        </h2>
        
        <div class='voprosi_list'>
            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Как получить разрешение на установку шлагбаума?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    Хотите установить шлагбаум на своем дачном участке? Имеете на это полное право. Достаточно убедиться, что вы ограничиваете въезд только на свою территорию. Не должно быть препятствий для проезда к другим участкам, пожарным проездам и водоемам. При монтаже шлагбаума на территории многоквартирного дома, садоводства или, к примеру, на парковке супермаркета, потребуется согласование. Свое одобрение должна дать пожарная инспекция и другие экстренные службы. Если речь идет о придомовой территории или о въезде в СНТ, то перед получением разрешения этот момент согласуется с собственниками жилья. Вопрос решается проведением ОСС, на котором озвучивается стоимость шлагбаума и его установки. Минимум две трети жильцов должны одобрить предложение. После собрания подготовленные документы и заявление направляются в местный муниципалитет.

                </p>
            </article>

            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Кто дает разрешение на установку шлагбаума?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    Согласование проводится с пожарной инспекцией, ГИБДД и коммунальными службами. Процесс происходит под контролем местной муниципальной службы. Существуют частные компании-посредники, которые помогают подготовить документы и получить разрешение. 
                </p>
            </article>

            <article class='item'>
                <header class="js_vopros js_open_vopros inter_activ_elem">
                    <h4>
                        Куда жаловаться на незаконную установку шлагбаума?
                    </h4>
                    <img src="/assets/images/icons/open.svg" alt="">                           
                </header>
                <p>
                    Если вы подозреваете, что ограничительная конструкция установлена незаконно, можно написать жалобу. Адресат письма зависит от того, какие правила нарушены. Если вас забыли пригласить на ОСС по поводу установки шлагбаума, жалуйтесь в Жилищную инспекцию. Когда есть проблемы с проездом скорой помощи или пожарной машины, сообщайте в органы МЧС. Если конструкция мешает перемещаться по территориям общего пользования, поможет ГИБДД и местные органы власти. Не знаете, куда отправить обращение – напишите в Прокуратуру. При необходимости вас перенаправят к нужному адресату. Кстати, при повреждении незаконной конструкции (например, при проезде пожарной машины) стоимость шлагбаума владельцу не возмещается. 
                </p>
            </article>
        </div>
    </section>

    <!-- Скачать заявление -->
    <section class='bg_gradient_center_v2 width_full  zayvlenie'>
        <div class="left">
            <div class="conteyner">
                <h2>
                    Заявление для установки <br> шлагбаумов
                </h2>
                <a download href="/obrazec.doc"  class="complect-item__order btn-primary">
                    Скачать образец
                </a>
            </div>
            <div class="circle">
                Надежное оборудование
                <img src="/assets/images/icons/strelka_vniz.svg" alt="">
            </div>
        </div>
        <div class="right">
            <img src="/assets/images//shlagbaum_3.png" alt="" srcset="">
            <img src="/assets/images//shlagbaum_4.png" alt="" srcset="">
            <img src="/assets/images//shlagbaum_5.png" alt="" srcset="">
        </div>
    </section>

    <!-- Производители -->
    <section class="manufacturers">
        <h2 class="manufacturers__title">
            Производители
        </h2>
        <div class="manufacturers__text">
            Мы работаем напрямую с производителями оборудования, что гарантирует лучшую цену на шлагбаумы с установкой. Наши основные поставщики: CARDDEX, DoorHan, AN-Motors. Все сотрудники компании проходят регулярное обучение у производителей. Монтажники постоянно повышают квалификацию и обмениваются опытом с разработчиками технических решений. Работая с нами, вы получаете надежное современное оборудование, не переплачивая посредникам. Въезд на территорию оборудованный нашим шлагбаумом – под надежной защитой.
        </div>
        <div class="manufacturers__slider-wrapper">
            <div class="manufacturers__slider">
                <div class="manufacturers__slide"><img src="/assets/images/manufacturers/carddex.svg" alt=""></div>
                <div class="manufacturers__slide"><img src="/assets/images/manufacturers/doorhan.png" alt=""></div>
                <div class="manufacturers__slide"><img src="/assets/images/manufacturers/came.svg" alt=""></div>
                <div class="manufacturers__slide"><img src="/assets/images/manufacturers/nice.png" alt=""></div>
                <div class="manufacturers__slide"><img src="/assets/images/manufacturers/zkteco.png" alt=""></div>
            </div>
            <div class="manufacturers__slider-controls">
                <div class="slider-prev">
                    <svg class="icon icon-slider-arrow">
                        <use xlink:href="/assets/build/sprites/global.svg#icon-slider-arrow" />
                    </svg> 
                </div>
                <div class="slider-next">
                    <svg class="icon icon-slider-arrow">
                        <use xlink:href="/assets/build/sprites/global.svg#icon-slider-arrow" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
@endsection