<?php
 require (__DIR__.'/../config/class.Conexion.php');

class SubCategoria{

    public function __construct()
    {
    }
    public function mostrarSubCategorias(){
        $db = new Conexion();
        $sql = "SELECT * FROM subcategorias where idEstado=1";
        $resultado = $db ->query($sql);

        if ($resultado->num_rows>0){
            $row = mysqli_fetch_all($resultado);
            return $row; 
        }
        else {
            return 'error';
        }
    }
    public function mostrarSubCategoriasEstado(){
        $db = new Conexion();
        $sql = "SELECT sb.idSubCategoria,sb.nombreSubCategoria, e.estado FROM subcategorias AS sb INNER JOIN estados AS e ON sb.idEstado = e.idEstado"; 
        $resultado = $db->query($sql);
        if ($resultado -> num_rows>0){
            $row = mysqli_fetch_all($resultado);
            return $row;
        }
        else {
            return 'Error';
        }
    }
    public function insertarSubCategoria($sb_nombre,$sb_estado){
        $db = new Conexion();
        $sql = "INSERT INTO subcategorias (nombreSubCategoria, idEstado) values('$sb_nombre','$sb_estado');";
        $db->query($sql) ? header('Location: ../vista/subcategorias.php?res=New_subcategoria'):header('Location: ../vista/subcategorias.php?res=Error:C'); 
    }
    public function actualizarSubCategoria($sb_id,$sb_nombre,$sb_estado){
        $db = new Conexion();
        $sql = "UPDATE subcategorias set nombreSubCategoria='$sb_nombre', idEstado='$sb_estado' where idSubCategoria = '$sb_id'";
        $db->query($sql) ? header('Location: ../vista/subcategorias.php?res=Update_subcategoria'):header('Location: ../vista/subcategorias.php?res=Error:C'); 


    }
    public function eliminarSubCategoria($sb_id){
        $db = new Conexion();
        $sql= "DELETE FROM subcategorias WHERE idSubCategoria = '$sb_id'";
        $db->query($sql) ? header('Location: ../vista/subcategorias.php?res=Delete_subcategoria'):header('Location: ../vista/subcategorias.php?res=Error:C'); 


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