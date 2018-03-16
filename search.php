<?php get_header(); ?>

<main class="main">
  <div class="contents art_contents">

      <?php
          global $wp_query;
          $total_results = $wp_query->found_posts;
          $search_query = get_search_query();
      ?>

          <h1><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>

      <?php
          if( $total_results >0 ):
          if(have_posts()):
          while(have_posts()): the_post();
      ?>

      <article class="article">
          <a href="<?php the_permalink(); ?>">
              <div class="article_img">
                  <?php the_post_thumbnail(); ?>
              </div>
              <div class="article_title">
                  <h2><?php the_title(); ?></h2>
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
          </a>
      </article>

      


      <?php endwhile; endif; else: ?>


          <?php echo $search_query; ?> に一致する情報は見つかりませんでした。


      <?php endif; ?>

  </div>

  <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
