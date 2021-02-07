<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>
<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
	include(dirname(__FILE__) . '/parts/headers/home.php');
} else {
	include(dirname(__FILE__) . '/parts/headers/single.php');
}
?>

<main id="site-content" class="site-content-singular" role="main">
	<?php include(dirname(__FILE__) . '/parts/content/single.php'); ?>
</main>

<?php get_footer(); ?>
