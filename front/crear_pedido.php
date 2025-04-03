<?php
session_start();
if (!isset($_SESSION['codigo'])) {
    echo "<script> 
    let permiso_entrada = confirm('Digite primero un codigo')

    if (permiso_entrada) {
    window.location.href = 'index.php';
    } else {
    window.location.href = 'index.php';
}
    </script>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Crear Pedido</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="css/crear-pedido.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <a href="index.php">Volver</a>

    </header>
    <main>

        <form class="row g-3" action="../back/nuevo_pedido.php" method="post">
            <div class="col-md-6">
                <p>Cliente</p>
                <input class="form-control" type="text" name="nombreCliente" required>
            </div>
            <div class="col-md-6">
                <p>Codigo de producto</p>
                <input class="form-control" type="text" value="<?= $_SESSION['codigo'] ?>" disabled>
            </div>
            <div class="col-md-6">
                <p>Cantidad</p>
                <input class="form-control" type="number" name="cantidad" required min="1" max="<?= $_SESSION['producto']['existencia'] ?>">
            </div>
           

            <button name="agregarPedido">Agregar</button>
            
        </form>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>