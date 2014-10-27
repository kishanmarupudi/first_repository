$(function(){
    var windowHeight = $(window).height();
    var topWin = 0;
    var secondHeight = $('.fluid_container').height();
    var menustatus = 0;

    $(window).scroll(function() {
       topWin = $(window).scrollTop();

       if(topWin >= windowHeight){
            $('.menu li a').stop( true, true ).fadeOut(200);
            $('.hambager').stop( true, true ).fadeIn(300);
            return false;
       }else{
            $('.hambager').stop( true, true ).fadeOut(200);
            $('.menu li a').stop( true, true ).fadeIn(300);
            return false;
       }
    });

    $('.hambager').click(function(){
        $('.hambager').fadeOut(50);
        $('.menu li a').delay(60).fadeIn(300);
    })

    $('#responsive-menu-button').sidr({
        name: 'sidr-main',
        source: '.menu',
        side: 'right'
    });

    $('#camera_wrap_4').camera({
        height: 'auto',
        // loader: 'bar',
        thumbnails: false,
        hover: false,
        navigation: false,
        playPause: false,
        opacityOnGrid: false,
        overlayer: false,
        imagePath: '../images/'
    });

    console.log(windowHeight);
    console.log(topWin);
    console.log(secondHeight);
    
});