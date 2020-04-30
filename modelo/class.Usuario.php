<?php
require(__DIR__.'/../config/class.Conexion.php');

class Usuario
{
    public function __construct()
    {
        $db = new Conexion();
        $sql ="";
        
    }
    
   public function loginUsuario($correo,$pass)
    {
        $db = new Conexion();
       $sql ="SELECT u.nombre, u.correo, u.password,r.rol ,e.estado FROM usuarios as u INNER JOIN estados as e ON u.idEstado = e.idEstado INNER JOIN roles as r on r.idRol = u.idRol WHERE e.idEstado = 1 And u.correo='$correo' And u.pasword ='$pass'";
       $result = $db->query($sql);
       if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            return $row;
        }else
        {
            return 'error';
        }
       
    } 
    
    public function crearUsuario($nombre,$correo,$pass,$rol)
    {
        $db = new Conexion();
        $sql ="Insert into usuarios(nombre,correo,password,idRol,idEstado) Values ($nombre,$correo,$pass,$rol,1)";
        $db->query($sql)? header('location:../vistas/index.php'):header('location:../vistas/index.php?err=FCU');
        
    }
    
    public function modificarUsuario()
    {
        $db = new Conexion();
        $sql ="";
        
    }
    
    public function eliminarUsuario()
    {
        $db = new Conexion();
        $sql ="";
        
    }
    
    public function ConsultarUsuarios()
    {
        $db = new Conexion();
        $sql= "SELECT u.nombre, u.correo, u.password,r.rol ,e.estado FROM usuarios as u INNER JOIN estados as e ON u.idEstado = e.idEstado INNER JOIN roles as r on r.idRol = u.idRol WHERE e.idEstado = 1 ";
        //select de usuarios activos con rol
    }
}

?>