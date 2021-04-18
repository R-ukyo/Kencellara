<?php
  $args = array(
    'posts_per_page' => $args['count'],
    'category_name' => $args['name']
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
  $cat = get_the_category();
  $cat_name_1 = $cat[0]->name;
  $cat_name_2 = $cat[1]->name;
  $cat_name_3 = $cat[2]->name;
?>
<div class="newPostCard">
  <div class="newPostThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <div class="newPostTitle">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="newPostCategory">
    <a><?php echo $cat_name_1; ?></a>
    <a><?php echo $cat_name_2; ?></a>
    <a><?php echo $cat_name_3; ?></a>
  </div>
</div>
<?php
  endforeach;
  wp_reset_postdata(); // 直前のクエリを復元する
?>
