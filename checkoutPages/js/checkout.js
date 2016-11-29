
$( document ).ready(function() {
    $(".error-message").hide();
    $(".passwordDescription span").text("");
    $("#passwd").hide();

    $('form').submit(function () {
      // Get the Login Name value and trim it
      var password = $.trim($('#pwd').val());
      var is_visible =  $('#pwd').is(":visible");
      // Check if empty of not
      if (!is_visible) {
          var email = $.trim($('#email').val());
          
      }else{

      }
      
      return false;
    });

});
