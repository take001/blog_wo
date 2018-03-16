<?php get_header(); ?>

  <main class="main">
    <div class="contents art_contents">

      <?php
        while (have_posts()) : the_post();
      ?>

        <article class="art">
          <div class="art_info">
            <h2><?php the_title(); ?></h2>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          </div>

          <div class="thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="art_main">
            <?php the_content(); ?>
          </div>

          <div class="cat_tag">
            <div class="art_cat">
              <?php the_category(); ?>
            </div>
            <ul class="art_tag">
              <?php the_tags("<li>","</li><li>","</li>"); ?>
            </ul>
          </div>

        </article>

      <?php
        endwhile;
      ?>

    </div>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>
