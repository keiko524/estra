<?php get_header(); ?>
<section>
  <div class="title">
    <h1>ニュース</h1>
  </div>

  <?php if (have_posts()) : the_post(); ?>
    <!-- メインループ開始 -->
    <div class="news_content">
      <h2>
        <?php the_title(); ?>
        <!-- タイトルの出力 -->
      </h2>
      <div>
     
          <?php the_post_thumbnail(); ?>
       

        <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>
        <!-- 投稿日時を出力 -->
        <p><?php the_content(); ?>
          <!-- 本文を出力 -->
        </p>
      </div>
    </div>
  <?php endif; ?>
  <!-- メインループ終了 -->
</section>
<?php get_footer(); ?>