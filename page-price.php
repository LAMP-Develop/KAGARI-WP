<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<div class="card overflow-hidden sec-bg-gray border-0">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_marketing.png" alt="KAGARI Marketing">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">KAGARIのデータを活用した<br class="d-sm-block d-none">コンテンツマーケティング</h3>
</div>
<p class="card-text">クライアントに提出するレポートを自動作成して業務効率化。定期的な改善提案で継続受注につなげる。</p>
<div class="mt-4">
<a href="https://marketing.kagari.ai" target="_blank">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 text-center px-md-5 px-4 py-md-5 py-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_consulting.png" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>
</section>
<?php get_footer();