<?php get_header(); ?>
<section>
  <div class="top">
    <div class="top-eyecatch"></div>
    <!-- <img src="top_coachtech.png" alt="top画像" style="width: 100%;"> -->
  </div>

  <div class="tech_coach">
    <img src="<?php echo get_template_directory_uri(); ?>/img/tech_coach 26.png" alt="テクノロジーとコーチング">
    <p>
      株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。<br>
      独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。
    </p>
  </div>

  <div id="news" class="wrap">
    <h2 class="section-title top_content2">NEWS</h2>
    <div class="news-contain">
      <ul>
        <?php
        $posts = new WP_Query(
          array(
            'post_type' => 'news',
            'posts_per_page' => 3
          )
        );
        if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
        ?>
            <!-- ニュースというカスタム投稿タイプのサブループ開始 -->
            <li class="news-list">
              <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <!-- 投稿日付の出力 -->
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
                <?php the_title(); ?>
                <!-- タイトルの出力 -->
              </a>
            </li>
        <?php endwhile;
        endif;
        wp_reset_query(); ?>
        <!-- サブループ終了 -->
      </ul>

    </div>
  </div>


  <div class="service">
    <h2 class="top_content2">Service</h2>
    <div class="service_2">
      <a href="<?php echo home_url("service"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/coachtech-img1_2.png" alt="フリーランス特化型プログラミングスクールcoachtech"></a>
      <a href="<?php echo home_url("service"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/group_33.png" alt="教育機関向け業務効率支援ツールstagee"></a>
    </div>
  </div>




  <div class="reqruit">
    <div>
      <h2 class="top_content2">Recruit</h2>
      <div>
        <a href="<?php echo home_url("recruit"); ?>">
          <!-- <img src="\estrawp\wp-content\themes\estra-thems\img\recruit_img.png" alt="リクルート"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/img/recruit_img.png" alt="">
        </a>
        <p>全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみんなで作り上げる</p>
      </div>
    </div>
  </div>

</section>
<?php get_footer(); ?>