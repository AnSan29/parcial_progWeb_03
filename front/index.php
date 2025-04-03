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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Parcial - programacion</title>
</head>
<body>
    <header>
        <nav class="menu">
            <a href="#seccion1">Codigo Producto</a>
            <a href="crear_pedido.php">Crear Pedido</a>
            <a href="#seccion3">Seccion 3</a>
            <a href="#seccion4">Seccion 4</a>
            <a href="#seccion5">Seccion 5</a>
        </nav>
    </header>
    <section class="seccion-inicio mt-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col bg-primary text-white p-3 m-1 align-items-center gap-2" >
                    <p class="m-0">Herramientas</p>
                    <i class="fa-solid fa-screwdriver-wrench fa-lg"></i>
                </div>
                <div class="col bg-primary text-white p-3 m-1">
                    <p class="m-0">Pinturas</p>

                    <i class="fa-solid fa-brush fa-lg"></i>
                </div>
                <div class="col bg-primary text-white p-3 m-1">
                    <p class="m-0">Servicios</p>
                    <i class="fa-solid fa-truck fa-lg"></i>
                </div>
            </div>
        </div>
        
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 img-fluid" 
                 
                 alt="Imagen 1" src="https://ferreteriawillson.com/co/images/banner-fin-6.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid" 
                  
                 alt="Imagen 2" src="https://irp-cdn.multiscreensite.com/8c6cc0f5/MOBILE/images/762d2b34-a8a9-4277-bb7c-5ad7b1477ff9.jpg?v=7.3.45002" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid" 
                 
                 alt="Imagen 3" src="https://t3.ftcdn.net/jpg/02/98/43/56/360_F_298435647_CVHuQNrfG4AU9608C4BHGozPaghXHucJ.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
 
    </section>
 <!--
    <section id="seccion1" class="section">
        
        <div class="pedir-codigo">
        <h1>Codigo De Producto.</h1>
        
        <form action="../back/validacion_codigo.php" method="post" class="row g-3">
            <div class="col-auto">
              <input type="text" name="codigo" class="form-control" id="codigo" placeholder="codigo">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">Buscar</button>
            </div>
        </form>
        </div>
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
    </section> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>