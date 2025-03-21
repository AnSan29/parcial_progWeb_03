<!--    
    Hacer un formulario para el codigo, aqui tienes un ejemplo de lo que se requiere 
    debes tener en cuenta lo siguiente:
    - action
    - name
    todo esto debe ser igual para que el back funcione
-->

<form action="" method="post">
    <p>Codigo</p>
    <input type="text" name="codigo">
    <button>Buscar</button>
</form>


<!-- 
    Hacer un formulario para hacer un pedido
-->

<?php
session_start();
?>

<form action="../back/nuevo_pedido.php" method="post">
    <p>Cliente</p>
    <input type="text" name="nombreCliente" required>
    <p>Codigo de producto</p>
    <input type="text" value="<?= $_SESSION['codigo'] ?>" disabled>
    <p>Cantidad</p>
    <input type="number" name="cantidad" required min="1" max="<?=$_SESSION['producto']['existencia']?>">
    <p>Valor</p>
    <input type="number" name="valor" required>
    <button name="agregarPedido">Agregar</button>
</form>


<!-- 
    Hacer un formulario para devoluciones
-->

<form method="post" action="devolucion.php">
    <p>Codigo</p>
    <input type="number" name="codigo" required>

    <p>Cantidad Devuelta:</p>
    <input type="number" name="cantidad_devuelta" required>

    <button>Devolver</button>
</form>

<!-- 
    Hacer fun formulario para salida por deterioro
-->

<form method="post" action="deterioro.php">
    <p>Código:</p>
    <input type="number" name="codigo" required>

    <p>Cantidad:</p>
    <input type="number" name="cantidad" required min="1">

    <button>Registrar Deterioro</button>
</form>







<!-- 
    Aqui haz una pagina donde mostrar todos los productos que existen
    ten en cuenta que debes colocar el include funciones al inicio del archivo
-->



<?php
include('funciones.php');
mostrarProductos();