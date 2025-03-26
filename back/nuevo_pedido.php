<?php
session_start();
include('funciones.php');

if ($_POST) {
    // $codigo = $_POST['codigo'];
    $nombreCliente = $_POST['nombreCliente'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $prueba = $_POST['prueba'];

    echo $prueba;

    agregarPedido($nombreCliente, $valor, $cantidad);
    $_SESSION['producto'] = $_SESSION['productos'][$_SESSION['codigo']];

    //echo "<script>window.location.href='../front/index.php';</script>";
}

?>