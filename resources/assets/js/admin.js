$('body').on('click', '.mobile-menu-button', function () {
    $(this).toggleClass('open');
    $('#mobile-menu').toggleClass('open');
});

$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});