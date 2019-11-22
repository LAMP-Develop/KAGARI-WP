<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-md-5 mb-4"><?php post_type_archive_title('', true); ?></h2>
<h3 class="font-size-lg text-center text-dark font-weight-bold m-0">業種・業態を問わず様々なお客様にご利用いただいています</h3>
</div>
</section>
<section class="sec pt-0">
<div class="container">
<div class="row position-relative mt-n5">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = $wp_url.'/lib/images/thumbnail.png';
}
?>
<div class="position-relative col-md-4 mb-4">
<div class="card border-0 rounded-lg shadow-sm bg-white py-md-5 py-4 px-md-4">
<div class="thumbnail text-center">
<img class="img-fluid" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<hr class="my-md-5 my-4 w-100">
<div class="title">
<h3 class="m-0 lead text-dark"><?php echo $t; ?></h3>
</div>
<a class="stretched-link" href="<?php echo $p; ?>"></a>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php get_footer();
