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
var mql = window.matchMedia('all and (max-width: 479px)');
if (mql.matches) {
    // размер окна 479px или меньше
    $('.slider').lbSlider({
        leftBtn: '.sa-left', // left button selector
        rightBtn: '.sa-right', // right button selector
        visible: 1, // visible elements quantity
        autoPlay: false, // autoscroll
        autoPlayDelay: 2 // delay of autoscroll in seconds
    });
} else {

    $('.slider').lbSlider({
        leftBtn: '.sa-left', // left button selector
        rightBtn: '.sa-right', // right button selector
        visible: 4, // visible elements quantity
        autoPlay: false, // autoscroll
        autoPlayDelay: 2 // delay of autoscroll in seconds
    });
    // нет, размер окна более 479px
}


$('#btn1_1').on('click', function () {
    var btn = $('#btn1_1')
    btn.css('display', 'none');
})

$('#btn1_2').on('click', function (){
    var btn = $('#btn1_1')
    btn.css('display', 'block')
})

$('#btn2_1').on('click', function () {
    var btn = $('#btn2_1')
    btn.css('display', 'none');
})

$('#btn2_2').on('click', function (){
    var btn = $('#btn2_1')
    btn.css('display', 'block')
})

$('#btn3_1').on('click', function () {
    var btn = $('#btn3_1')
    btn.css('display', 'none');
})

$('#btn3_2').on('click', function (){
    var btn = $('#btn3_1')
    btn.css('display', 'block')
})
$('#btn4_1').on('click', function () {
    var btn = $('#btn4_1')
    btn.css('display', 'none');
})

$('#btn4_2').on('click', function (){
    var btn = $('#btn4_1')
    btn.css('display', 'block')
})
$('#btn5_1').on('click', function () {
    var btn = $('#btn5_1')
    btn.css('display', 'none');
})

$('#btn5_2').on('click', function (){
    var btn = $('#btn5_1')
    btn.css('display', 'block')
})
$('#btn6_1').on('click', function () {
    var btn = $('#btn6_1')
    btn.css('display', 'none');
})

$('#btn6_2').on('click', function (){
    var btn = $('#btn6_1')
    btn.css('display', 'block')
})
$('#btn7_1').on('click', function () {
    var btn = $('#btn7_1')
    btn.css('display', 'none');
})

$('#btn7_2').on('click', function (){
    var btn = $('#btn7_1')
    btn.css('display', 'block')
})
