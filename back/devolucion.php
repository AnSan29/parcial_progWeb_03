<?php
session_start(); 

include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $cantidadDevuelta = $_POST["cantidad_devuelta"];

    // Validar el código del producto
    if (isset($_SESSION['productos'][$codigo])) {
        $_SESSION['codigo'] = $codigo; // Guardar el codigo en la sesión.
        $_SESSION['producto'] = $_SESSION['productos'][$codigo];

        // Validar la cantidad devuelta
        if ($cantidadDevuelta > 0) {
            // Llamar a la función para registrar la devolución
            registrarDevolucion($cantidadDevuelta);
        } else {
            echo "<script>
            let confirmacion = confirm('La cantidad debe ser mayor a 0.');
            if (confirmacion) {
                window.location.href = '../front/devoluciones.php';
            }</script>";
        }
    } else {
        echo "<script>
                let confirmacion = confirm('Código de producto no encontrado.');
                if (confirmacion) {
                    window.location.href = '../front/devoluciones.php';
                }</script>";
    }
} else {
    echo "Acceso no permitido.";
}
?>