<?php
require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/ImageRenderer.php');
require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/HeroCaptionRenderer.php');
$imgRenderer = new ImageRenderer();
$captionRenderer = new HeroCaptionRenderer();

$caption = $captionRenderer->render($post, array(
  'titleTag' => 'h1',
));

$alt = $post->post_title;
$mediaId = get_post_thumbnail_id($post);
$link = get_post_permalink($post);
$mediaObj = wp_get_attachment_image_src($mediaId);
$w = $mediaObj[1];
$h = $mediaObj[2];
echo $imgRenderer->renderImageHero(array(
  'mediaId' => $mediaId,
  'tag' => 'header',
  'alt' => $alt,
  'cssClass' => 'posthero',
  'layout' => 'responsive',
  'elementId' => 'mainpost_' . $post->ID,
  'caption' => $caption,
));
?>
