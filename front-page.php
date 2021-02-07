<?php
get_header();
?>
<?php include(dirname(__FILE__) . '/parts/headers/home.php'); ?>

<main id="site-content" role="main">
	<?php

	if ( have_posts() ) {
			the_post();
			the_content();
			// get_template_part( 'template-parts/content', get_post_type() );
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>



