<?php

$nome_aluno= "Beatriz";
$idade= 16;
$colegio= "Sesc";
define("MEDIA", 60);
$nota1= 80;
$nota2= 60;
$nota3= 50;
$nota4= 90;
$media_aluno= ($nota1 + $nota2 + $nota3 + $nota4) / 4;
$faltas= 20;
$faltas_aluno= 25;

if($media_aluno >= 60 && $faltas_aluno <= $faltas){

    echo "Nome: " . $nome_aluno . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Colégio: " . $colegio . "<br>";
    echo "A média do Colégio é: " . MEDIA . "<br>";
    echo "A média do aluno é: " . $media_aluno . "<br>";
    echo "Aprovado(a)";

}elseif($media_aluno >= 60 && $faltas_aluno > $faltas){

    echo "Conselho de classe";

}else{
    echo "Reprovado(a)";
}



?>