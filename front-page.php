<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

get_header();
?>
<?php include(dirname(__FILE__) . '/parts/headers/home.php'); ?>

<main id="site-content" role="main">
	<?php
	require_once( ABSPATH . 'wp-content/plugins/issuepage-plugin/classes/ScrollpickerRenderer.php');
	$scrollpickerRenderer = new ScrollpickerRenderer();
	echo $scrollpickerRenderer->render();
	?>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>



