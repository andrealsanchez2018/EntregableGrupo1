<?php

require(__DIR__ . '/../config/class.Conexion.php');

class Producto{
    
    public function __construct(){

    }

    public function agregarProducto($nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado, $idUsuario_cre, $idUsuario_mod /*  ,$u_fechaModifica, $u_fechaCreador */){

        $db = new Conexion();

        $sql = "INSERT INTO productos (nombreProducto, precio, imgProducto, descripcion, cantidad, idCategoria, idSubCategoria, idEstado, idUsuario_cre, idUsuario_mod , fecha_mod, fecha_cre) VALUES ('$nombreProducto', '$precio', '$imgProducto', '$descripcion', '$cantidad', '$idCategoria', '$idSubCategoria', '$idEstado','$idUsuario_cre', '$idUsuario_mod', NOW(), NOW())";
        print_r($sql);
        $db->query($sql); /* ? header('Location: ../vista/productos.php?res=Producto_Agregado') : header('Location: ../vista/productos.php?res=error');
  */
    }

    public function mostrarProductos(){
        
        $db = new Conexion();

        $sql = $sql = "SELECT p.*, u.* FROM productos AS p INNER JOIN usuarios AS u ON p.idUsuario_cre = u.idUsuario";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result);
            return $row;
        } else {
            return 'error';
        }
    }
}


?>

<!-- , NOW(), NOW()  -->