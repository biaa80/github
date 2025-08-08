<?php
function view($id = null) {
    global $customer;
 
    $customer = find('customers', $id);
}
?>
<?php
    require_once('functions.php');
    view($_GET['id']);
?>
 
<?php include(HEADER_TEMPLATE); ?>
 
<h2>Cliente: <?php echo $customer['name']; ?></h2>
 
<hr>
 
<?php if (!empty($_SESSION['messages'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['messages']; ?></div>
<?php endif; ?>
 
<dl class="dl-horizontal">
    <dt>Nome completo:</dt>
    <dd><?php echo $customer['name']; ?></dd>
 
    <dt>Sexo:</dt>
    <dd><?php echo $customer['sex']; ?></dd>
 
    <dt>CPF:</dt>
    <dd><?php echo $customer['cpf']; ?></dd>
 
    <dt>Data de Nascimento:</dt>
    <dd><?php echo $customer['birthdate']; ?></dd>
</dl>
 
<dl class="dl-horizontal">
    <dt>CEP:</dt>
    <dd><?php echo $customer['zip_code']; ?></dd>
 
    <dt>Endereço:</dt>
    <dd><?php echo $customer['address']; ?></dd>
 
    <dt>Número:</dt>
    <dd><?php echo $customer['number']; ?></dd>
 
    <dt>Complemento:</dt>
    <dd><?php echo $customer['complement']; ?></dd>
 
    <dt>Bairro:</dt>
    <dd><?php echo $customer['hood']; ?></dd>
 
    <dt>Cidade:</dt>
    <dd><?php echo $customer['city']; ?></dd>
 
    <dt>UF:</dt>
    <dd><?php echo $customer['state']; ?></dd>
</dl>
 
<dl class="dl-horizontal">
    <dt>Telefone:</dt>
    <dd><?php echo $customer['phone']; ?></dd>
 
    <dt>Celular:</dt>
    <dd><?php echo $customer['mobile']; ?></dd>
</dl>
 
<dl class="dl-horizontal">
    <dt>Data do Cadastro:</dt>
    <dd><?php echo $customer['created']; ?></dd>
</dl>
 
<div id="actions" class="row">
    <div class="col-md-2">
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
        <a href="index.php" class="btn btn-default">Voltar</a>
    </div>
</div>
 
<?php include(FOOTER_TEMPLATE); ?>