<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

  <div class="container clearfix">
    <header class="header clearfix">

      <div class="container1 clearfix">
        <div class="container1__content clearfix">
          <div class="container1__content__logo clearfix">
            <div class="prova">
              <span class="container1__content__logo__text clearfix">
                <span> <h1><a href="<?php echo home_url(); ?>" class="header__logo"><?php bloginfo('name'); ?> </a></h1> </span>
              </span>
              <a href="#" id="container1__content__logo__icon-bar" class="container1__content__logo__icon-bar"><span></span><span></span><span></span></a></span>
            </div>

          </div>
          <div class="container1__content__menu clearfix" id="container1__content__menu">
           <span class="box container1__content__menu__list">
             <span>
               <?php /* Main Navigation */
             wp_nav_menu( array(
               'theme_location' => 'header',
               'depth' => 2,
               'container' => false,
               'menu_class' => 'header__menu'
               )
             );
           ?></span>
           </span>
         </div>
        </div>
      </div>


    </header>

    <?php if(is_front_page()){ ?>
      <div class="filter">
      </div>
      <div class="cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/cover.jpg)">
        <div class="cover__content">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/disco.jpg" alt="">
          <div class="caption__button">
            <h1 class="main-title"><?php bloginfo('description'); ?></h1>
            <input type="button" name="calltoaction" value="Know more">
          </div>

        </div>

      </div>




    <?php }  else if ( is_search() ) { ?>

      <h1 class="main-title"> <?php esc_html_e('Results for:', 'myportfolio'); ?> <strong><i><?php echo $s; ?></i></strong></h1>

    <?php } ?>
