jQuery(function($) {

/*--------------------------------------------
    slider
---------------------------------------------*/
function slider(){
  $('.slider').slick({
    dots: true,
    rtl: false,
    arrows: true,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: $('.slider').data('sliderspeed'),
    pauseOnHover: true,
    lazyLoad: 'progressive',
    useCSS: true,
  });
}

/*--------------------------------------------
    service
---------------------------------------------*/
function showCollapse() {
  $('#service .btn-link').on('click', function(){
    if ($(this).hasClass('collapsed')){
      $(this).addClass('show');
    } else {
      $(this).removeClass('show');
    }
  });
}

/*--------------------------------------------
    webdesign
---------------------------------------------*/
function parallax() {
  var imgWebdesign = document.getElementById('imgWebdesign');
  var parallaxWebdesign = new Parallax(imgWebdesign);
}

/*--------------------------------------------
    post
---------------------------------------------*/
function postPosition() {
  // $('.section-post .wrap-post:nth-child(2n+1)').addClass('reverse');
  // $('.section-post .wrap-post:nth-child(2n+1) .row').addClass('reverse');
  // $('.section-post .wrap-post:nth-child(2n+1) .content-img').addClass('reverse');
}

  //Initiat WOW JS
new WOW().init();
/*--------------------------------------------
    load function
---------------------------------------------*/
$(document).ready(function(){
  slider();
  showCollapse();
  parallax();
  postPosition();
});

});
