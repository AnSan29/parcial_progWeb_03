<?php
session_start();
include('funciones.php');

if (isset($_POST['agregarPedido'])) {
    $nombreCliente = $_POST['nombreCliente'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];

    agregarPedido($nombreCliente, $valor, $cantidad);
    $_SESSION['producto'] = $_SESSION['productos'][$_SESSION['codigo']];
}
?>