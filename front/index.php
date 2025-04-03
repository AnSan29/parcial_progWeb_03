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
            <a href="crear_pedido.php">Crear Pedido</a>
            <a href="#seccion3">Seccion 3</a>
            <a href="#seccion4">Seccion 4</a>
            <a href="#seccion5">Seccion 5</a>
        </nav>
        <form action="../back/validacion_codigo.php" method="post" class="row g-3 mt-2">
            <div class="col-auto">
              <input type="text" name="codigo" class="form-control" id="codigo" placeholder=" Ingrese codigo de producto">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">Buscar</button>
            </div>
        </form>
    </header>
    <section class="seccion-inicio mt-5">
        <div class="container mt-1">
            <div class="row">
                <div class="col bg-dark text-white p-3 m-1 align-items-center gap-2 rounded" >
                    <p class="m-0">Herramientas</p>
                    <i class="fa-solid fa-screwdriver-wrench fa-lg"></i>
                </div>
                <div class="col bg-dark text-white p-3 m-1 align-items-center gap-2 rounded">
                    <p class="m-0">Pinturas</p>

                    <i class="fa-solid fa-brush fa-lg"></i>
                </div>
                <div class="col bg-dark text-white p-3 m-1 align-items-center gap-2 rounded">
                    <p class="m-0">Servicios</p>
                    <i class="fa-solid fa-truck fa-lg"></i>
                </div>
            </div>
        </div>
        
        <div id="carouselExampleSlidesOnly" class="carousel slide mt-3  border border-2 rounded-end overflow-hidden" data-bs-ride="carousel">
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
                 
                 alt="Imagen 3" src="https://chotanito.com/wp-content/uploads/2017/12/banner-ferreteria.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="container imgs p-5 rounded border border-4 mt-2">
            <p class="h2 mb-3">Productos:</p>
        <div class="d-flex flex-wrap gap-3">
            <div class="card pt-5" style="width: 18rem;">
                <img src="https://static1.todobaño.es/img/c/346.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="h5">Grifo</p>
                    <p class="card-text">Grifo moderno y funcional, con diseño elegante y resistente, ideal para baños y cocinas. Fácil instalación y control preciso del flujo de agua.</p>
                </div>
            </div>
            <div class="card pt-5" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/61UbisN38hL._AC_UF894,1000_QL80_.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="h5">Martillo</p>
                    <p class="card-text">Martillo resistente y ergonómico, ideal para trabajos de construcción, carpintería y reparaciones. Mango antideslizante para mayor seguridad y comodidad.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsOEVJJ5uTMu4Sb3LgfmuM-D3jHZ6ceDIpGlEgysJ5Xfh0rkPzuqeAMT4-Y3t6EXNjvnU&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body mt-2">
                    <p class="h5">Cemento</p>
                    <p class="card-text">Cemento de alta calidad, ideal para construcción y reparaciones, garantizando resistencia y durabilidad en cada obra.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://st.depositphotos.com/1942805/2400/i/450/depositphotos_24001349-stock-photo-light-bulb.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="h5">Bombilla</p>
                    <p class="card-text">Bombilla de bajo consumo y alta luminosidad, ideal para iluminar cualquier espacio con eficiencia y durabilidad.</p>
                </div>
            </div>

        </div>
        </div>


        <div class="container mt-2">
            <div class="row">
                <div class="col m-1  gap-2 rounded">
                   <p class="h5">🏗️ Sobre Nosotros</p>
                   <p>En Ferreterias Litoral    , nos especializamos en la comercialización de productos ferreteros de alta calidad para el hogar, la industria y la construcción. Como microempresa comprometida con la excelencia, ofrecemos herramientas, materiales y accesorios esenciales para cada proyecto, brindando soluciones confiables a nuestros clientes.
Nos enorgullecemos de ofrecer atención personalizada, precios competitivos y un catálogo en constante crecimiento para satisfacer las necesidades de profesionales y entusiastas del bricolaje. ¡Confía en nosotros para hacer realidad tus proyectos con los mejores productos ferreteros! 🔧🔩🚀</p>
                </div>
            </div>
        </div>
        

    </section>
 
    
    <!--
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
    <footer>
        <div class="container">
        <div class="col m-1  gap-2 rounded">
                    <p class="h5">Contáctanos.</p>
                    <div class="mb-1">
                        <label for="nombre_user.txt" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_user.txt" name="nombre_user.txt" placeholder="Ingresa nombre">
                    </div>
                    <div class="mb-1">
                        <label for="email_user.txt" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email_user.txt" name="email_user.txt" placeholder="Ingresa email">
                    </div>
                    <button type="button" class="btn btn-success">Success</button>
                </div>
        </div>
    
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>