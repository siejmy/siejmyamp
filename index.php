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
 */

get_header();
?>

<?php include(dirname(__FILE__) . '/parts/headers/home.php'); ?>

<main id="site-content" class="sc-index" role="main">
	<?php get_template_part( 'template-parts/archive-title' ); ?>

	<?php

	if ( have_posts() ) {
		while ( have_posts() ) {
			get_template_part( 'template-parts/tablogrid-posts-random' );
		}
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>
</main>

<?php
get_footer();
