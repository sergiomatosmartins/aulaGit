<?php
/**
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:32
 * Função: Lista Clientes
 */

require_once "Cliente.php";

$ordem = @$_GET['ordem'];
$numCliente = @$_GET['numCliente'];

$cliente = new Cliente();

if ($ordem == "A"){

    $inverteOrdem = "D";
    $ordemImagem = "\"glyphicon glyphicon-sort-by-attributes-alt\"";

}else {

    $inverteOrdem = "A";
    $ordemImagem = "\"glyphicon glyphicon-sort-by-attributes\"";

}

$cliente->ordenaTabClientes($ordem);


// Exibe os dados

// Verificando número clientes array

$arrlength = count($cliente->getTabClientes());

//<span class="glyphicon glyphicon-sort-by-attributes"></span></a></th>

?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th></th>
            <th>Código<a href="?p=&ordem=<?php echo $inverteOrdem  ?>">
                    <span class= <?php echo $ordemImagem ?>></span></a></th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
        </thead>
        <tbody>

        <?php

        for($x = 0; $x < $arrlength; $x++) {
            ?>

            <tr>
                <td><a  href="?p=D&ordem=<?php echo $ordem  ?>&numCliente=<?php echo $cliente->getCodigo($x)?>">
                        <span class="glyphicon glyphicon-file"></span></a></td>

                <td><?php echo $cliente->getCodigo($x)?></td>
                <td><?php echo $cliente->getNome($x)?></td>
                <td><?php echo $cliente->getCPF($x)?></td>
            </tr>

            <?php

        }
        ?>
        </tbody>
    </table>





