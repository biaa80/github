<?php
require_once('../config.php');
require_once(DBAPI);
 
$customers = null;
$customer = null;
 
/*  Listagem de Clientes */
function index() {
    global $customers;
    $customers = find_all('customers');
}

/* Cadastro de Clientes */
function add() {
    if (!empty($_POST['customer'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $customer = $_POST['customer'];
        $customer['created'] = $today->format("Y-m-d H:i:s");

        save('customers', $customer);
        header('location: index.php');
    }
}

/*  Atualizacao/Edicao de Cliente */
function edit() {
 
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
 
        if (isset($_POST['customer'])) {
 
            $customer = $_POST['customer'];
 
            update('customers', $id, $customer);
            header('location: index.php');
        } else {
            global $customer;
            $customer = find('customers', $id);
        }
    } else {
        header('location: index.php');
    }
}

/*  Função para ajustar o formato do telefone */
function formataTelefone($number){
    $number= substr($number,0,2)." ".substr($number,2,-4)."-".substr($number,-4);
 
    // primeiro substr pega apenas o DDD, segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
    return $number;
}

/* Exclusão de um Cliente */
function delete($id = null) {
    global $customer;
 
    $customer = remove('customers', $id);
 
    header('location: index.php');
}
?>