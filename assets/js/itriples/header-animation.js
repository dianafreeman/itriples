
jQuery(document).ready(function(){
        headerBoxAnimation();
      });


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

