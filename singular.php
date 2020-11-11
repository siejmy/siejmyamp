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
<?php include(dirname(__FILE__) . '/parts/headers/single.php'); ?>

<main id="site-content" class="site-content-singular" role="main">
	<?php include(dirname(__FILE__) . '/parts/content/single.php'); ?>
</main>

<?php get_footer(); ?>
