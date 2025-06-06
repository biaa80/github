<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuração</title>
</head>
<body>
<h2>Programa de Apuração</h2>

<form method="post">
    <label>Votos para o candidato A:</label>
    <input type="number" name="votos_a" required><br><br>

    <label>Votos para o candidato B:</label>
    <input type="number" name="votos_b" required><br><br>

    <label>Votos para o candidato C:</label>
    <input type="number" name="votos_c" required><br><br>

    <label>Votos em branco:</label>
    <input type="number" name="votos_brancos" required><br><br>

    <label>Votos nulos:</label>
    <input type="number" name="votos_nulos" required><br><br>

    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $votos_a = intval($_POST["votos_a"]);
    $votos_b = intval($_POST["votos_b"]);
    $votos_c = intval($_POST["votos_c"]);
    $votos_brancos = intval($_POST["votos_brancos"]);
    $votos_nulos = intval($_POST["votos_nulos"]);

    $total_eleitores = $votos_a + $votos_b + $votos_c + $votos_brancos + $votos_nulos;

    if ($total_eleitores > 0) {
        $percentual_a = ($votos_a / $total_eleitores) * 100;
        $percentual_b = ($votos_b / $total_eleitores) * 100;
        $percentual_c = ($votos_c / $total_eleitores) * 100;
        $percentual_brancos = ($votos_brancos / $total_eleitores) * 100;
        $percentual_nulos = ($votos_nulos / $total_eleitores) * 100;

        echo "<h3>Resultados da Eleição</h3>";
        echo "Total de eleitores: $total_eleitores<br>";
        echo "Candidato A: " . round($percentual_a, 2) . "%<br>";
        echo "Candidato B: " . round($percentual_b, 2) . "%<br>";
        echo "Candidato C: " . round($percentual_c, 2) . "%<br>";
        echo "Votos em branco: " . round($percentual_brancos, 2) . "%<br>";
        echo "Votos nulos: " . round($percentual_nulos, 2) . "%<br>";
    } else {
        echo "<p>Não há votos computados.</p>";
    }
}
?>
</body>
</html>