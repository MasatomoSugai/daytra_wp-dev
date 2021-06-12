<?php get_header(); ?>

<!-- mainvisual -->
<div class="mainvisual">
  <div class="inner">
    <div class="mainvisual-content">
      <div class="mainvisual-title">制作実績</div>
    </div>
  </div>
</div>


  <?php if ( function_exists( 'bcn_display' ) ) : ?>
    <div class="work-breadcrumb">
      <div class="inner">
        <!-- breadcrumb -->
        <div class="breadcrumb">
          <?php bcn_display(); //BreadcrumbNavXTのパンクずを表示するっための記述 ?>
        </div><!-- /breadcrumb -->
      </div>
    </div>
    <?php endif; ?>

  <!-- content -->
  <div class="content-work" id="content">
    <div class="inner">

    <!-- primary -->
    <main id="primary">

      <div class="genre-nav">
        <div class="genre-nav-link"><a class="" href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" >すべて</a></div>
          <?php
            $genre_terms = get_terms('genre', array('hide_empty' => false));

            foreach($genre_terms as $genre_term) :
              if ($genre_term->name == get_queried_object()->name) : ?>
                <div class="genre-nav-link"><a class="is-active" href="<?php echo esc_url(get_term_link($genre_term, 'genre')); ?>"><?php echo esc_html($genre_term->name); ?></a></div>
              <?php else :?>
                <div class="genre-nav-link"><a href="<?php echo esc_url(get_term_link($genre_term, 'genre')); ?>"><?php echo esc_html($genre_term->name); ?></a></div>
              <?php endif; ?>
          <?php endforeach; ?>
      </div>

    <?php if (have_posts()): ?>

        <!-- entries -->
      <div class="entries entries-work">
        <?php
          while(have_posts()):
            the_post();
        ?>

          <!-- entry-item -->
          <a href="<?php the_permalink(); ?>" <?php post_class(array('entry-item', 'entry-item-horizontal')); ?> >
            <!-- entry-item-img -->
            <div class="entry-item-img">
              <?php  
                if (has_post_thumbnail()) {
                  the_post_thumbnail('my_thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
              ?>
            </div>

            <!-- entry-item-body -->
            <div class="entry-item-body">
              <div class="entry-item-meta">
                <div class="entry-item-tag"><?php echo esc_html(get_the_terms(get_the_ID(), 'genre')[0]->name); ?></div>
              </div>
              <h2 class="entry-item-title"><?php the_title(); ?></h2>
              <div class="entry-item-excerpt">ここに抜粋が入ります</div>
              <?php 

              ?>
            </div>
          </a>
        <?php endwhile; ?>


      </div>

      <?php if (paginate_links()): ?>
        <!-- pagination -->
        <div class="pagenation">
          <?php
            echo wp_kses_post(
              paginate_links(
                array(
                  'end_size' => 0,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'prev_text' => '<i class="fas fa-angle-left"></i>',
                  'next_text' => '<i class="fas fa-angle-right"></i>',
                )
              )
                );
          ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    </main>
    </div>
  </div>
<?php get_footer(); ?>
