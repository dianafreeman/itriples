jQuery(document).ready(function(){
        headerBoxAnimation();
        var search = jQuery("#nav-search-bar");
        search.addClass('animated');
        search.addClass('hidden');
		    jQuery("#search-toggle").toggle( function() {
          if (search.hasClass('hidden') ){
            search.removeClass('hidden')
          };
          if (search.hasClass('slideOutUp')){
            search.removeClass('slideOutUp')
          }
		       search.addClass('slideInDown');
           search.css('z-index','99');

		       jQuery("#masthead .search-box input[type='text']").focus();
		     },function() {
          if ( search.hasClass('slideInDown') ){
              search.removeClass('slideInDown');
            }
            search.addClass('slideOutUp', function (){
                          search.css('z-index','unset');

            });

            setTimeout( function(){
              search.addClass('hidden')

            }, 800);
           }
           );

// Start Conference Animation
function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date('06/22/2018');
initializeClock('clockdiv', deadline);


jQuery('.ms-alert-box .ms-alert-success')
}); 
//END ON LOAD

function headerBoxAnimation(){
var headerBox = jQuery('.header-box');
var headerText = jQuery('.intro-fade');

jQuery(".intro-fade").each(function(i) {
  var fadeItem = jQuery(this);
  setTimeout( function(){
    fadeItem.removeClass('hidden')
    fadeItem.toggleClass('fadeInDown').next('span').fadeIn('slow');
      }, i * 1000);
});


};

function fade(element){
  element.toggleClass('fadeIn');
}


function makeSticky(){
  var nav = jQuery('#masthead .navbar');
  nav.addClass('sticky')
}

jQuery(window).scroll(function() {
  var nav = jQuery('#masthead .navbar');
  var navTop = nav.offset().top;
  var img = jQuery('img.responsive-logo');
  if  (jQuery(this).scrollTop() > 160 ) {
    nav.addClass('sticky');
    nav.removeClass('navbar-expand-md');
    nav.addClass('navbar-expand-lg');
    img.removeClass('hidden').addClass('fadeIn');
  } else {
    nav.removeClass('sticky');
    img.addClass('hidden');
    nav.addClass('navbar-expand-md');
    nav.removeClass('navbar-expand-lg');
  }
});

/* HEADER BOX HOVER

jQuery('#page-sub-header .header-box').hover(function(){
    jQuery(this).addClass('box-shadow');
}, function(){
    jQuery(this).removeClass('box-shadow');
});
*/

jQuery('.user-info-toggle').click(function(){
    jQuery('#user-info').slideToggle(400).addClass('show-user-info');
});

// SEARCH FUNCTION
jQuery('#search-toggle').click(function(){
	jQuery(this).addClass('fadeInRight');
});

// CAROUSELS

jQuery(document).ready(function(){
jQuery("#resource-carousel .owl-item .button-bottom p").slideToggle();

  jQuery("#resource-carousel").owlCarousel({
    loop:false,
    nav: true,
    responsiveClass:true,
    autoWidth: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

jQuery("#resource-carousel .owl-item").hover(function() {
       var excerpt = jQuery(this).find('.button-bottom p')
     //jQuery("#resource-carousel .owl-item .button-bottom")
             excerpt.slideDown();

       }, function() {
       var excerpt = jQuery(this).find('.button-bottom p')
     //jQuery("#resource-carousel .owl-item .button-bottom")
             excerpt.slideUp();
    });
});



function stickyNav() {
// Get the navbar
var navbar = jQuery('nav.navbar');
// Get the offset position of the navbar
var sticky = navbar.offset();
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  if (jQuery(window).scrollTop() >= sticky) {
    navbar.addClass("sticky")
  } else {
    navbar.removeClass("sticky");
  }
}

jQuery('.dropdown-toggle').click(function() {
    var location = jQuery(this).attr('href');
    window.location.href = location;
    return false;
});


function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}


