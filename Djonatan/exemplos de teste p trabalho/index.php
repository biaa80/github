<?php
class UsuarioModel {
    public function obterUsuarios() {
        return ['Alice', 'Bob', 'Carlos'];
    }
}


<?php
class UsuarioView {
    public function exibirUsuarios(array $usuarios) {
        echo "<ul>";
        foreach ($usuarios as $usuario) {
            echo "<li>" . htmlspecialchars($usuario) . "</li>";
        }
        echo "</ul>";
    }
}


<?php
class UsuarioPresenter {
    private $model;
    private $view;

    public function __construct(UsuarioModel $model, UsuarioView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function apresentarUsuarios() {
        $usuarios = $this->model->obterUsuarios();
        $this->view->exibirUsuarios($usuarios);
    }
}




<?php
class Contador {
    private $valor = 0;

    public function incrementar() {
        $this->valor++;
    }

    public function obterValor() {
        return $this->valor;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <p>Valor atual: <?php echo $valor; ?></p>
    <a href="index.php?acao=incrementar">Incrementar</a>
</body>
</html>

<?php
require 'Contador.php';

$contador = new Contador();
$acao = $_GET['acao'] ?? 'exibir';

if ($acao === 'incrementar') {
    $contador->incrementar();
    header('Location: index.php');
    exit();
} elseif ($acao === 'exibir') {
    $valor = $contador->obterValor();
    include 'exibir_contador.php';
} else {
    echo 'Ação inválida!';
}
?>

