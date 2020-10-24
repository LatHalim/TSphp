jQuery(function ($) {
    $('form').on('submit', function (e) {
        e.preventDefault();
        let form = document.forms.with_file_form,
            formData = new FormData(form);
        $.ajax({
            url: '/ts28.php',
            method: 'POST',
            data: formData,
            success: function () {
                alert('Успешно');
            },
            processData: false,
            contentType: false,
        })
    })
});

let file = document.getElementById('file_form');

file.onchange = function (e) {
    let ext = this.value.match(/\.([^\.]+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'gif':
        case 'png':
            alert('Картинка загружена');
            break;
        default:
            alert('Недопустимый формат');
            this.value = '';
    }
};