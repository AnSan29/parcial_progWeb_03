<form action="" method="post">
    <p>Codigo</p>
    <input type="text" name="codigo">

    <button>Buscar</button>
</form>


<?php
session_start();

    if ($_POST) {
    $codigo = $_POST['codigo'];

    if ($codigo >= 0 && isset($_SESSION['productos'][$codigo])) {
        $producto = $_SESSION['productos'][$codigo];

        echo "Producto encontrado:<br>";
        echo "Nombre: " . $producto['nombre_producto'] . "<br>";
        echo "Unidad: " . $producto['unidad'] . "<br>";
        echo "Existencia: " . $producto['existencia'] . "<br>";
    } else {
        echo "Código de producto no encontrado.";
    }

}
echo 'Productos totales: '.count($_SESSION['productos']);


?>
