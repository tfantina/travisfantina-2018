<!DOCTYPE html>
  <html <?php language_attributes(); ?>
    <head>
      <meta charset="<?php echo get_bloginfo('charset')?>" />
      <meta name="description" content="<?php echo get_bloginfo('description')?>" />
      <link href="<?php echo get_bloginfo('stylesheet_url')?>" rel="stylesheet"/>
      <script src="https://use.fontawesome.com/cf98cc2618.js"></script>

      <?php
      if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
      wp_head() ?>
    </head>
    <body class=<?php body_class(); ?>>

        <header>
            <div class="logo"><img src="/images/header-text.png" style="height: 40px;" /></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controlls="navbarCollapse" aria-expanded="false" aria-label="Open Navigation" />
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>



                    <?php wp_nav_menu(array('theme_location' => 'header-menu',
                                            'menu_class' => 'navbar',
                                            'menu_id' => 'travis',
                                            'container' => 'div',
                                            'items_wrap' => '<li nav-item></li>'));  ?>




                </header>

          <!-- header title -->

          <?php if(is_home() && ! is_front_page()) : ?>
                  <h1>  <?php echo get_bloginfo('name') ?></h1>
            <?php single_post_title() ?>


        <?php endif; ?>
