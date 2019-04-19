<?php

//Biblioteca GD

//header(): Função nativa php 
//Mudando o tipo de resposta do arquivo:
header("Content-Type: image/png");

//'$image': Variável que será o manipulador/resource
//do arquivo de imagem a ser criado
//imagecreate(): Função nativa que cria uma nova paleta de côres
//(que vão ser usadas), baseada na imagem.
//Parâmetros: Largura e altura da tela.
$image = imagecreate(256, 256);
//Criando as côres da paleta:
//imagecolorallocate(): Função nativa php que aloca 
//uma côr(paleta) para a imagem:
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//Escrevendo horizontalmente na tela:
//imagestring(): Função nativa php para escrever na imagem.
//Parâmetros:(resource, font, x, y, string, color);
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

//imagepng(): Função nativa php, que gera uma imagem 'png', cfe. 
//parâmetro da função 'header()' acima, no começo.
imagepng($image);

//Destruindo o resource '$image':
imagedestroy($image);

?>