<?php
session_start();

if(isset($_SESSION['loggedin']))//revisa si existe una sesion y conteine el parametro logueado
{
    //variables para manjar mas facilmente
    $logueado=true;
    $nombre = $_SESSION['user']['nombre'];
    $correo = $_SESSION['user']['correo'];
    $rol = $_SESSION['user']['rol'];
}

function checkRol()
{
    global $rol;
    return $rol;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fontello.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"><!-- letra -->

</head>
<body>
    
<header class="principal">
        <div class="row">
            <div class="col-md-3 col-3"><img src="../public/img/logo3.png" salt="" style="height: 100px;"></div>
            <div class="col-md-6 col-9">
            <h1 class="h1-header">Clothing Bictia</h1>
            </div>
            <div class="ingreso col-md-3 col-12">
                <?php if(!isset($logueado)):?>
                <span><a href="vista/login.php">Iniciar Sesión </a></span>
                <span><a href="">Registrarme</a></span>
                <?php else:?>
                <span><a href="../control/usuarioControl.php?mod=close">Cerrar Sesión </a></span>
                <span><a href="#"><?php echo $_SESSION['user']['nombre'];?> </a></span>
                <?php endif;?>
                <span><a href="#" class="icon-cart-arrow-down"></a></span>

            </div>

        </div>

        </div>

        
        <div class="row">

            <div class="col-md-12 col-12">
            <ul class="nav shadow-sm p-2 mb-4 bg-white rounded">
                <?php ?>    
                             
                    <li class="nav-item">
                        <a class="nav-link active" href="adminUsuario.php">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias.php">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subCategorias.php">Subcategorías</a>
                    </li>
                                       
                </ul>
           
            </div>
        </div>
    </header>
<!--script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
    
</html>