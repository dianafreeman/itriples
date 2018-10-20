// ISSS Category Navigation

jQuery(document).ready(function(){
  var thePosts = jQuery('.entry-title a');
  console.log(thePosts)
  thePosts.each(function(){
  var theID = jQuery(this).attr('id');
  var theText = jQuery(this).text();
  jQuery('#categoryNav').append('<a class="btn btn-secondary col-sm-4" href="#'+theID+'">'+theText+'</a>')
  });


});

