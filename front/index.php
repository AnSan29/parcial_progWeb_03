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
        <nav class="menu">
            <a href="#seccion1">Codigo Producto</a>
            <a href="crear_pedido.php">Crear Pedido</a>
            <a href="#seccion3">Seccion 3</a>
            <a href="#seccion4">Seccion 4</a>
            <a href="#seccion5">Seccion 5</a>
        </nav>
        <h1>Pacial.</h1>    
    </header>

 <main>
    <section id="seccion1" class="section">
        <aside>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                 <div class="carousel-item active">
                    <img src="https://static.vecteezy.com/system/resources/previews/030/316/568/large_2x/assorted-tools-displayed-on-black-background-signifying-labor-day-vertical-mobile-wallpaper-ai-generated-free-photo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/vector-gratis/trabajador-construccion-energia-electrica-equipa-pictogramas-planos-fijados-negro-amarillo_1284-6269.jpg?w=360" class="d-block w-100" alt="...">
                </div>
                <div class="https://img.freepik.com/fotos-premium/version-vertical-gran-conjunto-herramientas-construccion-guantes-centro-sobre-fondo-negro_275559-5501.jpg">
                    <img src="./img/fondo.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        </aside>
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

    <!-- <section id="seccion2" class="section">
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
</main>
<script src="./js/index.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>