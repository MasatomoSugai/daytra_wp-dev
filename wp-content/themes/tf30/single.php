<?php get_header(); ?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

      <?php if ( function_exists( 'bcn_display' ) ) : ?>
				<!-- breadcrumb -->
				<div class="breadcrumb">
          <?php bcn_display(); //BreadcrumbNavXTのパンクずを表示するっための記述 ?>
				</div><!-- /breadcrumb -->
        <?php endif; ?>


				<!-- entry -->
				<article class="entry">

					<!-- entry-header -->
					<div class="entry-header">
            <!-- POSTの所属するカテゴリーを表示 -->
            <div class="entry-label"><?php my_the_post_category(true); ?></div>

            <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

						<!-- entry-meta -->
						<div class="entry-meta">
							<time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
              <?php if(get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')): ?>
                <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
              <?php endif; ?>
						</div><!-- /entry-meta -->

						<!-- entry-img -->
						<div class="entry-img">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } ?>
						</div><!-- /entry-img -->
					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
            <?php the_content(); ?> <!-- 本文の表示 -->

            <?php
              //改ページを有効にするための記述
              wp_link_pages(
                array(
                  'before' => '<nav class="entry-links">',
                  'after' => '</nav>',
                  'link_before' => '',
                  'link_after' => '',
                  'next_or_number' => 'number',
                  'separator' => '',
                )
              );
            ?>
					</div><!-- /entry-body -->


          <?php $post_tags = get_the_tags(); ?>
            <div class="entry-tag-items">
              <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
                <?php if ( $post_tags ) : ?>
                  <?php foreach ($post_tags as $tag) : ?>
                    <div class="entry-tag-item"><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a></div><!-- /entry-tag-item -->
                  <?php endforeach; ?>
                <?php endif; ?>
            </div><!-- /entry-tag-items -->
            <!-- 関連記事 -->
        <?php get_template_part('template-parts/related-items'); ?>

				</article> <!-- /entry -->
			</main><!-- /primary -->

      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

  <?php get_footer(); ?>
  