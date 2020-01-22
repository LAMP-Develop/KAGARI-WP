<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside id="sidebar">
<!-- 記事検索 -->
<div class="side-inner mb-4">
<form class="form" method="get" action="<?php echo $home; ?>">
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text bg-white border-right-0 py-0">
<button type="submit" class="btn btn-link p-0"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.5 17.5L13.875 13.875" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
</div>
</div>
<input name="s" type="text" class="form-control border-left-0 px-1 py-4" placeholder="キーワードで検索">
</div>
</form>
</div>
<!-- カテゴリー -->
<div class="side-inner">
<h3 class="h6 text-dark font-weight-bold">カテゴリー</h3>
<div class="list-group list-group-flush">
<a href="<?php echo $home; ?>/blog/" class="text-body list-group-item">全ての記事</a>
<?php
$args = [
    'orderby' => 'id',
    'order' => 'asc',
    'parent' => 1,
    'hide_empty' => 0,
];
$categories = get_categories($args);
foreach ($categories as $category):
    $cat_link = get_category_link($category->term_id);
    $cat_name = $category->name;
?>
<a href="<?php echo $cat_link; ?>" class="text-body list-group-item"><?php echo $cat_name; ?></a>
<?php endforeach; ?>
</div>
</div>
<!-- タグ -->
<div class="side-inner mt-5">
<h3 class="h6 text-dark font-weight-bold">おすすめタグ</h3>
<?php
$tags = get_tags();
?>
<div class="tags">
<?php
foreach ($tags as $key => $tag):
$link = get_tag_link($tag->term_id);
?>
<a class="text-decoration-none text-body mr-2" href="<?php echo $link; ?>"><i class="fas fa-tag mr-1"></i><?php echo $tag->name; ?></a>
<?php endforeach; ?>
</div>
</div>

</aside>
