<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();

$q = $wp_query->query_vars;
$postTypeNameObj = $q['post_type'];

if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$id = get_the_ID();

if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
?>
<div class="jumbotron-<?php echo $postTypeNameObj; ?> jumbotron m-0">
<div class="container">
<p class="text-white">導入事例</p>
<h2 class="text-white font-weight-bold"><?php echo $t; ?></h2>
<div class="text-white">
<i class="far fa-calendar mr-1"></i><?php the_time('Y/m/d');?>
<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')): ?>
<i class="fas fa-redo mr-1 ml-3"></i><?php the_modified_date('Y/m/d'); ?>
<?php endif;?>
</div>
</div>
</div>
<section class="pb-5">
<div class="container">
<div class="mt-n5 mb-5 p-md-5 p-4 bg-white rounded-lg">
<figure class="mb-4 p-4 shadow-sm">
<img class="img-fluid" src="<?php echo $thumbnail ?>" alt="">
</figure>
<div class="page-content">
<?php the_content(); ?>
</div>
<div class="mt-5 text-center">
<a class="btn btn-success" href="<?php echo $home; ?>/works/">一覧に戻る</a>
</div>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
