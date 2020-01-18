<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="jumbotron-top jumbotron m-0">
<div class="container">
<h2 class="h1 text-md-center text-white font-weight-bold mb-4">もっと身近に<br>デジタルマーケティング</h2>
<p class="lead text-md-center text-white m-0">KAGARIは企業の成長に必要不可欠なデジタルマーケティングを支援する<br class="d-md-block d-none">ツールやサービスを提供します。</p>
<div class="d-flex flex-wrap justify-content-center mt-5">
<!-- <a class="btn btn-success mb-3 mb-md-0 mr-md-4" href="<?php echo $home; ?>/document-request/">資料ダウンロード</a> -->
<a class="btn btn-success" href="<?php echo $home; ?>/seminar/">セミナー情報</a>
</div>
</div>
</div>
<div class="container mb-md-5">
<div class="card py-4 mt-n5 shadow">
<div class="card-body">
<h3 class="text-center text-dark font-weight-bold mb-4">効率よく効果が出なければ<br>デジタルマーケティングは<br class="d-md-none">意味がない</h3>
<p class="text-md-center m-0">Webサイトのアクセス解析に時間かかりすぎている、見るべき情報がわからない、改善策がわからない。
<br>効果が出るはずのデジタルマーケティングの落とし穴としてアクセス解析は多くの企業が課題としています。
<br>アクセス解析と改善を繰り返しながら効率良くサイトを成長させることでデジタルマーケティングでより高い成果を出すことができるでしょう。</p>
</div>
</div>
</div>
<section class="py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md text-center mb-md-0 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/fig_kagari.png" srcset="<?php echo $wp_url; ?>/lib/images/fig_kagari.png 1x, <?php echo $wp_url; ?>/lib/images/fig_kagari@2x.png 2x" alt="">
</div>
<div class="col-md">
<!-- <h2 class="h4 text-dark font-weight-bold mb-3">サービス</h2> -->
<h3 class="h2 text-dark font-weight-bold mb-4">1社1社にとって最適なマーケティングを<br>データとクリエイティブ力が実現</h3>
<p class="m-0">企業のWebサイトごとに解析結果と改善案をAIがご提案します。
<br>蓄積したデータを活用し、サイトの状況を素早く解析。
<br>解析結果から、これまでのデジタルマーケティングの実績に基づきコンサルティングを行うようにWebサイトの改善とデジタルマーケティングの成果へと導きます。</p>
</div>
</div>
</div>
</section>
<section class="py-5">
<div class="container">
<div class="card shadow overflow-hidden bg-fa mb-4">
<div class="row no-gutters">
<div class="col-md-5 bg-white position-static">
<div class="card-body p-lg-5">
<p class="card-text">
<img src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</p>
<h3 class="card-title text-dark font-weight-bold">WEBサイトのアクセス解析<br class="d-none d-xl-block">レポートをAIが自動作成</h3>
<p class="card-text">時間と手間のかかる解析レポートを自動で作成。Google Analyticsと連携してすぐに使えます。</p>
<p class="card-text mt-4">
<a href="https://report.kagari.ai/" class="stretched-link" target="_blank">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</p>
</div>
</div>
<div class="col-md-7 text-center pt-md-0 pt-3 px-md-0 px-3 px-md-0 px-3 align-self-end">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/report.png" srcset="<?php echo $wp_url; ?>/lib/images/report.png 1x, <?php echo $wp_url; ?>/lib/images/report@2x.png 2x" alt="KAGARI Report">
</div>
</div>
</div>
<div class="card shadow overflow-hidden bg-fa mb-4">
<div class="row no-gutters">
<div class="col-md-5 bg-white position-static">
<div class="card-body p-lg-5">
<p class="card-text">
<img src="<?php echo $wp_url; ?>/lib/images/logo_seo.svg" alt="KAGARI SEO">
</p>
<h3 class="card-title text-dark font-weight-bold">ページごとの比較に特化した<br class="d-none d-xl-block">SEO流入分析ツール</h3>
<p class="card-text">Google AnalyticsとSearch Consoleのデータを1つの画面で管理。大量のページを一度に解析できます。</p>
<p class="card-text mt-4">
<a href="https://seo.kagari.ai/" class="stretched-link" target="_blank">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</p>
</div>
</div>
<div class="col-md-7 text-center pt-md-0 pt-3 px-md-0 px-3 px-md-0 px-3 align-self-end">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/seo.png" srcset="<?php echo $wp_url; ?>/lib/images/seo.png 1x, <?php echo $wp_url; ?>/lib/images/seo@2x.png 2x" alt="KAGARI SEO">
</div>
</div>
</div>
<div class="card shadow overflow-hidden bg-fa mb-4">
<div class="row no-gutters">
<div class="col-md-5 bg-white position-static">
<div class="card-body p-lg-5">
<p class="card-text">
<img src="<?php echo $wp_url; ?>/lib/images/logo_consulting.svg" alt="KAGARI Consulting">
</p>
<h3 class="card-title text-dark font-weight-bold">データからCVを創出する<br class="d-none d-xl-block">コンサルティング</h3>
<p class="card-text">KAGARIの解析データに基づいて、貴社の成長に合わせた最適なプランニングやコンテンツ制作を行います。</p>
<p class="card-text mt-4">
<a href="https://consulting.kagari.ai/" class="stretched-link" target="_blank">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</p>
</div>
</div>
<div class="col-md-7 text-center pt-md-0 pt-3 px-md-0 px-3 px-md-0 px-3 align-self-center">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/consulting.png" srcset="<?php echo $wp_url; ?>/lib/images/consulting.png 1x, <?php echo $wp_url; ?>/lib/images/consulting@2x.png 2x" alt="KAGARI Consulting">
</div>
</div>
</div>
<div class="card shadow overflow-hidden bg-fa">
<div class="row no-gutters">
<div class="col-md-5 bg-white position-static">
<div class="card-body p-lg-5">
<p class="card-text">
<img src="<?php echo $wp_url; ?>/lib/images/logo_marketing.svg" alt="KAGARI Marketing">
</p>
<h3 class="card-title text-dark font-weight-bold">デジタルコンテンツを軸とした<br class="d-none d-xl-block">マーケティング支援</h3>
<p class="card-text">KAGARIの解析データに基づいて、貴社の成長に合わせた最適なプランニングやコンテンツ制作を行います。</p>
<p class="card-text mt-4">
<a href="https://marketing.kagari.ai/" class="stretched-link" target="_blank">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</p>
</div>
</div>
<div class="col-md-7 text-center pt-md-0 pt-3 px-md-0 px-3 px-md-0 px-3 align-self-end">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/report.png" srcset="<?php echo $wp_url; ?>/lib/images/report.png 1x, <?php echo $wp_url; ?>/lib/images/report@2x.png 2x" alt="KAGARI Report">
</div>
</div>
</div>
</div>
</section>
<section class="py-5 bg-dark2">
<div class="container">
<h2 class="h3 text-center text-white font-weight-bold mb-4">事例</h2>
<div class="post-listd-cards row justify-content-center">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'works',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<div class="col-md-4 mb-md-0 mb-4">
<div class="card h-100 shadow-sm">
<?php if (isset($thumbnail) || $thumbnail): ?>
<img class="card-img-top border-bottom" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="card-body">
<p class="lead text-dark m-0"><?php echo $t; ?></p>
<a href="<?php echo $p; ?>" class="stretched-link"></a>
</div>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="mt-5 text-center">
<a href="<?php echo $home; ?>/works/" class="btn btn-outline-info">すべての事例を見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<section class="py-5">
<div class="container">
<h2 class="h3 text-dark text-center font-weight-bold mb-4">セミナー情報</h2>
<div class="post-listd-cards row justify-content-center">
<?php
$args = [
    'posts_per_page' => 4,
    'post_type' => 'seminar',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<div class="col-md-4 mb-md-0 mb-4">
<div class="card h-100 shadow-sm">
<?php if (isset($thumbnail) || $thumbnail): ?>
<img class="card-img-top border-bottom" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="card-body">
<p class="lead text-dark m-0"><?php echo $t; ?></p>
<a href="<?php echo $p; ?>" class="stretched-link"></a>
</div>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="mt-5 text-center">
<a href="<?php echo $home; ?>/seminar/" class="btn btn-outline-primary">すべてのセミナー情報を見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<section class="py-5 bg-fa">
<div class="container">
<h2 class="h3 text-dark text-center font-weight-bold mb-4">ブログ</h2>
<div class="post-listd-cards row justify-content-center">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
?>
<div class="col-md-4 mb-md-0 mb-4">
<div class="card h-100 shadow-sm">
<?php if ($thumbnail != ''): ?>
<img class="card-img-top" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="card-body">
<p class="lead text-dark m-0"><?php echo $t; ?></p>
<a href="<?php echo $p; ?>" class="stretched-link"></a>
</div>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="mt-5 text-center">
<a href="<?php echo $home; ?>/blog/" class="btn btn-outline-primary">すべてのブログを見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<section class="py-5">
<div class="container">
<h2 class="h3 text-dark text-center font-weight-bold mb-4">お知らせ</h2>
<div class="news-lists list-group col-lg-9 mx-auto pr-0">
<?php
$args = [
    'posts_per_page' => 4,
    'post_type' => 'news',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
?>
<a href="<?php the_permalink(); ?>" class="rounded-0 list-group-item list-group-item-action">
<time datetime="<?php the_time('Y-m-d'); ?>" class="small d-block"><?php the_time('Y/m/d'); ?></time>
<span class="d-block"><?php the_title(); ?></span>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="mt-5 text-center">
<a href="<?php echo $home; ?>/news/" class="btn btn-outline-primary">すべてのお知らせを見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<?php get_footer();
