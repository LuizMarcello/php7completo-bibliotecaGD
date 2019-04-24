<?php

//Criando o resource/manipulador, baseado em outra imagem:
$image = imagecreatefromjpeg("certificado.jpg");

//Criando as paletas de côres:
$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);

//Criando as strings para a imagem:
//imagettftext():resource/tam.da.fonte/angulo/x/y/paleta/caminho e nome da fonte/texto.
//imagettftext(): Função nativa para alterar/acrecentar 'fontes externas':
imagettftext($image,32,0,320,250,$titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image,32,0,375,350,$titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Luiz Marcello");
imagestring($image,3,415,370,utf8_decode("Concluído em: ").date("d/m/Y"),$gray);

//Alterando o tipo da imagem:
header("Content-type: image/jpeg");

//Criando a imagem:
imagejpeg($image);

//Destruindo o resource/manipulador:
imagedestroy($image);


?>