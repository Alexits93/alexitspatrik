AOS.init({
    easing: 'ease-out-back',
    duration: 1000,
    once: true
});

$('.grid').masonry({
    // options...
    itemSelector: '.card-holder',
    gutter: '.gutter-sizer'
});