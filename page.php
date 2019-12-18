<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="py-5">
<div class="container">
<h2 class="text-dark text-center font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>
<div class="page-content">
<?php the_content(); ?>
</div>
</div>
</section>
<?php get_footer();