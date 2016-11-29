$(document).ready(function () {

  $(".error-message").hide();

  $('form').submit(function () {
      // Get the Login Name value and trim it
      var result = true;

      var fullname = $.trim($('#fullname').val());
      $('#fullname').removeAttr( "style" );
      // Check if empty of not
      if (fullname  === '') {
          $(".error-message").show();
          $('#fullname').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          } 
      }

      var autocomplete = $.trim($('#autocomplete').val());
      $('#autocomplete').removeAttr( "style" );
      if (autocomplete  === '') {
          $(".error-message").show();
          $('#autocomplete').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          }
      }

      var locality = $.trim($('#locality').val());
      $('#locality').removeAttr( "style" );
      if (locality  === '') {
          $(".error-message").show();
          $('#locality').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          }
      }

      var administrative_area_level_1 = $.trim($('#administrative_area_level_1').val());
      $('#administrative_area_level_1').removeAttr( "style" );
      if (administrative_area_level_1  === '') {
          $(".error-message").show();
          $('#administrative_area_level_1').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          }
      }

      var postal_code = $.trim($('#postal_code').val());
      $('#postal_code').removeAttr( "style" );
      if (postal_code  === '') {
          $(".error-message").show();
          $('#postal_code').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          }
      }

      var Phonenumber = $.trim($('#Phonenumber').val());
      $('#Phonenumber').removeAttr( "style" );
      if (Phonenumber  === '') {
          $(".error-message").show();
          $('#Phonenumber').css( "border-color", "red" );
          if(result == true){
            $('.containerNoBorder').animate({scrollTop : 0},100);
            result = false;
          }
      }

      return result;
    });
});

var placeSearch, autocomplete;
      var componentForm = {
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

