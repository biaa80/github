<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">    
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/headerStyles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>CRUD com Bootstrap</title>
</head> 
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
        <div class="container"> 
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a> 
            </div> 

            <div id="navbar" class="navbar-collapse collapse"> 
                <ul class="nav navbar-nav">           
                    <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                            Clientes <span class="caret"></span> 
                        </a> 
                        <ul class="dropdown-menu"> 
                            <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li> 
                            <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li> 
                        </ul> 
                    </li> 
                </ul> 

                <!-- Menu do usuário (lado direito) -->
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!empty($_SESSION['user'])): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo htmlspecialchars($_SESSION['user']['name']); ?> 
                                (<?php echo htmlspecialchars($_SESSION['user']['access_level']); ?>)
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BASEURL; ?>users/view.php?id=<?php echo (int)$_SESSION['user']['id']; ?>">Meu perfil</a></li>
                                <li><a href="<?php echo BASEURL; ?>users/edit.php?id=<?php echo (int)$_SESSION['user']['id']; ?>">Editar perfil</a></li>
                                <li><a href="<?php echo BASEURL; ?>users/password_verify.php?id=<?php echo (int)$_SESSION['user']['id']; ?>">Alterar senha</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo BASEURL; ?>logout.php">Sair</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><a href="<?php echo BASEURL; ?>login.php">Entrar</a></li>
                    <?php endif; ?>
                </ul>
            </div><!--/.navbar-collapse --> 
        </div> 
    </nav> 

    <main class="container">