$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('.checkbox').checkbox({
        uiLibrary: 'bootstrap4'
    });

    $('.summernote').summernote({
        height: 300
    });

    $('.colorpicker').colorpicker();
    $('.colorpicker').on('colorpickerChange', function(event) {
        $(this).css('color', event.color.toString());
    });
});

$('body').on('click', '.mobile-menu-button', function () {
    $(this).toggleClass('open');
    $('#mobile-menu').toggleClass('open');
});

$('body').on('change', '[name="pic_path"]', function () {
    if(!$('.preview-holder').hasClass('show')) $('.preview-holder').addClass('show');
    $('[name="image-size"]').val('');
    $('.preview').css('background-image','');
    readURL(this);
});

$('body').on('change', '[name="color_code"]', function () {
    if(!$('.preview-holder').hasClass('show')) $('.preview-holder').addClass('show');
    $('.preview').css('background-color', $(this).val());
});

$('body').on('keyup', '[name="image-size"]', function () {
    $('.preview').css('background-size', $(this).val() + 'px');
    $('[name="img_width"]').val($(this).val());
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.preview').css('background-image','url(' + e.target.result + ')');
        };
        reader.readAsDataURL(input.files[0]);
    }
}