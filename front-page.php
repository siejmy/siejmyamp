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
<?php get_template_part('parts/headers/home'); ?>

<main id="site-content" role="main">
	<?php get_template_part('parts/frontpage-main'); ?>
	<?php

	if ( have_posts() ) {
			the_post();
			the_content();
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>



