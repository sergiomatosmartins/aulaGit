<?php
/**
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:32
 * Função: Lista Clientes
 */

require_once "Cliente.php";

$numCliente = @$_GET['numCliente'];

$cliente = new Cliente();

// Exibe os dados

?>

    <table class="table table-hover">
        <thead>
        <tbody>

        <?php

        echo $cliente->getCodigo($numCliente);
        echo $cliente->getNome($numCliente);
        echo $cliente->getCPF($numCliente);

        ?>
        </tbody>
    </table>





