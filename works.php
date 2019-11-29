<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<div class="row align-items-stretch">
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
<div class="col-md-4 mb-md-0 mb-3">
<div class="position-relative card border-0 rounded-lg shadow-sm">
<img class="card-img-top" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
<div class="card-body">
<h3 class="h5 text-dark font-weight-bold"><?php echo $t; ?></h3>
</div>
<a class="stretched-link" href="<?php echo $p; ?>"></a>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>