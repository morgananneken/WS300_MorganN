
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

	const menuBtn = $('#toggle-menu'); //the hamburger/menu button

		menuBtn.click( function(e){
		//e.preventDefault();
		$('.main-nav').toggleClass('active');
		console.log('test')
		})

//COUNTDOWN TO WALK ===========================================================

const wfa = new Date('May 7 2022 08:00:00');

            function countDown(){  

                let now = new Date();
                let diff = wfa - now; 
                console.log(diff);

                if(diff <= 0){
                    wfa.setFullYear(now.getFullYear()+1);
                    diff = wfa - now;
                }

                let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
                let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60)); 

                console.log(days, hours, minutes);

                $('.days span').text(days);
                $('.hours span').text(hours);
                $('.minutes span').text(minutes);
				$('.goal-number #countdown').text(days);

                let secsRemain = 60- now.getSeconds()
               console.log(secsRemain, now.getSeconds());

               if(now.getSeconds == 0){
                    secsRemain = 60;
               }

                setTimeout(countDown, secsRemain*1000);
                
            }

            countDown();
//FUNDRAISING PERCENT AND DOLLAR AMOUNT=================================================

//Get dollar amount from file
//place dollar amount in #dollars-raised
//do math divide #dollars-raised by 10000 = #percent-raised
//place percent in #percent-raised
//restyle css percent on progress bar
let dollars;
// let per = 

$('#dollars-raised').load('data.html #money', function(){
	dollars = $('#dollars-raised').text();
	
	dollars = dollars.replace('$', '');
	dollars = dollars.replace(',', '');

	console.log(dollars/10000);
	let perRaised = Math.round((dollars/10000)*100);
	$('#percent-raised').text(perRaised+'%');

	$('#progress').css({width:perRaised+'%'});
});


console.log(dollars);
//$('#dollars-raised').Math.floor(dollars/10000)*per;
console.log();

//MODAL CLOSE

$('.dregistration').click( function(){
    $('.success').removeClass('success');
    $('.notsent').removeClass('notsent');
})

