<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$posttags = get_the_tags();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
?>
<div class="jumbotron-category jumbotron m-0">
<div class="container">
<h2 class="h1 text-center text-primary font-weight-bold mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/blog_mv.svg" alt="KAGARI Blog">
</h2>
<p class="text-center m-0">WEBマーケティングのお役立ち情報を<br class="d-md-none">ご紹介いたします。</p>
</div>
</div>
<section class="pt-3 pb-5">
<div class="container">
<div class="row justify-content-between bg-white py-4 px-md-3 rounded-lg">
<div class="col-md-8">
<article class="post px-md-3 py-4">
<div class="mb-5">
<div class="mb-3">
<i class="far fa-calendar mr-1"></i><?php the_time('Y/m/d');?>
<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
  <i class="fas fa-redo mr-1 ml-3"></i><?php the_modified_date('Y/m/d') ?>
<?php endif;?>
</div>
<h1 class="h3 text-dark font-weight-bold mb-md-4 mb-3"><?php echo $t; ?></h2>
<figure class="d-block figure w-100 p-0">
<img class="figure-img img-fluid w-100 d-block p-0" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
</div>
<div class="page-content">
<?php the_content(); ?>
</div>
</article>
</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
