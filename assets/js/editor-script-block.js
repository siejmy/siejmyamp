/**
 * Remove squared button style
 *
 */
/* global wp */
wp.domReady(function () {
  wp.blocks.unregisterBlockStyle("core/button", "squared");
});
