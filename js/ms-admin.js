jQuery(document).ready(function($) {

  // Show container Instagram
  $('#ms_show_ig').change(function(){
    
    if($(this).is(':checked')) {
      $('#container_my_ig').show();
    } else {
      $('#container_my_ig').hide();
    }

  });

  // Show container LinkedIn
  $('#ms_show_in').change(function(){
    
    if($(this).is(':checked')) {
      $('#container_my_in').show();
    } else {
      $('#container_my_in').hide();
    }

  });

  // Show container GitHub
  $('#ms_show_gh').change(function(){
    
    if($(this).is(':checked')) {
      $('#container_my_gh').show();
    } else {
      $('#container_my_gh').hide();
    }

  });

  // Show container GitHub
  $('#ms_show_wa').change(function(){
    
    if($(this).is(':checked')) {
      $('#container_my_wa').show();
    } else {
      $('#container_my_wa').hide();
    }

  });

});