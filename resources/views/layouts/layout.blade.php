<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">

    @yield('seo')

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    {{-- <link rel="shortcut icon" href="/assets/favicon.ico"> --}}

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    {{-- <link rel="stylesheet" href="/css/global.css"> --}}

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}

    <link rel="stylesheet" href="{{ asset('css/style_mobile.css') }}">
    {{-- <link rel="stylesheet" href="/css/style_mobile.css"> --}}
</head>
<body {{ isset($classBody) ? "class={$classBody}" : ''}}>
    <div class="body">
        <!-- Шапка -->
        @include('layouts.header')

        <!-- Контент -->
        <div class="body__content">
            @yield('content')
        </div>


        <!-- Подвал -->
        <div class="footer">
            <div class="footer__logo">
                <img src="/assets/images/footer-logo.svg" alt="">
            </div>
            <div class="footer__block">
                <div>Copyright 2021 © INSTALLCOM</div>
                <div><a href="/privacy.html" class="colored-footer-link">Политика конфиденциальности</a></div>
            </div>
            <div class="footer__block">
                <div>
                    <a href="#">8 800 707 35 70</a>
                </div>
            </div>
            <div class="footer__block">
                <div>
                    <a href="mailto:info@installcom.ru">info@installcom.ru</a>
                </div>
                <div>
                    <a href class="colored-footer-link" data-modal-inline data-modal-content="#contact-form">Написать
                        директору</a>
                </div>
                <div style="display: none">
                    <div id="contact-form">
                        <form id="ContactDirectorForm" action="action.php" method="post" enctype="multipart/form-data"
                            data-ajax="true">


                            <div id="Email_Holder" class="field ">
                                <div class="middleColumn">
                                    <input type="text" name="Email" class="text form-group--no-label" id="Email"
                                        placeholder="Email / Skype / WhatsApp ">
                                </div>
                            </div>
                            <div id="ContactPhone_Holder" class="field ">
                                <div class="middleColumn">
                                    <input type="text" name="ContactPhone" class="text form-group--no-label" id="ContactPhone"
                                        required="required" aria-required="true" placeholder="Телефон">
                                </div>
                            </div>
                            <div id="MessageText_Holder" class="field ">
                                <div class="middleColumn">
                                    <input type="text" name="MessageText" class="text form-group--no-label" id="MessageText"
                                        required="required" aria-required="true" placeholder="Сообщение">
                                </div>
                            </div>
                            <input type="hidden" name="SecurityID" value="9035071ce7b3a9d742a3b24776481fd27a8bb8b6"
                                class="hidden" id="Form_ContactDirectorForm_SecurityID">
                            <div class="submit-label" style="width: 100%">
                                <button type="submit" name="action_sendContactDirectorForm" value="Отправить"
                                    class="action btn-primary" id="Form_ContactDirectorForm_action_sendContactDirectorForm">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Модальное окно - Форма заказа-->
    <div class="modal_window">
        <div id="order-form" class="order_form">
            <form id="ContactDirectorForm" action="action.php" method="post" enctype="multipart/form-data" >
                @csrf
                <div class='header_modal'>
                    <h2></h2>
                    <img class='close_modal' src="/assets/images/cloze.png" alt="">
                </div>                        
                <p class='mesg'></p>                        
                <button 
                    type="submit" name="action_sendContactDirectorForm" value="Отправить" class="action btn-primary"
                    id="Form_ContactDirectorForm_action_sendContactDirectorForm"
                    data-ajax-new="true"
                    >
                    Отправить
                </button>
                <p class='soglasie'>
                    Нажимая на кнопку, вы даёте <a href=""><strong>согласие на обработку</strong> </a> своих персональных
                    данных.
                </p>
            </form>
        </div>
    </div>

    <!-- Модальное окно индивидуального заказа -->
    <div class="modal_window_individual">
        <div id="order-form" class="order_form">
            <form>
                @csrf
                <div class='header_modal'>
                    <h2>
                        Заказать комплект
                    </h2>
                    <img class='close_modal' src="/assets/images/cloze.png" alt="">
                </div>                        
                <p class='mesg'>
                    Заполните форму для бесплатной консультации  
                </p>
                <div class="inputs_block">
                    <label>
                        <h3>Ф.И.О. *</h3>
                        <input class='obyzatelnoe' type="text" name="fio" placeholder="Введите Ф.И.О.">
                    </label>
                    <label>
                        <h3>E-MAIL*</h3>
                        <input  class='obyzatelnoe' type="text" name="email" placeholder="Введите e-mail">
                    </label>
                    <label>
                        <h3>ТЕЛЕФОН</h3>
                        <input type="text" name="telefon" placeholder="Введите телефон">
                    </label>
                    <input name="zakaz" type="hidden" value=''>
                    <!-- Форма лица -->
                    <div class="div_lica flajki">
                        <label for="yr_lico">
                            <input type="radio" name='lico' value="yr_lico" id="yr_lico">
                            <span>Юр. лицо</span>
                        </label>
                        <label for="fiz_lico">
                            <input type="radio" name='lico' value="fiz_lico" id="fiz_lico">
                            <span>ФИЗ. лицо</span>
                        </label>
                    </div>
                    <label>
                        <h3>комментарий</h3>
                        <textarea name="comment"></textarea>
                    </label>
                    <div class="file_conteyner"></div>
                    <label for="files" class='psevdo_input_file'>
                        <input multiple type="file" class='js_files' id='files' name='files'>
                        <span>Загрузить файл</span>
                        <span>(Фото, план, схема, рисунок объекта)</span>
                    </label>
                </div>
                <!-- Блок индивидуальных данных для типа товара -->
                <div class="js_individual_data_type"></div>
                <button 
                    type="submit" value="Отправить" 
                    class="btn-primary js_submit_ind_form"
                    >
                    Отправить
                </button>
                
                <p class='soglasie'>
                    Нажимая на кнопку, вы даёте <a href=""><strong>согласие на обработку</strong> </a> своих персональных
                    данных.
                </p>
            </form>
        </div>
    </div>
    
    <!-- заготовки для мобилки -->
    <div class="mobile-menu">
        <ul class="mobile-menu__list"></ul>
        <div class="mobile-menu__close"></div>
    </div>

    <div class="mobile-toolbar" id="mobile-toolbar"></div>
    <div class="global-overlay"></div>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(80125873, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/80125873" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/vendor/jquery.3.2.1.min.js"><\/script>')</script>
    <script>
        var WebFontConfig = {
            google: {
                families: [
                    'Open+Sans:300,300i,400,400i,700,700i:cyrillic',
                ]
            }
        };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>window.WebFont || document.write('<script src="assets/vendor/webfont.1.6.26.js"><\/script>')</script>

    <script src="/js/global.js"></script>
    <script src="/js/script.js"></script>



</body>
</html>