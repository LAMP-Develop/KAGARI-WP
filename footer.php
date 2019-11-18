<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer id="footer">

</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.min.js"></script>
</body>
</html>