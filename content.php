<!-- post start -->

 <div id="post-<?php the_ID(); ?>" <?php post_class();?> />
<div class="post">

  <h2><?php if(is_single()) : the_title();
        else : the_title(sprintf('<a href="%s" class="blog-post-title">', esc_url(get_permalink())), '</a>');
      endif; ?></h2>



  <?php the_content(); ?>
  <?php wp_link_pages(); ?>

  <?php if(is_home() || is_single() && !is_front_page()) : ?>
    <strong><?php the_date(); ?></strong>
    <?php comments_number('no replies', 'one reply', '% replies');
     ?>
   <?php endif; ?>




<?php if(is_single()) : the_tags( 'Tags: ',', '  ); ?>

        <h3><?php comments_number('be the first to reply',
                                  'one reply', '% replies') ?> </h3>

        <?php if(comments_open() || get_comments_number()) :
          comments_template();
        endif; ?>

<?php endif; ?>
</div>
</div>
  <!-- post end -->
