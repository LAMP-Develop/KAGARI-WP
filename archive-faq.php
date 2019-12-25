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
</div>
</div>
<section class="pb-5">
<div class="container">
<div class="row justify-content-between bg-white mt-n5 py-4 px-3">
<div class="col-md-8">
<div class="news-lists list-group">
<?php if (have_posts()): while (have_posts()): the_post(); $category = get_the_category(); ?>
<a href="<?php the_permalink(); ?>" class="rounded-0 list-group-item list-group-item-action">
<p class="text-success mb-1"><?php echo $category[0]->name; ?>カテゴリー</p>
<p class="lead text-dark mb-1">Q. <?php the_title(); ?></p>
</a>
<?php endwhile; endif; ?>
</div>
</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>
</section>
<?php get_footer();
