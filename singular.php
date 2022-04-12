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
<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
	get_template_part('parts/headers/home');
} else {
	get_template_part('parts/headers/single');
}
?>

<main id="site-content" class="site-content-singular" role="main">
	<?php get_template_part('parts/content/single'); ?>

	<?php get_template_part('parts/content/single-bottom'); ?>
</main>

<?php get_footer(); ?>
