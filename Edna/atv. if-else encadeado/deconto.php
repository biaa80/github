<?php

$valor_compra= 350;
$cupom1= 0.20;
$conta1= ($valor_compra * $cupom1);
$desconto1= ($valor_compra - $conta1);
$cupom2= 0.10;
$conta2= ($valor_compra * $cupom2);
$desconto2= ($valor_compra - $conta2);

if($valor_compra > 500){
    echo "Valor do cupom: " . $cupom1 . "<br>";
    echo "Cupom aplicado: " . $desconto1;
}elseif($valor_compra > 300 && $valor_compra < 500){
    echo "Valor do cupom: " . $cupom2 . "<br>";
    echo "Cupom aplicado: " . $desconto2;
}else{
    echo "Valor compra: " . $valor_compra . "<br>";
    echo "Não tem cupom para aplicar";
}

?>