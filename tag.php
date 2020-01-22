<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<div class="jumbotron-category jumbotron m-0">
<div class="container">
<h2 class="h1 text-center text-primary font-weight-bold mb-4">
<a href="<?php echo $home; ?>/blog/">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/blog_mv.svg" alt="KAGARI Blog">
</a>
</h2>
<p class="text-center m-0">WEBマーケティングのお役立ち情報を<br class="d-md-none">ご紹介いたします。</p>
</div>
</div>
<section class="pt-3 pb-5">
<div class="container">
<div class="row justify-content-between bg-white py-4 px-3">
<h2 class="w-100 h3 mb-4 pl-3">タグ：<?php echo single_tag_title(); ?></h2>
<div class="col-md-8">
<div class="post-listd-cards row">
<?php
if (have_posts()): while (have_posts()):
the_post();
$t = get_the_title();
$p = get_the_permalink();
$category = get_the_category();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
?>
<div class="col-md-6 mb-4">
<div class="card shadow-sm h-100">
<?php if ($thumbnail != ''): ?>
<img class="card-img-top" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="card-body py-3">
<p class="mb-1 text-primary"><?php echo $category[0]->name; ?></p>
<p class="mb-2 lead text-dark"><?php echo $t; ?></p>
<p class="mb-0"><?php the_time('Y/m/d');?></p>
<a href="<?php echo $p; ?>" class="stretched-link"></a>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
<?php
if (function_exists('pagination')) {
    pagination();
}
?>
</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>
</section>
<?php get_footer();
