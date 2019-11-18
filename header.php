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
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/style.css">
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header">
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>