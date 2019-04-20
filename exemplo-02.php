<?php

//Criando o resource/manipulador, baseado em outra imagem:
$image = imagecreatefromjpeg("certificado.jpg");

//Criando as paletas de côres:
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);

//Criando as strings para a imagem:
imagestring($image,5,450,150,"CERTIFICADO",$titleColor);
imagestring($image,5,440,350,"Luiz Marcello",$titleColor);
imagestring($image,3,415,370,utf8_decode("Concluído em: ").date("d/m/Y"),$gray);

//Alterando o tipo da imagem:
header("Content-type: image/jpeg");

//Criando a imagem, com nome dinâmico, do tipo definido no 'header()' acima.
//Qualidade: de 0 a 100:
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 70);

//Destruindo o resource/manipulador:
imagedestroy($image);


?>