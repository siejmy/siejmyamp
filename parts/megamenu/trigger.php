<div class="megamenu-section">
  <div class="trigger" on="tap:megamenu-sidebar.toggle">
    <amp-img
        src="<?php bloginfo('template_url'); ?>/assets/icons/bars.svg"
        width="24"
        height="24"
        alt="Menu"
        class="icon"
        noloading
      />
  </div>
</div>
<style>
.megamenu-section {
  display: inline-block;
  vertical-align: top;
  padding-top: 5px;
  padding-right: 5px;
  width: max-content;
  text-align: right;
}

.megamenu-section .trigger {
  display: inline-block;
  vertical-align: top;
}

.megamenu-section .trigger .icon {
  opacity: 0.5;
}
</style>
