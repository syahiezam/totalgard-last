jQuery(function($){
  $(".locator-content").css({"height": "100%"});
  $(".locator-content-1").hide();
  // function closeDrop(){
  //   // $(".locator-dropdown-menu").css({"transform": "translateY(-2px);"});
  //   // $(".locator-dropdown-menu").css({"transition": "all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;"});
  //   // $(".locator-dropdown-menu").css({"visibility": "hidden;"});
  // //
  // $(".locator-dropdown-menu").css("visibility", "hidden");

  //$(".locator-dropdown-menu:hover").css("visibility", "display");
  // $(".locator-dropdown-menu").addClass("d-none");
  // $(".locator-dropdown-menu").delay(500).removeClass("d-none");
  //
  // // $(".accordion-content-1").removeClass("d-none");
  //   // $(".content").css("height", (setContentHeight) + "px");
  // }

  $(document).click(function(){
    $(".locator-dropdown-triangle-rotate ").removeClass("triangle-rotate");
    $(".locator-dropdown-menu").removeClass("dropdown-show");
  });

  function open(i){
    return function(){
      $(".triangle-"+i).toggleClass("triangle-rotate");
      $(".dropdown-"+i).toggleClass("dropdown-show");
      for (j=1; j<50; j++) {
        if(j!=i){
          $(".triangle-"+j).removeClass("triangle-rotate");
          $(".dropdown-"+j).removeClass("dropdown-show");
        };
      };
    };
  };

  for (i=1; i<50; i++) {
    $('.locator-dropdown-'+i).on('click', open(i));
  };

  for (i=1; i<50; i++) {
    $('.locator-dropdown-'+i).on('click', function(e){
      e.stopPropagation();
    });
  };

  function drop1(i,x){
    $(".triangle-1").removeClass("triangle-rotate");
    $(".dropdown-1").removeClass("dropdown-show");
    return function(){
      $(".locator-dropdown-1").css("background-color", "#FFFFFF");
      $(".locator-dropdown-text-1").text(x);
      $(".locator-content-main").css("height", "50vh");
      $('#locator-map').attr('src','images/locator-map-1.png');
      $('#locator-map-m').attr('src','images/locator-map-1.png');
      for (j=1; j<50; j++) {
        if(j!=i){
          $(".dropdown-1-"+j).addClass("d-none");
          $(".dropdown-2-"+j).addClass("d-none");
          $(".dropdown-3-"+j).addClass("d-none");
        }
        $(".locator-content-"+j).addClass("d-none");
        $(".locator-content-"+j).hide();
        $(".locator-content-"+j).animate({"top": "+5px"});
      };
      $(".dropdown-1-"+i).removeClass("d-none");
      for (j=2; j<5; j++) {
        $(".locator-dropdown-text-"+j).text("");
        $(".locator-dropdown-"+j).css("background-color", "#FFF2EB");
      };
    };
  };

  for (i=1; i<50; i++) {
    $('.locator-dropdown-1-'+i).on('click', drop1(i, $('.locator-dropdown-1-'+i).text()));
  };

  function drop2(i,x){
    $(".triangle-2").removeClass("triangle-rotate");
    $(".dropdown-2").removeClass("dropdown-show");
    return function(){
      $(".locator-dropdown-2").css("background-color", "#FFFFFF");
      $(".locator-dropdown-text-2").text(x);
      $(".locator-content-main").css("height", "50vh");
      $('#locator-map').attr('src','images/locator-map-2-'+i+'.png');
      $('#locator-map-m').attr('src','images/locator-map-2-'+i+'.png');
      $('#locator-map').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-2-'+i+'-t.png'); next(); });
      $('#locator-map-m').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-2-'+i+'-t.png'); next(); });
      for (j=1; j<50; j++) {
        if(j!=i){
          $(".dropdown-2-"+j).addClass("d-none");
          $(".dropdown-3-"+j).addClass("d-none");
        }
        $(".locator-content-"+j).addClass("d-none");
        $(".locator-content-"+j).hide();
        $(".locator-content-"+j).animate({"top": "+5px"});
      };
      $(".dropdown-2-"+i).removeClass("d-none");
      for (j=3; j<5; j++) {
        $(".locator-dropdown-text-"+j).text("");
        $(".locator-dropdown-"+j).css("background-color", "#FFF2EB");
      };
    };
  };
  for (i=1; i<50; i++) {
    $('.locator-dropdown-2-'+i).on('click', drop2(i, $('.locator-dropdown-2-'+i).text()));
  };

  function drop3(i,x){
    return function(){
      $(".locator-dropdown-3").css("background-color", "#FFFFFF");
      $(".locator-dropdown-text-3").text(x);
      $(".locator-content-main").css("height", "50vh");
      $('#locator-map').attr('src','images/locator-map-3-'+i+'.png');
      $('#locator-map-m').attr('src','images/locator-map-3-'+i+'.png');
      $('#locator-map').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-3-'+i+'-t.png'); next(); });
      $('#locator-map-m').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-3-'+i+'-t.png'); next(); });
      for (j=1; j<50; j++) {
        if(j!=i){
          $(".dropdown-3-"+j).addClass("d-none");
        }
        $(".locator-content-"+j).addClass("d-none");
        $(".locator-content-"+j).hide();
        $(".locator-content-"+j).animate({"top": "+5px"});
      };
      $(".dropdown-3-"+i).removeClass("d-none");
      for (j=4; j<5; j++) {
        $(".locator-dropdown-text-"+j).text("");
        $(".locator-dropdown-"+j).css("background-color", "#FFF2EB");
      };
    };
  };
  for (i=1; i<50; i++) {
    $('.locator-dropdown-3-'+i).on('click', drop3(i, $('.locator-dropdown-3-'+i).text()));
  };

  function drop4(i,x){
    return function(){
      $(".locator-dropdown-4").css("background-color", "#FFFFFF");
      $(".locator-dropdown-text-4").text(x);
      $(".locator-content-"+i).removeClass("d-none");
      $(".locator-content-"+i).delay(300).fadeIn();
      $(".locator-content-"+i).animate({"top": "-20px"})
      $('#locator-map').attr('src','images/locator-map-4-'+i+'.png');
      $('#locator-map-m').attr('src','images/locator-map-4-'+i+'.png');
      $('#locator-map').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-4-'+i+'-t.png'); next(); });
      $('#locator-map-m').delay(300).queue(function(next) { $(this).attr('src','images/locator-map-4-'+i+'-t.png'); next(); });
      for (j=1; j<50; j++) {
        if(j!=i){
          $(".locator-content-"+j).addClass("d-none");
          $(".locator-content-"+j).hide();
          $(".locator-content-"+j).animate({"top": "+5px"});
        }
      };
      $(".locator-content-main").delay(500).animate({"height": "100%"});
    };
  };
  for (i=1; i<50; i++) {
    $('.locator-dropdown-4-'+i).on('click', drop4(i, $('.locator-dropdown-4-'+i).text()));
  };
});
