<?php
    require_once('functions.php');
    edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
    <hr/>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo1">Nome completo</label>
            <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo2">Sexo</label>
            <select class="form-control" id="campo2" name="customer['sex']">
                <option value="" disabled>Selecione</option>
                <option value="M" <?php echo ($customer['sex'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
                <option value="F" <?php echo ($customer['sex'] == 'F') ? 'selected' : ''; ?>>Feminino</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="campo3">CPF</label>
            <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo4">Data de Nascimento</label>
            <input type="date" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label for="campo1">CEP</label>
            <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
        </div>

        <div class="form-group col-md-8">
            <label for="campo2">Endereço</label>
            <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo3">Número</label>
            <input type="text" class="form-control" name="customer['number']" value="<?php echo $customer['number']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Complemento</label>
            <input type="text" class="form-control" name="customer['complement']" value="<?php echo $customer['complement']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="campo2">Bairro</label>
            <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="campo3">Município</label>
            <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
        </div>

        <div class="form-group col-md-1">
            <label for="campo4">UF</label>
            <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label for="campo1">Telefone</label>
            <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="campo2">Celular</label>
            <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
        </div>
    </div>

    <input type="hidden" name="customer['created']" value="<?php echo $customer['created']; ?>" disabled>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>