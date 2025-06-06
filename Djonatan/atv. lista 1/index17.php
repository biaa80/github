<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alturas</title>
</head>
<body>
<h2>Cáculo de alturas</h2>

<?php
    
$alturaChico = 150; 
$alturaZe = 110;    

$crescimentoChico = 2; 
$crescimentoZe = 3;     

$anos = 0;

while ($alturaZe <= $alturaChico) {
    $alturaChico += $crescimentoChico; 
    $alturaZe += $crescimentoZe;       
    $anos++;                            
}

echo "Serão necessários $anos anos para que Zé seja maior que Chico.";
?>

</body>
</html>