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
<a class="navbar-brand d-flex" href="<?php echo $home; ?>">
<svg width="162" height="24" viewBox="0 0 162 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.79 12.41C17.5778 16.8312 13.6426 20.6785 9.14998 23.79C8.24998 24.4 7.72999 23.56 8.26999 22.88C11.6707 18.6256 15.5798 14.8038 19.91 11.5C20.66 11 21.26 11.74 20.79 12.41ZM16.59 8.06001C17.15 7.28001 16.64 6.49001 15.71 7.15001C15.15 7.54001 6.34998 15.37 4.70998 17.07C3.10998 15.69 1.41998 14.25 1.01998 13.93C0.891169 13.8204 0.724188 13.7662 0.555541 13.7793C0.386894 13.7924 0.230298 13.8718 0.119984 14C0.0257874 14.1159 -0.0256348 14.2607 -0.0256348 14.41C-0.0256348 14.5593 0.0257874 14.7041 0.119984 14.82C1.30342 16.4806 2.59982 18.0576 3.99998 19.54C4.16752 19.7644 4.41634 19.9141 4.69303 19.9571C4.96973 20.0001 5.25226 19.933 5.47998 19.77L5.61998 19.65C9.72396 16.236 13.4066 12.3453 16.59 8.06001ZM4.84998 11.06C7.54879 9.05877 10.0805 6.84147 12.42 4.43001C12.6239 4.22566 12.7385 3.94873 12.7385 3.66001C12.7385 3.37129 12.6239 3.09436 12.42 2.89001L12.36 2.84001C12.09 2.65001 9.46999 0.35001 9.17999 0.14001C8.57998 -0.27999 7.86999 0.31001 8.26999 1.03001C8.66998 1.75001 9.38999 2.89001 9.82998 3.58001C9.45998 3.91001 4.51998 9.50001 3.99998 10.19C3.47998 10.88 3.99998 11.71 4.87998 11.1L4.84998 11.06Z" fill="#FF6200"/><path d="M27.28 5.54999H30.15V11.31L35.42 5.54999H38.88L33.58 11.14L39.12 18.72H35.68L31.68 13.12L30.14 14.7V18.7H27.28V5.54999ZM45.87 5.45999H48.51L54.08 18.72H51.08L49.9 15.77H44.4L43.21 18.72H40.29L45.87 5.45999ZM48.87 13.21L47.15 8.93999L45.42 13.21H48.87ZM55.6 12.21C55.5881 11.3275 55.7502 10.4513 56.077 9.63141C56.4037 8.81155 56.8888 8.06408 57.5045 7.43169C58.1201 6.79931 58.8543 6.2944 59.6652 5.9458C60.476 5.59719 61.3475 5.41173 62.23 5.39999H62.42C63.3505 5.35043 64.2817 5.48478 65.1602 5.79536C66.0387 6.10593 66.8474 6.58664 67.54 7.20999L65.74 9.40999C64.8409 8.51024 63.622 8.00326 62.35 7.99999C61.3119 8.05184 60.3362 8.51185 59.6357 9.27981C58.9352 10.0478 58.5665 11.0614 58.61 12.1C58.5442 13.1379 58.8925 14.1596 59.5785 14.9412C60.2645 15.7228 61.2324 16.2006 62.27 16.27H62.55C63.5109 16.2985 64.4561 16.0219 65.25 15.48V13.63H62.37V11.13H68V16.85C66.467 18.207 64.4874 18.9512 62.44 18.94C61.5805 18.9803 60.7214 18.8509 59.9118 18.5591C59.1023 18.2673 58.3582 17.8188 57.7221 17.2393C57.086 16.6598 56.5702 15.9607 56.2044 15.1818C55.8386 14.4029 55.6298 13.5596 55.59 12.7C55.58 12.5235 55.58 12.3465 55.59 12.17L55.6 12.21ZM76.15 5.45999H78.79L84.37 18.72H81.37L80.18 15.77H74.68L73.5 18.72H70.58L76.15 5.45999ZM79.15 13.21L77.43 8.93999L75.71 13.21H79.15ZM87.3 5.54999H93.24C93.931 5.50646 94.6236 5.60269 95.2765 5.83293C95.9294 6.06316 96.5292 6.42268 97.04 6.88999C97.4157 7.29078 97.7074 7.76266 97.8981 8.27786C98.0887 8.79307 98.1744 9.34119 98.15 9.88999C98.2012 10.785 97.9568 11.6721 97.4545 12.4147C96.9522 13.1573 96.2198 13.7143 95.37 14L98.55 18.7H95.21L92.42 14.5H90.17V18.72H87.31L87.3 5.54999ZM93.07 12C94.46 12 95.26 11.25 95.26 10.14C95.26 8.89999 94.41 8.25999 93.01 8.25999H90.17V12H93.07ZM101.81 5.59999H104.67V18.72H101.81V5.59999Z" fill="#233241"/><path d="M111 6.11001C112.023 5.92291 113.06 5.83251 114.1 5.84001C115.383 5.70695 116.669 6.06419 117.7 6.84001C118.026 7.14126 118.283 7.50847 118.456 7.91715C118.628 8.32583 118.711 8.76658 118.7 9.21001C118.707 9.92223 118.481 10.6173 118.057 11.1894C117.633 11.7616 117.033 12.1797 116.35 12.38C116.861 12.6138 117.3 12.98 117.622 13.4407C117.944 13.9014 118.136 14.4398 118.18 15C118.412 16.1671 118.747 17.3115 119.18 18.42H117.51C117.14 17.449 116.865 16.4443 116.69 15.42C116.32 13.71 115.69 13.05 114.19 13H112.67V18.4H111V6.11001ZM112.61 11.78H114.25C115.97 11.78 117.07 10.84 117.07 9.41001C117.07 7.79001 115.9 7.09001 114.2 7.09001C113.666 7.0759 113.133 7.12287 112.61 7.23001V11.78ZM121.88 14.21C121.841 14.6289 121.896 15.0513 122.039 15.4468C122.182 15.8424 122.411 16.2015 122.709 16.4985C123.007 16.7956 123.367 17.0232 123.763 17.1652C124.159 17.3072 124.581 17.36 125 17.32C125.847 17.3427 126.688 17.1859 127.47 16.86L127.76 18.01C126.812 18.4123 125.789 18.6067 124.76 18.58C124.164 18.615 123.567 18.5215 123.009 18.3057C122.452 18.0899 121.948 17.7569 121.531 17.3292C121.113 16.9015 120.793 16.3892 120.591 15.8269C120.389 15.2646 120.31 14.6654 120.36 14.07C120.36 11.37 121.95 9.25001 124.56 9.25001C127.48 9.25001 128.24 11.81 128.24 13.45C128.244 13.7043 128.228 13.9585 128.19 14.21H121.88ZM126.64 13.05C126.64 12.05 126.22 10.42 124.4 10.42C123.729 10.4651 123.1 10.7604 122.637 11.2475C122.174 11.7347 121.911 12.378 121.9 13.05H126.64ZM130.23 12.36C130.23 11.22 130.23 10.3 130.15 9.45001H131.6L131.69 10.98C132.01 10.43 132.475 9.97804 133.034 9.67311C133.593 9.36818 134.224 9.22186 134.86 9.25001C137.03 9.25001 138.66 11.07 138.66 13.79C138.66 17.01 136.66 18.59 134.59 18.59C134.048 18.615 133.51 18.4981 133.027 18.2508C132.545 18.0034 132.136 17.6343 131.84 17.18V22.05H130.23V12.36ZM131.84 14.75C131.837 14.972 131.86 15.1936 131.91 15.41C132.042 15.9547 132.354 16.4391 132.794 16.7855C133.235 17.1319 133.779 17.3201 134.34 17.32C136.06 17.32 137.06 15.91 137.06 13.86C137.06 12.08 136.12 10.54 134.4 10.54C133.827 10.5555 133.275 10.76 132.83 11.1217C132.385 11.4834 132.072 11.982 131.94 12.54C131.882 12.7555 131.848 12.9769 131.84 13.2V14.75ZM148.84 13.84C148.894 14.4518 148.818 15.068 148.617 15.6485C148.416 16.2289 148.096 16.7606 147.676 17.2088C147.256 17.657 146.746 18.0116 146.18 18.2496C145.614 18.4876 145.004 18.6036 144.39 18.59C143.798 18.5976 143.211 18.4813 142.666 18.2487C142.121 18.016 141.631 17.6721 141.227 17.239C140.824 16.8059 140.515 16.2931 140.32 15.7336C140.126 15.1741 140.051 14.5802 140.1 13.99C140.048 13.3799 140.125 12.7656 140.326 12.1871C140.526 11.6085 140.846 11.0786 141.265 10.6317C141.684 10.1848 142.191 9.83083 142.756 9.5928C143.32 9.35478 143.928 9.23799 144.54 9.25001C147.14 9.25001 148.87 11.11 148.87 13.84H148.84ZM141.75 13.94C141.75 15.94 142.88 17.38 144.46 17.38C146.04 17.38 147.19 15.92 147.19 13.89C147.19 12.38 146.42 10.47 144.49 10.47C142.56 10.47 141.78 12.25 141.78 13.94H141.75ZM150.89 12.24C150.89 11.18 150.89 10.24 150.82 9.45001H152.24L152.3 11.21H152.36C152.513 10.6574 152.835 10.1669 153.282 9.8079C153.729 9.44892 154.278 9.23974 154.85 9.21001C155.002 9.20512 155.153 9.22196 155.3 9.26001V10.78C155.117 10.7632 154.933 10.7632 154.75 10.78C154.196 10.8022 153.669 11.0257 153.267 11.4086C152.866 11.7915 152.618 12.3075 152.57 12.86C152.528 13.1111 152.508 13.3654 152.51 13.62V18.39H150.89V12.24ZM159.33 6.88001V9.45001H161.67V10.68H159.33V15.5C159.33 16.61 159.65 17.24 160.56 17.24C160.877 17.2463 161.193 17.2093 161.5 17.13L161.58 18.36C161.113 18.5162 160.622 18.5906 160.13 18.58C159.805 18.5982 159.48 18.5469 159.177 18.4297C158.873 18.3124 158.598 18.1319 158.37 17.9C157.884 17.2218 157.66 16.3905 157.74 15.56V10.68H156.36V9.45001H157.74V7.30001L159.33 6.88001Z" fill="#233241"/></g><defs><clipPath id="clip0"><rect width="161.7" height="24" fill="white"/></clipPath></defs>
</svg>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/product/">機能紹介</a></li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/price/">料金プラン</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">事例</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
<a class="dropdown-item" href="<?php echo $home; ?>/works/">導入事例</a>
<a class="dropdown-item" href="<?php echo $home; ?>/">業界別活用事例</a>
</div>
</li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/seminar/">セミナー</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ヘルプ</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
<a class="dropdown-item" href="<?php echo $home; ?>/help/">すべて</a>
<a class="dropdown-item" href="<?php echo $home; ?>/">カテゴリー</a>
<a class="dropdown-item" href="<?php echo $home; ?>/">カテゴリー</a>
</div>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item mr-md-4">
<a class="nav-link text-primary" href="https://analysis.kagari.ai/login" target="_blank">ログイン</a>
</li>
<li class="nav-item">
<a class="btn btn-primary" href="https://analysis.kagari.ai/register" target="_blank"><i class="fab fa-google mr-2"></i>今すぐ無料トライアル</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
<!-- メインコンテンツ -->
<main>