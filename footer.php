<footer>
  <div class="footer_menu">
    <div>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="estraの企業ロゴ" class="logo"></a>
    </div>
    <div class="footer_list">
      <ul>
        <li><a href="<?php echo home_url("about"); ?>">私たちについて</a></li>
        <li><a href="<?php echo home_url("greeting"); ?>">代表挨拶</a></li>
        <li><a href="<?php echo home_url("philosophy"); ?>">経営理念</a></li>
        <li><a href="<?php echo home_url("company"); ?>">会社概要</a></li>
        <li><a href="<?php echo home_url("member"); ?>">メンバー</a></li>
      </ul>
      <ul>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?>">ニュース一覧</a></li>
      </ul>
      <ul>
        <li><a href="<?php echo home_url("service"); ?>">サービス一覧</a></li>
      </ul>
      <ul>
        <li><a href="<?php echo home_url("recruit"); ?>">採用情報</a></li>
        <li><a href="<?php echo home_url("environment"); ?>">働く環境</a></li>
        <li><a href="<?php echo get_category_link(3); ?>">インタビュー一覧</a></li>
      </ul>
      <ul>
        <li><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
  <div>
    <a class="footer_privacy" href="<?php echo home_url("privacy"); ?>">プライバシーポリシー</a>
  </div>
</footer>
<?php wp_footer(); ?>

<script src="js/main.js"></script>

</body>

</html>