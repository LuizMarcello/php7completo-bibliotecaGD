<?php

//Biblioteca GD

header("Content-Type: image/png");

$image = imagecreate(350,256);

$black = imagecolorallocate($image, 0,0,0);
$red = imagecolorallocate($image, 255,0,0);
$blue = imagecolorallocate($image, 0,0,255);

//Parâmetros:(resource, font, x, y, string, color);
imagestring($image,5,60,120,"Manipulando a biblioteca GD", $blue);

imagepng($image);

imagedestroy($image);

?>