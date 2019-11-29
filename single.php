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
<section class="sec sec-bg-dark">
<div class="container">
<h2 class="h3 text-center text-white font-weight-bold mb-md-5 mb-4"><?php echo $t; ?></h2>
<figure class="d-block figure mb-0 mx-auto p-0">
<img class="figure-img img-fluid rounded-lg shadow-sm mx-auto d-block col-6 p-0" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
</div>
</section>
<article class="post sec pt-0">
<div class="container">
<div class="position-relative mt-n5 card border-0 bg-white p-md-5 p-4 shadow-sm">
<?php the_content(); ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>
<?php get_footer();