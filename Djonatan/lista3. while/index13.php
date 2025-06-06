<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Conversão: Celsius para Fahrenheit</title>
    <style>
        table {
            width: 25%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: rgb(188, 125, 217);
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Tabela de Conversão: Celsius → Fahrenheit</h2>

    <table>
        <tr>
            <th>Celsius (°C)</th>
            <th>Fahrenheit (°F)</th>
        </tr>

        <?php
        for ($celsius = 0; $celsius <= 100; $celsius += 5) {
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<tr>
                    <td>$celsius</td>
                    <td>$fahrenheit</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
