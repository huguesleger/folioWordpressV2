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

/*--------------------------------------------
    count
---------------------------------------------*/
function Count() {
  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });
  });
}

/*--------------------------------------------
    message email
---------------------------------------------*/
function destroyMessage() {
      $('.wpcf7-submit').click(function showArlet(){
        window.setTimeout(function(){
          $('.wpcf7-response-output.alert-warning, .wpcf7-response-output.alert-success').addClass('hide'); }, 4500);
          $('.wpcf7-response-output.alert-warning, .wpcf7-response-output.success').removeClass('hide');
          window.setTimeout(function(){
            $('.wpcf7-response-output.alert-warning, .wpcf7-response-output.alert-success').addClass('destroy'); }, 5000);
            $('.wpcf7-response-output.alert-warning, .wpcf7-response-output.success').removeClass('destroy');
          });
      }

/*--------------------------------------------
    go to top
---------------------------------------------*/
function goTop(){
  $('.gotop').on('click', function (e) {
    var scrollTop = $(window).scrollTop();
     e.preventDefault();
     $('html,body').animate({
         scrollTop: 0
     }, 900);
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
  Count();
  destroyMessage();
  goTop();
});

});
