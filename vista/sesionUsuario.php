<?php

session_start();

$_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <span>
    <div id="login">
   <form method="POST" action="/../control/usuarioControl.php?accion=login">
   <input type="text" name="correo" id="correo" placeholder="Email" />
   <br>
   <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" />
   <br>
   <input type="submit" value="Iniciar Sesión" name="enter" />
  
   </form>
   </div> 

</body>
</html>