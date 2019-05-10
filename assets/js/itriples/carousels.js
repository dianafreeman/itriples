///ISSS Carousels



jQuery(document).ready(function(){

  jQuery("#resource-carousel").owlCarousel({
     loop:true,
    margin:10,
    nav: true,
    responsiveClass:true,
    responsiveBaseElement:"#resources",
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});

  

});

