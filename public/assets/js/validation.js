$(document).ready(function(){

    jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value.indexOf(" ") < 0 && value != ""; 
  }, "space is not allowed");
})