# Recoger codigo de producto

Hacer un formulario para el **codigo**, aquí tienes un ejemplo de lo que se requiere. Debes tener en cuenta lo siguiente:

**- action**
**- name**

¡todo esto debe ser igual para que el back funcione!
<form action=""  method="post">
<p>Codigo</p>
<input type="text"  name="codigo">
<button>Buscar</button>
</form>

# Formulario pedidos

Hacer un formulario para hacer un pedido

<form action="nuevo_pedido.php"  method="post">

<p>Cliente</p>
<input type="text"  name="nombreCliente"  required>

<p>Codigo de producto</p>
<input type="text"  value="<?= $_SESSION['codigo']  ?>"  disabled>

<p>Cantidad</p>
<input type="number"  name="cantidad"  required  min="1"  max="<?=$_SESSION['producto']['existencia']?>">

<p>Valor</p>
<input type="number"  name="valor"  required>

<button>Agregar</button>
</form>

## Formulario devoluciones

Hacer un formulario para devoluciones

<form method="post"  action="devolucion.php">
<p>Codigo</p>
<input type="number"  name="codigo"  required>

<p>Cantidad Devuelta:</p>
<input type="number"  name="cantidad_devuelta"  required>

<button>Devolver</button>
</form>

## Formulario deterioro
Hacer fun formulario para salida por deterioro

<form method="post"  action="deterioro.php">
<p>Código:</p>
<input type="number"  name="codigo"  required>

<p>Cantidad:</p>
<input type="number"  name="cantidad"  required  min="1">

<button>Registrar Deterioro</button>
</form>

## Vista de Productos

Aqui haz una pagina donde mostrar todos los productos que existen
ten en cuenta que debes colocar el include funciones al inicio del archivo

**mostrarProductos();**

## Mostrar productos disponibles

if  (isset($_SESSION['productos']))  {
echo  '<br>Productos totales: '  .  count($_SESSION['productos']);
}  else  {
echo  '<br>Productos totales: 0';
}
## Vista Pedidos hechos

mostrarPedidos();
