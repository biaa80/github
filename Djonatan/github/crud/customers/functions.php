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
    if (!empty($_POST['customers'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $customers = $_POST['customer'];
        $customer['modified'] = $customers['created'] = $today->format("Y-m-d H:i:s");
        save('customers', $customer);
        header('location: index.php');
    }
}

?>