<?php get_header(); ?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span>
					<i class="fas fa-angle-right"></i>
					<span class="current-item">カテゴリー名</span>
				</div><!-- /breadcrumb -->


				<div class="archive-head m_description">
					<div class="archive-lead">ARCHIVE</div>
					<h1 class="archive-title m_category">カテゴリー名</h1><!-- /archive-title -->
					<div class="archive-description">
						<p>
							カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明
						</p>
					</div><!-- /archive-description -->
				</div><!-- /archive-head -->

      <?php if (have_posts()): ?>
				<!-- entries -->
				<div class="entries m_horizontal">
          <?php while (have_posts()) : the_post(); ?>
					<!-- entry-item -->
					<a href="<?php the_permalink(); ?>" class="entry-item">
						<!-- entry-item-img -->
						<div class="entry-item-img">
              <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png"  alt="">'; 
                  }
                ?>
						</div><!-- /entry-item-img -->

						<!-- entry-item-body -->
						<div class="entry-item-body">
							<div class="entry-item-meta">
                <?php
                  $category = get_the_category();
                  if ($category[0]) {
                    echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
                  }
                ?>
								<time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j') ?></time><!-- /entry-item-published -->
							</div><!-- /entry-item-meta -->
							<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
							<div class="entry-item-excerpt">
								<?php the_excerpt(); ?>
							</div><!-- /entry-item-excerpt -->
						</div><!-- /entry-item-body -->
					</a><!-- /entry-item -->
          <?php endwhile; ?>
        </div><!-- /entries -->
      <?php endif; ?>



        <?php if (paginate_links()): ?>
          <!-- pagenation -->
          <div class="pagenation">
            <?php
              echo paginate_links(
                array (
                  'end_size' => 0,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'prev_text' => '<i class="fas fa-angle-left"></i>',
                  'next_text' => '<i class="fas fa-angle-right"></i>',
                )
              );
            ?>
          </div><!-- /pagenation -->
        <?php endif; ?>
			</main><!-- /primary -->

      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

	<!-- footer-menu -->
	<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="/">TF-30</a></div><!-- /footer-logo -->
			<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

			<nav class="footer-nav">
          <?php
            wp_nav_menu(
              array(
                'depth' => 1,
                'theme_location' => 'footer',
                'container' => 'false',
                'menu_class' => 'footer-list',
              )
            );
          ?>
			</nav>
		</div><!-- /inner -->
	</div><!-- /footer-menu -->

	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=https://example.com/category/a/&text=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/category/a/&title=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/category/a/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->

  <?php get_footer(); ?>

