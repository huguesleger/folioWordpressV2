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
