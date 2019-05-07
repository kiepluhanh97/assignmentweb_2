$('.ui.failed.modal').modal('show');

$('.ui.checkbox').checkbox();

$('.ui.form').form({
    fields: {
        username: 'empty',
        password: 'empty'
    },
    onFailure: function (events, fields) {
        $('.ui.modal').modal('show');
        return false;
    }
});