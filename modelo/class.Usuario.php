<?php
require(__DIR__.'/../config/class.Conexion.php');

class Usuario
{
    public function __construct()
    {
       
        
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
    
    public function modificarUsuario($id,$nombre,$correo,$pass,$rol,$estado)
    {
        $db = new Conexion();
        $sql ="UPDATE usuarios SET nombre='$nombre',correo='$correo',password='$pass',idRol='$rol',idEstado='$estado' WHERE idUsuario='$id'";
        $db->query($sql)? header('location:../vistas/index.php'):header('location:../vistas/index.php?err=FMU');
        
    }
    
    public function eliminarUsuario($id)
    {
        $db = new Conexion();
        $sql ="DELETE FROM usuarios WHERE idUsuario='$id'";
        $db->query($sql)? header('location:../vistas/index.php'):header('location:../vistas/index.php?err=FEU');
        
    }
    
    public function consultarUsuarios()
    {
        $db = new Conexion();
        $sql= "SELECT u.nombre, u.correo, u.password,r.rol ,e.estado FROM usuarios as u INNER JOIN estados as e ON u.idEstado = e.idEstado INNER JOIN roles as r on r.idRol = u.idRol order by u.nombre asc ";
        //select de usuarios activos con rol
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
    
    public function encontrarUsuario($clave)
    {
        $db = new Conexion();
        $sql= "SELECT u.nombre, u.correo, u.password,r.rol ,e.estado FROM usuarios as u INNER JOIN estados as e ON u.idEstado = e.idEstado INNER JOIN roles as r on r.idRol = u.idRol where u.nombre like '%$clave%' or u.correo like '%$clave%' or r.rol like '%$clave%' or e.estado like '%$clave%' order by u.nombre asc";
    }
}

?>