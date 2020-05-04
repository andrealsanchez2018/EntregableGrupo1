<?php
 require (__DIR__.'/../config/class.Conexion.php');

class Categoria{

    public function __construct()
    {
    }
    public function mostrarCategorias(){
        $db = new Conexion();
        $sql = "SELECT * FROM categorias where idEstado=1";
        $resultado = $db ->query($sql);

        if ($resultado->num_rows>0){
            $row = mysqli_fetch_all($resultado);
            return $row; 
        }
        else {
            return 'error';
        }
    }
    public function mostrarCategoriasEstado(){
        $db = new Conexion();
        $sql = "SELECT c.idCategoria,c.nombreCategoria, e.estado FROM categorias AS c INNER JOIN estados AS e ON c.idEstado = e.idEstado"; 
        $resultado = $db->query($sql);
        if ($resultado -> num_rows>0){
            $row = mysqli_fetch_all($resultado);
            return $row;
        }
        else {
            return 'Error';
        }
    }
    public function insertarCategoria($c_nombre,$c_estado){
        $db = new Conexion();
        $sql = "INSERT INTO categorias (nombreCategoria, idEstado) values('$c_nombre','$c_estado');";
        $db->query($sql) ? header('Location: ../vista/categorias.php?res=New_categoria'):header('Location: ../vista/categorias.php?res=Error:C'); 
    }
    public function actualizarCategoria($c_id,$c_nombre,$c_estado){
        $db = new Conexion();
        $sql = "UPDATE categorias set nombreCategoria='$c_nombre', idEstado='$c_estado' where idCategoria = '$c_id'";
        $db->query($sql) ? header('Location: ../vista/categorias.php?res=Edit_categoria'):header('Location: ../vista/categorias.php?res=Error:C'); 

    }
    public function eliminarCategoria($c_id){
        $db = new Conexion();
        $sql= "DELETE FROM categorias WHERE idCategoria = '$c_id'";
        $db->query($sql) ? header('Location: ../vista/categorias.php?res=Delete_categoria'):header('Location: ../vista/categorias.php?res=Error:C'); 

    }
    public function mostrarEstado(){
        $db = new Conexion();
        $sql = "SELECT * FROM estados";
        $resultado =$db->query($sql);
        $row = mysqli_fetch_all($resultado);
        return $row;
    }
}
?>