<?php
$author_id = get_the_author_meta('ID');
$is_admin = in_array($author_id, array(1, 11));
if(!$is_admin) {
?>
<div class="author-profile">
  <?php
  $avatarSize = 256;

  $guest_author = get_post_meta(get_the_ID(), 'guest_author', true);
  if(!empty($guest_author)) {
    $authorName = $guest_author;
    ?>
    <img src="https://www.gravatar.com/avatar/123?d=mp" alt="Avatar <?php echo $authorName; ?>" width="<?php echo $avatarSize; ?>" height="<?php echo $avatarSize; ?>" />
    <a class="author-name" rel="author">Gościnny autor:<br /><u><?php echo $authorName ?></u></a>
    <?php
  } else {
    $authorName = get_the_author_meta('display_name', $post->post_author);

    $avatarData = get_avatar_data($post->post_author, array('size' => $avatarSize));
    $url = $avatarData['url'];
    echo '<img src="' . $url . '" alt="Avatar ' . $authorName . '" width="' . $avatarSize . '" height="' . $avatarSize . '" />';
    ?>
    <a class="author-name" rel="author" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
      <?php echo $authorName ?>
    </a>

      <?php echo wp_kses_post( wpautop( get_the_author_meta( 'description', $post->post_author ) ) ); ?>

    <a class="more-link" href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
      Moje artykuły &raquo;
    </a>
  <?php } ?>
</div>
<?php } ?>
