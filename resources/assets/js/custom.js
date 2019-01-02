AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});

$('.grid').masonry({
    // options...
    itemSelector: '.card-holder',
    gutter: '.gutter-sizer'
});