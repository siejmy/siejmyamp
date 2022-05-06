<div class="author-profile">
  <?php
  require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/ImageRenderer.php');
  $imgRenderer = new ImageRenderer();
  $avatarSize = 256;

  $authorName = get_the_author_meta('display_name', $post->post_author);
  $avatarData = get_avatar_data($post->post_author, array('size' => $avatarSize));
  echo('<!-- avatar_data');
  print_r($avatarData);
  echo('-->');
  $url = $avatarData['url'];
  echo '<img src="' . $url . '" alt="Avatar ' . $authorName . '" width="' . $avatarSize . '" height="' . $avatarSize . '" />'
  ?>
  <a class="author-name" rel="author" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
    <?php echo $authorName ?>
  </a>

    <?php echo wp_kses_post( wpautop( get_the_author_meta( 'description', $post->post_author ) ) ); ?>

  <a class="more-link" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
    Moje artykuły &raquo;
  </a>
</div>
