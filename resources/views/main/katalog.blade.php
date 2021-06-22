@extends('layouts.layout')

@section('seo')
    <!-- SEO оптимизация -->
    <title>Installcom | Каталог готовых комплектов систем безопасности в Орле</title>
	<meta name="description" content="В каталоге Installcom представлено готовое оборудование систем безопасности. Купить с бесплатной доставкой и установкой в Орле." />
    <meta name="keywords" content="Купить турникеты, шлагбаумы, СКУД, системы видеонаблюдения "/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://installcom.ru/katalog" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Installcom | Каталог готовых комплектов систем безопасности в Орле" />
	<meta property="og:description" content="В каталоге Installcom представлено готовое оборудование систем безопасности. Купить с бесплатной доставкой и установкой в Орле." />
	<meta property="og:url" content="https://installcom.ru/katalog" />
	<meta property="og:site_name" content="INSTALLCOM" />
	<meta property="article:modified_time" content="2021-06-17T14:29:46+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
    <!-- SEO оптимизация -->
@endsection

@section('content')
    <!-- Блок типово товаров -->
    <h1 class="catalog__title">Каталог</h1>
    <div class="catalog__filter">

        @foreach ($globalType as $item)
            <div class="catalog__filter-item {{ (!empty($typeProduct) && $typeProduct == $item->alias) ? 'active' : ''  }}" data-type="{{ $item->alias }}">
                {{ $item->name  }}
                <img src="/assets/images/cross.svg" class="cross" alt="">
            </div>
        @endforeach
    </div>
    <div>
        @php
            // echo __FILE__.' '.__LINE__;
            // echo '<pre>';
            // print_r($post);
            // echo '</pre>';

        @endphp
        @php
            $orderArray = [
                "p.id" => "По умолчанию",
                "p.price" => "По возрастанию цены",
                "p.price DESC" => "По убыванию цены",
                "p.name" => "Рекомендованное",
            ];
            echo __FILE__.' '.__LINE__;
            echo '<pre>';
            print_r($post);
            echo '</pre>';
            echo __FILE__.' '.__LINE__;
            echo '<pre>';
            print_r($qs);
            echo '</pre>';
        @endphp
    </div>
    
    <!-- Оболочка контента и меню -->
    <div class="shell">
        <!-- Меню -->
        <div class="podlojka_mobil_menu">

            <div class="navigator">
                <h3>
                    <span>Подбор по параметрам</span>
                    <span class="border_line"></span>   
                </h3>
                <form class='js_form_filtr' method="POST" action="">
                    <div class="search js_search_block psevdo_input js_parent">
                        @php
                            $value_search = !empty($post['search']) ? $post['search'] : '';
                        @endphp
                        <div class='info_block js_info_block'>
                            <h4>Учитываются выбранные фильтра и тип товара </h4>
                            <p>Найдено: <span class="js_count">{{ !empty($value_search) ? count($products) : 'Поиск не осуществлялся' }}</span></p>
                            <button type="button" disabled class='js_btn_search {{ !empty($value_search) ? "active" : '' }}'  >Показать</button>
                        </div>
                        
                        <input class='js_search' type="search" name="search" id="" placeholder="Введите..." value='{{ $value_search }}'>
                        <img src="/assets//images/icons/search.svg" alt="">
                    </div>
                
                    @csrf
                    @if (!empty($category))
                        
                        <!-- Опции по выбранной категории -->
                        <div class="vendor parent cateogory_opshoins">
                            <label class="vse" for="vse1">
                                <input type="checkbox" class="js_vse" name="" id="vse1">
                                <span>Выбрать все</span>
                            </label>
                            <div class="js_conteyner conteyner labels">
                                @foreach ($category as $item)
                                <label for="cat_{{ $item->id }}">
                                    <input 
                                        type="checkbox" 
                                        name="category[]" 
                                        value="{{ $item->id }}" 
                                        id="cat_{{ $item->id }}"
                                        {{ (!empty($post['category']) && in_array($item->id, $post['category'])) ? "checked" : ""}}
                                    >
                                    <span>{{ $item->name }}</span>
                                </label>
                            @endforeach
                            </div>
                        </div>
                    @endif
                    
                    <!-- Производитель -->
                    <div class="vendor parent">
                        <h4>
                            производитель
                        </h4>
                        <label class="vse" for="vse2">
                            <input type="checkbox" class="js_vse" name="" id="vse2">
                            <span>Выбрать все</span>
                        </label>
                        <div class="js_conteyner conteyner labels">
                            @foreach ($manufacturer as $item)
                                <label for="mfctr_{{ $item->id }}">
                                    <input 
                                        type="checkbox" 
                                        name="manufacturer[]" 
                                        value="{{ $item->id }}" 
                                        id="mfctr_{{ $item->id }}"
                                        {{ (!empty($post['manufacturer']) && in_array($item->id, $post['manufacturer'])) ? "checked" : ""}}
                                    >
                                    <span>{{ $item->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Цена -->
                    <div class="price conteyner_polzunok">
                        <h4>
                            цена
                        </h4>
                        <div class="polzunok">                
                            <div class="telo">
                                <div class="disk left"><p></p></div>
                                <div class="zapolnitel"></div>
                                <div class="disk right"><p></p></div>
                            </div>                
                        </div>
                        <div class="diapazoni">
                            <span>0</span>
                            <span>10 000</span>
                            <span>20 000</span>
                            <span>30 000</span>
                            <span>50 000</span>
                        </div>
                        <div class="conteyner inputs">
                            <div class="psevdo_input">
                                @php
                                    $from = !empty($post['from'])  ? $post['from'] : '0';
                                    $to_max = !empty($post['to'])  ? $post['to'] : '50000';
                                    $to_value = !empty($post['to'])  ? $post['to'] : '0';
                                @endphp
                                <span>От</span>
                                <input type="number" class='js_input_price from' name='from' data-min='{{$from}}' data-value='{{$from}}' value='{{$from}}'>
                            </div>
                            <div class="psevdo_input">
                                <span>До</span>
                                <input type="number" class='js_input_price to' name='to' data-max='{{$to_max}}' data-value='{{$to_value}}' value='{{$to_value}}'>
                            </div>
                        </div>
                        {{-- Первоначальный вариант инпутов цены <div class="conteyner inputs">
                            <div class="psevdo_input">
                                @php
                                    $from = !empty($post['from'])  ? $post['from'] : '0';
                                    $to = !empty($post['to'])  ? $post['to'] : '50000';
                                @endphp
                                <span>От</span>
                                <input type="number" class='js_input_price from' name='from' data-min='{{$from}}' data-value='{{$from}}' value='{{$from}}'>
                            </div>
                            <div class="psevdo_input">
                                <span>До</span>
                                <input type="number" class='js_input_price to' name='to' data-max='{{$to}}' data-value='{{$to}}' value='{{$to}}'>
                            </div>
                        </div> --}}
                    </div>
                    @php
                        $order_value = !empty($post['order']) ? $post['order'] : "p.id"
                    @endphp
                    <input class='js_input_order' type="hidden" name="order" value='{{ $order_value }}'>
                    <div class="conteyner btns">
                        <button class="btn-primary js_send_sortfiltr" type="submit">Показать</button>
                        <button class='rstfrm' type="button">
                            <img src="/assets//images/icons/close2.svg" alt=""> Очистить фильтр
                        </button>
                    </div>
                </form>
                
            </div>

            <div class="btn_navigator js_btn_open_navigator">Фильтр</div>
        </div>


        <!-- Товар -->
        <section class='products_list'>

            <!-- панель сортировки товара -->
            <div class="sortirivka">
                <div class="naideno">
                    найдено <span>{{ count($products)}}</span> {{ $numeral }}
                </div>
                <div class="param js_vipodashka">
                    Сортировать по:
                    <span class='js_window'>
                        {{ !empty($post['order']) ? $orderArray[$post['order']] : $orderArray['p.id'] }} 
                    </span>
                    <img src="/assets//images//icons/open2.svg" alt="">
                    <div class="varianti js_varianti">
                        <p class="js_order" data-order="p.id">По умолчанию</p>
                        <p class="js_order" data-order="p.price">По возрастанию цены</p>
                        <p class="js_order" data-order="p.price DESC">По убыванию цены</p>
                        {{-- <p class="js_order" data-order="p.name">Рекомендованное</p> --}}
                    </div>
                </div>
            </div>

            <!-- список товара -->
            <div class="main">
                @foreach ($products as $item)
                    <div class="item parent_btn">
                        <div class="photo">
                            <img src="/product_imgs/{{$item->name_img}}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                {{ $item->name }}
                            </h3>
                            <div class="characteristics">
                                <p>Производитель: {{ $item->manufactur }}</p>
                                <p>Категории: {{ $item->categores[0]->name  }}/{{ !empty($item->categores[1]) ? $item->categores[1]->name : ''  }}</p>
                                @foreach ($item->dop_fields as $df)
                                    
                                    @if (!empty($df->name))
                                        <p>
                                            {{ $df->name }}: {{ $df->value }}
                                        </p>
                                    @endif
                                    
                                @endforeach
                            </div>
                            <div class='conteyner_bottom'>
                                <a href="#" data-type="zakaz" data-modal-content="#order-form" data-title="Заказать " data-mesg="Вы выбрали " class="open_modal complect-item__order btn-primary">Заказать</a>
                                @php
                                    $price = number_format($item->price, 2, '.', ' ');
                                @endphp
                                <span>{{ $price }} ₽</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        
        



    </div>
@endsection