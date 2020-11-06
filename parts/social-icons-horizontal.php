<?php require_once(dirname(__FILE__) . '/../config.php') ?>

<span class="socico-horizontal">
  <a href="<?php echo(Config::$facebookUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/facebook-square.svg"
      width="24"
      height="24"
      alt="Facebook siejmy"
      class="icon"
      noloading
    />
  </a>
  <a href="<?php echo(Config::$instagramUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/instagram.svg"
      width="24"
      height="24"
      alt="Instagram siejmy"
      class="icon"
      noloading
    />
  </a>
  <a href="<?php echo(Config::$twitterUrl) ?>">
    <amp-img
      src="<?php bloginfo('template_url'); ?>/assets/icons/twitter.svg"
      width="24"
      height="24"
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
  padding-top: 5px;
  padding-left: 5px;
}

.socico-horizontal a {
  display: inline-block;
  text-decoration: none;
}

.socico-horizontal a .icon {
  opacity: 0.5;
  margin: 5px 0 5px 5px;
}
</style>
