<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Parcial - programacion</title>
</head>
<body>
    <header>
        <h1>Pacial programación web</h1>
    </header>
    <button class="panel-btn hamburger  hamburger--vortex" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
</button>
<aside class="panel">
    <nav class="menu">
        <a href="#seccion1">Codigo De Producto.</a>
        <a href="#seccion2">Crear Pedido.</a>
        <a href="#seccion3">Seccion 3</a>
        <a href="#seccion4">Seccion 4</a>
        <a href="#seccion5">Seccion 5</a>
    </nav>
</aside>
<main>
    <section id="seccion1" class="section">
        <h1>Codigo De Producto.</h1>
        
        <form action="../back/validacion_codigo.php" method="post" class="row g-3">
            <div class="col-auto">
              <input type="text" name="codigo" class="form-control" id="codigo" placeholder="codigo">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">Buscar</button>
            </div>
        </form>

    </section>

    <section id="seccion2" class="section">
        <h1>Crear Pedido.</h1>
        
        <form action="../back/nuevo_pedido.php" method="post">
            <div class="mb-3">
                <label for="nombreCliente" class="form-label">Nombre del cliente: </label>
                <input type="text" name="nombreCliente" required class="form-control" id="nombreCliente" placeholder="Ingrese nombre">
            </div>
            <div class="mb-3">
                <label for="codigo_crear" class="form-label">Codigo de producto:</label>
                <input type="text" name="codigo" class="form-control" id="codigo_crear" value="<?= $_SESSION['producto']['nombre_producto']?>" placeholder="Ingrese codigo" readonly>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" name="cantidad" required  min="1" class="form-control" id="cantidad" max="<?=$_SESSION['producto']['existencia']?>"  placeholder="Ingrese cantidad">
            </div>
            <div class="mb-3"> 
                <label for="valor" class="form-label">Valor:</label>
                <input type="number"  name="valor" class="form-control"  id="valor"  placeholder="Ingrese valor" required> 
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Crear</button>
            </div>

        </form>

    </section>
    <section id="seccion3" class="section">
        <h1>seccion 3</h1>
    </section>
    <section id="seccion4" class="section">
        <h1>seccion 4</h1>
    </section>
    <section id="seccion5" class="section">
        <h1>seccion 5</h1>
    </section>
</main>
<script src="./js/index.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>