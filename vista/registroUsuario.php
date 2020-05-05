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
?>

<!DOCTYPE html>
<html lang="en" class="log">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/fontello.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"><!-- letra -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script><!-- iconos -->

</head>

<body class="container login">
    <header>
        <h1 class="h1-login"> Clothing Bictia</h1>
    </header>
    <div class="d-flex justify-content-center h-100" id="registroForm">
        <div class="card">
            <div class="card-header">
                <h3>Registro</h3>

            </div>
            <div class="card-body">

                <form action="../control/usuarioControl.php" method="post">
                    <div></div>
                    <input class="form-control " type="text" name="nombre" id="nombre" placeholder="Nombre Completo">

                    <input class="form-control " type="text" name="correo" id="correo" placeholder="Correo">

                    <input class="form-control " type="password" name="pass" id="pass" placeholder="Contraseña">
                    <input type="hidden" value="ins" name="mod">

                    <?php if (checkRol() == 'admin' || checkRol() == 'SuperAdmin') :  ?>
                        <select class="form-control" name="rol" id="rol" name="rol">
                            <option value="3">Super Admin</option>
                            <option value="2">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>

                        <?php ?>

                        <select class="form-control" name="estado" id="estado" name="estado">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>

                    <?php endif;  ?>
                    <input type="submit" value="Registrar" name="enter" class="btn float-right login_btn">
                </form>

            </div>

        </div>
    </div>


   
</body>

</html>