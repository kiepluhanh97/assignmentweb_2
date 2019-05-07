$('.ui.successful.modal').modal('show');
$('.ui.failed.modal').modal('show');

$('.ui.checkbox').checkbox();

$('.ui.form').form({
    fields: {
        username: ['minLength[6]', 'maxLength[12]'],
        password: ['minLength[6]', 'maxLength[12]'],
        repassword: ['empty', 'match[password]']
    },
    onFailure: function (events, fields) {
        $('.ui.modal').modal('show');
        return false;
    }
});