<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside id="sidebar">
<!-- カテゴリー -->
<div class="side-inner">
<h3 class="h6 text-dark font-weight-bold">質問カテゴリー</h3>
<div class="list-group list-group-flush">
<a href="<?php echo $home; ?>/faq/" class="text-body list-group-item">全ての質問</a>
<?php
$args = [
    'taxonomy' => 'faq',
    'orderby' => 'id',
    'order' => 'asc',
    'parent' => 1,
    'hide_empty' => 0,
];
$categories = get_terms('faq_cat');
foreach ($categories as $category):
    $cat_link = get_term_link($category);
    var_dump($cat_link);
    $cat_name = $category->name;
?>
<a href="<?php echo $cat_link; ?>" class="text-body list-group-item"><?php echo $cat_name; ?></a>
<?php endforeach; ?>
</div>
</div>

</aside>
