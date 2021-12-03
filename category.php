<?php get_header(); ?>
<section>
  <div class="title">
    <h1><?php single_cat_title(); ?></h1>
    <p>Interview</p>
  </div>

  <main class="interview_main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- メインループ開始 -->
        <a href="<?php the_permalink(); ?>">
          <!-- 個別記事へのリンクを出力 -->
          <div class="interview_content">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail([300,300]); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
              <!-- サムネイルの出力 -->

            
            <div class="interview_text">
              <p>
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
                <!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
              </p>
              <div class="article-tags">
                <p class="article-tags__inner">
                  <?php $posttags = get_the_tags();
                  if ($posttags) {
                    foreach ($posttags as $tag) {
                      echo '<span class="tag-span">' . $tag->name . '</span>';
                    }
                  } ?></p>
              </div>
              <!-- リンクの無いタグをspanタグで囲って出力 -->
            </div>
          </div>
        </a>
      <?php endwhile; ?>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
      <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </main>
</section>
<?php get_footer(); ?>