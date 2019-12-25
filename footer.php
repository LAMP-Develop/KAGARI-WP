<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>

<!-- フッター -->
<?php
if (!is_front_page() && !is_home()) {
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container py-3"><i class="fas fa-home"></i>','</div></div>');
  }
} ?>
<footer id="footer" class="bg-white">
<section class="py-md-5 py-4 bg-dark2">
<div class="container">
<div class="row mx-0">
<div class="col-md col-6 mb-md-0 mb-3">
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/seo/">KAGARI SEO</a>
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/seo/product/">機能紹介</a>
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/seo/plan/">料金プラン</a>
</div>
<div class="col-md col-6 mb-md-0 mb-3">
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/report/">KAGARI Report</a>
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/report/product/">機能紹介</a>
<a class="text-white d-block mb-3" href="http://lamp-inc.sakura.ne.jp/kagari_re/report/price/">料金プラン</a>
</div>
<div class="col-md col-6 mb-3">
<a class="text-white d-block mb-3" href="https://consulting.kagari.ai/">KAGARI Consulting</a>
<a class="text-white d-block mb-3" href="https://marketing.lamp.jp/">KAGARI Marketing</a>
<a class="text-white d-block mb-3" href="https://lamp.jp" target="_blank"><i class="fas fa-external-link-alt mr-1"></i>運営会社</a>
<a class="text-white d-block mb-3" href="https://lamp.jp/recruit/" target="_blank"><i class="fas fa-external-link-alt mr-1"></i>採用情報</a>
</div>
<div class="col-md col-12">
<a class="btn btn-success w-100 mb-3" href="https://kagari.ai/contact/">お問い合わせ</a>
<a class="btn btn-info w-100 mb-3" href="https://reporting.kagari.ai" target="_blank">新規会員登録</a>
<a class="btn btn-outline-info w-100" href="https://reporting.kagari.ai" target="_blank">ログイン</a>
</div>
</div>
</div>
</section>
<div class="container py-md-4 py-3">
<div class="d-md-flex justify-content-between align-items-center">
<div class="d-md-flex justify-content-start align-items-center">
<a class="d-md-inline d-block mr-md-5 mb-md-0 mb-4 text-md-left text-center" href="<?php echo $home; ?>/">
<svg width="105" height="24" viewBox="0 0 105 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.79 12.4102C17.5778 16.8314 13.6426 20.6787 9.14998 23.7902C8.24998 24.4002 7.72999 23.5602 8.26999 22.8802C11.6707 18.6258 15.5798 14.804 19.91 11.5002C20.66 11.0002 21.26 11.7402 20.79 12.4102ZM16.59 8.06022C17.15 7.28022 16.64 6.49022 15.71 7.15022C15.15 7.54022 6.34998 15.3702 4.70998 17.0702C3.10998 15.6902 1.41998 14.2502 1.01998 13.9302C0.891169 13.8206 0.724188 13.7664 0.555541 13.7795C0.386894 13.7926 0.230298 13.872 0.119984 14.0002C0.0257874 14.1161 -0.0256348 14.2609 -0.0256348 14.4102C-0.0256348 14.5596 0.0257874 14.7043 0.119984 14.8202C1.30342 16.4808 2.59982 18.0578 3.99998 19.5402C4.16752 19.7646 4.41634 19.9143 4.69303 19.9573C4.96973 20.0003 5.25226 19.9332 5.47998 19.7702L5.61998 19.6502C9.72396 16.2363 13.4066 12.3455 16.59 8.06022ZM4.84998 11.0602C7.54879 9.05899 10.0805 6.84169 12.42 4.43022C12.6239 4.22587 12.7385 3.94894 12.7385 3.66022C12.7385 3.3715 12.6239 3.09458 12.42 2.89022L12.36 2.84022C12.09 2.65022 9.46999 0.350223 9.17999 0.140224C8.57998 -0.279776 7.86999 0.310223 8.26999 1.03022C8.66998 1.75022 9.38999 2.89022 9.82998 3.58022C9.45998 3.91022 4.51998 9.50022 3.99998 10.1902C3.47998 10.8802 3.99998 11.7102 4.87998 11.1002L4.84998 11.0602Z" fill="#FF6200"/><path d="M27.28 5.55017H30.15V11.3102L35.42 5.55017H38.88L33.58 11.1402L39.12 18.7202H35.68L31.68 13.1202L30.14 14.7002V18.7002H27.28V5.55017ZM45.87 5.46017H48.51L54.08 18.7202H51.08L49.9 15.7702H44.4L43.21 18.7202H40.29L45.87 5.46017ZM48.87 13.2102L47.15 8.94017L45.42 13.2102H48.87ZM55.6 12.2102C55.5881 11.3277 55.7502 10.4515 56.077 9.6316C56.4037 8.81173 56.8888 8.06426 57.5045 7.43188C58.1201 6.79949 58.8543 6.29458 59.6652 5.94598C60.476 5.59738 61.3475 5.41191 62.23 5.40017H62.42C63.3505 5.35062 64.2817 5.48497 65.1602 5.79554C66.0387 6.10612 66.8474 6.58682 67.54 7.21017L65.74 9.41017C64.8409 8.51042 63.622 8.00344 62.35 8.00017C61.3119 8.05202 60.3362 8.51204 59.6357 9.27999C58.9352 10.0479 58.5665 11.0616 58.61 12.1002C58.5442 13.1381 58.8925 14.1597 59.5785 14.9414C60.2645 15.723 61.2324 16.2008 62.27 16.2702H62.55C63.5109 16.2987 64.4561 16.0221 65.25 15.4802V13.6302H62.37V11.1302H68V16.8502C66.467 18.2072 64.4874 18.9513 62.44 18.9402C61.5805 18.9805 60.7214 18.8511 59.9118 18.5593C59.1023 18.2674 58.3582 17.819 57.7221 17.2395C57.086 16.66 56.5702 15.9608 56.2044 15.182C55.8386 14.4031 55.6298 13.5598 55.59 12.7002C55.58 12.5236 55.58 12.3467 55.59 12.1702L55.6 12.2102ZM76.15 5.46017H78.79L84.37 18.7202H81.37L80.18 15.7702H74.68L73.5 18.7202H70.58L76.15 5.46017ZM79.15 13.2102L77.43 8.94017L75.71 13.2102H79.15ZM87.3 5.55017H93.24C93.931 5.50664 94.6236 5.60287 95.2765 5.83311C95.9294 6.06335 96.5292 6.42286 97.04 6.89017C97.4157 7.29097 97.7074 7.76285 97.8981 8.27805C98.0887 8.79325 98.1744 9.34137 98.15 9.89017C98.2012 10.7852 97.9568 11.6723 97.4545 12.4149C96.9522 13.1575 96.2198 13.7145 95.37 14.0002L98.55 18.7002H95.21L92.42 14.5002H90.17V18.7202H87.31L87.3 5.55017ZM93.07 12.0002C94.46 12.0002 95.26 11.2502 95.26 10.1402C95.26 8.90017 94.41 8.26017 93.01 8.26017H90.17V12.0002H93.07ZM101.81 5.60017H104.67V18.7202H101.81V5.60017Z" fill="#233241"/></g><defs><clipPath id="clip0"><rect width="104.67" height="24" fill="white"/></clipPath></defs></svg>
</a>
<a class="mr-3 text-dark" href="https://kagari.ai/privacy-policy/"><small>プライバシーポリシー</small></a>
<a class="mr-3 text-dark" href="https://kagari.ai/business-deal/"><small>特定商取引法に基づく表記</small></a>
<a class="text-dark" href="https://kagari.ai/terms/"><small>利用規約</small></a>
</div>
<small class="text-dark d-md-inline d-block mt-md-0 mt-4 text-md-left text-center">© 2019 LAMP Co., Ltd.</small>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
