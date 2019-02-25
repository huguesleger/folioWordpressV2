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
