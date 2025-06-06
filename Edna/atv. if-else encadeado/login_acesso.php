<?php
 
$usuario= 371;
$senha1= 321;
$senha_adm= 2111;
$senha_gerente= 371;
 
if($usuario == $senha1){
    echo "Usuario: acesso básico";
}
elseif($usuario == $senha_gerente){
    echo "Usuario: acesso parcial";
}
elseif($usuario == $senha_adm){
    echo "Usuario: acesso total";
}
 
 
 
?>