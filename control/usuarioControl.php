<?php
require(__DIR__.'/../modelo/class.Usuario');

//variables pueden cambiar
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass = $_POST['pass'];
$accion = $_POST['accion'];


switch($accion)
{
    case 'ins': crear() ;
        break;
    case 'login':;
        break;
}

function crear()
{
    
    $usuario = new Usuario();

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $pass = $_POST['pass'];
    $rol = $_POST['rol'];
    $usuario -> crearUsuario($nombre,$correo,$pass,$rol);
    
}

function logueo()
{
    $usuario = new Usuario(); 
    
    $correo=$_POST['correo'];
    $pass = $_POST['pass'];
    
    $result =  $usuario->loginUsuario($nombre,$pass);
    if($result != 'error')
    {
        //crear sesion para usuarios con php
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user']=$result;
        header('location: ../vistas/perfil.php');
    }else{
        //header('location: ../vistas/index.php?res=usuario_Inexistente');
        echo 'Datos no validos';
    }
}

?>