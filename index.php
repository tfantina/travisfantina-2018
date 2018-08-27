<?php get_header() ?>

<!-- page content -->
<?php if(is_active_sidebar('sidebar-1')) : ?>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-9">
<?php endif; ?>

      <?php if (have_posts()) : ?>

        <?php while(have_posts()) : the_post();
            get_template_part('content', get_post_format());
          endwhile; ?>


      <?php the_posts_pagination(array(
        'mid-size' => 3,
        'prev-text' => __('Previous', 'rss-really-simple-style'),
        'next-text' => __('Next', 'rss-really-simple-style'),
      ));
        else :
          get_template_part('content');
        endif; ?>

<?php if(is_active_sidebar('sidebar-1' )) : ?>
    </div>

          <?php get_sidebar() ?>

  </div>
</main>
<?php endif; ?>
    <?php get_footer() ?>
