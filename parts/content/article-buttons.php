<aside class="artbtns" id="article-buttons">
    <amp-img
      class="logo"
      width="2"
      height="2"
      src="<?php bloginfo('template_url'); ?>/assets/images/siejmy-logo-color-amp.min.svg"
      alt="Logo siejmy"
      layout="responsive"
      noloading
    />
  <strong class="title"><?php the_title(); ?></strong>
  <span class="author"><?php echo get_the_author_meta('display_name', $post->post_author) ?></span>

  <a class="siejmybtn share">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/facebook-square.svg"
      width="12"
      height="12"
      alt="Instagram siejmy"
      class="icon"
      noloading
    />
    Udostępnij
  </a>

  <a class="siejmybtn comment">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/comment.svg"
      width="12"
      height="12"
      alt="Instagram siejmy"
      class="icon"
      noloading
    />
    Skomentuj
  </a>

  <amp-social-share
  type="facebook"
  class="fb-share"
  width="200"
  height="20"
  aria-label="Udostępnij"
  data-param-text="Siejmy.pl — <?php the_title(); ?>"
  data-param-app_id="<?php echo(Config::$facebookAppId);  ?>"
>Udostępnij</amp-social-share>
</aside>
<style>
.artbtns {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  height: 4rem;
  z-index: var(--z-index-sticky);

  display: flex;
  flex-direction: row nowrap;
  justify-content: space-evenly;
  align-items: center;


  box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.8);
  background: white;
}

.artbtns .title {
  display: none;
}
.artbtns .author {
  display: none;
}

.artbtns .logo {
  order: 2;
  width: 3rem;
  height: 3rem;
}

.artbtns .siejmybtn.share {
  order: 1;
}

.artbtns .siejmybtn.comment {
  order: 3;
}

.artbtns .fb-share {

}

.artbtns .siejmybtn {
  position: relative;
  padding-left: 22px;
}

.artbtns .siejmybtn .icon {
  width: 12px;
  height: 12px;
  position: absolute;
  top: 5px;
  left: 6px;
  opacity: 0.7;
}
</style>
