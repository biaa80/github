<?php

$tempo= 3;

if($tempo < 2){
    echo "Tempo de permanência: " . $tempo . "<br>";
    echo "Cobrança: $5,00";
}elseif($tempo >= 3 || $tempo <= 5){
    echo "Tempo de permanência: " . $tempo . "<br>";
    echo "Cobrança: $10,00";
}else{
    echo "Tempo de permanência: " . $tempo . "<br>";
    echo "Cobrança: $15,00";
}
?>