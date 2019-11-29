<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-md-5 mb-4"><?php post_type_archive_title('', true); ?></h2>
<h3 class="font-size-lg text-center text-dark font-weight-bold">業種・業態を問わず様々なお客様にご利用いただいています</h3>
<div class="row position-relative mt-5">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = $wp_url.'/lib/images/thumbnail.png';
}
?>
<div class="col-md-4 mb-md-0 mb-3">
<div class="position-relative card border-0 rounded-lg shadow-sm">
<img class="card-img-top" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<div class="card-body">
<h3 class="h5 text-dark font-weight-bold"><?php echo $t; ?></h3>
</div>
<a class="stretched-link" href="<?php echo $p; ?>"></a>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php get_footer();
