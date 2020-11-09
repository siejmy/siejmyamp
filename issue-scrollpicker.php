<div class="scrollpicker_prnt">
<div class="scrollpicker-block">
  <h2 class="h6">E-czasopismo siejmy</h2>
<?php
  $categoryId = 2;
  $opts = array(
    'cat' => $categoryId,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'numberposts' => 7,
  );
  $issuePosts = get_posts($opts);
?>
<amp-inline-gallery layout="container">
  <amp-base-carousel
    id="scrollpicker"
    class="gallery"
    layout="responsive"
    width="3"
    height="2"
    snap-align="center"
    loop="true"
    visible-count="1.7"
  >
    <?php
      require_once( ABSPATH . 'wp-content/plugins/siejmycommon-plugin/classes/ImageRenderer.php');
      $imageRenderer = new ImageRenderer();
        foreach($issuePosts as $post) {
          $alt = $post->post_title;
          $mediaId = get_post_thumbnail_id($post);
          $link = get_post_permalink($post);
          echo('<a href="' . $link . '" class="imglink">');
          echo($imageRenderer->renderImgByAttachmentId($mediaId, $alt));
          echo('</a>');
        }
    ?>
    <div class="slide see-more-slide">
      <p><a href="<?php echo(get_category_link($categoryId)) ?>">Zobacz<br /> poprzednie<br /> wydania &raquo;</a></p>
    </div>
  </amp-base-carousel>
</amp-inline-gallery>
<div class="bottom-shadow-line"></div>
</div>
</div>
<style>
  .scrollpicker_prnt {
    width: 100%;
  }

  .scrollpicker-block {
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 4%;
    box-shadow: inset 0 7px 9px -7px rgba(0,0,0,0.4);
    background: #eee;
    position: relative;
  }

  .scrollpicker-block h2 {
    padding-top: 2rem;
    margin-bottom: 1rem;
    text-align: center;
    text-transform: uppercase;
    color: #555;
    letter-spacing: 0.75px;
  }

  .scrollpicker-block .bottom-shadow-line {
    box-shadow: inset 0 -7px 9px -7px rgba(0,0,0,0.4);
    height: 3rem;
  }

  .scrollpicker-block .imglink {
    display: grid;
    position: relative;
  }

  .scrollpicker-block .imglink amp-img img {
    object-fit: contain;
  }

  .scrollpicker-block .see-more-slide {
    width: 100%;
  }

  .scrollpicker-block .see-more-slide p {
    width: 77%;
    margin: 0 auto;
    display: block;
    height: inherit;
    background: #ccc;
    color: #555;
    padding: 2rem;
  }

  .scrollpicker-block .imglink::after {
    content: 'Zobacz ☞';
    display: block;
    position: absolute;
    bottom: -5px;
    right: 7%;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    font-size: 12px;
    line-height: 12px;
    padding: 3px;
  }
  @media (min-width: 768px) {
    .scrollpicker_prnt {
      max-width: 1300px;
      margin: 0 auto;
      margin-bottom: 4%;
      padding-left: 4%;
      padding-right: 4%;
    }
  }
</style>
