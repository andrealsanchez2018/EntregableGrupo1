<?php 
session_start();
echo @$_SESSION['user']['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro :: Clases PHP</title>
</head>
<body>
    <div id="registroForm">
    <form method="POST" action="control/usuarioControl.php?accion=registrar">
        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
        <br>
        <input type="text" name="correo" id="correo" placeholder="Correo">
        <br>
        <input type="pasword" name="pass" id="pass" placeholder="Contraseña">
        <br>
        
        <?php if(@$_SESSION['user']['rol']=='administrador'):?>
        <select name="rol" id="rol" name="rol">
        <option value="3">Super Admin</option>
        <option value="2">Administrador</option>
        <option value="1">Usuario</option>
        </select>
        <?php ?>
        <select name="estado" id="estado" name="estado">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
        </select>
        <?php endif;?>
        <input type="submit"  value="Registrar" name="enter" >
    </form>
    </div>
    
</body>
</html>