<?php get_header(); ?>
<section>
  <div class="title">
    <h1>インタビュー</h1>
    <p>Interview</p>
  </div>

  <div class="interview1">
    <?php if (have_posts()) : the_post(); ?>
      <h2 class="interview1_text_content"> <?php the_title(); ?></h2>
      <div class="interview1-content">
        <p> <?php the_content(); ?></p>
      </div>
    <?php endif; ?>
  </div>
<!-- メインループの終了 -->



</section>
<?php get_footer(); ?>