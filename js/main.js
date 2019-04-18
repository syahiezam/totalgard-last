jQuery(function($) {
  var i;
  $(".content").css({"height": "100%"});

  for(i=1; i<7; i++){
    if($('body').is('.page0'+i)){
      $(".page-"+i).addClass("active");
      $(".triangle-1-"+i).addClass("addTriangle1");
      $(".triangle-2-"+i).addClass("addTriangle2");
    }
  }

//Navbar mobile button
 $('#header-icon').on('click', function() {
   var $el = $(this);
   $el.find('i').toggleClass('fa-bars fa-angle-up');
   $el.toggleClass('toggle-icon');
 });

 //Footer mobile button
 $('.footer-collapse-btn-1').on('click', function() {
   var $el = $(this);
   $el.find('i').toggleClass('fa-plus fa-minus');
   $el.toggleClass('footer-collapse-btn-1');
 });

 $('.footer-collapse-btn-2').on('click', function() {
   var $el = $(this);
   $el.find('i').toggleClass('fa-plus fa-minus');
   $el.toggleClass('footer-collapse-btn-2');
 });

 $('.footer-collapse-btn-3').on('click', function() {
   var $el = $(this);
   $el.find('i').toggleClass('fa-plus fa-minus');
   $el.toggleClass('footer-collapse-btn-3');
 });

});
