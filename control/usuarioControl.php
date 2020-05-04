<?php
require(__DIR__.'/../modelo/class.Usuario.php');

@$accion = $_REQUEST['mod'];


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
    case 'close':Logout();
        break;
    case 'cons': consultar();
        break;
}

function crear()
{
    
    $usuario = new Usuario();

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $pass = $_POST['pass'];
    $rol = $_POST['rol'];
    if($rol == "")
    {
        $rol = 1;
    }
    $estado = $_POST['estado'];
    if($estado == "")
    {
        $estado = 1;
    }
    $usuario -> crearUsuario($nombre,$correo,$pass,$rol,$estado);
    logueo($correo,$pass);
    
    
}
function Leer()
{
    $usuario = new Usuario();
    $result=$usuario->consultarUsuarios();
    
    foreach($result as $res)
    {
        
        echo "<tr>
            <th scope='row'>".$res['idUsuario']."</th>
            <td>".$res['nombre']."</td>
            <td>".$res['correo']."</td>
            <td>".$res['password']."</td>
            <td>".$res['rol']."</td>
            <td>".$res['estado']."</td>
            <td><button id='mod".$res['idUsuario']."'>Modificar</button><button class='icon-trash-empty'></button></td>
            </tr>";
    }
    
}

function consultar()
{
    $usuario=new Usuario();
    $id = $_POST['idUsuario'];
    $res = $usuario->consultarUsuario($id);
    echo json_encode($res);
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
    
    $result = $usuario->loginUsuario($correo,$pass);
    //echo $result;
    //print_r($result);
    if($result != 'error' && $result['estado']=='activo')
    {
        //crear sesion para usuarios con php
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user']=$result;
        header('location: ../index.php');
    }else{
        //header('location: ../vistas/index.php?res=usuario_Inexistente');
        echo 'Datos no validos';
    }
    
}

function logout()
{
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['user']);
    session_destroy();
    header('location: ../index.php');
}




?>