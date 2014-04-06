//JS side of the homepage contact form - validation
$(function() {
	$(".error").hide();
  $(".button").click(function() {
  
    $('.error').hide();
    var name = $("input#name").val();
      if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }
      var email = $("input#email").val();
      if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }
      var message = $("textarea").val();
      if (message == "") {
      $("label#message_error").show();
      $("textarea").focus();
      return false;
    }




  });
});