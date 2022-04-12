
<article class="single-article" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
  get_template_part('parts/content/header-nomedia');
} else {
  get_template_part('parts/content/header-media');
}
?>
  <div class="columns">
    <?php
    get_template_part('parts/content/content');

    get_template_part('parts/content/author');
    ?>
  </div>
</article>
