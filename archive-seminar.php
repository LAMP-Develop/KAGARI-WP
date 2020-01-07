<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$q = $wp_query->query_vars;
$postTypeNameObj = $q['post_type'];
$postTypeName = get_post_type_object($postTypeNameObj)->labels->name;
$postDesc = get_post_type_object($postTypeNameObj)->description;
?>
<div class="jumbotron-<?php echo $postTypeNameObj; ?> jumbotron m-0">
<div class="container">
<h2 class="h1 text-center text-white font-weight-bold mb-4"><?php echo $postTypeName; ?></h2>
<p class="lead text-md-center text-white m-0"><?php echo $postDesc; ?></p>
</div>
</div>
<section class="pb-5">
<div class="container">
<div class="mt-n5 post-listd-cards row justify-content-center bg-white py-4 px-3">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<div class="col-md-4 mb-md-0 mb-4">
<div class="card h-100 shadow-sm">
<?php if (isset($thumbnail) || $thumbnail): ?>
<img class="card-img-top border-bottom" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="card-body py-3">
<p class="text-dark m-0"><?php echo $t; ?></p>
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
</div>
</section>
<?php get_footer();
