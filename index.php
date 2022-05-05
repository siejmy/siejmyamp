<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

get_header();
?>

<?php get_template_part('parts/headers/home'); ?>

<main id="site-content" class="sc-index" role="main">
	<?php get_template_part( 'parts/archive-title' ); ?>

	<?php

	if ( have_posts() ) {
		while ( have_posts() ) {
			get_template_part( 'parts/tablogrid-posts-random' );
		}
	}
	?>

	<?php get_template_part( 'parts/pagination' ); ?>
</main>

<?php
get_footer();
