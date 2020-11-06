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

<main id="site-content" class="site-content-singular" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<style>
.site-content-singular .featured-media amp-img {
	width: 100%;
}

.site-content-singular .entry-content {
	max-width: 680px;
	margin: 0 auto;
}
</style>

<?php get_footer(); ?>
