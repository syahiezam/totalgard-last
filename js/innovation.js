jQuery(function($){
  //init animation
  $('.accordian-button-1[data-toggle=collapse]').prop('disabled',true);
  $(".accordion-content-1").addClass("accordion-content-transition");
  $(".innovation-accordion-button-img").css({"opacity": "1"});

  // effect when click button
  function effectFunction(i){
    return function(){
      $(".innovation-accordion-background-"+i).show();
      $(".innovation-accordion-background-lg-"+i).show();
      $(".innovation-accordion-background-md-"+i).show();
      setTimeout(function () {
        $(".accordion-content-"+i).addClass("accordion-content-transition");
        $(".innovation-accordion-button-img").css({"opacity": "1"});
      }, 500)
      for (j=1; j<6; j++) {
        if(j!=i){
          $(".innovation-accordion-background-"+j).fadeOut();
          $(".innovation-accordion-background-lg-"+j).fadeOut();
          $(".innovation-accordion-background-md-"+j).fadeOut();
          $(".accordion-content-"+j).removeClass("accordion-content-transition");
          $(".innovation-accordion-button-img").css({"opacity": "0"});
        }
      };
    };
  };
  for (i=1; i<6; i++) {
    $('.accordian-button-'+i).on('click', effectFunction(i));
  };

  // disable button when click on it
  function disableFunction(i){
    return function(){
      $('.accordian-button-'+i+'[data-toggle=collapse]').prop('disabled',true);
      for (j=1; j<6; j++) {
        if(j!=i){
          $('.accordian-button-'+j+'[data-toggle=collapse]').prop('disabled',false);
        }
      };
    };
  };
  for (i=1; i<6; i++) {
    $('#accordian-collapse-'+i).on('shown.bs.collapse', disableFunction(i));
  };
});
