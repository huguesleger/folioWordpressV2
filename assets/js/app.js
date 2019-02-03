var ShapeOverlays = (function () {
    var elm = document.querySelector('.wrap-nav');
    function ShapeOverlays(elm) {
        this.elm = elm;
        this.path = elm.querySelectorAll('path');
        this.numPoints = 4;
        this.duration = 600;
        this.delayPointsArray = [];
        this.delayPointsMax = 180;
        this.delayPerPath = 100;
        this.timeStart = Date.now();
        this.isOpened = false;
        this.isAnimating = false;
    }
    ShapeOverlays.prototype.toggle = function () {
        this.isAnimating = true;
        var range = 4 * Math.random() + 6;
        for (var i = 0; i < this.numPoints; i++) {
            var radian = i / (this.numPoints - 1) * Math.PI;
            this.delayPointsArray[i] = (Math.sin(-radian) + Math.sin(-radian * range) + 2) / 4 * this.delayPointsMax;
        }
        if (this.isOpened === false) {
            this.open();
        }
        else {
            this.close();
        }
    };
    ShapeOverlays.prototype.open = function () {
        this.isOpened = true;
        elm.classList.add('__is-open');
        this.timeStart = Date.now();
        this.renderLoop();
    };
    ShapeOverlays.prototype.close = function () {
        this.isOpened = false;
        elm.classList.remove('__is-open');
        this.timeStart = Date.now();
        this.renderLoop();
    };
    ShapeOverlays.prototype.updatePath = function (time) {
        var points = [];
        for (var i = 0; i < this.numPoints + 1; i++) {
            points[i] = ease.cubicInOut(Math.min(Math.max(time - this.delayPointsArray[i], 0) / this.duration, 1)) * 100;
        }
        var str = '';
        str += (this.isOpened) ? "M 0 0 V " + points[0] + " " : "M 0 " + points[0] + " ";
        for (var i = 0; i < this.numPoints - 1; i++) {
            var p = (i + 1) / (this.numPoints - 1) * 100;
            var cp = p - (1 / (this.numPoints - 1) * 100) / 2;
            str += "C " + cp + " " + points[i] + " " + cp + " " + points[i + 1] + " " + p + " " + points[i + 1] + " ";
        }
        str += (this.isOpened) ? "V 0 H 0" : "V 100 H 0";
        return str;
    };
    ShapeOverlays.prototype.render = function () {
        if (this.isOpened) {
            for (var i = 0; i < this.path.length; i++) {
                this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * i)));
            }
        }
        else {
            for (var i = 0; i < this.path.length; i++) {
                this.path[i].setAttribute('d', this.updatePath(Date.now() - (this.timeStart + this.delayPerPath * (this.path.length - i - 1))));
            }
        }
    };
    ShapeOverlays.prototype.renderLoop = function () {
        var _this = this;
        this.render();
        if (Date.now() - this.timeStart < this.duration + this.delayPerPath * (this.path.length - 1) + this.delayPointsMax) {
            requestAnimationFrame(function () {
                _this.renderLoop();
            });
        }
        else {
            this.isAnimating = false;
        }
    };
    return ShapeOverlays;
})();
(function () {
    var elmHamburger = document.querySelector('.nav-btn');
    var gNavItems = document.querySelectorAll('.menu-item');
    var elmOverlay = document.querySelector('.shape-overlays');
    var illuNav = document.querySelector('.illu-nav');
    var overlay = new ShapeOverlays(elmOverlay);
    elmHamburger.addEventListener('click', function () {
        if (overlay.isAnimating) {
            return false;
        }
        overlay.toggle();
        if (overlay.isOpened === true) {
            elmHamburger.classList.add('__is-open');
            for (var i = 0; i < gNavItems.length; i++) {
                gNavItems[i].classList.add('__is-open');
            }
            illuNav.classList.add('__is-open');
            // document.querySelector('.title').classList.add('__title-white');
            // document.querySelector('.logo svg').classList.add('__logo-white');
            document.querySelector('body').classList.add('__overflow');
            document.querySelector('.wrap-nav').classList.add('__is-open');
            document.querySelector('.title-info').classList.add('__is-open');
            document.querySelector('.branding').classList.add('__branding-hide');
            document.getElementById("txtHamb").classList.add('__nav-txt-white');
            document.getElementById("txtHamb").innerHTML = "close";
        }
        else {
            elmHamburger.classList.remove('__is-open');
            for (var i = 0; i < gNavItems.length; i++) {
                gNavItems[i].classList.remove('__is-open');
            }
            illuNav.classList.remove('__is-open');
            // document.querySelector('.title').classList.remove('__title-white');
            // document.querySelector('.logo svg').classList.remove('__logo-white');
            document.querySelector('body').classList.remove('__overflow');
            document.querySelector('.wrap-nav').classList.remove('__is-open');
            document.querySelector('.title-info').classList.remove('__is-open');
            document.querySelector('.branding').classList.remove('__branding-hide');
            document.getElementById("txtHamb").classList.remove('__nav-txt-white');
            document.getElementById("txtHamb").innerHTML = "menu";
        }
    });
}());

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
