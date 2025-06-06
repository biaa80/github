<?php

$nome_aluno= "Beatriz";
$idade= 16;
$colegio= "Sesc";
define("MEDIA", 6);
$nota1= 70;
$nota2= 80;
$nota3= 50;
$nota4= 90;
$media_aluno= ($nota1 + $nota2 + $nota3 + $nota4) / 4;


echo "Nome: " . $nome_aluno . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Colégio: " . $colegio . "<br>";
echo "A média do Colégio é: " . MEDIA . "<br>";
echo "A média do aluno é: " . $media_aluno;

?>