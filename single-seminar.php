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
<div class="mt-n5 mb-5 p-5 bg-white">
<?php if (get_field('seminar_content', $id)): ?>
<?php the_field('seminar_content', $id); ?>
<?php endif; ?>
</div>
<div class="overview">
<h2 class="text-dark text-center font-weight-bold mb-md-5 mb-4">セミナー概要</h2>
<div class="table-responsive">
<table class="table table-striped table-borderless">
<tbody>
<?php if (get_field('seminar_time', $id)): ?>
<tr>
<th>開催日時</th>
<td><?php the_field('seminar_time', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_place', $id)): ?>
<tr>
<th>会場</th>
<td><?php the_field('seminar_place', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_station', $id)): ?>
<tr>
<th>最寄り駅</th>
<td><?php the_field('seminar_station', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_target', $id)): ?>
<tr>
<th>対象</th>
<td><?php the_field('seminar_target', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_entry_fee', $id)): ?>
<tr>
<th>参加費</th>
<td><?php the_field('seminar_entry_fee', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_belongings', $id)): ?>
<tr>
<th>持ち物</th>
<td><?php the_field('seminar_belongings', $id) ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('seminar_caution', $id)): ?>
<tr>
<th>ご注意</th>
<td><?php the_field('seminar_caution', $id) ?></td>
</tr>
<?php endif; ?>
</tbody>
</table>
</div>
<?php if (get_field('seminar_caution', $id)): ?>
<div class="mt-4 text-center">
<a class="btn btn-success" href="<?php the_field('seminar_caution', $id); ?>" target="_blank">詳細を見る</a>
</div>
<?php endif; ?>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer();
