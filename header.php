<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="estraの企業ロゴ" class="logo"></a>
    <nav class="header-nav">
      <ul>
        <li><a href="<?php echo home_url("about"); ?>">About<br><span>私たちについて</span></a></li>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?>">News<br><span>ニュース一覧</span></a></li>
        <li><a href="<?php echo home_url("service"); ?>">Service<br><span>サービスについて</span></a></li>
        <li><a href="<?php echo home_url("recruit"); ?>">Recruit<br><span>採用情報</span></a></li>
        <li><a href="<?php echo home_url("contact"); ?>">Contact<br><span>お問い合わせ</span></a></li>
      </ul>
    </nav>

    <div class="menu" id="menu">
      <span class="menu-line-top"></span>
      <span class="menu-line-middle"></span>
      <span class="menu-line-bottom"></span>
    </div>
    <nav class="drawer-nav" id="drawer-nav">
      <ul class="drawer-nav-list">
        <li class="drawer-nav-item"><a href="<?php echo home_url("about"); ?>">私たちについて</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("greeting"); ?>">代表挨拶</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("philosophy"); ?>">経営理念</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("company"); ?>">会社概要</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("member"); ?>">メンバー</a></li>
        <li class="drawer-nav-item"><a href="<?php echo get_post_type_archive_link('news'); ?>">ニュース一覧</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("service"); ?>">サービスについて</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("recruit"); ?>">採用情報</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("environment"); ?>">働く環境</a></li>
        <li class="drawer-nav-item"><a href="<?php echo get_category_link(3); ?>">インタビュー一覧</a></li>
        <li class="drawer-nav-item"><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
      </ul>
    </nav>

  </header>