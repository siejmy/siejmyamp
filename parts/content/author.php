<div class="author-profile">
  <?php
  require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/ImageRenderer.php');
  $imgRenderer = new ImageRenderer();

  if(function_exists('get_avatar_data')) {
    $avatarData = get_avatar_data($post->post_author);
    $url = $avatarData['url'];
    $id = empty($url) ? '' : attachment_url_to_postid($url);
    $alt = '';
    if($id) {
      echo $imgRenderer->renderImgByAttachmentId($id, $alt, array(
        'showSrcset' => false,
        'default_size' => 'siejmy_100',
      ));
    }
  }
  ?>
  <a class="author-name" rel="author" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
    <?php echo get_the_author_meta('display_name', $post->post_author) ?>
  </a>

    <?php echo wp_kses_post( wpautop( get_the_author_meta( 'description', $post->post_author ) ) ); ?>

  <a class="more-link" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
    Moje artykuły &raquo;
  </a>
</div>
