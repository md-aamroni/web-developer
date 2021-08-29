$(document).ready(function(){

  // top to start
    $topOffset=350;
    $('.top_to i').click(function(){
        $('html,body').animate({
            scrollTop: 0
        },800);
    });
    $(window).scroll(function(){
        $scrolling=$(this).scrollTop();
        var width = $(window).width();
        if($scrolling > $topOffset){
            $('.top_to i').fadeIn(500);
        }
         else{
             $('.top_to i').fadeOut(500);
         }
    });


  $('.header_slider').owlCarousel({
      margin:10,
      nav:false,
      dots: true,
      loop:true,
      autoplay:true,
      autoplayTimeout:7000,
      responsiveClass:true,
      smartSpeed:4000,
      animateOut: 'fadeOut',
      responsive:{
          0:{
              items:1,
          },
          400:{
              items:1,
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
});