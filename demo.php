<?php
/*header('Content-type: image/jpeg');
$image = new Imagick('apache_logo.png');
$image->thumbnailImage(100, 0);
echo $image;*/

$fullPath = __DIR__.'/gallery';

$image = new Imagick();
$image->readImage($fullPath.'/car1.jpg');
$image->resizeImage(800,600, imagick::COLOR_BLACK, 0,8);
$image->writeImage($fullPath.'/car800*600.jpg');

if($f = fopen($fullPath.'/car800*600.jpg', "w")) {
  $image->writeImageFile($f);
}