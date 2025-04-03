<?php

function validarCodigo($codigo)
{
    if (isset($_SESSION['productos'][$codigo])) {
        $_SESSION['producto'] = $_SESSION['productos'][$codigo];
        consultarProducto();
        return  $_SESSION['producto'];
    } else {
        echo "Código de producto no encontrado.<br>";
        return false;
    }
}

function consultarProducto()
{
    echo '<p>Nombre: <span>' . $_SESSION['producto']['nombre_producto'] . "</span><p>";
    echo '<p>Unidad: <span>' . $_SESSION['producto']['unidad'] . "</span><p>";
    echo '<p>Stock: <span>' . $_SESSION['producto']['existencia'] . "</span><p>";
}

function agregarPedido($nombreCliente, $valor, $cantidad)
{
    if (!isset($_SESSION['pedidos'])) {
        $_SESSION['pedidos'] = [];
    }
    $_SESSION['pedidos'][] = [
        "nombreCliente" => $nombreCliente,
        "producto" => $_SESSION['producto'],
        "valor" => $valor,
        "cantidad" => $cantidad
    ];
    echo "<h2>Venta realizada.</h2>";
    echo "<p>Cliente: <span>" . $nombreCliente . "</span></p>";
    echo "<p>Producto: <span>" . $_SESSION['producto']['nombre_producto'] . "</span></p>";
    actualizarExistencia($cantidad);
}

function actualizarExistencia($cantidad)
{
    if ($cantidad > 0 && $_SESSION['producto']['existencia'] >= $cantidad) {
        $_SESSION['producto']['existencia'] -= $cantidad;
        $_SESSION['productos'][$_SESSION['codigo']] = $_SESSION['producto'];
        echo "<p>Codigo: <span>" . $_SESSION['codigo'] . "</span></p>";
        echo "<p>Nueva existencia: <span>" . $_SESSION['producto']['existencia'] . "</span></p>";
        echo "<a href='../front/index.php'>Volver</a>";
    } else {
        echo "<h3 style='color: red;'>Error: Stock insuficiente o cantidad inválida.</h3>";
    }
}

function mostrarPedidos()
{
    if (isset($_SESSION['pedidos']) && !empty($_SESSION['pedidos'])) { // verificamos si pedidos existe y que no este vacio
        echo "<h2>Pedidos:</h2>";
        foreach ($_SESSION['pedidos'] as $pedido) {
            echo "<p>Cliente: <span>" . $pedido['nombreCliente'] . "</span></p>";
            echo "<p>Producto: <span>" . $pedido['producto']['nombre_producto'] . "</span></p>";
            echo "<p>Cantidad: <span>" . $pedido['cantidad'] . "</span></p>";
            echo "<p>Valor: <span>" . $pedido['valor'] . "</span></p>";
        }
    } else {
        echo "<h3 style='color: red;'>No hay pedidos.</h3>";
    }
}


function registrarDevolucion($cantidadDevuelta)
{
    if (isset($_SESSION['codigo']) && isset($_SESSION['productos'][$_SESSION['codigo']])) {
        $_SESSION['producto'] = $_SESSION['productos'][$_SESSION['codigo']];

        if ($cantidadDevuelta > 0) {
            $_SESSION['producto']['existencia'] += $cantidadDevuelta;
            $_SESSION['productos'][$_SESSION['codigo']] = $_SESSION['producto'];

            if (!isset($_SESSION['devoluciones'])) {
                $_SESSION['devoluciones'] = [];
            }
            $_SESSION['devoluciones'][] = [
                "codigoProducto" => $_SESSION['codigo'],
                "cantidadDevuelta" => $cantidadDevuelta,
            ];

            echo "<h2>Devolución registrada con éxito. Inventario actualizado.</h2>";
            echo "<p>Codigo: <span>" . $_SESSION['codigo'] . "</span></p>";
            echo "<p>Producto: <span>" . $_SESSION['producto']['nombre_producto'] . "</span></p>";
            echo "<p>Nueva existencia: <span>" . $_SESSION['producto']['existencia'] . "</span></p>";
        } else {
            echo "<h3 style='color: red'>Error: La cantidad devuelta debe ser mayor que 0.</h3>";
        }
    } else {
        echo "<h3 style='color: red'>Error: Código de producto no encontrado.</h3>";
    }
}

function salidaPorDeterioro($cantidad)
{
    if (isset($_SESSION['codigo']) && isset($_SESSION['productos'][$_SESSION['codigo']])) {
        $_SESSION['producto'] = $_SESSION['productos'][$_SESSION['codigo']];

        if ($cantidad > 0 && $_SESSION['producto']['existencia'] >= $cantidad) {
            $_SESSION['producto']['existencia'] -= $cantidad;
            $_SESSION['productos'][$_SESSION['codigo']] = $_SESSION['producto'];

            if (!isset($_SESSION['deterioros'])) {
                $_SESSION['deterioros'] = [];
            }
            $_SESSION['deterioros'][] = [
                "codigoProducto" => $_SESSION['codigo'],
                "cantidadDeteriorada" => $cantidad
            ];

            echo "<h2>Salida por deterioro registrada con éxito. Inventario actualizado.</h2>";
            echo "<p>Codigo: <span>" . $_SESSION['codigo'] . "</span></p>";
            echo "<p>Producto: <span>" . $_SESSION['producto']['nombre_producto'] . "</span></p>";
            echo "<p>Nueva existencia: <span>" . $_SESSION['producto']['existencia'] . "</span></p>";
        } else {
            echo "<h3 style='color: red'>Error: Stock insuficiente o cantidad inválida.</h3>";
        }
    } else {
        echo "<h3 style='color: red'>Error: Código de producto no encontrado.</h3>";
    }
}

function mostrarProductos()
{
    if (isset($_SESSION['productos']) && !empty($_SESSION['productos'])) {
        echo "<h2>Productos:</h2>";
        foreach ($_SESSION['productos'] as $codigo => $producto) {
            echo "<p>Código: <span>" . $codigo . "</span></p>";
            echo "<p>Nombre: <span>" . $producto['nombre_producto'] . "</span></p>";
            echo "<p>Unidad: <span>" . $producto['unidad'] . "</span></p>";
            echo "<p>Existencia: <span>" . $producto['existencia'] . "</span></p>";
        }
    } else {
        echo "<h3 style='color: red'>No hay productos registrados.</h3>";
    }
}
