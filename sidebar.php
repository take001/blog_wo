<aside class="sidebar">

    <?php get_search_form(); ?>

    <div class="sidebar_contents">
      <h2><i class="fa fa-folder" aria-hidden="true"></i>カテゴリー</h2>
      <div class="sidebar_contents_main">
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>
      </div>
    </div>

    <div class="sidebar_contents">
      <h2><i class="fa fa-tag" aria-hidden="true"></i>タグ</h2>
      <div class="sidebar_contents_main tag">
        <?php
          $posttags = get_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo '<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>';
            }
          }
        ?>
      </div>
    </div>

    <div class="sidebar_contents">
      <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>プロフィール</h2>
      <div class="sidebar_contents_main prof">
        <img src="https://placehold.jp/350x195.png" alt="">
        <p>広島で活動するフロントエンドエンジニア。CSS Nite in HIROSHIMA実行委員会副委員長。広島フロントエンド勉強会を主催。</p>
      </div>
    </div>

    <div class="nav">
      <ul>
        <li href="#">Facebook</li>
        <li href="#">Twitter</li>
      </ul>
    </div>



</aside>
