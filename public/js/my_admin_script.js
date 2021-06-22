window.addEventListener('click', function (oe) {
    click_send_ajax(oe)
})

/**
 *  1. Отправка данных методом аякс при клике на кнопку
 */
function click_send_ajax(oe) {
    if (!oe.target.closest('.js_send_ajax')) return;
    if (oe.target.closest('.btn_send_ajax_active')) return;
    var btn = oe.target.closest('.js_send_ajax')
    console.log('отправоляем')
    oe.preventDefault();
    send_ajax_form(btn);
}

/**
 *  2. Очистка формы с учётом псевлоселектов
 */
function reset_form(btn) {
    btn.form.reset();
    var selects = btn.form.querySelectorAll('.js_formation_options')
    selects.forEach(el => {
        var inner_text = el.closest('.js_parent').querySelectorAll('option')[0].innerText;
        var public_span = el.closest('.js_parent').querySelector('.select2-selection__rendered');
        public_span.title = inner_text
        public_span.innerText = inner_text;
    })
}

/**
 *  3. Отправка данных из формы с помощью якса
 */
function send_ajax_form(btn) {
    var form = btn.form;
    btn.parentNode.querySelectorAll('button').forEach(el=>el.disabled = true)
    var fd = new FormData(form);
    var ajax = new XMLHttpRequest();
    
    ajax.open('POST', form.action, false);
    btn.classList.add('btn_send_ajax_active');
    ajax.send(fd);
    console.log(ajax.responseText)
    var success = true;
    if (ajax.responseText[0] !== '{') {
        toastr["error"]("Сетевая ошибка, попробуйте позже или сообщите разработчику!");
        success = false;
    } else {
        var result = JSON.parse(ajax.responseText);
        
        if (result.status) {
            toastr["success"](result.mes)
        } else { 
            toastr["warning"](result.mes);
            success = false;
        }
    }
    
    if (success) {
        reset_form(btn);
    }
    btn.parentNode.querySelectorAll('button').forEach(el => el.disabled = false)
    btn.classList.remove('btn_send_ajax_active')
}