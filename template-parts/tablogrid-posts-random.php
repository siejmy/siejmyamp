
<?php
$rowTypes = array(
  array('class' => 'uno', 'column_count' => 1),
  array('class' => 'duo', 'column_count' => 2),
  array('class' => 'tbr', 'column_count' => 3),
  array('class' => 'ltb', 'column_count' => 3),
);
the_post();
// We show column type based on random generated based on generator seeded
// with the ID of the first post
mt_srand(intval(get_the_ID()));
$rowTypeIndex = mt_rand(0, count($rowTypes) - 1);
mt_srand();

$postsLeft = wpdocs_posts_left();
if($postsLeft < $rowTypes[$rowTypeIndex]['column_count']) {
  foreach($rowTypes as $i => $rowType) {
    if($rowType['column_count'] == $postsLeft) {
      $rowTypeIndex = $i;
      break;
    }
  }
}

$rowClass = $rowTypes[$rowTypeIndex]['class'];
$columnCount = $rowTypes[$rowTypeIndex]['column_count'];

?>
<div class="tgrow_prnt"><div class="tgrow <?php echo($rowClass) ?>">
<?php
for($tabloLoopI = 0;$tabloLoopI < $columnCount;$tabloLoopI++) {
  echo('<div class="tgcol c' . ($tabloLoopI+1) . '">');
    echo(siejmy_tablogrid_client_post_render_callback(array('postId' => get_the_ID()), ''));
  echo('</div>');

  if($tabloLoopI < $columnCount - 1) {
    if(wpdocs_posts_left() - 1 < 1) {
      break;
    }
    the_post();
  }
}
?>
</div></div>
