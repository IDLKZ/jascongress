var swiper_partner = new Swiper(".swiperPartner",{

    freeMode: false,
    slideToClickedSlide:true,
    centerMode:true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 2,
        },
    }
})

$(function() {

    // Tabs
    var $tabTrigger = $('.js-tab-trigger');

    // Tabbed content
    var $tabContent = $('.js-tab-content');

    // Switch between tabbed content
    $tabTrigger.on('click', function(event) {

        // Prevent default click event
        event.preventDefault();

        // Get clicked tab element and data attribute
        var $target = $(event.currentTarget);
        var $list = $target.data('tab-list');
        var $info = $target.data('tab-info');

        // Up<a href="https://www.jqueryscript.net/time-clock/">date</a> the selected tab
        $tabTrigger
            .filter('[data-tab-list="' + $list + '"]')
            .removeClass('is-current')
            .filter('[data-tab-info="' + $info + '"]')
            .addClass('is-current');

        // Update the selected content
        $tabContent
            .filter('[data-tab-list="' + $list + '"]')
            .removeClass('is-current')
            .hide()
            .filter('[data-tab-info="' + $info + '"]')
            .addClass('is-current')
            .show();
    });

});

$('.slider').lbSlider({
    leftBtn: '.sa-left', // left button selector
    rightBtn: '.sa-right', // right button selector
    visible: 4, // visible elements quantity
    autoPlay: false, // autoscroll
    autoPlayDelay: false // delay of autoscroll in seconds
});

$('#btn').on('click', function () {
    var btn = $('#btn')
    btn.css('display', 'none');
})

$('#btn2').on('click', function (){
    var btn = $('#btn')
    btn.css('display', 'block')
})
