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
        <div class="col-md-2">Codigo</div>
        <div class="col-md-3 "><?php echo $cliente->getCodigo($x)?></div>
    </div>
    <div class="row">
        <div class="col-md-2">Nome</div>
        <div class="col-md-3 "><?php echo $cliente->getNome($x)?></div>
    </div>
    <div class="row">
        <div class="col-md-2">CPF</div>
        <div class="col-md-3 "><?php echo $cliente->getCPF($x)?></div>
    </div>


    </tbody>
</table>



