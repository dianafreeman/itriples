jQuery(document).ready(function(){
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
         //  search.css('z-index','2')
           jQuery("#masthead .search-box .search-field").focus();
         },function() {
          if ( search.hasClass('slideInDown') ){
              search.removeClass('slideInDown');
            }
            search.addClass('slideOutUp');
//            search.css('z-index','unset')
            setTimeout( function(){
              search.addClass('hidden');

            }, 800);
           }
           );




}); 
//END ON LOAD

/*
jQuery(window).scroll(function() {
  var search = jQuery("#nav-search-bar");
  var nav = jQuery('#masthead .navbar');
  var navTop = nav.offset().top;
  var img = jQuery('a.responsive-logo');
  if  (jQuery(this).scrollTop() > 160 ) {
    search.addClass('sticky');
    search.css('top', '112px');
    nav.addClass('sticky');
    nav.removeClass('navbar-expand-md');
    nav.addClass('navbar-expand-lg');
    img.removeClass('hidden').addClass('fadeIn');
  } else {
    search.removeClass('sticky')
    nav.removeClass('sticky');
    search.css('top', 'unset');
    img.addClass('hidden');
    nav.addClass('navbar-expand-md');
    nav.removeClass('navbar-expand-lg');
  }
});// END on scroll
*/

jQuery('.user-info-toggle').click(function(){
    jQuery('#user-info').slideToggle(400).addClass('show-user-info');
});

// SEARCH FUNCTION
jQuery('#search-toggle').click(function(){
	jQuery(this).addClass('fadeInRight');
});

// CAROUSELS


jQuery('.dropdown-toggle').click(function() {
    var location = jQuery(this).attr('href');
    window.location.href = location;
    return false;
});
