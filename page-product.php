<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4">サイトの解析レポート業務に必要な機能を厳選しました</h2>
<div class="row">
<div class="col-lg">
<div class="row text-center mx-0">
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-blue">
<i class="fas fa-list-alt opacity-color-blue"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">サマリー</p>
<p class="text-left m-0">サイト全体の状態を知る</p>
</div>
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mx-md-3 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-yellow">
<i class="fas fa-users opacity-color-yellow"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">ユーザー属性</p>
<p class="text-left m-0">サイトの訪問者の属性を知る</p>
</div>
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-purple-2">
<i class="fas fa-share-alt opacity-color-purple-2"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">流入元</p>
<p class="text-left m-0">ユーザーの訪れる経路を知る</p>
</div>
<div class="w-100 my-md-2 d-md-block d-none"></div>
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-green">
<i class="fas fa-pager opacity-color-green"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">ユーザー行動</p>
<p class="text-left m-0">ページごとのアクセス状況を知る</p>
</div>
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mx-md-3 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-red">
<i class="fas fa-flag opacity-color-red"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">コンバージョン</p>
<p class="text-left m-0">目標の達成度合いを知る</p>
</div>
<div class="service-card col-md col-6 bg-white rounded-lg shadow-sm py-4 mb-md-0 mb-2">
<span class="opacity-item opacity-bg-purple">
<i class="fas fa-ad opacity-color-purple"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">広告</p>
<p class="text-left m-0">リスティング広告の状況を知る</p>
</div>
</div>
<p class="my-4">サイト全体のアクセス状況をまとめたページです。訪問者数の変化を示したグラフや、基本的な指標の数値を確認できます。</p>
<div class="text-center">
<a href="#" class="btn btn-outline-primary"><i class="fas fa-arrow-alt-circle-down mr-2"></i>サンプルをダウンロード</a>
</div>
</div>
<div class="col-lg d-none d-lg-block">
<div class="text-center">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/sample.png" alt="レポート">
</div>
</div>
</div>
</div>
</section>
<section class="sec">
<div class="container">
<div class="card mb-4 overflow-hidden sec-bg-gray border-0">
<div class="row no-gutters align-items-center">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_graf.png" alt="グラフ">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">Google Analyticsと連携するだけ</h3>
</div>
<p class="card-text m-0">Google Analyticsをご利用のGoogleアカウントと連携するだけでご利用いただけます。データの取得などを待つことなく、登録後すぐにレポート作成機能をご利用いただけます。</p>
</div>
</div>
<div class="col-md-5 text-center p-md-4 p-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/cooperation.png" srcset="<?php echo $wp_url; ?>/lib/images/cooperation.png 1x, <?php echo $wp_url; ?>/lib/images/cooperation@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card mb-4 overflow-hidden sec-bg-gray border-0">
<div class="row no-gutters align-items-center">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ai.png" alt="AI">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">AIが状況の解説</h3>
</div>
<p class="card-text m-0">数多くのサイトの解析を手掛けたノウハウに基づいて、AIが状況の解説をします。AIの総括コメントと提案が自動で入力されるので、そのまま印刷して報告業務にご利用いただけます。</p>
</div>
</div>
<div class="col-md-5 text-center p-md-4 p-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/improvement.png" srcset="<?php echo $wp_url; ?>/lib/images/improvement.png 1x, <?php echo $wp_url; ?>/lib/images/improvement@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-gray border-0">
<div class="row no-gutters align-items-end">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_report.png" alt="レポート">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">そのまま使えるレポートが自動で完成</h3>
</div>
<p class="card-text m-0">レポートはPDF形式で作成されるので、重いソフトを開くことなくそのまま印刷することができます。毎月のレポートをメールで自動送信できるので、レポート作成の手間を大幅に削減できます。</p>
</div>
</div>
<div class="col-md-5 text-center px-md-4 px-3 pt-md-4 pt-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/report.png" srcset="<?php echo $wp_url; ?>/lib/images/report.png 1x, <?php echo $wp_url; ?>/lib/images/report@2x.png 2x" alt="そのまま使えるレポートが自動で完成">
</div>
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<div class="row mx-0">
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.66659 6.66663H33.3333C35.1666 6.66663 36.6666 8.16663 36.6666 9.99996V30C36.6666 31.8333 35.1666 33.3333 33.3333 33.3333H6.66659C4.83325 33.3333 3.33325 31.8333 3.33325 30V9.99996C3.33325 8.16663 4.83325 6.66663 6.66659 6.66663Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M36.6666 10L19.9999 21.6667L3.33325 10" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">メールで自動送信</p>
<p class="m-0">レポートを毎月自動で任意のメールアドレスで受け取れます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3 mx-md-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.3333 1.66663L34.9999 8.33329L28.3333 15" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 18.3334V15C5 13.2319 5.70238 11.5362 6.95262 10.286C8.20286 9.03575 9.89856 8.33337 11.6667 8.33337H35" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.6667 38.3333L5 31.6667L11.6667 25" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M35 21.6666V25C35 26.7681 34.2976 28.4638 33.0474 29.714C31.7971 30.9642 30.1014 31.6666 28.3333 31.6666H5" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">月々何度でも作成可能</p>
<p class="m-0">レポート作成に回数制限がないので、何度でもご利用いただけます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.6667 6.66663H8.33333C6.49238 6.66663 5 8.15901 5 9.99996V33.3333C5 35.1742 6.49238 36.6666 8.33333 36.6666H31.6667C33.5076 36.6666 35 35.1742 35 33.3333V9.99996C35 8.15901 33.5076 6.66663 31.6667 6.66663Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M26.6667 3.33337V10" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.3333 3.33337V10" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 16.6666H35" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">分析期間を指定</p>
<p class="m-0">自由に分析期間を指定できるので、週次や月次レポートを作成できます。</p>
</div>
</div>
</div>
<div class="w-100 mb-md-3"></div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M38.3334 10L22.5001 25.8333L14.1667 17.5L1.66675 30" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.3333 10H38.3333V20" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">前の期間のデータと比較</p>
<p class="m-0">先月や先週のデータと比較してアクセス状況の変化を知ることができます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3 mx-md-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35 19.1667C35.0057 21.3665 34.4918 23.5365 33.5 25.5C32.3241 27.853 30.5162 29.832 28.2791 31.2155C26.0419 32.599 23.4637 33.3324 20.8333 33.3334C18.6336 33.3391 16.4635 32.8252 14.5 31.8334L5 35L8.16667 25.5C7.17489 23.5365 6.66093 21.3665 6.66667 19.1667C6.66768 16.5363 7.40102 13.9581 8.78453 11.721C10.168 9.4838 12.1471 7.67599 14.5 6.50005C16.4635 5.50827 18.6336 4.99431 20.8333 5.00005H21.6667C25.1406 5.1917 28.4217 6.65798 30.8819 9.11815C33.3421 11.5783 34.8083 14.8595 35 18.3334V19.1667Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">コメントを自由に編集</p>
<p class="m-0">AIのコメントを自由に編集してレポートに反映することができます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.9999 25C26.4432 25 31.6666 19.7766 31.6666 13.3333C31.6666 6.88997 26.4432 1.66663 19.9999 1.66663C13.5566 1.66663 8.33325 6.88997 8.33325 13.3333C8.33325 19.7766 13.5566 25 19.9999 25Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.6834 23.15L11.6667 38.3333L20.0001 33.3333L28.3334 38.3333L26.3167 23.1333" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">必要な情報を厳選</p>
<p class="m-0">経験とノウハウに基づいて、解析レポートに必要な情報を厳選しています。</p>
</div>
</div>
</div>
<div class="w-100 mb-md-3"></div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35 26.6667V13.3334C34.9994 12.7488 34.8451 12.1747 34.5526 11.6686C34.26 11.1626 33.8396 10.7423 33.3333 10.45L21.6667 3.78337C21.1599 3.49081 20.5851 3.33679 20 3.33679C19.4149 3.33679 18.8401 3.49081 18.3333 3.78337L6.66667 10.45C6.16044 10.7423 5.73997 11.1626 5.44744 11.6686C5.1549 12.1747 5.0006 12.7488 5 13.3334V26.6667C5.0006 27.2513 5.1549 27.8254 5.44744 28.3314C5.73997 28.8375 6.16044 29.2578 6.66667 29.55L18.3333 36.2167C18.8401 36.5093 19.4149 36.6633 20 36.6633C20.5851 36.6633 21.1599 36.5093 21.6667 36.2167L33.3333 29.55C33.8396 29.2578 34.26 28.8375 34.5526 28.3314C34.8451 27.8254 34.9994 27.2513 35 26.6667Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">企業ロゴを表紙に表示</p>
<p class="m-0">自由にロゴを登録して、レポートの表紙に載せることができます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3 mx-md-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.9833 7.64993C16.3704 7.26045 16.8478 6.97267 17.373 6.81217C17.8982 6.65166 18.455 6.62341 18.9937 6.72992C19.5325 6.83642 20.0366 7.07439 20.4612 7.42267C20.8858 7.77095 21.2178 8.21875 21.4276 8.72625C21.6375 9.23376 21.7187 9.78525 21.664 10.3317C21.6094 10.8782 21.4206 11.4026 21.1143 11.8585C20.8081 12.3144 20.394 12.6876 19.9088 12.9449C19.4237 13.2022 18.8824 13.3356 18.3333 13.3333H3.33325M20.9833 32.3499C21.3704 32.7394 21.8478 33.0272 22.373 33.1877C22.8982 33.3482 23.455 33.3765 23.9937 33.2699C24.5325 33.1634 25.0366 32.9255 25.4612 32.5772C25.8858 32.2289 26.2178 31.7811 26.4276 31.2736C26.6375 30.7661 26.7187 30.2146 26.664 29.6682C26.6094 29.1217 26.4206 28.5972 26.1143 28.1413C25.8081 27.6854 25.394 27.3123 24.9088 27.055C24.4237 26.7977 23.8824 26.6643 23.3333 26.6666H3.33325M29.5499 12.8833C30.0347 12.3997 30.6311 12.0431 31.2865 11.845C31.9418 11.6468 32.6359 11.6132 33.3074 11.7471C33.9788 11.881 34.6069 12.1783 35.1362 12.6127C35.6654 13.0471 36.0794 13.6053 36.3415 14.2377C36.6037 14.8702 36.706 15.5576 36.6393 16.239C36.5727 16.9204 36.3391 17.5749 35.9593 18.1446C35.5795 18.7143 35.0652 19.1816 34.4618 19.5052C33.8584 19.8288 33.1846 19.9987 32.4999 19.9999H3.33325" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">登録してすぐに使える</p>
<p class="m-0">登録後すぐにデータが反映されるので、待たずにご利用いただけます。</p>
</div>
</div>
</div>
<div class="col-md bg-white border rounded-lg p-md-4 p-3 mb-md-0 mb-3">
<div class="d-flex justify-content-start align-items-stretch">
<div class="mr-3">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.9999 36.6667C29.2047 36.6667 36.6666 29.2048 36.6666 20C36.6666 10.7953 29.2047 3.33337 19.9999 3.33337C10.7952 3.33337 3.33325 10.7953 3.33325 20C3.33325 29.2048 10.7952 36.6667 19.9999 36.6667Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.3333 23.3334C13.3333 23.3334 15.8333 26.6667 19.9999 26.6667C24.1666 26.6667 26.6666 23.3334 26.6666 23.3334" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 15H15.0167" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M25 15H25.0167" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="txt">
<p class="font-weight-bold mb-1 h5 text-dark">用語の解説</p>
<p class="m-0">専門知識がなくても読みやすいように、用語の説明がレポートに表示されます。</p>
</div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer();