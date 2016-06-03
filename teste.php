<?php
/**
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:32
 * Função: Lista Clientes
 */

require_once "Cliente.php";

$x = @$_GET['numCliente'];

$cliente = new Cliente();

// Exibe os dados

?>

<table class="table table-hover">
    <thead>
    <tbody>

    <div class="row">
        <div class="col-md-2"><strong>Codigo</strong></div>
        <div class="col-md-3 "><strong><?php echo $cliente->getCodigo($x)?></strong></div>
    </div>
    <div class="row">
        <div class="col-md-2"><strong>Nome</strong></div>
        <div class="col-md-3 "><?php echo $cliente->getNome($x)?></div>
    </div>
    <div class="row">
        <div class="col-md-2"><strong>CPF</strong></div>
        <div class="col-md-3 "><?php echo $cliente->getCPF($x)?></div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="...">
                </a>
            </div>
        </div>
    </nav>

    </tbody>
</table>





