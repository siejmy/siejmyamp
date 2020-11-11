
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
  include(dirname(__FILE__) . '/header-nomedia.php');
} else {
  include(dirname(__FILE__) . '/header-media.php');
}

include(dirname(__FILE__) . '/content.php');
?>

</article>
