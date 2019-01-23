<?php
/**
 * Illu hello
 *
 * @package portfoliohl
 */
 ?>

 <?php
 $header_txt_intro = get_theme_mod('header_txt_intro');
 $header_txt_metier_1 = get_theme_mod('header_txt_metier_1');
 $header_txt_metier_2 = get_theme_mod('header_txt_metier_2');
 $header_txt_metier_3 = get_theme_mod('header_txt_metier_3');
  ?>

  <svg id="hello-part1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
    <g id="letters-part1">
      <path class="hello-part1 letter-h" stroke="none" d="M5.64,4.38h12V19H29V4.38H41V41H29V26.64H17.63V41h-12Z"/>
      <path class="hello-part1 _E letter-e" stroke="none" d="M47.94,4.38H73.67v8.1H60.88v6.66H72.55v6.71H60.88v7.08H73.67V41H47.94Z"/>
      <path class="hello-part1 _L letter-l" stroke="none" d="M79.64,4.38H91.14V32.93h12.73V41H79.64Z"/>
    </g>
    <path class="hello-line" d="M1.25,41.52l0-40.27H41.56"/>
  </svg>
  <div class="txt-job-responsive">
    <div class="txt-job-content">
      <h1 class="txt-job animated fadeInUp">
        <span><?php echo esc_html($header_txt_intro);?></span>
        <span><?php echo esc_html($header_txt_metier_1);?></span>
        <span><?php echo esc_html($header_txt_metier_2);?></span>
        <span class="txt-and-responsive">&</span>
        <span><?php echo esc_html($header_txt_metier_3);?></span>
      </h1>
  </div>
  </div>
  <svg id="hello-part2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
    <g id="letters-part2">
      <path class="hello-part2" d="M.5,1.29H11.91V29.6H24.53v8H.5Z"/>
      <path class="hello-part2" d="M43.19,35.64a17,17,0,0,1-6.71-6.58,19,19,0,0,1-2.4-9.58,19.23,19.23,0,0,1,2.4-9.66,16.81,16.81,0,0,1,6.71-6.58A20.34,20.34,0,0,1,53.08.89,20.34,20.34,0,0,1,63,3.24,16.87,16.87,0,0,1,69.68,9.8a19.19,19.19,0,0,1,2.4,9.68,19,19,0,0,1-2.4,9.58,17,17,0,0,1-6.74,6.58A20.2,20.2,0,0,1,53.08,38,20.16,20.16,0,0,1,43.19,35.64Zm15.23-9.55a10.12,10.12,0,0,0,2.09-6.66,11.87,11.87,0,0,0-1-4.88,8,8,0,0,0-2.66-3.36A6.51,6.51,0,0,0,53,10a6.44,6.44,0,0,0-3.82,1.21,7.84,7.84,0,0,0-2.63,3.36,12.15,12.15,0,0,0-.93,4.88,10.2,10.2,0,0,0,2.07,6.66,6.94,6.94,0,0,0,10.71,0Z"/>
    </g>
    <g id="circle">
    <path class="hello-circle" d="M91.24,26.24a5.89,5.89,0,1,0,5.89,5.89A5.89,5.89,0,0,0,91.24,26.24Zm2.45,6.07H91.53v2.16h-.31V32.31H89.06V32h2.16V29.84h.31V32h2.16Z"/>
    <path class="hello-rect" fill="none" stroke-linejoin="round" stroke-width="11.7" d="M91.28 1.29v23.6"/>
    </g>
  </svg>
