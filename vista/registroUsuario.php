<?php 
session_start();
echo @$_SESSION['user']['nombre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body class="container">
    <?php include 'header.php'  ?>
    <div class="d-flex justify-content-center h-100" id= "registroForm">
        <div class="card">
            <div class="card-header">
                <h3>Registro</h3>
                
            </div>
            <div class="card-body">
                <form>
                <form method="POST" action="control/usuarioControl.php?accion=registrar">
                    <div></div>
                    <input class="form-control " type="text" name="nombre" id="nombre" placeholder="Nombre Completo">

                    <input class="form-control " type="text" name="correo" id="correo" placeholder="Correo">

                    <input class="form-control " type="pasword" name="pass" id="pass" placeholder="Contraseña">

                    <?php /*  if (@$_SESSION['user']['rol'] == 'administrador') :  */ ?>
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

                    <?php /* endif; */ ?>
                    <input type="submit" value="Registrar" name="enter" class="btn float-right login_btn">
                </form>
                </form>
            </div>
           
        </div>
    </div>
    
   
    <?php include 'footer.php' ?>
</body>

</html>