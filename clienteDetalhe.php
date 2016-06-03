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
            <div class="col-xs-4 col-sm-2 col-md-4"><strong>Codigo</strong></div>
            <div class="col-xs-6 col-md-4"><strong><?php echo $cliente->getCodigo($x)?></strong></div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-4"><strong>Nome</strong></div>
            <div class="col-xs-6 col-md-4"><?php echo $cliente->getNome($x)?></div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-4"><strong>CPF</strong></div>
            <div class="col-xs-6 col-md-4"><?php echo $cliente->getCPF($x)?></div>
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


        <!--      <div class="row">
                  <div class="col-xs-4 col-sm-2 col-md-4">.col-xs-12 </div>
                  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
              </div>
      -->

        </tbody>
    </table>





