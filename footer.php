<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- フッター -->
<footer id="footer" class="bg-white">
<section class="py-md-5 py-4 bg-dark">
<div class="container">
<div class="row mx-0">
<div class="col-md col-6 mb-md-0 mb-3">
<a class="text-white d-block mb-2" href="<?php echo $home; ?>/">KAGARI Report</a>
<a class="text-white d-block mb-2" href="<?php echo $home; ?>/product/">機能紹介</a>
<a class="text-white d-block mb-2" href="<?php echo $home; ?>/price/">料金プラン</a>
<span class="text-white d-block mb-2">ヘルプ</span>
<a class="text-white d-block mb-2" href="<?php echo $home; ?>/contact/">- お問い合わせ</a>
</div>
<div class="col-md col-6 mb-md-0 mb-3">
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/">KAGARI SEO</a>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/functions/">機能紹介</a>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/plan/">料金プラン</a>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/case/">導入事例</a>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/document-request/">資料請求</a>
<span class="text-white d-block mb-2">ヘルプ</span>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/faq/">- よくあるご質問</a>
<a class="text-white d-block mb-2" href="https://seo.kagari.ai/contact/">- お問い合わせ</a>
</div>
<div class="col-md col-6">
<a class="text-white d-block mb-2" href="https://marketing.kagari.ai/">KAGARI Marketing</a>
<a class="text-white d-block mb-2" href="https://lamp.jp" target="_blank"><i class="fas fa-external-link-alt mr-1"></i>運営会社</a>
<a class="text-white d-block mb-2" href="https://lamp.jp/recruit/" target="_blank"><i class="fas fa-external-link-alt mr-1"></i>採用情報</a>
</div>
<div class="col-md col-6">
<a class="btn btn-success" href="<?php echo $home; ?>/contact/">お問い合わせ</a>
<!-- <a class="btn btn-outline-info" href="<?php echo $home; ?>/contact/">ログイン</a> -->
</div>
</div>
</div>
</section>
<div class="container py-md-4 py-3">
<div class="d-md-flex justify-content-between align-items-center">
<div class="d-md-flex justify-content-start align-items-center">
<a class="d-md-inline d-block mr-md-5 mb-md-0 mb-4 text-md-left text-center" href="<?php echo $home; ?>/">
<svg width="105" height="24" viewBox="0 0 105 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.79 12.41C17.5779 16.8312 13.6426 20.6785 9.15001 23.79C8.25002 24.4 7.73002 23.56 8.27002 22.88C11.6708 18.6256 15.5799 14.8038 19.91 11.5C20.66 11 21.26 11.74 20.79 12.41ZM16.59 8.06001C17.15 7.28001 16.64 6.49001 15.71 7.15001C15.15 7.54001 6.35001 15.37 4.71001 17.07C3.11001 15.69 1.42001 14.25 1.02001 13.93C0.8912 13.8204 0.724218 13.7662 0.555571 13.7793C0.386924 13.7924 0.230328 13.8718 0.120015 14C0.0258179 14.1159 -0.0256042 14.2607 -0.0256042 14.41C-0.0256042 14.5593 0.0258179 14.7041 0.120015 14.82C1.30345 16.4806 2.59985 18.0576 4.00001 19.54C4.16755 19.7644 4.41637 19.9141 4.69306 19.9571C4.96976 20.0001 5.25229 19.933 5.48001 19.77L5.62001 19.65C9.72399 16.236 13.4066 12.3453 16.59 8.06001ZM4.85001 11.06C7.54882 9.05877 10.0805 6.84147 12.42 4.43001C12.624 4.22566 12.7385 3.94873 12.7385 3.66001C12.7385 3.37129 12.624 3.09436 12.42 2.89001L12.36 2.84001C12.09 2.65001 9.47002 0.35001 9.18002 0.14001C8.58002 -0.27999 7.87002 0.31001 8.27002 1.03001C8.67002 1.75001 9.39002 2.89001 9.83002 3.58001C9.46002 3.91001 4.52001 9.50001 4.00001 10.19C3.48001 10.88 4.00001 11.71 4.88001 11.1L4.85001 11.06Z" fill="#FF6200"/><path d="M27.28 5.54999H30.15V11.31L35.42 5.54999H38.88L33.58 11.14L39.12 18.72H35.68L31.68 13.12L30.14 14.7V18.7H27.28V5.54999ZM45.87 5.45999H48.51L54.08 18.72H51.08L49.9 15.77H44.4L43.21 18.72H40.29L45.87 5.45999ZM48.87 13.21L47.15 8.93999L45.42 13.21H48.87ZM55.6 12.21C55.5881 11.3275 55.7502 10.4513 56.0769 9.63141C56.4037 8.81155 56.8888 8.06408 57.5044 7.43169C58.1201 6.79931 58.8543 6.2944 59.6651 5.9458C60.4759 5.59719 61.3475 5.41173 62.23 5.39999H62.42C63.3505 5.35043 64.2816 5.48478 65.1602 5.79536C66.0387 6.10593 66.8474 6.58664 67.54 7.20999L65.74 9.40999C64.8409 8.51024 63.622 8.00326 62.35 7.99999C61.3118 8.05184 60.3362 8.51185 59.6357 9.27981C58.9352 10.0478 58.5665 11.0614 58.61 12.1C58.5442 13.1379 58.8924 14.1596 59.5784 14.9412C60.2645 15.7228 61.2323 16.2006 62.27 16.27H62.55C63.5108 16.2985 64.456 16.0219 65.25 15.48V13.63H62.37V11.13H68V16.85C66.4669 18.207 64.4874 18.9512 62.44 18.94C61.5804 18.9803 60.7213 18.8509 59.9118 18.5591C59.1023 18.2673 58.3582 17.8188 57.7221 17.2393C57.0859 16.6598 56.5702 15.9607 56.2044 15.1818C55.8385 14.4029 55.6298 13.5596 55.59 12.7C55.58 12.5235 55.58 12.3465 55.59 12.17L55.6 12.21ZM76.15 5.45999H78.79L84.37 18.72H81.37L80.18 15.77H74.68L73.5 18.72H70.58L76.15 5.45999ZM79.15 13.21L77.43 8.93999L75.71 13.21H79.15ZM87.3 5.54999H93.24C93.9309 5.50646 94.6236 5.60269 95.2765 5.83293C95.9294 6.06316 96.5292 6.42268 97.04 6.88999C97.4157 7.29078 97.7074 7.76266 97.898 8.27786C98.0887 8.79307 98.1743 9.34119 98.15 9.88999C98.2011 10.785 97.9567 11.6721 97.4544 12.4147C96.9522 13.1573 96.2198 13.7143 95.37 14L98.55 18.7H95.21L92.42 14.5H90.17V18.72H87.31L87.3 5.54999ZM93.07 12C94.46 12 95.26 11.25 95.26 10.14C95.26 8.89999 94.41 8.25999 93.01 8.25999H90.17V12H93.07ZM101.81 5.59999H104.67V18.72H101.81V5.59999Z" fill="#233241"/></g></svg>
</a>
<a class="mr-3 text-dark" href="<?php echo $home; ?>/privacy-policy/"><small>プライバシーポリシー</small></a>
<a class="mr-3 text-dark" href="<?php echo $home; ?>/business-deal/"><small>特定商取引法に基づく表記</small></a>
<a class="text-dark" href="<?php echo $home; ?>/terms/"><small>利用規約</small></a>
</div>
<small class="text-dark d-md-inline d-block mt-md-0 mt-4 text-md-left text-center">© 2019 LAMP Co., Ltd.</small>
</div>
</div>
</footer>
<?php wp_footer(); ?>
<?php if (!is_user_logged_in()): ?>
<script>
(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://tenzk.net/mtc.js?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41','mt');
mt('send', 'pageview', {"uid":"8281348eaee5abe544377e8a30f6a3db9ed9bc41"});
</script>
<?php endif; ?>
</body>
</html>