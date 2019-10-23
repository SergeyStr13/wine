<?php
/*header('Content-type: image/jpeg');
$image = new Imagick('apache_logo.png');
$image->thumbnailImage(100, 0);
echo $image;*/

$fullPath = __DIR__.'/gallery';

$thumb = new Imagick();
$thumb->readImage($fullPath.'/car1.jpg');
$thumb->resizeImage(800,600, imagick::COLOR_BLACK, 0,8);
$thumb->writeImageFile($fullPath.'/car800*600.jpg');

