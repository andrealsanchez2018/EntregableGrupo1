<?php

require(__DIR__ . '/../config/class.Conexion.php');

class Producto{
    
    public function __construct(){

    }

    public function agregarProducto($nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado, $idUsuario_cre, $idUsuario_mod){

        $db = new Conexion();

        $sql = "INSERT INTO productos (nombreProducto, precio, imgProducto, descripcion, cantidad, idCategoria, idSubCategoria, idEstado, idUsuario_cre, idUsuario_mod , fecha_mod, fecha_cre) VALUES ('$nombreProducto', '$precio', '$imgProducto', '$descripcion', '$cantidad', '$idCategoria', '$idSubCategoria', '$idEstado','$idUsuario_cre', '$idUsuario_mod', NOW(), NOW())";
        
        $db->query($sql)  ? header('Location: ../vista/productos.php?res=Producto_Agregado') : header('Location: ../vista/productos.php?res=error') ;
    }

    public function mostrarProductos(){
        
        $db = new Conexion();

        $sql = $sql = "SELECT * FROM productos";

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