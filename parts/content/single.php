
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php
$mediaId = get_post_thumbnail_id($post);
if(empty($mediaId)) {
  include(dirname(__FILE__) . '/header-nomedia.php');
} else {
  include(dirname(__FILE__) . '/header-media.php');
}
?>


<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

  <div class="entry-content">

    <?php
    if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
      the_excerpt();
    } else {
      the_content( __( 'Continue reading', 'siejmyamp' ) );
    }
    ?>

  </div><!-- .entry-content -->

</div><!-- .post-inner -->

<div class="section-inner">
  <?php
  wp_link_pages(
    array(
      'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'siejmyamp' ) . '"><span class="label">' . __( 'Pages:', 'siejmyamp' ) . '</span>',
      'after'       => '</nav>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
    )
  );

  edit_post_link();

  // Single bottom post meta.
  siejmyamp_the_post_meta( get_the_ID(), 'single-bottom' );

  if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

    get_template_part( 'template-parts/entry-author-bio' );

  }
  ?>

</div><!-- .section-inner -->

<?php

if ( is_single() ) {

  get_template_part( 'template-parts/navigation' );

}

/**
 *  Output comments wrapper if it's a post, or if comments are open,
 * or if there's a comment number – and check for password.
 * */
if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
  ?>

  <div class="comments-wrapper section-inner">

    <?php comments_template(); ?>

  </div><!-- .comments-wrapper -->

  <?php
}
?>

</article><!-- .post -->
