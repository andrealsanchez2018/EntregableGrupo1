<?php
require(__DIR__.'/../modelo/class.Usuario.php');

@$accion = $_POST['mod'];


switch($accion)
{
    case 'ins': crear() ;
        break;
    case 'leer':Leer();
        break;
    case 'mod':modificar();
        break;
    case 'eli':Eliminar();
        break;
    case 'enc':encontrar();
        break;
    case 'login':logueo();
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
function Leer()
{
    $usuario = new Usuario();
    $result=$usuario->consultarUsuarios();
    
    foreach($result as $res)
    {
        print_r($res);
    }
    
}

function modificar()
{
    $id=$_POST['idusuario'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $pass = $_POST['pass'];
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];
    
    $usuario = new Usuario();
    $usuario->modificarUsuario($id,$nombre,$correo,$pass,$rol,$estado);
}

function Eliminar()
{
    $id=$_POST['idusuario'];
    
    $usuario = new Usuario();
    $usuario->eliminarUsuario($id);
}

function encontrar()
{
    
    $clave=$_POST['buscar'];
    $usuario = new Usuario();
    $usuario->encontrarUsuario($clave);
    
    
}

function logueo()
{
    $usuario = new Usuario(); 
    
    $correo=$_POST['correo'];
    $pass = $_POST['pass'];
    
    $result =  $usuario->loginUsuario($nombre,$pass);
    print_r($result);
    if($result != 'error')
    {
        //crear sesion para usuarios con php
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user']=$result;
        header('location: ../vistas/index.php');
    }else{
        //header('location: ../vistas/index.php?res=usuario_Inexistente');
        echo 'Datos no validos';
    }
}



?>