jQuery(function($){
  var windowHeight = $(window).height();
  var accordianHeight = windowHeight-280;
  var headerHeight = $(".head-bar").height();
  var footerHeight = $(".footer-bar").height();
  var footerTop = $('.footer-bar').position().top;
  var setContentHeight = windowHeight - headerHeight - footerHeight;
  var productHeight = windowHeight - headerHeight;
  var locatorHeight = windowHeight - headerHeight - footerHeight;
  var sticky = $('.header').position().top;
  var play = true;

  function resize() {
    //Resize header when display >1300
    if($(window).width() < 1194){
      $(".header-desktop").addClass("d-none");
      $(".header-mobile").removeClass("d-none");
    }else{
      $(".header-desktop").removeClass("d-none");
      $(".header-mobile").addClass("d-none");
    }

    if (footerTop < (setContentHeight)){//if (footerTop < (windowHeight - headerHeight)){ //
      $(".content").css("height", (setContentHeight+200) + "px");
    }else{
      $(".content").css("height", "100%");
    }
    $(".product-main").css("height", (productHeight) + "px");
    $(".product-content").css("height", (productHeight) + "px");
    $(".product-content").css("margin-top", (-productHeight) + "px");
    $(".product-content-background").css("height", (productHeight) + "px");
    $(".product-content-background").css("margin-top", (-productHeight) + "px");
    $(".innovation-accordion-content-g").css("height", (accordianHeight) + "px");
    $(".innovation-accordion-content-text-container").css("height", (accordianHeight-55) + "px");
    $(".locator-map").css("height", (locatorHeight) + "px");
    $(".locator-map").css("z-index", "-2");
  }
  $(window).resize(resize)
           .trigger('resize');

  $(window).scroll(function() {
    if(play){
      if($(window).scrollTop() > sticky){
        $(".header").addClass("fixed-top");
      }else{
        $(".header").removeClass("fixed-top");
      }
    }
  });

  $('.home-play-button').on('click', function(){
    $('.home-triangle').addClass('home-triangle-expand');
    $('.home-triangle-mobile').addClass('home-triangle-mobile-expand');
    $('.home-video').addClass('home-video-expand');
    $("video").prop('muted', false);
    play = false;
  });

  $('.home-video').on('click', function(){
    $('.home-triangle').removeClass('home-triangle-expand');
    $('.home-triangle-mobile').removeClass('home-triangle-mobile-expand')
                       .delay(500)
                      .queue(function(next) {$('.home-video').removeClass('home-video-expand'); next(); });
    $("video").prop('muted', true);
    play = true;
  });
});
