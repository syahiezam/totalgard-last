jQuery(function($){
  var check = true;
  var timer;
  $('.product-item-text-desktop').hide();
  $('.product-item-text-desktop').removeClass('d-none');
  $('.product-content-text-main').hide();
  $('.product-content-text-child').hide();

  // function expand(i){
  //   return function(){
  //     check = !check;
  //     $('.product-main').toggleClass('product-main-'+i);
  //     $('.product-item-'+i).toggleClass('product-item-open');
  //     if(check){
  //       $('.product-item-text-'+i).delay(200).fadeIn();
  //     }else{
  //       $('.product-item-text-'+i).delay(200).fadeOut();
  //     }
  //     $('.product-item').removeClass('product-item-hover');
  //     for (j=1; j<10; j++) {
  //       if(j!=i){
  //         $('.product-item-'+j).toggleClass('product-item-closed');
  //       }
  //     }
  //   }
  // };
  function expand(i){
    return function(){
      check = !check;
      // $('.product-content').css('transition-delay','1s');
      $('.product-item-hover').css('transition-delay','0');
      $('.product-main').addClass('product-main-'+i);
      $('.product-item-'+i).addClass('product-item-open-'+i);
      $('.product-content-'+i).removeClass('d-none');
      $('.product-content').css('z-index','2');
      $('.product-content-background').css('z-index','1');
      $('.product-content-background').css('background-color','white');
      // $('.product-content-background').css('background-color','white');

      // $('.product-content-padding-1').delay(1000).toggleClass('product-content-padding-1-close');
      // $('.product-content-padding-2').delay(500).toggleClass('product-content-padding-2-close');
      $('.product-content-text-main-'+i).delay(500).fadeIn('slow',function(){
        $('.product-content-padding-1').addClass('product-content-padding-1-close');

      });
      $('.product-content-'+i).delay(1000).fadeIn('slow',function(){
        $('.product-content-padding-2').addClass('product-content-padding-2-close');

      });

      $('.product-content').css('transition-delay','0s');
      if(check){
        $('.product-item-text-'+i).delay(200).fadeIn();
      }else{
        $('.product-item-text-'+i).fadeOut();
        $('.product-item-text-mobile-'+i).show();
      }
      for (j=1; j<10; j++) {
        if(j!=i){
          $('.product-item-'+j).addClass('product-item-closed');
        }
      }
      $('.product-item-hover').css('transition-delay','0.2s');
    }
  };

  function hover(i){
    return function(){
      if(check){
        $('.product-item-text-'+i).fadeIn();
      }
    }
  };

  function hoverIn(i){
    return function(){
      $('.product-item-hover').css('transition-delay','0.2s');
      timer = setTimeout(hover(i), 500);
      $('.product-item-'+i).addClass('product-item-hover');
    }
  }

  for (i=1; i<10; i++) {
    $('.product-item-'+i).on('click', expand(i));
    $('.product-item-'+i).mouseenter(hoverIn(i)).mouseleave(function() {
        clearTimeout(timer);
        $('.product-item-text').fadeOut();
        $('.product-item').removeClass('product-item-hover');
    });
  };

  $('.product-content').on('click', function(){
      check = !check;

      $('.product-content').css('z-index','-1');
      $('.product-content-background').css('z-index','-2');
      $('.product-content-background').css('background-color','transparent');
      $('.product-content-padding-1').removeClass('product-content-padding-1-close');
      $('.product-content-padding-2').removeClass('product-content-padding-2-close');
      $('.product-content-text-main').hide();
      $('.product-content-text-child').hide();
      $('.product-item-text-mobile').show();
      // $('.product-content').css('transition-delay','1s');
      // $('.product-item').removeClass('product-item-hover');
      for (j=1; j<10; j++) {
        $('.product-main').removeClass('product-main-'+j);
        $('.product-item-'+j).removeClass('product-item-open-'+j);
        $('.product-item-'+j).removeClass('product-item-closed');
        $('.product-content-'+j).addClass('d-none');
      }
  });

  // $('.product-item-desktop').on("touchstart", function (e) {
  //   'use strict'; //satisfy code inspectors
  //   var link = $(this); //preselect the link
  //   if (link.hasClass('hover')) {
  //       return true;
  //    }
  //   else {
  //      link.addClass('hover');
  //      $('.product-item-desktop').not(this).removeClass('hover');
  //      e.preventDefault();
  //      return false; //extra, and to make sure the function has consistent return points
  //     }
  //   });
});
