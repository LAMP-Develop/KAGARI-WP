<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">

<!-- ロゴ -->
<a class="navbar-brand" href="<?php echo $home; ?>">
<svg width="105" height="24" viewBox="0 0 105 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M20.8 12.4C17.6 16.8 13.7 20.7 9.20001 23.8C8.30001 24.4 7.80001 23.6 8.30001 22.9C11.7 18.6 15.6 14.8 19.9 11.5C20.7 11 21.3 11.7 20.8 12.4ZM16.6 8.1C17.2 7.3 16.6 6.5 15.7 7.2C15.1 7.6 6.30001 15.4 4.70001 17.1C3.10001 15.7 1.40001 14.3 1.00001 14C0.700012 13.8 0.300012 13.8 0.100012 14.1C-0.0999878 14.3 -0.0999878 14.7 0.100012 14.9C1.30001 16.6 2.50001 18.1 3.90001 19.6C4.20001 20.1 4.90001 20.2 5.40001 19.8L5.50001 19.7C9.70001 16.2 13.4 12.3 16.6 8.1ZM4.80001 11.1C7.50001 9.1 10 6.9 12.4 4.5C12.8 4.1 12.8 3.4 12.4 3C12.4 3 12.4 3 12.3 3C12 2.8 9.40001 0.500003 9.10001 0.300003C8.60001 -0.299997 7.90001 0.300003 8.30001 1C8.70001 1.7 9.40001 2.9 9.90001 3.6C9.50001 3.9 4.50001 9.5 4.00001 10.2C3.40001 10.9 4.00001 11.7 4.80001 11.1Z" fill="#FF6200"/>
<path d="M27.3 5.60001H30.2V11.4L35.5 5.60001H39L33.7 11.2L39.2 18.8H35.8L31.8 13.2L30.3 14.8V18.8H27.4V5.60001H27.3ZM45.9 5.50001H48.5L54.1 18.8H51.1L49.9 15.8H44.4L43.2 18.8H40.3L45.9 5.50001ZM48.9 13.2L47.2 8.90001L45.5 13.2H48.9ZM55.6 12.2C55.5 8.40001 58.5 5.40001 62.2 5.30001C62.3 5.30001 62.3 5.30001 62.4 5.30001C64.3 5.20001 66.1 5.90001 67.5 7.10001L65.7 9.30001C64.8 8.40001 63.6 8.00001 62.3 8.00001C60.1 8.10001 58.5 9.90001 58.6 12.1C58.5 14.3 60.1 16.1 62.3 16.3C62.4 16.3 62.5 16.3 62.6 16.3C63.6 16.3 64.5 16.1 65.3 15.5V13.6H62.4V11.1H68V16.8C66.5 18.2 64.5 18.9 62.4 18.9C58.8 19.1 55.7 16.3 55.6 12.7C55.6 12.5 55.6 12.4 55.6 12.2ZM76.2 5.50001H78.8L84.4 18.8H81.4L80.2 15.8H74.7L73.5 18.8H70.6L76.2 5.50001ZM79.2 13.2L77.5 8.90001L75.8 13.2H79.2ZM87.3 5.60001H93.2C94.6 5.50001 96 5.90001 97 6.90001C97.8 7.70001 98.2 8.80001 98.1 9.90001C98.2 11.7 97.1 13.4 95.3 14L98.5 18.7H95.2L92.4 14.5H90.2V18.7H87.3V5.60001ZM93.1 12C94.5 12 95.3 11.2 95.3 10.1C95.3 8.90001 94.4 8.20001 93.1 8.20001H90.3V12H93.1ZM101.8 5.60001H104.7V18.8H101.8V5.60001Z" fill="#233241"/></g>
<defs><clipPath id="clip0"><rect width="105" height="24" fill="white"/></clipPath></defs>
</svg>
</a>

<!-- ハンバーガー -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KAGARIについて</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link text-dark" href="#">料金プラン</a>
</li>
<li class="nav-item">
<a class="nav-link text-dark" href="#">導入事例</a>
</li>
<li class="nav-item">
<a class="nav-link text-dark" href="#">お役立ち資料</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ヘルプ</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link text-primary" href="#" target="_blank">ログイン</a>
</li>
<li class="nav-item">
<a class="btn btn-primary" href="#" target="_blank"><i class="fab fa-google mr-2"></i>無料で利用する</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
