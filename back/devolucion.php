<?php
session_start(); // Asegúrate de iniciar la sesión

include 'funciones.php'; // Incluye el archivo donde están tus funciones

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
            echo "Error: La cantidad devuelta debe ser mayor que 0.";
        }
    } else {
        echo "Error: Código de producto no encontrado.";
    }
} else {
    echo "Acceso no permitido.";
}
?>