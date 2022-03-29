$('html').attr('class', 'js');
const nav = $('.main-nav');
let topOfNav = nav.position().top;
let leftOfNav = nav.height();

const theBod = $('body'); //stores the body element

function fixNav(){

    if($(window).scrollTop() >= topOfNav ){
        theBod.addClass('fixed-nav');
    }else{
        theBod.removeClass('fixed-nav');
    }

}

//event listner
$(window).on('scroll', fixNav);