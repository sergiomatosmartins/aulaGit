<?php
/**
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:32
 */

$p = @$_GET['p'];

if ($p == "D"){
    $p = "clienteDetalhe";
    $titulo = "Cadastro Cliente";
}else{
    $p = "clienteLista";
    $titulo = "Lista Cliente";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Curso Programação Orientada a Objeto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

        <h3>  Curso de Programação Orientada a Objeto </h3>
        <div class="well"><?php echo $titulo ?> </div>

        <?php

            include $p.".php";

        ?>

    <div class="well well-sm col-md-12 text-center ">
                <img src="marca1.JPG">
    </div>

</div>
</body>
</html>



