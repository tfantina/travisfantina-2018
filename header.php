<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php echo get_bloginfo('charset')?>" />
  <meta name="description" content="<?php echo get_bloginfo('description')?>" />
  <link href="<?php echo get_bloginfo('stylesheet_url')?>" rel="stylesheet"/>
  <link href="<?php echo get_bloginfo('stylesheet_directory')?>/project-style.css" rel="stylesheet"/> 
  <!-- bad practice to keep this here since it's only needed for the project page -->
  <script src="https://use.fontawesome.com/cf98cc2618.js"></script>

  <?php
  if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
  wp_head() ?>
</head>
<body class=<?php body_class(); ?>>
<!-- header -->
  <header>
    <div class="logo"><img src="/images/header-text.png" style="height: 40px;" /></div>
  


  <?php wp_nav_menu(array('theme_location' => 'header-menu',
  'menu_class' => 'navbar',
  'menu_id' => 'travis',
  'container' => 'div',
  'items_wrap' => '<li nav-item></li>'));  ?>




</header>

<!-- header title -->
<?php if(has_post_thumbnail()) {
  $hero_image = get_the_post_thumbnail_url();
  $color = "var(--tiffany-blue)";
} else {
  $color = "var(--greyish-brown)";
} ?>


<div class="page-title" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);">

  <h1 style="color: <?php echo $color ?>"><?php echo wp_title($sep = "") ?></h1>
</div>

<!-- header end -->
