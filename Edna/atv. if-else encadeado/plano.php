<?php
 
$planos= ["1- PLano Básico , 2- Plano intermediário , 3- Plano Premium , 4- Plano VIP , 5- Plano Exclusivo"];
$escolha= 3;
$valor1= 5300 * 0.10;
$valor2= 7790 * 0.15;
$valor3= 8200 * 0.20;
$valor4= 10300 * 0.25;
$valor5= 25300 * 0.30;
 
 
 
switch($escolha){
    case 1:
        echo "Você escolheu o plano Básico. Seu desconto foi de:" . $valor1;
        break;
    case 2:
        echo "Você escolheu o plano intermediário. Seu desconto foi de:" . $valor2;
        break;
    case 3:
        echo "Você escolheu o plano Premium. Seu desconto foi de:" . $valor3;
        break;
    case 4:
        echo "Você escolheu o plano VIP. Seu desconto foi de:" . $valor4;
        break;
    case 5:
        echo "Você escolheu o plano Exclusivo. Seu desconto foi de:" . $valor5;
        break;
 
        default:/* mensagem se falso */
            echo "opção inválida, tente novamente...";
            break;
}
 
 
?>
 