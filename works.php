<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<div class="row">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'works',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = $wp_url.'/lib/images/thumbnail.png';
}
?>
<div class="position-relative col-md-4">
<div class="card border-0 rounded-lg shadow-sm bg-white py-md-5 py-4 px-md-4 px-3">
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
<?php endforeach; wp_reset_postdata(); ?>
</div>