 <?php if (post_password_required()) { return; }  ?>

 <?php comment_form();
  if(have_comments()): ?>

  <ul class="comment-list">
    <?php wp_list_comments(array(
                            'style' => 'ul',
                            'reply_text' => 'Leave a Reply',
                            'per_page' => '20',
                            'format' => 'html5',
                            'short_ping' => true,
                            'avatar_size' => 60)); ?>

  </ul>

<?php endif; ?>
<?php paginate_comments_links() ?>
