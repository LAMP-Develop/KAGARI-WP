<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
<!-- ヘッダー -->
<header id="header" class="sticky-top shadow-sm">
<?php
if(is_home() || is_front_page()):
$args = [
    'posts_per_page' => 1,
    'post_type' => 'campaign',
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_key' => 'campaign_flag',
    'meta_value' => true
];
$posts = get_posts($args);
if ($posts):
foreach ($posts as $post): setup_postdata($post);
$id = get_the_ID();
$t = get_field('campaign_ttl', $id);
$p = get_field('campaign_url', $id);
?>
<div class="alert alert-light alert-dismissible fade show bg-dark2 border-0 m-0 rounded-0 py-1">
<div class="container text-center">
<p class="text-white m-0"><?php echo $t; ?><a class="ml-2 text-white" href="<?php echo $p; ?>" target="_blank"><small>詳しく見る<i class="fas fa-chevron-right ml-1"></i></small></a></p>
</div>
</div>
<?php endforeach; wp_reset_postdata(); endif; endif; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">
<!-- ロゴ -->
<a class="navbar-brand d-flex" href="<?php echo $home; ?>">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_kagari.svg" alt="KAGARI">
</a>
<button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 15H32" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10 27H32" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
</button>
<div class="collapse navbar-collapse py-md-0 py-4" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">サービス</a>
<div class="dropdown-menu service-menu mt-0" aria-labelledby="navbarDropdown-1">
<a class="dropdown-item" href="http://lamp-inc.sakura.ne.jp/kagari_re/report/" target="_blank">
<div class="row no-gutters">
<div class="col-md-6 service-logo">
<img src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<p class="col-md-6 text-body mt-1 mt-md-0 mb-0">レポート作成ツール</p>
</div>
</a>
<a class="dropdown-item" href="http://lamp-inc.sakura.ne.jp/kagari_re/seo/" target="_blank">
<div class="row no-gutters">
<div class="col-md-6 service-logo">
<img src="<?php echo $wp_url; ?>/lib/images/logo_seo.svg" alt="KAGARI SEO">
</div>
<p class="col-md-6 text-body mt-1 mt-md-0 mb-0">SEO解析ツール</p>
</div>
</a>
<a class="dropdown-item" href="https://consulting.kagari.ai" target="_blank">
<div class="row no-gutters">
<div class="col-md-6 service-logo">
<img src="<?php echo $wp_url; ?>/lib/images/logo_consulting.svg" alt="KAGARI Consulting">
</div>
<p class="col-md-6 text-body mt-1 mt-md-0 mb-0">WEBコンサルティング</p>
</div>
</a>
<a class="dropdown-item" href="https://marketing.lamp.jp" target="_blank">
<div class="row no-gutters">
<div class="col-md-6 service-logo">
<img src="<?php echo $wp_url; ?>/lib/images/logo_marketing.svg" alt="KAGARI Markting">
</div>
<p class="col-md-6 text-body mt-1 mt-md-0 mb-0">コンテンツマーケティング支援</p>
</div>
</a>
</div>
</li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/seminar/">セミナー</a></li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/works/">導入事例</a></li>
<!-- <li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/news/">お知らせ</a></li> -->
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ヘルプ</a>
<div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown-2">
<a class="dropdown-item" href="<?php echo $home; ?>/faq/">よくあるご質問</a>
<a class="dropdown-item" href="<?php echo $home; ?>/contact/">お問い合わせ</a>
</div>
</li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/document-request/">資料請求</a></li>
</ul>
<ul class="navbar-nav align-items-center ml-auto mt-md-0 mt-3">
<li class="nav-item mr-md-2"><a class="nav-link text-dark" href="https://reporting.kagari.ai" target="_blank">ログイン</a></li>
<!-- <li class="nav-item mr-md-3"><a class="nav-link text-primary" href="https://reporting.kagari.ai" target="_blank">新規会員登録</a></li> -->
<li class="nav-item mt-3 mt-lg-0">
<a class="btn btn-primary btn-sm" href="https://reporting.kagari.ai" target="_blank">新規会員登録</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
<!-- メインコンテンツ -->
<main>
