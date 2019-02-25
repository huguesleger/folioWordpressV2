<?php
/**
 * @package portfoliohl
 */

get_header(); ?>
    <header class="header-page">
      <div class="header-page-img header-error" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/error-404.jpg)">
        <div class="container">
          <div class="hero-page">
            <h1>404</h1>
          </div>
      </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content-error py-5">
            <h2>Oops!</h2>
            <h4>Cette page n'existe pas.</h4>
            <p>Il semble que rien n'a été trouvé ici.</p>
            <span class="arrow-error"> <a class="btn-back-error" onclick="history.go(-1)"><i class="fas fa-long-arrow-alt-right"></i>Retour</a></span>
            <div class="btn-error">
            <a class="btn btn-default btn-default-primary" href="<?php bloginfo('url');?>">Home<i class="fas fa-home"></i></a>
          </div>
        </div>
        </div>
    </div>

  <?php get_footer(); ?>
