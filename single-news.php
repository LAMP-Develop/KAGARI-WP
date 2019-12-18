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
?>
<div class="jumbotron-<?php echo $postTypeNameObj; ?> jumbotron m-0">
<div class="container">
<h2 class="h1 text-center text-white font-weight-bold mb-4"><?php echo $t; ?></h2>
</div>
</div>
<section class="pb-5">
<div class="container">
<div class="mt-n5 mb-5 p-md-5 p-4 bg-white">
<div class="mb-3">
<i class="far fa-calendar mr-1"></i><?php the_time('Y/m/d');?>
<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')): ?>
<i class="fas fa-redo mr-1 ml-3"></i><?php the_modified_date('Y/m/d'); ?>
<?php endif;?>
</div>
<?php the_content(); ?>
<div class="mt-5 text-center">
<a class="btn btn-success" href="<?php echo $home; ?>/news/">一覧に戻る</a>
</div>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
