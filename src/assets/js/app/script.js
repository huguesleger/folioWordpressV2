jQuery(function($) {

/*------------------------
------function theme------
--------------------------*/

/*--------------------------------------------
    anim illu navigation
---------------------------------------------*/
function animNav(){
  $('#menu-primary .menu-item a').each(function(i){
  $(this).addClass('__color-nav');

  var nb = Math.floor(Math.random() * 41);
  $(this).mouseenter(function(){
  $("#illu-nav polygon").addClass('__color-nav');
  $('#illu-nav #t'+nb).addClass('__tcolor');
  });

  $(this).mouseleave(function(){
  $("#illu-nav polygon").removeClass('__color-nav');
  $('#illu-nav #t'+nb).removeClass('__tcolor');
  });
  });
}

/*--------------------------------------------
    enter content home
---------------------------------------------*/
function enter(){
  var nav = $('.main').height();
  $('#enter, #enterResponsive').on('click', function(){
    $('html, body').animate({scrollTop: $(this.hash).offset().top - nav}, 800);
    return false;
  });
}

/*--------------------------------------------
    color bg main
---------------------------------------------*/
function colorMain() {
  var offset = 40;
  $(window).on('scroll', function(){
    if( $(window).scrollTop()>=offset ){
      $('.home .main').addClass('__bg-color');
    } else {
      $('.home .main').removeClass('__bg-color');
    }
  });
}

/*------------------------
----end function theme----
--------------------------*/

/*--------------------------------------------
    load function theme document ready
---------------------------------------------*/
$(document).ready(function(){
  colorMain();
  enter();
  animNav();
});

});
