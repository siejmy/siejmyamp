<?php require_once(dirname(__FILE__) . '/../config.php') ?>

<span class="socico-horizontal">
  <a href="<?php echo(Config::$facebookUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/facebook-square.svg"
      width="26"
      height="26"
      alt="Facebook siejmy"
      class="icon"
      noloading
    />
  </a>
  <a href="<?php echo(Config::$instagramUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/instagram.svg"
      width="26"
      height="26"
      alt="Instagram siejmy"
      class="icon"
      noloading
    />
  </a>
  <a href="<?php echo(Config::$twitterUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/twitter.svg"
      width="26"
      height="26"
      alt="Twitter siejmy"
      class="icon"
      noloading
    />
  </a>
</span>
<style>
.socico-horizontal {
  display: inline-block;
  vertical-align: top;
}

.socico-horizontal a {
  display: inline-block;
  text-decoration: none;
}

.socico-horizontal a .icon {
  opacity: 0.5;
  margin: 4px 0 7px 7px;
}
</style>
