/*------------------------
------anim whale------
--------------------------*/

var whaleAnim = anime.timeline({
  autoplay: false,
});

  whaleAnim
  .add({
    targets: '#illu-home polygon',
    translateX: function() { return anime.random(150, -30) + '%'; },
     scale: function() { return anime.random(10,5) / 10; },
     rotate: function() { return anime.random(-360,360); },
     duration: function() { return anime.random(1000,2000); },
    easing: 'easeInOutExpo',
    opacity: 0,
  });


/**** start anim whale and textjob open on click btn ****/
var txtJob = document.querySelectorAll('.txt-job span');
document.querySelector('.btn-hello').onclick = function(){
  whaleAnim.restart();
  document.querySelector('.btn-hello').classList.add('__cliked');
  document.querySelector('.presentation').classList.add('__show');
  // document.querySelector('.wrap-whale .txt-job').classList.add('__hide');
    for (var i = 0; i < txtJob.length; i++) {
        txtJob[i].classList.add('__hide');
    }
}

/**** reverse anim whale and textjob close on click btn ****/
document.querySelector('.btn-close').onclick = function(){
    whaleAnim.play();
    whaleAnim.reverse();
    document.querySelector('.presentation').classList.remove('__show');
    document.querySelector('.btn-hello').classList.remove('__cliked');
    // document.querySelector('.wrap-whale .txt-job').classList.remove('__hide');
      for (var i = 0; i < txtJob.length; i++) {
          txtJob[i].classList.remove('__hide');
      }
}

/**** parallax whale ****/
var illuHome = document.getElementById('whale');
var whaleParallax = new Parallax(illuHome);
