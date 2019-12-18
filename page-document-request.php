<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="py-5">
<div class="container">
<h2 class="text-dark text-center font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>
<div class="row align-items-stretch">

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual_03.png" alt="コンテンツマーケティングサービス資料">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">コンテンツマーケティングサービス資料</h3>
<p class="card-text m-0">WEB集客の手法として注目されているコンテンツマーケティングのサービス資料をご覧いただけます。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="コンテンツマーケティングサービス資料">ダウンロード</button>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual_02.png" alt="コンテンツマーケティングお役立ちBOOK">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">コンテンツマーケティングお役立ちBOOK</h3>
<p class="card-text m-0">企画から記事コンテンツの作成方法までのノウハウを詰め込み成功の秘訣をご紹介しております。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="コンテンツマーケティングお役立ちBOOK">ダウンロード</button>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual.png" alt="SearchConsole使い方マニュアル">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">Search Console使い方マニュアル</h3>
<p class="card-text m-0">200社のコンテンツマーケティングに取り組んだノウハウを活かし、初心者でも分かりやすい使い方マニュアルを作成いたしました。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="SearchConsole使い方マニュアル">ダウンロード</button>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual_04.png" alt="KAGARIサービス資料">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">KAGARIサービス資料</h3>
<p class="card-text m-0">独自開発のアクセス解析ツール「KAGARI」のサービス資料です。導入事例をご覧いただけます。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="KAGARIサービス資料">ダウンロード</button>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual_06.png" alt="インスタグラムマーケティングサービス資料">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">インスタグラムマーケティングサービス資料</h3>
<p class="card-text m-0">インスタグラムマーケティングのサービス資料です。成功事例やレポートのサンプルをご覧いただけます。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="インスタグラムマーケティングサービス資料">ダウンロード</button>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card shadow-sm">
<img class="card-img-top mt-3 w-75 mx-auto" src="<?php echo $wp_url; ?>/lib/images/manual_05.png" alt="株式会社ランプパンフレット">
<div class="card-body">
<h3 class="h5 card-title text-dark font-weight-bold">株式会社ランプパンフレット</h3>
<p class="card-text m-0">独自開発のアクセス解析ツール「KAGARI」のサービス資料です。導入事例をご覧いただけます。</p>
<div class="mt-4 text-center">
<button type="button" class="form-btn btn btn-success stretched-link w-75" data-toggle="modal" data-target="#document-form" data-name="株式会社ランプパンフレット">ダウンロード</button>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- Modal -->
<div class="modal fade" id="document-form" tabindex="-1" role="dialog" aria-labelledby="document-form-label" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title font-weight-bold text-dark h5" id="document-form-label">資料ダウンロード</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<?php echo do_shortcode('[contact-form-7 id="117" title="資料ダウンロード"]'); ?>
</div>
</div>
</div>
</div>
<?php get_footer();