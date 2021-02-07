<?php
require_once(ABSPATH . 'wp-content/plugins/issuepage-plugin/classes/IssuepageRenderer.php');
/**
 * Template Name: Strona pobierania wydania
 * Template Post Type: post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

get_header();
?>
<?php get_template_part('parts/headers/issuepage'); ?>

<main id="site-content" class="site-content-issuepage" role="main">

	<?php

	if ( have_posts() ) {
    $renderer = new IssuepageRenderer();
    echo $renderer->renderPost(get_post());
	}

	?>

</main><!-- #site-content -->
<style>
.site-content-issuepage {
  max-width: 1300px;
  margin: 0 auto;
  padding-top: 0;
  padding-left: 4%;
  padding-right: 4%;
  padding-bottom: 15rem;
}
</style>

<?php get_footer(); ?>
