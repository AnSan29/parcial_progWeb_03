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

function consultarProducto(){
    echo '<br> <b>Nombre:</b> '.$_SESSION['producto']['nombre_producto'];
    echo '<br> <b>Unidad:</b> '.$_SESSION['producto']['unidad'];
    echo '<br> <b>Stock:</b> '.$_SESSION['producto']['existencia'];
}

function agregarPedido($nombreCliente, $valor, $cantidad){
    if (!isset($_SESSION['pedidos'])) {
        $_SESSION['pedidos'] = [];
    }
    $_SESSION['pedidos'][] = [
        "nombreCliente" => $nombreCliente,
        "producto" => $_SESSION['producto'],
        "valor" => $valor,
        "cantidad" => $cantidad
    ];

    echo "<br>Producto agregado correctamente.";
    echo "<br>Cliente: ".$nombreCliente;
    echo "<br>Producto: ".$_SESSION['producto']['nombre_producto'];
    actualizarExistencia($cantidad);
}

function actualizarExistencia($cantidad)
{
    if ($cantidad > 0 && $_SESSION['producto']['existencia'] >= $cantidad) {
        $_SESSION['producto']['existencia'] -= $cantidad;
        $_SESSION['productos'][$_SESSION['codigo']] = $_SESSION['producto'];
        echo "<br>Venta realizada.";
        echo "<br>Codigo: " . $_SESSION['codigo'];
        echo "<br>Nueva existencia: " . $_SESSION['producto']['existencia'];
    } else {
        echo "<br>Error: Stock insuficiente o cantidad inválida.";
    }
}

function mostrarPedidos()
{
    if (isset($_SESSION['pedidos']) && !empty($_SESSION['pedidos'])) { // verificamos si pedidos existe y que no este vacio
        echo "<h2>Pedidos:</h2>";
        foreach ($_SESSION['pedidos'] as $pedido) {
            echo "Cliente: " . $pedido['nombreCliente'] . "<br>";
            echo "Producto: " . $pedido['producto']['nombre_producto'] . "<br>";
            echo "Cantidad: " . $pedido['cantidad'] . "<br>";
            echo "Valor: " . $pedido['valor'] . "<br><br>";
        }
    } else {
        echo "No hay pedidos.";
    }
}

function mostrarPedido()
{
    echo "<br>" . $_SESSION['producto']['nombre_producto'];
    echo "<br>" . $_SESSION['producto']['unidad'];
    echo "<br>" . $_SESSION['producto']['existencia'];

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

            echo "Devolución registrada con éxito. Inventario actualizado.";
            echo "<br>Nuevo stock de " . $_SESSION['producto']['nombre_producto'] . ": " . $_SESSION['producto']['existencia'] . " " . $_SESSION['producto']['unidad'];
            echo "<br>Codigo: " . $_SESSION['codigo'];
            echo "<br>Nueva existencia: " . $_SESSION['producto']['existencia'];
        } else {
            echo "Error: La cantidad devuelta debe ser mayor que 0.";
        }
    } else {
        echo "Error: Código de producto no encontrado.";
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

            echo "Salida por deterioro registrada con éxito. Inventario actualizado.";
            echo "<br>Nuevo stock de " . $_SESSION['producto']['nombre_producto'] . ": " . $_SESSION['producto']['existencia'] . " " . $_SESSION['producto']['unidad'];
            echo "<br>Codigo: " . $_SESSION['codigo'];
            echo "<br>Nueva existencia: " . $_SESSION['producto']['existencia'];
        } else {
            echo "Error: Stock insuficiente o cantidad inválida.";
        }
    } else {
        echo "Error: Código de producto no encontrado.";
    }
}

function mostrarProductos()
{
    if (isset($_SESSION['productos']) && !empty($_SESSION['productos'])) {
        echo "<h2>Productos:</h2>";
        foreach ($_SESSION['productos'] as $codigo => $producto) {
            echo "Código: " . $codigo . "<br>";
            echo "Nombre: " . $producto['nombre_producto'] . "<br>";
            echo "Unidad: " . $producto['unidad'] . "<br>";
            echo "Existencia: " . $producto['existencia'] . "<br><br>";
        }
    } else {
        echo "No hay productos registrados.";
    }
}
