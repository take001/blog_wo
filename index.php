<?php get_header(); ?>

  <main class="main">
    <div class="contents">

    <div class="wrap">
        <?php
          if (have_posts()):
            while (have_posts()) : the_post();
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

        <?php
            endwhile;
          else:
        ?>

        <p>記事はありません</p>

        <?php
          endif;
        ?>
      </div>


        <div class="page_btns">
          <a href="#" class="prev">前のページへ</a>
          <a href="#" class="next">次のページへ</a>
        </div>

    </div>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>
