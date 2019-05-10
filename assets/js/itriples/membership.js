jQuery(document).ready(function(){
jQuery('#loader').hide();

jQuery('#student-app').addClass('hidden');

jQuery('#submit-application').on('click', function(e) {
  var errors = jQuery('input:invalid');
  if (errors.length == 0){
    e.preventDefault();
  jQuery(this).fadeOut(500, function() {
  jQuery('#loader').fadeIn(500);

});
var form = jQuery('form#membership-app');

var url = 'https://script.google.com/macros/s/AKfycbxQroijtgLAy4TanFs6GCftfMYUqN0Rj0HVT1qDdupI0E3wD2Y/exec';
/*
Note on JQuery .serialize():
* Only "successful controls" are 
* serialized to the string. No 
* submit button value is serialized
* since the form was not submitted
* using a button. 
*
* For a form element's value to be 
* included in the serialized string, 
* the element must have a name attribute. 
* Values from checkboxes and radio buttons 
* (inputs of type "radio" or "checkbox") are 
* included only if they are checked. Data 
* from file select elements are not serialized.
*/


var jqxhr = jQuery.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: form.serialize()

  }).success(
  function(){
  jQuery('#loader').fadeOut(500).delay(300);
  jQuery('#submit-application').fadeOut(500);
  jQuery('#website-signup').removeClass('hidden').end().fadeIn(500);
  jQuery('#register-links').removeClass('hidden');
  var selectedMembership = jQuery('#membership-selection label.active').find('input').attr('id');
  if (selectedMembership == "selectStudentApp"){
    jQuery('a#student-register').removeClass('hidden');
  } else if (selectedMembership == "selectProfApp"){
     jQuery('a#professional-register').removeClass('hidden');
}

}); // END On success  
}// END if there are no errors



});// END ON click submit

}); // END on load



function testFormItems(){
  console.log(jQuery('#register fieldset.student input'));
}

jQuery('#membership-selection input').change(function(){
  var selectedID = jQuery(this).attr('id');
  if (selectedID == "selectStudentApp"){
    if (jQuery("#student-app").hasClass('hidden')){
        jQuery("#student-app").removeClass('hidden');
      }
      jQuery("#professional-app").addClass('hidden');

  } else if (selectedID == "selectProfApp"){
    if (jQuery("#professional-app").hasClass('hidden')){
    jQuery("#professional-app").removeClass('hidden');
    }
    if (jQuery("#student-app").hasClass('hidden') == false){
          jQuery("#student-app").addClass('hidden');

    }
  }

});


function sendAttachment(){
   var file, 
      reader = new FileReader();

  // Upload the file to Google Drive
  reader.onloadend = function(e) {
    google.script.run
      .withSuccessHandler(showMessage)
      .uploadFileToGoogleDrive(
         e.target.result, file.name, 
         jQuery('input#name-last').val(), 
         jQuery('input#email').val()
      );
  };

  // Read the file on form submit
  function submitForm() {
    file = jQuery('#file')[0].files[0];
    showMessage("Uploading file..");
    reader.readAsDataURL(file);
  }

  function showMessage(e) {
    jQuery('#progress').html(e);
  }

}


jQuery('select#anticipated-degree').change(function (){
var selected = jQuery(this).find(':selected');
if (selected.text() == "Other"){
	jQuery('.degree-specify').removeClass('hidden').slideDown(500);
	} else {
    jQuery('.degree-specify').slideUp(500).delay(500).addClass('hidden');
      }
});

jQuery('select#other-graduate-degree').change(function (){
var selected = jQuery(this).find(':selected');
if (selected.text() == "Other"){
	jQuery('.other-grad-degree-specify').removeClass('hidden').slideDown(500);
	} else {
    jQuery('.other-grad-degree-specify').slideUp(500).delay(500).addClass('hidden');
      }

});


jQuery('#cv-upload').change(function() {
  var sizeMB = parseInt((jQuery(this)[0].files[0].size)/1000000);
  var file = jQuery(this)[0].files[0].name;
  console.log(  jQuery(this)[0].files[0])
  jQuery(this).parent('label').html("<span><i class='fas fa-check-circle animated flipInY' style='color: green'></i>You've uploaded "+file+"<br><small class='text-muted'>File Size:"+sizeMB+" MB</small><span>");
});

