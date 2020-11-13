
<article class="single-article" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
  include(dirname(__FILE__) . '/header-nomedia.php');
} else {
  include(dirname(__FILE__) . '/header-media.php');
}
?>
  <div class="columns">
    <?php
    include(dirname(__FILE__) . '/content.php');

    include(dirname(__FILE__) . '/author.php');
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
