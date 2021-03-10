// JavaScript Document


if($(window).width()<=767){
    
    $(window).scroll(function(){
       
     var scroll = $(window).scrollTop();

  if (scroll >= 100) {
      $(".header").addClass('fixed');
  }
      
  else {
      $(".header").removeClass('fixed');
    }
 
   });
}