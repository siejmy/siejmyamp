<?php
function cleanImage($path) {
  $img = new Imagick(realpath($path));
  $profiles = $img->getImageProfiles("icc", true);
  $img->stripImage();

    if(!empty($profiles)) {
       $img->profileImage("icc", $profiles['icc']);
    }
    $img->setImageFormat('png');
    $img->setImageCompressionQuality(9);
    // $img->resizeImage(12, 8, imagick::FILTER_TRIANGLE, 2);
    $blob = $img->getImageBlob();
    $img->destroy();
    return $blob;
}

function pngBlobToBase64DataSrc($blob) {
  return 'data:image/png;base64,' . base64_encode($blob);
}
/*
$url = 'http://localhost:8888/wp-content/uploads/2020/11/dave-herring-KMMR__2LEQY-unsplash-12x8.jpg';
$imgBytes = getImgBytes($url);
$b64_image_data =  chunk_split(base64_encode($ret_val));
*/

$mediaId = 19;
$blurry_size = 'tablogrid_blurry';
$attachedFileLocalPath = get_attached_file($mediaId);
$metadata = wp_get_attachment_metadata($mediaId);

$blurrySizeMeta = $metadata['sizes'][$blurry_size];
$blurryLocalPath = '';
$blurryFileContents = '';
$cleanedImgBytes = '';
$base64Img = '';
if($blurrySizeMeta) {
  $blurryLocalPath = dirname($attachedFileLocalPath) . '/' . $blurrySizeMeta['file'];
  $blurryFileContents = file_get_contents($blurryLocalPath);
  $cleanedImgBytes = cleanImage($blurryLocalPath);
  $base64Img = pngBlobToBase64DataSrc($cleanedImgBytes);
}

$blurrySrc = wp_get_attachment_image_src($mediaId, $blurry_size);
$data = array(
  'blurryPath' => $blurryLocalPath,
  'blurryFileSize' => strlen($blurryFileContents),
  'cleanedImgSize' => strlen($cleanedImgBytes),
  'base64Bytes' => strlen($base64Img),
);
?>

<hr />
<pre>
<?php print_r($data) ?>
<amp-img src="<?php echo($base64Img); ?>" width="1300" height="1950" />
</pre>
<hr />
