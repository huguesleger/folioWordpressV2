/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 ( function( $ ) {

  /**** Site title ****/
  wp.customize( 'blogname', function( value ) {
    value.bind( function( to ) {
    $('.title a').text( to );
    });
  });

  /**** header txt-intro ****/
  wp.customize( 'header_txt_intro', function( value ) {
    value.bind( function( to ) {
      $('.hero .hero-title span').text( to );
    });
  });

  /**** header metier 1 ****/
  wp.customize( 'header_txt_metier_1', function( value ) {
    value.bind( function( to ) {
      $('.hero .hero-title h1').text( to );
    });
  });

  /**** header metier 2 ****/
  wp.customize( 'header_txt_metier_2', function( value ) {
    value.bind( function( to ) {
      $('.hero .hero-title h2').text( to );
    });
  });

  /**** header desc metier 1 ****/
  wp.customize( 'header_desc_metier_1', function( value ) {
    value.bind( function( to ) {
      $('.hero .hero-title .desc-metier-first').text( to );
    });
  });

  /**** header desc metier 1 ****/
  wp.customize( 'header_desc_metier_2', function( value ) {
    value.bind( function( to ) {
      $('.hero .hero-title .desc-metier-last').text( to );
    });
  });

  /**** header img-hero ****/
  wp.customize( 'header_illu', function( value ) {
    value.bind( function( newval ) {
      $('.hero .img-hero img').attr('src', newval );
    });
  });

  /**** header enter ****/
  wp.customize( 'header_enter', function( value ) {
    value.bind( function(newval) {
      if (newval == 'active'){
      $('#enter').show();
      $('#enter').removeClass('delay-3s');
    } else {
      $('#enter').hide();
    }
    });
  });

/**** portfolio grid ****/
wp.customize('portfolio_grid', function(value) {
  value.bind( function(newval) {
    if (newval == '2'){
      $('.works-content .work').addClass('col-md-6');
      $('.works-content .work').removeClass('col-md-4');
      $('.works-content .work').removeClass('col-md-3');
    } else if (newval == '3') {
      $('.works-content .work').addClass('col-md-4');
      $('.works-content .work').removeClass('col-md-6');
      $('.works-content .work').removeClass('col-md-3');
    } else if (newval == '4') {
      $('.works-content .work').removeClass('col-md-6');
      $('.works-content .work').removeClass('col-md-4');
      $('.works-content .work').addClass('col-md-3');
    }
  });
});

/**** portfolio class ****/
wp.customize('portfolio_class', function(value) {
  value.bind( function(newval) {
    if (newval == 'container'){
    $('#style').addClass('container');
    $('#style').removeClass('container-fluid');
  } else {
    $('#style').removeClass('container');
    $('#style').addClass('container-fluid');
  }
  });
});

/**** section design title ****/
wp.customize( 'section_design_title', function( value ) {
  value.bind( function( to ) {
    $('#design .title-section').text( to );
  });
});

/**** section design title block 1 ****/
wp.customize( 'section_design_subtitle_1', function( value ) {
  value.bind( function( to ) {
    $('#titleBlock-1').text( to );
  });
});

/**** section design txt block 1 ****/
wp.customize( 'section_design_txt_1', function( value ) {
  value.bind( function( to ) {
    $('#designDesc-1').text( to );
  });
});

/**** section design title block 2 ****/
wp.customize( 'section_design_subtitle_2', function( value ) {
  value.bind( function( to ) {
    $('#titleBlock-2').text( to );
  });
});

/**** section design txt block 2 ****/
wp.customize( 'section_design_txt_2', function( value ) {
  value.bind( function( to ) {
    $('#designDesc-2').text( to );
  });
});

/**** section design title block 3 ****/
wp.customize( 'section_design_subtitle_3', function( value ) {
  value.bind( function( to ) {
    $('#titleBlock-3').text( to );
  });
});

/**** section design txt block 3 ****/
wp.customize( 'section_design_txt_3', function( value ) {
  value.bind( function( to ) {
    $('#designDesc-3').text( to );
  });
});

/**** section create title ****/
wp.customize( 'section_create_title', function( value ) {
  value.bind( function( to ) {
    $('.section-create .desc-create .title-create h3').text( to );
  });
});

/**** section create desc ****/
wp.customize( 'section_create_description', function( value ) {
  value.bind( function( to ) {
    $('.section-create .desc-create .txt-create p').text( to );
  });
});

/**** section services title ****/
wp.customize( 'section_service_title', function( value ) {
  value.bind( function( to ) {
    $('#service .title-section').text( to );
  });
});

/**** section services desc ****/
wp.customize( 'section_service_desc', function( value ) {
  value.bind( function( to ) {
    $('#service .desc-section p').text( to );
  });
});

/**** style icon ****/
wp.customize( 'section_service_style_icon', function( value ) {
  value.bind( function(newval) {
    if (newval == 'icon-square'){
    $('.section-service .icon-item').addClass('icon-square');
    $('.section-service .icon-item').removeClass('icon-round');
  } else {
    $('.section-service .icon-item').removeClass('icon-square');
    $('.section-service .icon-item').addClass('icon-round');
  }
  });
});

/**** section services icon desc 1 ****/
wp.customize( 'section_service_icon_desc_1', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-1 p').text( to );
  });
});

/**** section services icon desc 2 ****/
wp.customize( 'section_service_icon_desc_2', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-2 p').text( to );
  });
});

/**** section services icon desc 3 ****/
wp.customize( 'section_service_icon_desc_3', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-3 p').text( to );
  });
});

/**** section services icon desc 4 ****/
wp.customize( 'section_service_icon_desc_4', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-4 p').text( to );
  });
});

/**** section services icon desc 5 ****/
wp.customize( 'section_service_icon_desc_5', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-5 p').text( to );
  });
});

/**** section services icon desc 6 ****/
wp.customize( 'section_service_icon_desc_6', function( value ) {
  value.bind( function( to ) {
    $('#iconCaption-6 p').text( to );
  });
});

/**** section webdesign title ****/
wp.customize( 'section_webdesign_title', function( value ) {
  value.bind( function( to ) {
    $('#webdesign .title-section').text( to );
  });
});

/**** section webdesign desc ****/
wp.customize( 'section_webdesign_desc', function( value ) {
  value.bind( function( to ) {
    $('.webdesign-block-txt p').text( to );
  });
});

/**** section webdesign btn ****/
wp.customize( 'section_webdesign_btn_title', function( value ) {
  value.bind( function( to ) {
    $('.webdesign-block-txt a').text( to );
  });
});

/**** section webdesign  parallax img ****/
wp.customize( 'section_webdesign_parallax_img', function( value ) {
  value.bind( function( newval ) {
    $('.parallax-img img').attr('src', newval );
  });
});

/**** section webdesign device title ****/
wp.customize( 'section_webdesign_device_title', function( value ) {
  value.bind( function( to ) {
    $('.device-block-txt h3').text( to );
  });
});

/**** section webdesign device desc ****/
wp.customize( 'section_webdesign_device_desc', function( value ) {
  value.bind( function( to ) {
    $('.device-block-txt desc-section').text( to );
  });
});

/**** section webdesign device btn ****/
wp.customize( 'section_webdesign_device_btn_title', function( value ) {
  value.bind( function( to ) {
    $('.device-block-txt a').text( to );
  });
});

/**** section webdesign  device img ****/
wp.customize( 'section_webdesign_device_img', function( value ) {
  value.bind( function( newval ) {
    $('.device-img img').attr('src', newval );
  });
});

/**** section post title ****/
wp.customize( 'section_post_title', function( value ) {
  value.bind( function( to ) {
    $('#post .title-section').text( to );
  });
});

/**** section post desc ****/
wp.customize( 'section_post_description', function( value ) {
  value.bind( function( to ) {
    $('#post .desc-section p').text( to );
  });
});

/**** page about cursus title ****/
wp.customize( 'cursus_title', function( value ) {
  value.bind( function( to ) {
    $('.title-cursus h2').text( to );
  });
});

/**** page about cursus year 1 ****/
wp.customize( 'cursus_formation_year1', function( value ) {
  value.bind( function( to ) {
    $('#formation-1 .year').text( to );
  });
});

/**** page about cursus formation title 1 ****/
wp.customize( 'cursus_formation_title1', function( value ) {
  var school = $('#formation-1 .formation-title .formation-school').text();
  value.bind( function( to ) {
    $('#formation-1 .formation-title').text( to );
    $('#formation-1 .formation-title').append( '<span class="formation-school pl-md-2">' + school +'</span>' );
  });
});

/**** page about cursus formation school 1 ****/
wp.customize( 'cursus_formation_school1', function( value ) {
  value.bind( function( to ) {
    $('#formation-1 .formation-title .formation-school').text( to );
  });
});

/**** page about cursus formation desc 1 ****/
wp.customize( 'cursus_formation_description1', function( value ) {
  value.bind( function( to ) {
    $('#description-1 p').text( to );
  });
});

/**** page about cursus year 2 ****/
wp.customize( 'cursus_formation_year2', function( value ) {
  value.bind( function( to ) {
    $('#formation-2 .year').text( to );
  });
});

/**** page about cursus formation title 2 ****/
wp.customize( 'cursus_formation_title2', function( value ) {
  var school = $('#formation-2 .formation-title .formation-school').text();
  value.bind( function( to ) {
    $('#formation-2 .formation-title').text( to );
    $('#formation-2 .formation-title').append( '<span class="formation-school pl-md-2">' + school +'</span>' );
  });
});

/**** page about cursus formation school 2 ****/
wp.customize( 'cursus_formation_school2', function( value ) {
  value.bind( function( to ) {
    $('#formation-2 .formation-title .formation-school').text( to );
  });
});

/**** page about cursus formation desc 2 ****/
wp.customize( 'cursus_formation_description2', function( value ) {
  value.bind( function( to ) {
    $('#description-2 p').text( to );
  });
});

/**** page about cursus year 3 ****/
wp.customize( 'cursus_formation_year3', function( value ) {
  value.bind( function( to ) {
    $('#formation-3 .year').text( to );
  });
});

/**** page about cursus formation title 3 ****/
wp.customize( 'cursus_formation_title3', function( value ) {
  var school = $('#formation-3 .formation-title .formation-school').text();
  value.bind( function( to ) {
    $('#formation-3 .formation-title').text( to );
    $('#formation-3 .formation-title').append( '<span class="formation-school pl-md-2">' + school +'</span>' );
  });
});

/**** page about cursus formation school 3 ****/
wp.customize( 'cursus_formation_school3', function( value ) {
  value.bind( function( to ) {
    $('#formation-3 .formation-title .formation-school').text( to );
  });
});

/**** page about cursus formation desc 3 ****/
wp.customize( 'cursus_formation_description3', function( value ) {
  value.bind( function( to ) {
    $('#description-3 p').text( to );
  });
});

/**** page about number 1 ****/
wp.customize( 'number_number1', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-1 .counter').text( to );
  });
});

/**** page about number type 1 ****/
wp.customize( 'number_type1', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-1 .number-type p').text( to );
  });
});

/**** page about number desc 1 ****/
wp.customize( 'number_desc1', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-1 .number-desc').text( to );
  });
});

/**** page about number 2 ****/
wp.customize( 'number_number2', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-2 .counter').text( to );
  });
});

/**** page about number type 2 ****/
wp.customize( 'number_type2', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-2 .number-type p').text( to );
  });
});

/**** page about number desc 2 ****/
wp.customize( 'number_desc2', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-2 .number-desc').text( to );
  });
});

/**** page about number 3 ****/
wp.customize( 'number_number3', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-3 .counter').text( to );
  });
});

/**** page about number type 3 ****/
wp.customize( 'number_type3', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-3 .number-type p').text( to );
  });
});

/**** page about number desc 3 ****/
wp.customize( 'number_desc3', function( value ) {
  value.bind( function( to ) {
    $('#contentNumber-3 .number-desc').text( to );
  });
});

/*--------------------------------------------
    color theme
---------------------------------------------*/

/**** logo ****/
wp.customize( 'color_theme_logo', function( value ) {
  value.bind( function( to ) {
  $( '.main #logo' ).css('fill', to );
  });
  });
/*--------------------------------------------
    color primary
---------------------------------------------*/
wp.customize( 'color_theme_primary', function( value ) {
  value.bind( function( to ) {
  $( '.hero .hello .hello-line' ).css('stroke', to );
  $( '.hero .hello .hello-circle' ).css('fill', to );
  $( '.title-section' ).css('border-color', to );
  $( '.section-design .row .design-left .design-block .design-icon' ).css('background', to );
  $( '.section-create .desc-create .btn-create' ).css('fill', to );
  $( '.section-service .detail-service .title-collapse .btn-link' ).css('color', to );
  $( '.section-post .content-txt .wrap-icon-post .icon-post .cat-post' ).css('border-color', to );
  $( '.footer .gotop' ).css('background', to );
  $( '.effect-content span' ).css('background', to );
  $( '.section-cursus .title-cursus h2' ).css('border-color', to );
  $( '.section-cursus .content-cursus .formation .formation-school' ).css('color', to );
  $( '.section-outils .title-outil h2' ).css('border-color', to );
  $( '.header-page .header-page-img .hero-page h1' ).css('border-color', to );
  $( '.title-form' ).css('border-color', to );
  $( '.wrap-nav .menu .menu-item.current-menu-item' ).css('color', to );
  $('.menu-item .__color-nav').mouseenter( function(){
    $( this ).css('color', to );
    $('#illu-nav .__color-nav').css('stroke', to);
    $('#illu-nav .__color-nav.__tcolor').css('fill', to);
  });
  $('.menu-item .__color-nav').mouseleave( function(){
    $( this ).css('color', '#fff' );
    $('#illu-nav .black').css('stroke', '#fff');
    $('#illu-nav .black').css('fill', 'transparent');
  });
  //btn
  $( '.btn-default-primary' ).css('background', to );
  $( '.btn-default-primary' ).css('border-color', to );
  $('.btn-default-primary').mouseenter( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $('.btn-default-primary').mouseleave( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  $( '.btn-outline-primary' ).css('color', to );
  $( '.btn-outline-primary' ).css('border-color', to );
  $('.btn-outline-primary').mouseenter( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  $('.btn-outline-primary').mouseleave( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $( '.nav-previous .title-meta' ).css('color', to );
  $( '.nav-previous .title-meta' ).css('border-color', to );
  $('.nav-previous .title-meta').mouseenter( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  $('.nav-previous .title-meta').mouseleave( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $( '.nav-next .title-meta' ).css('background', to );
  $( '.nav-next .title-meta' ).css('border-color', to );
  $('.nav-next .title-meta').mouseenter( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $('.nav-next .title-meta').mouseleave( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  $( '.btn-submit .btn-primary' ).css('background', to );
  $( '.btn-submit .btn-primary' ).css('border-color', to );
  $('.btn-submit .btn-primary').mouseenter( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $('.btn-submit .btn-primary').mouseleave( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  });
});

/*--------------------------------------------
    color secondary
---------------------------------------------*/
wp.customize( 'color_theme_secondary', function( value ) {
  value.bind( function( to ) {
  $( '.hero .hero-title h2' ).css('color', to );
  $( '.footer .wrap-copy' ).css('background', to );
  $( '.section-service .icon-item' ).css('color', to );
  $( '.section-service .icon-item' ).css('border-color', to );
  $('.section-service .icon-item').mouseenter( function(){
    $( this ).css('color', '#fff' );
    $( this ).css('background', to );
  });
  $('.section-service .icon-item').mouseleave( function(){
    $( this ).css('color', to );
    $( this ).css('background', 'transparent' );
  });
  $( '.contact .content-infos .social-list' ).css('border-color', to );
  $( '.contact .content-infos .social-list' ).css('background', to );
  $('.contact .content-infos .social-list').mouseenter( function(){
    $( this ).css('color', to );
    $( this ).css('border-color', to );
    $( this ).css('background', 'transparent' );
  });
  $('.contact .content-infos .social-list').mouseleave( function(){
    $( this ).css('color', to );
    $( this ).css('border-color', to );
    $( this ).css('background', to );
  });
  });
  });

  /*--------------------------------------------
      color bg-nav
  ---------------------------------------------*/
  wp.customize( 'color_nav_bg', function( value ) {
    value.bind( function( to ) {
    $( '.shape-overlays' ).css('fill', to );
    });
    });
} )( jQuery );
