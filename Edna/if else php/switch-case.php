<?php

$tarefas= ["1- Estudar", "2- Jogar", "3- Tomar banho"];
$escolha= 1;

switch($escolha){
    case 1:
        echo "Você escolheu estudar";
        break;
    case 2:
        echo"Você escolheu jogar";
        break;
    case 3:
        echo"Você escolheu tomar banho";
        break;
    default: //mensagem se falso
        echo "Opção imválida, tente novamnete...";
        break;
}

?>