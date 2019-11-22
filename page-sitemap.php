<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>

<div class="sitemap">
<h3 class="text-dark h5 mb-3">ページ</h3>
<?php
$args = [
    'post_type' => 'page',
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'ASC',
];
$the_query = new WP_Query($args);
?>
<div class="list-group">
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>

<div class="sitemap mt-5">
<h3 class="text-dark h5 mb-3">投稿</h3>
<?php
$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'ASC',
];
$the_query = new WP_Query($args);
?>
<div class="list-group">
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>

<div class="sitemap mt-5">
<h3 class="text-dark h5 mb-3">導入事例</h3>
<?php
$args = [
    'post_type' => 'works',
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'ASC',
];
$the_query = new WP_Query($args);
?>
<div class="list-group">
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>

</div>
</section>
<?php get_footer();
