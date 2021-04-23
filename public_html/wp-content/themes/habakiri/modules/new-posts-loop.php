<?php
  $args = array(
    'posts_per_page' => $args['count'],
    'category_name' => $args['name']
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ):
  setup_postdata( $post );
  $cats = get_the_category();
  // $cat_name_1 = $cats[0]->name;
  // $cat_name_2 = $cats[1]->name;
  // $cat_name_3 = $cats[2]->name;
?>
<div class="newPostCard">
  <div class="newPostThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <div class="newPostTitle">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="newPostCategory">
    <?php foreach ($cats as $cat) { ?>
      <a><?php echo $cat->name; ?></a>
    <?php } ?>
  </div>
</div>
<?php
  endforeach;
  wp_reset_postdata(); // 直前のクエリを復元する
?>
