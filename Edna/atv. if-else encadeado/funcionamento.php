<?php
 
$dia= "quarta";
$hora= 15;
 
if($dia == "segunda" || $dia == "terça" || $dia =="quarta" || $dia =="quinta" || $dia == "sexta" ){
    if($hora >= 8 && $hora <=18){
    echo "está aberto";
}
else{
    echo "está fechado";
}
}
 
elseif($dia == "sábado" && $hora >= 9 && $hora <=13 ){
    echo "está aberto";
}
 
elseif($dia == "domingo"){
    echo "está fechado";
}
 
else{
    echo "está fechado";
}
 
 
 
 
?>