<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="jumbotron">
<div class="container">
<h1 class="display-4 text-dark font-weight-bold mb-5">WEBサイトの<br>アクセス解析レポートを<br>AIが自動作成</h1>
<a class="btn btn-primary btn-lg" href="#" role="button"><i class="fab fa-google mr-2"></i>今すぐ無料トライアル</a>
</div>
</section>

<section class="py-5 bg-success">
<div class="container">
<h2 class="font-size-lg text-white text-center py-5 font-weight-bold">Webサイトの運用報告をKAGARIが効率化します</h2>
<div class="row">
<div class="col-lg-4">
<div class="card mb-4">
<!-- <img src="..." class="card-img-top" alt="..."> -->
<div class="card-body">
<svg class="my-4" width="100" height="62" viewBox="0 0 100 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17 18H77V54H21C18.7909 54 17 52.2091 17 50V18Z" fill="white"/>
<path d="M17 10C17 7.79086 18.7909 6 21 6H73C75.2091 6 77 7.79086 77 10V18H17V10Z" fill="#A6B1C9"/>
<path d="M23 13C23.5523 13 24 12.5523 24 12C24 11.4477 23.5523 11 23 11C22.4477 11 22 11.4477 22 12C22 12.5523 22.4477 13 23 13Z" fill="#F27E7C"/>
<path d="M30 13C30.5523 13 31 12.5523 31 12C31 11.4477 30.5523 11 30 11C29.4477 11 29 11.4477 29 12C29 12.5523 29.4477 13 30 13Z" fill="#F27E7C"/>
<path d="M37 13C37.5523 13 38 12.5523 38 12C38 11.4477 37.5523 11 37 11C36.4477 11 36 11.4477 36 12C36 12.5523 36.4477 13 37 13Z" fill="#F27E7C"/>
<path opacity="0.15" d="M17 18H21V54V54C18.7909 54 17 52.2091 17 50V18ZM17 10C17 7.79086 18.7909 6 21 6V6V18H17V10Z" fill="#000064"/>
<path d="M77 18V10C77 7.79086 75.2091 6 73 6H21C18.7909 6 17 7.79086 17 10V18M77 18H17M77 18V54H21C18.7909 54 17 52.2091 17 50V18" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M69 34H65L59 28L53 40L43 26L33 44L29 34H25" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M23 13C23.5523 13 24 12.5523 24 12C24 11.4477 23.5523 11 23 11C22.4477 11 22 11.4477 22 12C22 12.5523 22.4477 13 23 13Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M30 13C30.5523 13 31 12.5523 31 12C31 11.4477 30.5523 11 30 11C29.4477 11 29 11.4477 29 12C29 12.5523 29.4477 13 30 13Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M37 13C37.5523 13 38 12.5523 38 12C38 11.4477 37.5523 11 37 11C36.4477 11 36 11.4477 36 12C36 12.5523 36.4477 13 37 13Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="76" cy="50" r="9" fill="#FF8B76" stroke="#2E4369" stroke-width="2"/>
<path d="M71.5 49.5L75 53L80.5 47.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="card-title font-weight-bold text-center">Google Analyticsと<br>連携するだけ</p>
<p class="card-text">タグの埋め込みは不要！お使いのGoogleアカウントと連携してすぐにご利用いただけます</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-4">
<div class="card-body">
<svg class="my-4" width="100" height="62" viewBox="0 0 100 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26 1C40 1 50 6.2 50 17V27C50.7 29.9 52.1 32.7 54 35C54.9 35.9 55.2 37.5 53.1 38.1C51.2 38.6 50.6 38.5 50.4 39.8C50.2 41.1 51 42.6 49.8 43C48.6 43.4 49.7 44.7 48.5 45.7C47.7 46.4 49.5 50.9 45.1 50.9H40.4C38.1 50.9 38 52.6 38 54.9C38 57.2 40 60.9 40 60.9H12C12 60.9 16 56.8 16 52.9C16 46.9 4 37.4 4 20.9C4 5.2 16 1 26 1Z" fill="white"/>
<path d="M35.5 13.2C31.7 8.39999 24.8 7.59999 20 11.4C19.3 11.9 18.8 12.5 18.2 13.2C13.9 13.9 11 18 11.8 22.4C12.5 26.2 15.8 29 19.7 29C20 29 20.2 28.9 20.4 28.9C24.2 31.7 29.4 31.7 33.3 28.9C33.4 28.9 33.6 28.9 33.7 28.9C38.1 28.9 41.7 25.3 41.7 20.9C41.7 17.2 39.1 14 35.5 13.2Z" fill="#99DDC9"/>
<path opacity="0.25" d="M35.5 13.2C31.7 8.39999 24.8 7.59999 20 11.4C19.3 11.9 18.8 12.5 18.2 13.2C16.1 13.6 14.2 14.8 13 16.5C14 15.8 15 15.4 16.2 15.2C20 10.5 26.9 9.69999 31.6 13.5C32.3 14 32.8 14.6 33.4 15.3C37.7 16.3 40.4 20.5 39.4 24.8C39.2 25.8 38.8 26.8 38.2 27.6C41.8 25.1 42.7 20.1 40.2 16.5C39.1 14.8 37.4 13.6 35.5 13.2Z" fill="white"/>
<path opacity="0.14" d="M16 59C16 59 20 54.9 20 51C20 45 8 35.5 8 19C8 10.7 11.3 5.70001 15.8 2.70001C9.3 5.10001 4 10.5 4 21C4 37.5 16 47 16 53C16 56.9 12 61 12 61H40C40 61 39.5 60.1 39.1 59H16Z" fill="#000064"/>
<path d="M27 15L21.7 23H31.7L26.7 30.4" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M35.5 13.2C31.7 8.39999 24.8 7.59999 20 11.4C19.3 11.9 18.8 12.5 18.2 13.2C13.9 13.9 11 18 11.8 22.4C12.5 26.2 15.8 29 19.7 29C20 29 20.2 28.9 20.4 28.9C24.2 31.7 29.4 31.7 33.3 28.9C33.4 28.9 33.6 28.9 33.7 28.9C38.1 28.9 41.7 25.3 41.7 20.9C41.7 17.2 39.1 14 35.5 13.2Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M60.3 41.3L72.8001 36.7C74.6001 37.1 76.4 37.3 78.2 37.3C89.2 37.3 98.1 30.2 98.1 21.4C98.1 12.6 89.2 5.60001 78.2 5.60001C67.2 5.60001 58.3 12.7 58.3 21.5C58.3 25.9 60.6 30 64.3 32.9L60.3 41.3Z" fill="white"/>
<path opacity="0.14" d="M82.2 34C71.2 34 62.3 26.6 62.3 17.4C62.3 14.8 63.1 12.2 64.5 9.89999C60.7 12.7 58.3 16.9 58.3 21.4C58.3 25.9 60.6 29.9 64.3 32.8L60.3 41.3L72.8001 36.7C74.6001 37.1 76.4 37.3 78.2 37.3C85 37.3 91.1 34.5 94.7 30.3C91 32.8 86.6 34.1 82.2 34Z" fill="#000064"/>
<path opacity="0.4" d="M85.5 18.1C93.4 20.7 93.3 17.6 92.4 15.6C91.9 14.7 91.3 13.8 90.5 13C86.8 9.39999 82.7 9.59999 80.1 10.7C77.5 11.8 77.5 15.5 85.5 18.1Z" fill="white"/>
<path d="M70.2 22.8C70.918 22.8 71.5 22.218 71.5 21.5C71.5 20.782 70.918 20.2 70.2 20.2C69.482 20.2 68.9 20.782 68.9 21.5C68.9 22.218 69.482 22.8 70.2 22.8Z" fill="#2E4369"/>
<path d="M78.2 22.8C78.918 22.8 79.5 22.218 79.5 21.5C79.5 20.782 78.918 20.2 78.2 20.2C77.482 20.2 76.9 20.782 76.9 21.5C76.9 22.218 77.482 22.8 78.2 22.8Z" fill="#2E4369"/>
<path d="M86.1 22.8C86.818 22.8 87.4 22.218 87.4 21.5C87.4 20.782 86.818 20.2 86.1 20.2C85.3821 20.2 84.8 20.782 84.8 21.5C84.8 22.218 85.3821 22.8 86.1 22.8Z" fill="#2E4369"/>
<path d="M60.3 41.3L72.8001 36.7C74.6001 37.1 76.4 37.3 78.2 37.3C89.2 37.3 98.1 30.2 98.1 21.4C98.1 12.6 89.2 5.60001 78.2 5.60001C67.2 5.60001 58.3 12.7 58.3 21.5C58.3 25.9 60.6 30 64.3 32.9L60.3 41.3Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M70.2 22.8C70.918 22.8 71.5 22.218 71.5 21.5C71.5 20.782 70.918 20.2 70.2 20.2C69.482 20.2 68.9 20.782 68.9 21.5C68.9 22.218 69.482 22.8 70.2 22.8Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M78.2 22.8C78.918 22.8 79.5 22.218 79.5 21.5C79.5 20.782 78.918 20.2 78.2 20.2C77.482 20.2 76.9 20.782 76.9 21.5C76.9 22.218 77.482 22.8 78.2 22.8Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M86.1 22.8C86.818 22.8 87.4 22.218 87.4 21.5C87.4 20.782 86.818 20.2 86.1 20.2C85.3821 20.2 84.8 20.782 84.8 21.5C84.8 22.218 85.3821 22.8 86.1 22.8Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M26 1C40 1 50 6.2 50 17V27C50.7 29.9 52.1 32.7 54 35C54.9 35.9 55.2 37.5 53.1 38.1C51.2 38.6 50.6 38.5 50.4 39.8C50.2 41.1 51 42.6 49.8 43C48.6 43.4 49.7 44.7 48.5 45.7C47.7 46.4 49.5 50.9 45.1 50.9H40.4C38.1 50.9 38 52.6 38 54.9C38 57.2 40 60.9 40 60.9H12C12 60.9 16 56.8 16 52.9C16 46.9 4 37.4 4 20.9C4 5.2 16 1 26 1Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="card-title font-weight-bold text-center">改善施策を<br>AIが自動で提案</p>
<p class="card-text">数多くのサイトの解析を手掛けたノウハウに基づいて、的確な改善施策を自動で提案します</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-4">
<div class="card-body">
<svg class="my-4" width="100" height="62" viewBox="0 0 100 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M64.3 17V1H40.3C38.0909 1 36.3 2.79086 36.3 5V61H76.3001C78.5092 61 80.3001 59.2091 80.3001 57V17H64.3Z" fill="white"/>
<path d="M80.3001 17L64.3 1V17H80.3001Z" fill="white"/>
<path opacity="0.15" d="M59.4 1V24H80.3V17H64.3V1H59.4Z" fill="#000064"/>
<path d="M71.1 36.1C71 43.2 65.2 49 58.1 48.9C51 48.8 45.2 43 45.3 35.9C45.4 28.8 51.1 23.1 58.2 23.1H59.3V36.1H71.1Z" fill="#FF8B76"/>
<path d="M59.3 36.1H73.3C73.3 28.2 67.2 21.6 59.3 21V36.1Z" fill="#61E0B2"/>
<path d="M36.3 61H76.3001C78.5092 61 80.3001 59.2091 80.3001 57V17L64.3 1H40.3C38.0909 1 36.3 2.79086 36.3 5V32.7" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M71.1 35.9C71.1 43 65.3001 48.8 58.2001 48.8C51.1001 48.8 45.3 43 45.3 35.9C45.3 28.8 51.0001 23 58.2001 23H59.3M64.3 1V17H80.3001L64.3 1Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M59.3 35.9H73.3C73.3 28 67.2 21.5 59.3 20.9V35.9Z" stroke="#2E4369" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11 61H25" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 33H25" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M25 42H31" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M36.3 42H36.31" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M36.3 51H36.31" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17 51H28" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="card-title font-weight-bold text-center">そのまま使える<br>レポートが自動で完成</p>
<p class="card-text">報告業務にすぐ使えるレポートがそのまま印刷できるPDF形式でダウンロードできます</p>
</div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer();
