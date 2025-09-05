<?php
    require_once('functions.php');
    edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
    <hr/>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo1">Nome completo</label>
            <input type="text" class="form-control" name="user['name']" value="<?php echo $user['name']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo2">Sexo</label>
            <select class="form-control" id="campo2" name="user['sex']">
                <option value="" disabled>Selecione</option>
                <option value="M" <?php echo ($user['sex'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
                <option value="F" <?php echo ($user['sex'] == 'F') ? 'selected' : ''; ?>>Feminino</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="campo3">CPF</label>
            <input type="text" class="form-control" name="user['cpf']" value="<?php echo $user['cpf']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo4">Data de Nascimento</label>
            <input type="date" class="form-control" name="user['birthdate']" value="<?php echo $user['birthdate']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label for="campo1">CEP</label>
            <input type="text" class="form-control" name="user['zip_code']" value="<?php echo $user['zip_code']; ?>">
        </div>

        <div class="form-group col-md-8">
            <label for="campo2">Endereço</label>
            <input type="text" class="form-control" name="user['address']" value="<?php echo $user['address']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo3">Número</label>
            <input type="text" class="form-control" name="user['number']" value="<?php echo $user['number']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Complemento</label>
            <input type="text" class="form-control" name="user['complement']" value="<?php echo $user['complement']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="campo2">Bairro</label>
            <input type="text" class="form-control" name="user['hood']" value="<?php echo $user['hood']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="campo3">Município</label>
            <input type="text" class="form-control" name="user['city']" value="<?php echo $user['city']; ?>">
        </div>

        <div class="form-group col-md-1">
            <label for="campo4">UF</label>
            <input type="text" class="form-control" name="user['state']" value="<?php echo $user['state']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label for="campo1">Telefone</label>
            <input type="text" class="form-control" name="user['phone']" value="<?php echo $user['phone']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo2">Celular</label>
            <input type="text" class="form-control" name="user['mobile']" value="<?php echo $user['mobile']; ?>">
        </div>
    </div>

    <input type="hidden" name="user['created']" value="<?php echo $user['created']; ?>" disabled>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>