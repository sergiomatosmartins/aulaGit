<?php
/**
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:32
 * Função: Lista Clientes
 */

require_once "Cliente.php";

$numCliente = @$_GET['numCliente'];

$ordem = @$_GET['ordem'];

$cliente = new Cliente();

$x = $cliente->pegaIndice($numCliente);

// Exibe os dados

?>

    <table class="table table-hover">
        <thead>
        <tbody>

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>Codigo</strong></div>
            <div class="col-xs-6 col-sm-4 col-md-3 "><strong><?php echo $cliente->getCodigo($x)?></strong></div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>Nome</strong></div>
            <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getNome($x)?></div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>CPF</strong></div>
            <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getCPF($x)?></div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>Sexo</strong></div>
            <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getSexo($x)?></div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>Endereco</strong></div>
             <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getEndereco($x).' - '.$cliente->getNumero($x)?></div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>    </strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getBairro($x)?></div>

        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>CEP</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getCep($x).' - '.$cliente->getMunicipio($x).' - '.$cliente->getUF($x)?></div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><strong>Email</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><a href="mailto:#"><?php echo $cliente->getEmail($x)?></a> </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"> <a href="?p=A&ordem=<?php echo $ordem?>" class="btn btn-primary btn-xs" role="button">Listar Clientes</a></div>

        </div>

        </tbody>
    </table>





