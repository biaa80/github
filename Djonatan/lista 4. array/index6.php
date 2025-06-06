<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Mais Caro e Mais Barato</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Produto Mais Caro e Mais Barato</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite o nome e preço de cinco produtos:</label><br><br>

        <label>Produto 1:</label>
        <input type="text" name="produto[]" required> 
        <input type="number" step="0.01" name="preco[]" required><br><br>

        <label>Produto 2:</label>
        <input type="text" name="produto[]" required> 
        <input type="number" step="0.01" name="preco[]" required><br><br>

        <label>Produto 3:</label>
        <input type="text" name="produto[]" required> 
        <input type="number" step="0.01" name="preco[]" required><br><br>

        <label>Produto 4:</label>
        <input type="text" name="produto[]" required> 
        <input type="number" step="0.01" name="preco[]" required><br><br>

        <label>Produto 5:</label>
        <input type="text" name="produto[]" required> 
        <input type="number" step="0.01" name="preco[]" required><br><br>

        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produtos = $_POST["produto"];
        $precos = array_map('floatval', $_POST["preco"]);

        if (!empty($produtos) && !empty($precos)) {
            $lista_produtos = array_combine($produtos, $precos); // Cria o array associativo

            $produto_mais_caro = array_keys($lista_produtos, max($lista_produtos))[0];
            $produto_mais_barato = array_keys($lista_produtos, min($lista_produtos))[0];

            echo "<h3>Lista de Produtos e Preços:</h3>";
            echo "<ul>";
            foreach ($lista_produtos as $produto => $preco) {
                echo "<li>$produto: R$ " . number_format($preco, 2, ',', '.') . "</li>";
            }
            echo "</ul>";

            echo "<h3>Produto Mais Caro:</h3>";
            echo "<p><strong>$produto_mais_caro</strong> - R$ " . number_format($lista_produtos[$produto_mais_caro], 2, ',', '.') . "</p>";

            echo "<h3>Produto Mais Barato:</h3>";
            echo "<p><strong>$produto_mais_barato</strong> - R$ " . number_format($lista_produtos[$produto_mais_barato], 2, ',', '.') . "</p>";
        }
    }
    ?>
</body>
</html>
