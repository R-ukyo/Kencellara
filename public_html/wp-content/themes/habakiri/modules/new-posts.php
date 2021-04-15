<div class="newPostsZone">
<?php
  $args = array(
    'posts_per_page' => 20
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
?>
  <div class="newPostCard">
    <div class="newPostImg">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="newPostTitle">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
  </div>
<?php
  endforeach;
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</div>
