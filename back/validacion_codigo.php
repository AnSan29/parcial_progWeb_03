<?php
session_start();
include('funciones.php');

if (!isset($_SESSION['productos'])) { // Verifica si $_SESSION['productos'] ya está definido
    include('inventario.php'); // Inclyo inventario aqui por si a la session se le da por no servir
}


if ($_POST) { // iniciamos este bloque al enviar el formulario del codigo del producto
    $codigo = $_POST['codigo'];
    if (validarCodigo($codigo)) { // llamo a la funcion para validar el codigo
        $_SESSION['codigo'] = $codigo; // creo una session del codigo para poder manejarlo global
        /* echo "<script>window.location.href='../front/formulario_pedido.php';</script>"; */
    }
}


