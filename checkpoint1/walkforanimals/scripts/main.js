
//STICKY NAV=============================================================
'use strict';
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


//MENU TOGGLE ==============================================================

	const menuBtn = $('#menu'); //the hamburger/menu button

		menuBtn.click( function(e){
		e.preventDefault();
		$('#main-nav, #menu').toggleClass('active');
		$('i.menu').toggleClass('icon-menu icon-cancel-circled');
		})