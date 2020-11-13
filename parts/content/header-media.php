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

<style>
.posthero {
  margin: 0 auto;
  width: 100%;
  max-width: 1400px;
  position: relative;
  background: white;
}

.posthero amp-img img {
  object-fit: cover;
}

.posthero amp-img {
  height: 66vh;
}

@media(min-width: 768px) {
  .posthero amp-img {
    height: 66vw; /* 1/2 since the image occupies the full viewport */
    max-height: 933px; /* 1400*2/3=933px */
  }
}


.posthero .herocaption {
  max-width: var(--text-column-width);
  margin: 0 auto;
  text-align: center;

  text-shadow: 0px 7px 7px rgba(0, 0, 0, 0.25);
}

.posthero .herocaption .tag {
  margin: 0 auto;
}

.posthero::after {
	content: "";
	position: absolute;
	height: 50%;
	width: 100%;
	bottom: 0;
	left: 0;
	background: -webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(20%, rgba(0, 0, 0, 0)),
		to(rgba(0, 0, 0, 0.8))
	);
	background: linear-gradient(
		to bottom,
		rgba(0, 0, 0, 0) 20%,
		rgba(0, 0, 0, 0.8) 100%
	);
	opacity: 1;
	-webkit-transition: all 0.3s ease;
	transition: all 0.5s ease;
}
</style>
