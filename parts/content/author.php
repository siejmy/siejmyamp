<div class="author-profile">
  <?php
  require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/ImageRenderer.php');
  $imgRenderer = new ImageRenderer();

  if(function_exists('get_avatar_url')) {
    $url = get_avatar_url($post->post_author);
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
    Chcesz przeczytać inne moje artykuły? &raquo;
  </a>
  <!-- TODO behavioural slot below-author-bio -->
</div>
<style>
.author-profile {
  text-align: center;
  width: 220px;
  margin: 0 auto;
  color: #777;
}

.author-profile amp-img {
  display: block;
  margin: 0 auto;
  margin-bottom: 3rem;
  width: 100px;
  height: 100px;
  border-radius: 50% 50%;
}

.author-profile amp-img img {
  object-fit: cover;
}

@media(min-width: 768px;) {
  .author-profile amp-img img {
    filter: grayscale(100%);
    object-fit: cover;
  }

  .author-profile:hover amp-img img {
    filter: none;
  }
}

.author-profile .author-name {
  display: block;
  font-weight: 900;
  font-size: 1.6em;
  line-height: 3rem;
  color: #888;
  text-decoration: none;
  margin-bottom: 0rem;
}

.author-profile p, .author-profile .more-link {
  margin-bottom: 3rem;
  padding: 0 1rem;
  line-height: 2rem;
  font-size: 1.3rem;
}

.author-profile .more-link {
  margin: 0 auto;
  max-width: 13rem;
  display: block;
}
</style>
