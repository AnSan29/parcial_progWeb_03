<?php
session_start();
include 'funciones.php';

if ($_POST) {
    $codigo = $_POST["codigo"];
    $cantidad = $_POST["cantidad"];

    if (isset($_SESSION['productos'][$codigo]) && $cantidad > 0) {
        $_SESSION['codigo'] = $codigo;
        $_SESSION['producto'] = $_SESSION['productos'][$codigo];
        salidaPorDeterioro($cantidad);
    } else {
        echo "Error: Código de producto no encontrado o cantidad inválida.";
    }
} else {
    echo "Acceso no permitido.";
}
?>