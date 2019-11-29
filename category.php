<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray-3">
<div class="container">
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4"><?php single_cat_title(); ?></h2>
<ul class="list-group">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$time = get_field('seminar_time', get_the_ID());
$p = get_field('seminar_url', get_the_ID());
?>
<li class="list-group-item rounded-0">
<a class="row mx-0" href="<?php echo $p; ?>" class="text-decoration-none" target="_blank" rel="nofollow">
<time class="px-md-3 px-0 col-md-2" datetime="<?php the_time('Y-m-d'); ?>" class="d-block text-secondary mb-1"><?php echo $time; ?></time>
<p class="px-md-3 px-0 col-md-10 m-0 text-dark"><?php echo $t; ?></p>
</a>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
</section>
<?php get_footer();