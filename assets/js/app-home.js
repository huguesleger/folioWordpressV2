/*------------------------
------anim create------
--------------------------*/
var timelineParameters = anime.timeline({
   autoplay: false
});

timelineParameters
  .add({
    targets: '#wireframe .__device',
    translateX: 135,
    direction: 'alternate',
    opacity: {
    value: [0, 1],
    duration: 2000
    },
    delay: function(el, i, l) { return i * 50 },
    duration: 1200,
    offset: 900
  })
  .add({
    targets: '#txt_design',
    translateY: -65,
    direction:'alternate',
    opacity: {
      value: [1, 0],
      duration: 2000
    },
    delay: function(el, i, l) { return i * 100 },
    duration: 1200,
    offset: 900
  })
  .add({
    targets: '#sun path',
    translateY: -300,
    duration: 3000,
    offset: 500
  })
  // .add({
  //   targets: '#sand_left .__sand_left ',
  //   translateX: [ { value: -138 }],
  //   duration: 1000,
  //   offset: 900
  // })
  .add({
    targets: '#moutain_left .__moutain_left',
    translateX: -190,
    easing: 'easeOutExpo',
    delay: function(el, i, l) { return i * 100 },
    duration: 500,
    offset: 600
  })
  .add({
    targets: '#moutain_right .__moutain_right',
    translateX: 250,
    easing: 'easeOutExpo',
    delay: function(el, i, l) { return i * 100 },
    duration: 500,
    offset: 600
  })
  .add({
    targets: '#forme_left path',
    translateX: -70,
    translateY: -110,
    easing: 'easeOutExpo',
    delay: function(el, i, l) { return i * 50 },
    duration: 1800,
    offset: 900
  })
  .add({
    targets: '#forme_right path',
    translateX: 248,
    translateY: -45,
    easing: 'easeOutExpo',
    delay: function(el, i, l) { return i * 50 },
    duration: 2800,
    offset: 900
  });

  jQuery(function($) {

  $('.btn-create').click(function(){
    $this = $(this);
    $this.addClass('__is-open');
    if($this.hasClass('__txt-open')){
       $this.removeClass('__txt-open');
         $('#txtCreate').addClass('__is-open');
         $('.section-create').removeClass('__bg-light');
         $('.section-create .desc-create .title-create h3').removeClass('__title-dark')
         $('.txt-create').removeClass('__txt-visible');
    }else{
         $this.addClass('__txt-open');
         $('.section-create').addClass('__bg-light');
         $('.section-create .desc-create .title-create h3').addClass('__title-dark');
         $('.txt-create').addClass('__txt-visible');
      }
      if($('.btn-create').hasClass('__is-open')) {
        timelineParameters.play();
      }
    if($('#txtCreate').hasClass('__is-open')) {
      timelineParameters.reverse();
    }
});

});

/*------------------------
------anim hello------
--------------------------*/
var helloAnimation = function() {

  var lettersUp = anime({
    targets: '#letters-part1 path',
    strokeDashoffset: {
      duration: 800,
      easing: 'easeOutQuad'
    },
    transform: ['translate(0 128)', 'translate(0 0)'],
      delay: function(el, i) {
      return 750 + (i * 120)
    },
    duration: 2000
  });

  var line = anime({
    targets: '.hello-line',
    strokeDashoffset:[anime.setDashoffset, 0],
    easing: 'easeInOutCubic',
    duration: 1500,
    delay: lettersUp.duration -1500,
    offset: 0
  });

  var lettersDown = anime({
    targets: '#letters-part2 path',
    strokeDashoffset: {
      duration: 800,
      easing: 'easeOutQuad'
    },
    transform: ['translate(-128 0)', 'translate(0 0)'],
      delay: function(el, i) {
      return 750 + (i * 120)
    },
    duration: 2000
  });

  var circle = anime ({
    targets: '#circle path',
    strokeDashoffset: {
      duration: 800,
      easing: 'easeOutQuad'
    },
    transform: ['translate(0 128)', 'translate(0 0)'],
      delay: function(el, i) {
      return 750 + (i * 120)
    },
    duration: 2000
  });

}

document.addEventListener('DOMContentLoaded', helloAnimation, false);

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
