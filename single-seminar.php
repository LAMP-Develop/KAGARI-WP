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
$modified_time = get_the_modified_date('Y/m/d');
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = '';
}
?>
<div class="jumbotron-seminar jumbotron m-0">
<div class="container">
<h1 class="h1 text-center text-white font-weight-bold mb-4"><?php echo $t; ?></h2>
</div>
</div>
<section class="pb-5">
<div class="container">
<div class="col-lg-9 bg-white mt-n5 mx-auto px-4 px-md-5 py-4 py-md-5">
<article class="post">
<div class="mb-4">
<i class="far fa-calendar mr-1"></i><?php echo $time ?>
<?php if($time != $modified_time):?>
<i class="fas fa-redo mr-1 ml-3"></i><?php echo $modified_time ?>
<?php endif;?>
</div>
<div class="page-content">
<?php the_content(); ?>
</div>
</article>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
