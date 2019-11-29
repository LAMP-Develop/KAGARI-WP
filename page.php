<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4"><?php the_title(); ?></h2>
<div class="page-conent">
<?php the_content(); ?>
</div>
</div>
</section>
<?php get_footer();