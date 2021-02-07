
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
<style>

@media(min-width: 1200px) {
  .single-article .columns {
    position: relative;
    width: 100%;
    margin: 0 auto;
  }

  .author-profile {
    position: absolute;
    top: 9rem;
    left: calc(50% + (var(--text-column-width)/2) + 3rem);
  }
}
</style>
