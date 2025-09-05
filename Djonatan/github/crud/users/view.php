<?php
    require_once('functions.php');
    view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente: <?php echo $user['name']; ?></h2>

<hr>

<?php if (!empty($_SESSION['messages'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['messages']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
    <dt>Nome completo:</dt>
    <dd><?php echo $user['name']; ?></dd>

    <dt>Sexo:</dt>
    <dd><?php echo $user['sex']; ?></dd>

    <dt>CPF:</dt>
    <dd><?php echo $user['cpf']; ?></dd>

    <dt>Data de Nascimento:</dt>
    <dd><?php echo $user['birthdate']; ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>CEP:</dt>
    <dd><?php echo formataCEP($user['zip_code']); ?></dd>

    <dt>Endereço:</dt>
    <dd><?php echo $user['address']; ?></dd>

    <dt>Número:</dt>
    <dd><?php echo $user['number']; ?></dd>

    <dt>Complemento:</dt>
    <dd><?php echo $user['complement']; ?></dd>

    <dt>Bairro:</dt>
    <dd><?php echo $user['hood']; ?></dd>

    <dt>Cidade:</dt>
    <dd><?php echo $user['city']; ?></dd>

    <dt>UF:</dt>
    <dd><?php echo $user['state']; ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>Telefone:</dt>
    <dd><?php echo formataTelefone($user['phone']); ?></dd>

    <dt>Celular:</dt>
    <dd><?php echo formataTelefone($user['mobile']); ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>Data do Cadastro:</dt>
    <dd><?php echo $user['created']; ?></dd>
</dl>

<div id="actions" class="row">
    <div class="col-md-2">
        <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
        <a href="index.php" class="btn btn-default">Voltar</a>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>