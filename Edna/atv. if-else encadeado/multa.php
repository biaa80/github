<?php

$velocidade_carro= 80;
$velocidade_multa= 60;
$multa= 5;
$conta= ($velocidade_carro - $multa);
$conta2= ($conta * $multa);

if($velocidade_carro <= $velocidade_multa){
    echo "Não ultrapassou o limite";
}
else{
    echo "Ultrapasou o limite de velocidade. Multa:" . $conta2;
}

?>