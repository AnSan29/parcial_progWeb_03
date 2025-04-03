<?php
session_start();
include 'funciones.php';

if (isset($_POST['registrarDeterioro'])) {
    $codigo = $_POST["codigo"];
    $cantidad = $_POST["cantidad"];

    if (isset($_SESSION['productos'][$codigo]) && $cantidad > 0) {
        $_SESSION['codigo'] = $codigo;
        $_SESSION['producto'] = $_SESSION['productos'][$codigo];
        salidaPorDeterioro($cantidad);
    } else {
        echo "<script>
                let confirmacion = confirm('Código de producto no encontrado o cantidad invalida.');
                if (confirmacion) {
                    window.location.href = '../front/salida-deterioro.php';
                }</script>";
    }
}
?>