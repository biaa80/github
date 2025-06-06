<?php

$nome_cliente= "Gabrielle";
$valor_compra= 100;
$cupom= 0.10;
$desconto= ($valor_compra * $cupom);
$total= ($valor_compra - $desconto);

echo "Nome: " . $nome_cliente . "<br>";
echo "Preço do produto: " . $valor_compra . "<br>";
echo "Valor do cupom: " . $cupom . "<br>";
echo "Total: " . $total . "<br>";
echo "Cupom aplicado com sucesso!";




?>