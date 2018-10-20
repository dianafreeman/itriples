jQuery(function(){
var headers = jQuery('h4.entry-title a')
var navselect = jQuery('#measure-navigation select')

headers.each( function(){
navselect.append('<option value='+jQuery(this).attr('id')+'>'+jQuery(this).text() + '</option>');

});
});

jQuery('#submit-anchor').click(function(event){
	var selected = jQuery('#measure-navigation select').find('option:selected');
    var goTo = selected.attr('value');
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
     console.log(goTo);
    
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.href = "#"+goTo;
});

