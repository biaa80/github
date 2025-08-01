<?php
    require_once('functions.php');
    add();
?>
<?php include(HEADER_TEMPLATE); ?>
 
<h2>Novo Cliente</h2>
 
<form action="add.php" method="post">
   <!--  area de campos do form  -->
    <hr/>
 
    <div class='row'>
        <div class='form-group col-md-6'>
            <label for="campol">Nome completo</label>
            <input type="text" class="form-control" name="customer['name']">
        </div>
        <div class='form-group col-md-2'>
            <label for="campo2">Sexo</label>
            <select class="form-control" id="campo2" name="customer['sex']">
                <option value="" disable selected>Selecione</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="campo3">CPF</label>
            <imput type="text" class="form-control" name="custumer['cpf']">
        </div>
        <div class="form-group col-md-2">
            <label for="campo4">Data de Nascimento</label>
            <imput type="text" class="form-control" name="customer['birthdate']">
        </div>
    </div>

    <div class='row'>
        <div class="form-group col-md-2">
            <label for="campo3">CEP</label>
            <imput type="text" class="form-control" name="customer['zip_code']">
        </div>
        <div class="form-group col-md-8">
            <label for="campo1">Endereço</label>
            <imput type="text" class="form-control" name="customer['address']">
        </div>
        <div class="form-group col-md-2">
            <label for="campo1">Número</label>
            <imput type="text" class="form-control" name="customer['number']">
        </div>
    </div>

    <div class='row'>
        <div class="form-group col-md-5">
            <label for="campo2">Complemento</label>
            <imput type="text" class="form-control" name="customer['complement']">
        </div>
        <div class="form-group col-md-3">
            <label for="campo2">Bairros</label>
            <imput type="text" class="form-control" name="customer['hood']">
        </div>
        <div class="form-group col-md-3">
            <label for="campo1">Município</label>
            <imput type="text" class="form-control" name="customer['city']">
        </div>
        <div class="form-group col-md-1">
            <label for="campo3">UF</label>
            <imput type="text" class="form-control" name="customer['state']">
        </div>
        
    </div>
</form>

