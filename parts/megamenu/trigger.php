<div class="megamenu-section">
  <div class="trigger" on="tap:megamenu-sidebar.toggle">
    <?php get_template_part('parts/megamenu/trigger-icon') ?>
  </div>
</div>
<style>
.megamenu-section {
  display: inline-block;
  vertical-align: top;
  width: max-content;
  text-align: right;
}

.megamenu-section .trigger {
  display: inline-block;
  vertical-align: top;
  margin: 4px 5px 5px 5px;
}

.megamenu-section .trigger .icon {
  opacity: 0.5;
}
</style>
