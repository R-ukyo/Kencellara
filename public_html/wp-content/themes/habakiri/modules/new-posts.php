<div class="newPostsZone all">
  <div class="newPostsHeader topPageHeader">全記事</div>
  <div class="newPostsContainer">
    <?php
      $args = array(
        'posts_per_page' => 6
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
  </div>
  <div class="goToArchivePage"><a>最新記事をもっと見る</a></div>
</div>
<div class="newPostsZone ramen">
  <div class="newPostsHeader topPageHeader">ラーメン</div>
  <div class="newPostsContainer">
    <?php
      $args = array(
        'posts_per_page' => 2
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
  </div>
  <div class="goToArchivePage"><a>ラーメンページへ</a></div>
</div>
<div class="newPostsZone oniku">
  <div class="newPostsHeader topPageHeader">お肉</div>
  <div class="newPostsContainer">
    <?php
      $args = array(
        'posts_per_page' => 2
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
  </div>
  <div class="goToArchivePage"><a>お肉ページへ</a></div>
</div>
