<?php get_header(); ?>
<section>
  <div class="title">
    <h1>ニュース</h1>
  </div>

  <div id="news" class="wrap">
    <div class="news-contain">
      <ul>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- メインループ開始 -->
            <li class="news-list">
              <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <p class="news-category">
                <?php
                $days = 3;
                $today = date_i18n('U');
                $entry_day = get_the_time('U');
                $keika = date('U', ($today - $entry_day)) / 86400;
                if ($days > $keika) :
                  $limit = 3;
                  $num = $wp_query->current_post;
                  if ($limit > $num) :
                    echo 'New';
                  endif;
                endif;
                ?>
                <!-- 3日以内に投稿されている投稿にはNewと表示をする -->
              </p>
              <a href="<?php the_permalink(); ?>" class="news-title">
                <!-- 個別記事ページへのリンクを取得 -->
                <?php the_title(); ?>
                <!-- タイトルを出力 -->
              </a>
            </li>
        <?php endwhile;
        endif; ?>
        <!-- ループの終了 -->
      </ul>
    </div>
  </div>
</main>
<?php get_footer(); ?>