(function () {
    var flagOpenModal = false;
    var activeElemChangeImg = false // заносится элемент над которым находится курсор и необходимо запредить выполнение обработчика
    var conteynerElementsInImgs = false; // елемент контейнер при нахождении на котором курсора мышки фото по умолчанию в данном контейнере не меняется
    var arrayFiles = [];

    // Объект с типами продуктов которые реализуются и со специфическими свойствами которые необходимо использовать по продукту
    var product = {
        turnikety: {
            name: 'турникеты',
            type: [
                    ['навесные турникеты', 'navesnyye_turnikety'],
                    ['компактные турникеты', 'kompaktnyye_turnikety'],
                    ['тумбовые турникеты', 'tumbovyye_turnikety'],
                    ['распашные турникеты', 'raspashnyye_turnikety'],
                    ['двухпроходные турникеты', 'dvukhprokhodnyye_turnikety'],
                    ['планки', 'planki'],
            ],
            individail_form: [
                {
                    header: 'Где находится объект',
                    type: 'textaria',
                    name: 'mestonahojdenie_objecta',
                    placheholder: 'Введите адрес объекта',
                    options: [],
                },
                {
                    header: 'Тип объекта',
                    type: 'select',
                    name: 'type_object',
                    placheholder: 'Выберите тип объекта',
                    options: [
                        'офис',
                        'предприятие',
                        'муниципальный объект',
                        'бизнес-центр',
                    ],
                },
                {
                    header: 'Место установки',
                    type: 'select',
                    name: 'mesto_ustanovki',
                    placheholder: 'Выберите место установки',
                    options: [
                        'в помещении',
                        'на улице',
                        'под навесом',
                    ],
                },
                {
                    header: 'Удаленность подключения к сети (М)',
                    type: 'select',
                    name: 'udalennost_podklucheniy',
                    placheholder: 'Выберите удаленность подключения',
                    options: [
                        'до 10',
                        'до 50',
                        'до 100',
                        'более 100',
                    ],
                },
                {
                    header: 'Количество точек прохода',
                    type: 'input',
                    name: 'count_point_perehoda',
                    placheholder: 'Введите количество точек',
                    options: [],
                },
                {
                    header: 'Количество точек прохода',
                    type: 'input',
                    name: 'count_point_perehoda',
                    placheholder: 'Введите количество точек',
                    options: [],
                },
                {
                    header: 'Тип турникетов',
                    type: 'select',
                    name: 'type_turniketov',
                    placheholder: 'Выберите тип турникетов',
                    options: [
                        'Компактный',
                        'Тумбовый',
                        'Распашной',
                        'Полноростовой',
                    ],
                },
                {
                    header: 'Сколько посетителей будут иметь постоянный доступ',
                    type: 'select',
                    name: 'count_posititeley_s_dostupom',
                    placheholder: 'Выберите количество',
                    options: [
                        'до 100',
                        'до 200',
                        'более 500',
                    ],
                },
                {
                    header: 'Способ идентификации',
                    type: 'select',
                    name: 'identificaciy',
                    placheholder: 'Выберите способ',
                    options: [
                        'Карта',
                        'Брелок',
                        'Распознование лица',
                        'QR-код',
                        'NFC',
                    ],
                },
                {
                    header: 'Необходим ли Вам учет рабочего времени сотрудников',
                    type: 'radio',
                    name: 'uchet_time_sotrudnikov',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'С чем нужна интеграция',
                    type: 'select',
                    name: 'integraciy',
                    placheholder: 'Выберите с чем нужна интеграция',
                    options: [
                        'охранная/пожарная сигнализация',
                        'СКУД',
                        'видеонаблюдение',
                    ],
                },
                {
                    header: 'Будет ли на объекте охранник/консьерж',
                    type: 'radio',
                    name: 'nalichie_ohranika',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Наличие инженерного проекта',
                    type: 'radio',
                    name: 'nalichie_proekta',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
            ]
        },
        shlagbaumy: {
            name: 'шлагбаумы',
            type: [
                    ['автоматические шлагбаумы', 'avtomaticheskiye_shlagbaumy'],
                    ['механические шлагбаумы', 'mekhanicheskiye_shlagbaumy'],
                    ['цепные барьеры', 'tsepnyye_baryery'],
                    ['столбики (болларды)', 'stolbiki'],
            ],
            individail_form: [
                {
                    header: 'Где находится объект',
                    type: 'textaria',
                    name: 'mestonahojdenie_objecta',
                    placheholder: 'Введите адрес объекта',
                    options: [],
                },
                {
                    header: 'Тип объекта',
                    type: 'select',
                    name: 'type_object',
                    placheholder: 'Выберите тип объекта',
                    options: [
                        'Коттеджный/дачный поселок',
                        'Многоквартирный дом',
                        'Гаражный/парковочный комплекс',
                        'Предприятие',
                        'Офисный/торговый центр',
                        'Муниципальное учреждение',
                    ],
                },
                {
                    header: 'Удаленность подключения к сети (М)',
                    type: 'select',
                    name: 'udalennost_podklucheniy',
                    placheholder: 'Выберите удаленность подключения',
                    options: [
                        'до 10',
                        'до 50',
                        'до 100',
                        'более 100',
                    ],
                },
                {
                    header: 'Количество точек проезда',
                    type: 'input',
                    name: 'count_point_perehoda',
                    placheholder: 'Введите количество точек',
                    options: [],
                },
                {
                    header: 'Ширина проезжей части (м)',
                    type: 'input',
                    name: 'wideth_dorogi',
                    placheholder: 'Введите ширину',
                    options: [],
                },
                {
                    header: 'Есть ли готовое монтажное основание',
                    type: 'radio',
                    name: 'montaj_osnovanie',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Предполагаемое количество сотрудников/жильцов/посетителей',
                    type: 'select',
                    name: 'count_sotrudnikov',
                    placheholder: 'Выберите количество',
                    options: [
                        'до 100',
                        'до 200',
                        'до 500',
                        'до 1000',
                        'более 1000',
                    ],
                },
                {
                    header: 'Способ идентификации',
                    type: 'select',
                    name: 'identifikaciy',
                    placheholder: 'Выберите способ',
                    options: [
                        'Карта/брелок',
                        'Пульт',
                        'Распознавание номеров',
                        'Мобильный телефон',
                    ], 
                },
                {
                    header: 'Периферийные устройства',
                    type: 'select',
                    name: 'perefiriy',
                    placheholder: 'Выберите устройства',
                    options: [
                        'Индукционная петля',
                        'Оптические датчики',
                        'Сигнальная лампа',
                        'Звуковые модули, светофоры',
                    ], 
                },
                {
                    header: 'Учет въездов/выездов',
                    type: 'radio',
                    name: 'uscet',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Будет ли на объекте охранник/консьерж',
                    type: 'radio',
                    name: 'ohrana',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Требуется ли удаленная диспетчеризация',
                    type: 'radio',
                    name: 'dispecher',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'С чем нужна интеграция',
                    type: 'select',
                    name: 'integraciy',
                    placheholder: 'Выберите с чем нужна интеграция',
                    options: [
                        'СКУД',
                        'видеонаблюдение',
                    ], 
                },
            ]
        },
        skud: {
            name: 'системы контроля',
            type: [
                    ['автономные контроллеры', 'avtonomnyye_kontrollery'],
                    ['сетевые контроллеры', 'setevyye_kontrollery'],
                    ['считыватели', 'schityvateli'],
                    ['замки (электромагнитные, электромеханические, защелки)', 'zamki'],
            ],
            individail_form: [
                {
                    header: 'Где находится объект',
                    type: 'textaria',
                    name: 'mestonahojdenie_objecta',
                    placheholder: 'Введите адрес объекта',
                    options: [],
                },
                {
                    header: 'Объект',
                    type: 'select',
                    name: 'integraciy',
                    placheholder: 'Выберите объект',
                    options: [
                        'офис',
                        'предприятие',
                        'склад',
                        'квартира',
                        'загородный дом',
                        'магазин',
                        'другое',
                    ], 
                },
                {
                    header: 'Площадь помещений (М²)',
                    type: 'input',
                    name: 'ploshad',
                    placheholder: 'Введите площадь',
                    options: [],
                },
                {
                    header: 'Количество точек доступа',
                    type: 'input',
                    name: 'count_point',
                    placheholder: 'Введите количество точек доступа',
                    options: [],
                },
                {
                    header: 'Вид двери',
                    type: 'select',
                    name: 'dver',
                    placheholder: 'Выберите вид двери',
                    options: [
                        'металлическая',
                        'деревянная',
                        'пластиковая',
                        'стеклянная',
                    ], 
                },
                {
                    header: 'ТИП ЗАМКА',
                    type: 'select',
                    name: 'zamok',
                    placheholder: 'Выберите тип замка',
                    options: [
                        'электромеханический',
                        'электромагнитный',
                        'электрозащелка',
                    ], 
                },
                {
                    header: 'Необходим ли Вам учет рабочего времени сотрудников',
                    type: 'radio',
                    name: 'ushet',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Предполагаемое количество сотрудников/посетителей',
                    type: 'select',
                    name: 'count_sotrudniki',
                    placheholder: 'Выберите количество',
                    options: [
                        'до 50',
                        'до 200',
                        'до 1000',
                        'свыше 1000',
                    ], 
                },
                {
                    header: 'Способ идентификации',
                    type: 'select',
                    name: 'identificaciy',
                    placheholder: 'Выберите способ идентификации',
                    options: [
                        'Карта',
                        'Брелок',
                        'Распознование лица',
                        'QR-код',
                        'NFC',
                    ],
                },
                {
                    header: 'Наличие инженерного проекта',
                    type: 'radio',
                    name: 'proekt',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
            ]
        },
        video: {
            name: 'Видеонаблюдение',
            type: [
                    ['уличное видеонаблюдение', 'ulichnoye_videonablyudeniye'],
                    ['внутреннее видеонаблюдение', 'vnutrenneye_videonablyudeniye'],
                    ['видеорегистраторы', 'videoregistratory'],
            ],
            individail_form: [
                {
                    header: 'Где находится объект',
                    type: 'textaria',
                    name: 'mestonahojdenie_objecta',
                    placheholder: 'Введите адрес объекта',
                    options: [],
                },
                {
                    header: 'Объект видеонаблюдения',
                    type: 'select',
                    name: 'integraciy',
                    placheholder: 'Выберите объект',
                    options: [
                        'дом/квартира',
                        'подъезд',
                        'магазин',
                        'офис',
                        'склад',
                        'автомойка',
                        'школа',
                        'парковка',
                        'другое',
                    ], 
                },
                {
                    header: 'Периметр помещений (М)',
                    type: 'input',
                    name: 'perimetr',
                    placheholder: 'Введите периметр',
                    options: [],
                },
                {
                    header: 'Количество видеокамер уличных',
                    type: 'input',
                    name: 'ulichnie',
                    placheholder: 'число',
                    options: [],
                },
                {
                    header: 'Количество видеокамер внутренних',
                    type: 'input',
                    name: 'vnutri',
                    placheholder: 'число',
                    options: [],
                },
                {
                    header: 'Особенности монтажа',
                    type: 'select',
                    name: 'montaj',
                    placheholder: 'Выберите особенности',
                    options: [
                        'высота от 3м до 5м',
                        'высота от 5м до 7м',
                        'на столбе',
                    ], 
                },
                {
                    header: 'Особенности прокладки кабеля',
                    type: 'select',
                    name: 'kabel',
                    placheholder: 'Выберите особенности',
                    options: [
                        'высота от 3м до 5м',
                        'высота от 5м до 7м',
                        'воздушным способом',
                    ], 
                },
                {
                    header: 'Время хранения записи камер',
                    type: 'select',
                    name: 'zapis',
                    placheholder: 'Выберите время хранения',
                    options: [
                        '5 дней',
                        '10 дней',
                        '20 дней',
                        '30 дней',
                    ], 
                },
                {
                    header: 'Запись звука',
                    type: 'radio',
                    name: 'zvuk',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'Наличие проектной документации',
                    type: 'radio',
                    name: 'documentaciy',
                    placheholder: '',
                    options: [
                        ['yes', 'да'],
                        ['no', 'нет'],
                    ],
                },
                {
                    header: 'С чем нужна интеграция',
                    type: 'select',
                    name: 'integraciy',
                    placheholder: 'Выберите с чем нужна интеграция',
                    options: [
                        'охранная/пожарная сигнализация',
                        'СКУД',
                    ], 
                },
            ]
        },
        ops: {
            type: [
                    ['пожарные извещатели', 'pozharnyye_izveshchateli'],
                    ['приборы приемно-контрольные', 'priyemno_kontrolnyye'],
                    ['датчики движения', 'datchiki_dvizheniya'],
                ],
        } ,
        domofoni: {
            type: [ ],
        },
        metalodetektori: {
            type: [ ],
        },
        avtomatika_vorot: {
            type: [
                    ['автоматика для откатных ворот', 'otkatnykh_vorot'],
                    ['автоматика для подъемных ворот', 'podyemnykh_vorot'],
                    ['автоматика распашных ворот', 'raspashnykh_vorot'],
                ],
        },
    }

    // Открываем модальное окно
    function open_modal(oe) {
        if (!oe.target.closest('.open_modal')) return
        oe.preventDefault();
        var btn = oe.target.closest('.open_modal');
        var modal_window = $('.modal_window')[0];
        if (modal_window.style.display) return;
        modal_window.querySelector('h2').innerText = btn.dataset['title'];
        var mesg = btn.dataset['mesg']
        var zvezdochka = '';
        var class_obyzatelnost = ''
        if (btn.dataset['type'] == 'zakaz') {
            mesg += '<span>' + btn.closest('.parent_btn').querySelector('h3').innerText + '</span>';
        } else {
            zvezdochka = ' *';
            class_obyzatelnost = ' class="obyzatelnoe" ';
        }
        modal_window.querySelector('.mesg').innerHTML = mesg;
        var fragment = document.createElement('div');
        fragment.classList = 'inputs_block'
        var fio = document.createElement('label');
        fio.innerHTML = '<h3>Ф.И.О. *</h3><input class="obyzatelnoe" type="text" name="fio" placeholder="Введите Ф.И.О.">';

        var telefon = document.createElement('label');
        telefon.innerHTML = '<h3>ТЕЛЕФОН'+ zvezdochka + '</h3><input ' + class_obyzatelnost + ' type="text" name="telefon" placeholder="Введите телефон">';

        var email = document.createElement('label');
        email.innerHTML = '<h3>E-MAIL*</h3><input class="obyzatelnoe" type="text" name="email" placeholder="Введите e-mail">'
        
        var comment = document.createElement('label');
        comment.innerHTML = ' <h3>комментарий</h3><textarea name="comment"></textarea>';

        if (btn.dataset['type'] == 'zakaz') {
            fragment.appendChild(fio);
            var zakaz = document.createElement('input');
            zakaz.name = 'zakaz';
            zakaz.value = btn.closest('.parent_btn').querySelector('h3').innerText;
            zakaz.type = 'hidden';
            fragment.appendChild(email);
            fragment.appendChild(telefon);
            fragment.appendChild(zakaz);
        } else {
            fragment.appendChild(fio);
            fragment.appendChild(telefon);
            fragment.appendChild(comment);
            
        }
        var form = modal_window.querySelector('form');
        form.insertBefore(fragment, form.querySelector('button'));


        $('html')[0].style.overflow = 'hidden';
        $('html')[0].style.paddingRight = '16px';
        modal_window.style.display = 'block';
        flagOpenModal = true
    }

    // Открываем окно для индевидуального заказа
    function opem_modal_individual(oe) {
        if (!oe.target.closest('.opem_modal_individual')) return
        oe.preventDefault();
        var btn = oe.target.closest('.opem_modal_individual');
        var modal_window = $('.modal_window_individual')[0];
        var data_individual = product[btn.dataset.type].individail_form
        var fragment = document.createDocumentFragment();
        data_individual.forEach(elem => {
            var label = document.createElement('label');
            label.for = elem.name
            var textarea = document.createElement('textarea');
            var input = document.createElement('input');
            var span = document.createElement('span');
            var h3 = document.createElement('h3');
            if (elem.type == 'textaria') {
                h3.innerText = elem.header
                label.appendChild(h3);
                textarea.name = elem.name;
                textarea.placeholder = elem.placheholder;
                label.appendChild(textarea);
                fragment.appendChild(label)
            } else if (elem.type == 'input') {
                h3.innerText = elem.header
                label.appendChild(h3);
                input.name = elem.name;
                input.type = 'text';
                input.placeholder = elem.placheholder;
                label.appendChild(input);
                fragment.appendChild(label)
            } else if (elem.type == 'select') {
                var label = document.createElement('div');
                label.classList.add('psevdo_label')
                h3.innerText = elem.header
                label.appendChild(h3);
                input.name = elem.name;
                input.type = 'text';
                input.placeholder = elem.placheholder;
                input.autocomplete = 'off';
                input.classList.add('psevdo_select')
                var img = document.createElement('img');
                img.alt = '';
                img.src = '/assets/images/icons/open_grey.svg';
                label.appendChild(img);
                label.appendChild(input);
                
                var ol = document.createElement('ol')
                ol.classList.add('vipodashka')
                for (var i = 0; i < elem.options.length; i++) {
                    var li = document.createElement('li');
                    li.innerHTML = elem.options[i];
                    li.classList.add('option')
                    ol.appendChild(li);
                }
                label.appendChild(ol);
                fragment.appendChild(label)
            } else if (elem.type == 'radio') {
                var div = document.createElement('div');
                div.classList.add('radio')
                var flajki = document.createElement('div');
                h3.innerText = elem.header;
                div.appendChild(h3);

                flajki.classList.add('flajki');                
                for (var i = elem.options.length - 1; i >= 0; i--) {
                    var option = elem.options[i];
                    var label = document.createElement('label');
                    label.setAttribute('for', elem.name + i);
                    var input = document.createElement('input');
                    input.name = elem.name
                    input.id = elem.name + i
                    input.type = elem.type;
                    input.value = option[0];
                    var span = document.createElement('span');
                    span.innerText = option[1];
                    label.appendChild(input);
                    label.appendChild(span);
                    flajki.appendChild(label)
                }
                div.appendChild(flajki);
                fragment.appendChild(div);
            }
            
            
        })
        document.querySelector('.js_individual_data_type').appendChild(fragment);
        
        if (modal_window.style.display) return;
        $('html')[0].style.overflow = 'hidden';
        $('html')[0].style.paddingRight = '16px';
        modal_window.style.display = 'block';
        flagOpenModal = true
    }

    // открываем закрываем псевдовыподашку
    function open_and_cloze_psevdo_vipodashka(oe) {
        if (!oe.target.closest('.psevdo_label') || (oe.target.closest('.psevdo_label') && oe.target.closest('h3'))) return;
        var parent = oe.target.closest('.psevdo_label');
        var vipodashka = parent.querySelector('.vipodashka');
        vipodashka.classList.toggle('active');
    }

    // Выбираем опцию из псевдоселекта
    function select_option_psevdo(oe) {
        if (!oe.target.closest('.option')) return;
        var parent = oe.target.closest('.psevdo_label');
        parent.querySelector('input').value = oe.target.innerText;
    }

    // закрытие модального окна при клике на крестик либо вне окна
    function click_close_modal(oe) {
        
        if (!flagOpenModal || (oe.target.closest('.order_form') && !oe.target.closest('.close_modal'))) return;
        if (document.querySelector('.modal_window').style.display) {
            close_modal(oe);
        } else if (document.querySelector('.modal_window_individual').style.display) {
            close_modal_individual_form(oe);
        }        
    }

    // Програмное закрытие окна
    function close_modal(oe) {
        var modal_window = document.querySelector('.modal_window');
        console.log(modal_window.querySelector('.inputs_block'));
        console.log(!!modal_window.querySelector('.inputs_block'));
        
        modal_window.style.display = ''
        modal_window.querySelector('h2').innerHTML = ''
        modal_window.querySelector('.mesg').innerHTML = ''
        modal_window.querySelector('.inputs_block').remove();
        flagOpenModal = false;
        $('html')[0].style.overflow = 'visible';
        $('html')[0].style.paddingRight = '';
    }

    // Програмнное закрытие окна с индивидуальной формой
    function close_modal_individual_form(oe) {
        var modal_window = document.querySelector('.modal_window_individual');
        modal_window.style.display = ''
        modal_window.querySelector('form').reset();
        modal_window.querySelector('.js_individual_data_type').innerHTML = ''; 
        modal_window.querySelector('.file_conteyner').innerHTML = '';
        arrayFiles.length = 0;
        flagOpenModal = false;
        $('html')[0].style.overflow = 'visible';
        $('html')[0].style.paddingRight = '';
    }

    // Отправка данные на сервер
    function send(oe) {
        if(!oe.target.closest('[data-ajax-new]')) return
        oe.preventDefault();
        let $this = oe.target.closest('[data-ajax-new]');
        if (control_required_input($this.form)) {
            alert('заполнимте обязательные поля со звёздочкой!');
            return;
        }
        
        var fd = new FormData($this.form);
        var ajax = new XMLHttpRequest();
        ajax.open('post', '/action', false);
        ajax.send(fd);
        // console.log(ajax.response);
        if ($this.closest('.no_modal')) {
            $this.form.reset()
        } else {
            close_modal(oe);
        }
        console.log(ajax)
        alert(ajax.response)
    };

    function send_ind_form(oe) {
        if (!oe.target.closest('.js_submit_ind_form')) return
        oe.preventDefault();
        
        let btn = oe.target.closest('.js_submit_ind_form');
        if (control_required_input(btn.form)) {
            alert('заполнимте обязательные поля со звёздочкой!');
            return;
        }
        
        var fd = new FormData();
        var elems = btn.form.querySelectorAll('label, .div_lica, .psevdo_label, .radio')
        
        var data = [];
        for (var i = 0; i < elems.length; i++) {
            var elem = elems[i];
            if ((elem.closest('label') && !elem.getAttribute('for')) || elem.closest('.psevdo_label')) {
                data.push({
                    name: elem.querySelector('h3').innerText,
                    value: (elem.querySelector('input') ? elem.querySelector('input').value : elem.querySelector('textarea').value) || 'не указано'
                }) 
            } else if ((elem.closest('.div_lica') || elem.closest('.radio')) && !elem.closest('label') ) {
                var obj = {
                    name: elem.closest('.radio') ? elem.querySelector('h3').innerText : 'Форма лица',
                };
                var labels = elem.querySelectorAll('label');
                // console.log(labels);
                for (var i_lica = 0; i_lica < labels.length; i_lica++) {
                    if (!labels[i_lica].querySelector('input').checked) continue;
                    obj.value = labels[i_lica].querySelector('span').innerText
                }
                obj.value = obj.value || 'не указано';
                data.push(obj);
            }
        }
        var typeProduct = location.pathname.split('/')[1].split('.')[0];
        if (typeProduct == 'sistemy-videonablyudeniya') {
            typeProduct = 'video'
        }
        console.log(typeProduct);
        console.log(product[typeProduct]);
        console.log(product[typeProduct].name);
        typeProduct = {
            name: 'Заказ по типу продукции:',
            
            value: product[typeProduct].name,
        }
        data.unshift(typeProduct);
        console.log(data);
        fd.append('data', JSON.stringify(data));
        for (var i = 0; i < arrayFiles.length; i++) {
            fd.append('foto_' + i, arrayFiles[i]);
        }
        
        var ajax = new XMLHttpRequest();
        ajax.open('post', '/action-ind', false);
        ajax.send(fd);
        close_modal_individual_form(oe);
        alert(ajax.response);
    }

    // Проверка заполнения обязательных полей
    function control_required_input(form) {
        
        for (var i = 0; i < form.length; i++) {
            if (form[i].classList.contains('obyzatelnoe') && !form[i].value) {
                return true
            }
        }
        return false
    }

    // Открытие или закрытие вопроса в гормошке
    function open_cloze_vopros(oe) {
        if (!oe.target.closest('.js_vopros')) return;
            header = oe.target.closest('.js_vopros'),
            paragraf = header.nextElementSibling,
            img = header.querySelector('img'),
            src = img.src.slice(0, img.src.lastIndexOf('/') + 1)
        if (header.classList.contains('js_open_vopros')) {
            img.src = src + 'close.svg';
            header.classList.toggle('js_open_vopros');
            paragraf.style.cssText = "position: static; visibility: visible;"
            header.style.cssText = "border-top-color: rgba(115, 123, 125, 1); border-bottom: 2px solid rgba(115, 123, 125, 1) "

        } else {
            img.src = src + 'open.svg';
            header.classList.toggle('js_open_vopros');
            paragraf.style.cssText = '';
            header.style.cssText = '';
        }
    }

    // Смена изображения 
    function change_img(oe) {
        var item = oe.target
        if (!item.closest('.js_change_img') || item.closest('.js_change_img.stop') ) return
        item.classList.add('stop'); // Запрещаем выполнения обработчика на этом элементе
        var imgs = item.closest('.js_parent_change_img').querySelectorAll('.js_for_change');
        for (let i = 0; i < imgs.length; i++){
            var nameFile = imgs[i].getAttribute('src').split('/').pop()
            if (nameFile == item.dataset['src']) {
                imgs[i].style.display = ''
            } else {
                imgs[i].style.display = 'none';
            }
        }
    }

    // При выходе с элемента при наведении на который меняется фото, удаляем запрет на обработку последующего наведения
    function remove_stop_handler(oe) {
        if (oe.target.closest('.js_change_img.stop') && !activeElemChangeImg) {
            activeElemChangeImg = oe.target.closest('.js_change_img.stop');
        } else if (!oe.target.closest('.js_change_img.stop') && activeElemChangeImg) {
            activeElemChangeImg.classList.remove('stop');
            activeElemChangeImg = false;
        }
    }

    // Действия по подготовке и возврата изображения по умолочанию
    function return_default_img(oe) {
        if (oe.target.closest('.js_parent_change_img') && !conteynerElementsInImgs) {
            conteynerElementsInImgs = oe.target.closest('.js_parent_change_img')
        } else if (!oe.target.closest('.js_parent_change_img') && conteynerElementsInImgs) {
            var imgs = conteynerElementsInImgs.querySelectorAll('.js_for_change');
            for (let i = 0; i < imgs.length; i++){
                if (imgs[i].classList.contains('js_visible_default')) {
                    imgs[i].style.display = ''
                } else {
                    imgs[i].style.display = 'none';
                }
            }
            conteynerElementsInImgs = false;
        }
    }

    // Активируем движение ползунка
    function active_polzunok(oe) {
        if (!oe.target.closest('.disk')) return;
        
        var geo = {};
        geo.btnPolzunok = oe.target.closest('.disk')
        geo.polzun = geo.btnPolzunok.closest('.polzunok');
        geo.zapolnitel = geo.polzun.querySelector('.zapolnitel');
        geo.cellClick = oe.clientX;
        geo.inputFrom = geo.btnPolzunok.closest('.conteyner_polzunok').querySelector('.from');
        geo.inputTo = geo.btnPolzunok.closest('.conteyner_polzunok').querySelector('.to');
        geo.btnPolzunok.querySelector('p').style.display = 'block';
        geo.portion = Math.round((geo.inputTo.dataset['max'] - geo.inputFrom.dataset['min']) / (Math.round(geo.polzun.getBoundingClientRect().width) - (Math.round(geo.btnPolzunok.getBoundingClientRect().width) * 2)));
        console.log(geo);
        console.log(geo.polzun.getBoundingClientRect().width + ' - ' + geo.zapolnitel.getBoundingClientRect().width);
        console.log(geo.polzun.style.paddingLeft);
        console.log(geo.polzun.style.paddingRight)
        console.log(geo.portion);


        // Устанавливаем начальную позицию паддингов в ползунке
        if (geo.btnPolzunok.classList.contains('left')) {
            geo.polzun.style.paddingLeft = geo.polzun.style.paddingLeft || '0px';
        } else {
            geo.polzun.style.paddingRight = geo.polzun.style.paddingRight || '0px';
        }
        
        // Навешиваем обработчик при перемещении мышки над дисками ползунка
        geo.btnPolzunok.onmousemove = function (oe) {
            // если при перемещении левая клавиша не нажата удаляем обработчик
            if (oe.buttons !== 1) {
                oe.target.onmousemove = null;
                geo.btnPolzunok.querySelector('p').style.display = 'none';
            }

            
            // Если левый диск
            if (this.classList.contains('left')) {

                if ( !geo.zapolnitel.getBoundingClientRect().width && oe.clientX  >= geo.cellClick) {
                    console.log('всё ширины больше нет')
                    return;
                }
                
                geo.polzun.style.paddingLeft = (parseFloat(geo.polzun.style.paddingLeft) + (oe.clientX - geo.cellClick)) + 'px'
                geo.cellClick = oe.clientX;
                var paddingLeft = parseFloat(geo.polzun.style.paddingLeft);
                
                geo.inputFrom.value = paddingLeft ? paddingLeft * geo.portion : geo.inputFrom.dataset['min'];


            }
            // Если првый диск
            else if (this.classList.contains('right')) {
                if ( !geo.zapolnitel.getBoundingClientRect().width && geo.cellClick >= oe.clientX) {
                    console.log('всё ширины больше нет')
                    return;
                }
                
                geo.polzun.style.paddingRight = (parseFloat(geo.polzun.style.paddingRight) + (geo.cellClick - oe.clientX)) + 'px'
                geo.cellClick = oe.clientX;

                var paddingRight = parseFloat(geo.polzun.style.paddingRight);
                geo.inputTo.value = paddingRight ? geo.inputTo.dataset['max'] - (paddingRight * geo.portion) : geo.inputTo.dataset['max'];
            }
        }
        geo.btnPolzunok.onmouseleave = function (oe) {
            if (geo.btnPolzunok.onmousemove) {
                geo.btnPolzunok.onmousemove = null;
                geo.btnPolzunok.querySelector('p').style.display = 'none';
            }
        }
        
    }

    // Очищение формы меню
    function reset_form(oe) {
        if (!oe.target.closest('.rstfrm')) return;
        oe.target.form.reset()
        oe.target.form.querySelectorAll('[type="checkbox"]').forEach(el => {
            el.checked = false;
        })
        oe.target.form.querySelectorAll('.js_input_price').forEach(el => {
            el.value = '';
        })
        oe.target.form.querySelector('.js_search').value = '';
        oe.target.form.querySelector('.js_input_order').value = '';
        var polzunok = oe.target.form.querySelector('.polzunok');
        polzunok.style.paddingLeft = ''
        polzunok.style.paddingRight = ''
        oe.target.form.action = location.pathname;
        oe.target.form.submit()
    }

    // Открытие и закрытие окна выподашки
    function open_and_cloze_vipodashka(oe) {
        if (!oe.target.closest('.js_vipodashka')) return;

        var window = oe.target.closest('.js_vipodashka').querySelector('.js_varianti');

        if (window.style.display) {
            window.style.display = '';
        } else {
            window.style.display = 'block';
        }
    }

    // Выбор значения из выподашки
    function selection_value_vipodashka(oe) {
        if (!oe.target.closest('.js_varianti p')) return;
        console.log(oe.target.closest('.js_varianti p'))
        var p = oe.target;
        p.closest('.js_vipodashka').querySelector('.js_window').innerText = p.innerText;
    }

    // Выделить всё и снять выделение чикбоксов
    function select_and_reset_all(oe) {
        if (!oe.target.classList.contains('js_vse')) return;
        var parent = oe.target.closest('.parent');
         parent.querySelectorAll('.js_conteyner input').forEach(input=>input.checked = oe.target.checked)
    }

    // убираем выделение с кнопки выделить всё
    function unchecked_select_all(oe) {
        if (!oe.target.closest('.js_conteyner')) return;
        if (oe.target.checked) return
        oe.target.closest('.parent').querySelector('.js_vse').checked = false;
    }

    // Убираем выбранную категорию без выбора другой
    function unselect_catagory_product(oe) {
        if (!oe.target.closest('.active .cross')) return
        location = '/katalog';
    }

    // Выбор категории товара
    function select_catagory_product(oe) {
        if (!oe.target.closest('.catalog__filter-item')) return;
        var form = document.querySelector('.js_form_filtr');
        console.log(form.querySelector('.js_search').value);
        form.querySelector('.js_search').value = '';
        console.log(form.querySelector('.js_search').value);
        form.action = '/katalog/' + oe.target.closest('.catalog__filter-item').dataset.type;
        form.reset();
        form.querySelectorAll('[type = "checkbox"]').forEach(el => {
            el.checked = false;
        });
        form.submit();
        
    }

    /**
     *  Выбор способа сортировки товара
     */
    function select_sort (oe) {
        if (!oe.target.closest('.js_order')) return;
        var input = document.querySelector('.js_input_order');
        input.value = oe.target.closest('.js_order').dataset.order;
        input.form.action = location.pathname
        input.form.submit();
    }

    // вставка в навигацию нужного блока по категории
    function insert_data_menu(name_category) {

        var ajax = new XMLHttpRequest();
        ajax.open('get', '/admin/menu-data/' + name_category);
        ajax.onreadystatechange = function () {
            if (ajax.readyState === 4 && ajax.status === 200) {
                console.log(ajax.responseText);
            }
        }
        ajax.send()
        return
        var list_category = product[name_category].type
        if (!list_category.length) {
            cleaning_block_dop_opshions(false, true)
            return;
        } 
        var shell = document.createDocumentFragment()
        list_category.forEach(item => {
            var label = document.createElement('label');
            label.for = item[1];
            var input = document.createElement('input');
            input.type = 'checkbox';
            input.name = item[1];
            input.id = item[1];
            label.appendChild(input);
            var span = document.createElement('span');
            span.innerText = item[0];
            label.appendChild(span);
            shell.appendChild(label);
        })
        console.log(shell);
        var conteyner = document.querySelector('.cateogory_opshoins .js_conteyner');
        conteyner.innerHTML = '';
        conteyner.appendChild(shell);
        document.querySelector('.cateogory_opshoins').style.display = 'block';
    }

    // очищаем и скрываем блок дополнительных опций по категории
    function cleaning_block_dop_opshions(oe, flag_manual) {
        if ((oe.target && !oe.target.closest('.cross')) && !flag_manual) return;
        var conteyner = document.querySelector('.cateogory_opshoins .js_conteyner');
        conteyner.innerHTML = '';
        document.querySelector('.cateogory_opshoins').style.display = '';
        document.querySelector('.cateogory_opshoins .js_vse').checked = false;
    }

    // Создание превью файла при крикриплении файла
    function add_file_and_previy(oe) {
        if (!oe.target.closest('.js_files')) return
        var fragment = document.createDocumentFragment();
        for (let i = 0; i < oe.target.files.length; i++) {
            var f = oe.target.files[i];
            var p = document.createElement('p');
            p.classList.add('js_previy_file')
            var span = document.createElement('span');
            span.innerText = f.name;
            var img = document.createElement('img');
            img.alt = '';
            img.src = '/assets/images/icons/close.svg';
            img.classList.add('js_remove_file')
            p.appendChild(span);
            p.appendChild(img);
            fragment.appendChild(p);
            arrayFiles.push(oe.target.files[i]);
        }
        document.querySelector('.file_conteyner').appendChild(fragment);
    }

    // Удаляет файл из массива добавленных и удаляет превью жтого файла
    function remove_file_and_previy(oe) {
        if (!oe.target.closest('.js_remove_file')) return;
        var parent = oe.target.closest('.js_previy_file')
        var name = parent.querySelector('span').innerText;
        
        for (const key in arrayFiles) {
            if (arrayFiles[key].name != name) continue;
            arrayFiles.splice(key, 1);
        }
        parent.remove();
    }

    // Установление общей максимальной высоты для блоков готовых комплектов
    function collective_max_height(oe, selector, width) {
        if (width && innerWidth > width) return;
        if (!width && innerWidth < 802) return;
        console.log(selector);
        var items = document.querySelectorAll(selector);
        var max_height = 0;
        items.forEach(item => {            
            if (item.getBoundingClientRect().height > max_height) {
                max_height = item.getBoundingClientRect().height;
            }
            console.log(item.getBoundingClientRect())
        })
        console.log(max_height);
        items.forEach(item => {
            item.style.height = max_height + 'px';
        })
    }

    // Открытие закрытие мобильного меню католога
    function open_close_mobile_menu_catalog(oe) {
        if (!oe.target.closest('.js_btn_open_navigator')) return;
        var btn = oe.target.closest('.js_btn_open_navigator');
        var podlojka = document.querySelector('.podlojka_mobil_menu');
        var navigator = document.querySelector('.navigator');

        if (!podlojka.classList.contains('active_podlojka_navigator')) {
            var shapka_heightt = document.querySelector('.header').getBoundingClientRect().height;
            
            navigator.style.display = 'block';
            navigator.style.height = innerHeight - shapka_heightt + 'px';
            navigator.style.marginTop = shapka_heightt + 'px';
            podlojka.classList.add('active_podlojka_navigator');
            btn.style.left = (navigator.getBoundingClientRect().width + 10) + 'px';
            document.body.style.overflow = 'hidden';
        } else {
            navigator.style.display = '';
            navigator.style.height = '';
            navigator.style.marginTop = '';
            podlojka.classList.remove('active_podlojka_navigator');
            btn.style.left = '';
            document.body.style.overflow = '';
        }
        
    }

    /**
     *  Открытие блока по поиску
     */
    function open_modal_search(oe) {
        query_search(null, oe.target)
        oe.target.closest('.js_parent').querySelector('.js_info_block').style.display = 'block';
    }

    /**
     *  Закрытие блока по поиску
     */
    function cloze_modal_search(oe) {
        if (oe.target.closest('.js_search_block')) return;
        if (!document.querySelector('.js_info_block')) return;
        document.querySelector('.js_info_block').style.display = '';
    }

    /**
     *  поисковый запрос при вводе и его обработка
     */
    function query_search(oe, input = null ) {
        var input =  oe ? oe.target : input;
        console.log(input);
        var parent = input.closest('.js_parent');
        var button = parent.querySelector('button');
        var span_count = parent.querySelector('.js_count');
        if (input.value.length > 0) {
            button.disabled = false;
            button.classList.add('active');
            var ajax = new XMLHttpRequest()
            ajax.open('POST', '/search', false);
            var fd = new FormData(document.querySelector('.js_form_filtr'));            
            fd.append('type', location.pathname.slice(1));
            fd.append('string', input.value);
            
            ajax.send(fd);
            var result = JSON.parse(ajax.responseText);
            if (result.status) {
                span_count.innerText = result.count
            } else { 
                alert('ошибка поиска. попробуйте позже или обратитесь к разработчику')
            }

        } else {
            button.disabled = true;
            button.classList.remove('active');
            span_count.innerText = 'По пустой строке не ищем'
        }
    }

    /**
     *  Отправка данных фильтрационного запроса с кнопки поиска
     */
    function send_filtr_btn_search(oe) {
        if (!oe.target.closest('.js_btn_search')) return;
        console.log(oe.target.form)
        oe.target.form.submit();
    }


    // Открытие закрытие мобильного меню сайта
    function open_close_mobile_menu_syte(oe) {
        if (!oe.target.closest('.burger')) return;
        console.log(document.querySelector('.header .header-menu'))
        document.querySelector('.header .header-menu').classList.toggle('active_mobile_menu');
    }

    document.body.addEventListener('click', function (oe) {
        click_close_modal(oe);
        open_modal(oe);
        send(oe);
        send_ind_form(oe);
        open_cloze_vopros(oe);
        reset_form(oe);
        open_and_cloze_vipodashka(oe);
        selection_value_vipodashka(oe);
        select_catagory_product(oe);
        unselect_catagory_product(oe);
        cleaning_block_dop_opshions(oe, false);
        remove_file_and_previy(oe);
        opem_modal_individual(oe);
        open_and_cloze_psevdo_vipodashka(oe);
        select_option_psevdo(oe);
        open_close_mobile_menu_catalog(oe);
        open_close_mobile_menu_syte(oe);
        select_sort(oe);
        cloze_modal_search(oe)
        send_filtr_btn_search(oe);
    }, false);
    document.body.addEventListener('mouseover', function (oe) {
        change_img(oe);
    });
    document.body.addEventListener('mousemove', function (oe) {
        remove_stop_handler(oe);
        return_default_img(oe);
    });

    document.body.addEventListener('mousedown', function (oe) {
        active_polzunok(oe);
    });
    document.body.addEventListener('change', function (oe) {
        select_and_reset_all(oe);
        unchecked_select_all(oe);
        add_file_and_previy(oe);
    }, false);
    window.addEventListener('load', function (oe) {
        collective_max_height(oe, '.made_complect .item.r1 ol'); // Готовые комплекты 1ряд
        collective_max_height(oe, '.made_complect .item.r2 ol'); // Готовые комплекты 2ряд
        collective_max_height(oe, '.advantages .services__item', 1135); // Наши преимущества
    });
    
    if (document.querySelector('.js_search')) {
        document.querySelector('.js_search').addEventListener('focus', function (oe) {
            open_modal_search(oe)
        });
        document.querySelector('.js_search').addEventListener('input', function (oe) {
            query_search(oe)
        });
    }
    
})()
