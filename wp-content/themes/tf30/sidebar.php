
<!-- secondary -->
<aside id="secondary">




<!--  widget_custom_html-->
<div class="widget widget_text widget_custom_html">
  <div class="widget-title">プロフィール</div>

  <div class="wprofile">
    <div class="wprofile-img"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt=""></div>
    <div class="wprofile-content">
      <p>
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
    </div>
    <!-- /wprofile-content -->
    <nav class="wprofile-sns">
      <div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i
            class="fab fa-twitter"></i></a></div>
      <div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i
            class="fab fa-facebook-f"></i></a></div>
      <div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i
            class="fab fa-instagram"></i></a></div>
    </nav>
  </div><!-- /wprofile -->
</div><!-- /widget -->


<!-- widget -->
<div class="widget widget_search">
  <div class="widget-title">検索</div>
  <!-- search-form -->
  <form method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
    <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
  </form><!-- /search-form -->
</div><!-- /widget -->

<!-- widget_popular -->
<div class="widget widget_popular">
  <div div class="widget-title">人気記事</div>

    <div class="wpost-items m_ranking">

    <?php  
      // get_post_viewsで適宜アクセス数を確認
      // $counter = get_post_views();
      $args = array (
        'post_type' => 'post',
        'posts_per_page' => 5,
        'meta_key' => 'view_counter',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
      );
      $popular_posts = get_posts($args);
      foreach($popular_posts as $post) : setup_postdata($post);
    ?>

    <!-- wpost-item -->
    <a class="wpost-item" href="<?php the_permalink(); ?>">
      <div class="wpost-item-img">
        <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
          }
        ?>
      </div>
      <div class="wpost-item-body">
        <div class="wpost-item-title"><?php the_title(); ?></div>
      </div><!-- /wpost-item-body -->
    </a><!-- /wpost-item -->

    <?php endforeach; wp_reset_postdata(); ?>


    </div><!-- /wpost-items -->
</div><!-- /widget_popular -->
</aside><!-- secondary -->