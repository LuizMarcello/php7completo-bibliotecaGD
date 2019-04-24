<?php

//Setando o tipo do arquivo:
header("Content-type: image/jpeg");

//Resource/manipulador do arquivo:
$file = "imagens".DIRECTORY_SEPARATOR."wallpaper.jpg";

//Definindo os novos tamanhos:
$new_width = 256;
$new_height = 256;

//Função nativa 'list()':
//Função nativa 'getimagesize()':
//Obtendo os tamanhos atuais de uma imagem:
list($old_width, $old_height) = getimagesize($file);

//Função nativa 'imagecreatetruecolor()': Carrega a paleta de 16 milhões de côres.
$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

//Função nativa da biblioteca GD para fazer thumbnails:
//Copia e redimensiona parte de uma imagem, com reamostragem:
imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

//Construindo a imagem:
imagejpeg($new_image);

//Destruindo(limpando da memória):
imagedestroy($old_image);
imagedestroy($new_image);







?>