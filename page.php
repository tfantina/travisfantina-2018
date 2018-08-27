
<?php get_header() ?>

<!-- page layout start -->
<?php if(have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile;
    endif;
    ?>



<!-- page layout ends -->

<?php get_footer() ?>
