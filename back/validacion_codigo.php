<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .validar-codigo{
            text-align: center;
            width: 100%;
            height: 670px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .datos-respuesta{
            background-color:rgba(147, 38, 38, 0.62);
            border-radius: 15px;
            border: 3px solid #333;
            width: 50%;
            padding: 20px;
        }
        button a{
            text-decoration: none;
            color: black;
        }
        button a:hover{
            color: gray;
        }
    </style>
    <title>Producto</title>
</head>
<body>
<div class="validar-codigo">
    <div class="datos-respuesta">
        <h2>Producto:</h2>
        <?php
            session_start();
            include('funciones.php');

            if (!isset($_SESSION['productos'])) { // Verifica si $_SESSION['productos'] ya está definido
                include('inventario.php'); // Inclyo inventario aqui por si a la session se le da por no servir
            }


            if ($_POST) { // iniciamos este bloque al enviar el formulario del codigo del producto
                $codigo = $_POST['codigo'];
                if (validarCodigo($codigo)) { // llamo a la funcion para validar el codigo
                    $_SESSION['codigo'] = $codigo; // creo una session del codigo para poder manejarlo global
                    /* echo "<script>window.location.href='../front/formulario_pedido.php';</script>"; */
                }
            }
        ?><br><br>
        <button type="button" class="btn btn-secondary"><a href="../front/index.php">Regresar</a></button>
    </div>
</div>
</body>
</html>







