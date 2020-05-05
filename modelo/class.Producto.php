<?php

require(__DIR__ . '/../config/class.Conexion.php');

class Producto
{

    public function __construct()
    {
    }

    public function agregarProducto($nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado, $idUsuario_cre, $idUsuario_mod)
    {

        $db = new Conexion();

        $sql = "INSERT INTO productos (nombreProducto, precio, imgProducto, descripcion, cantidad, idCategoria, idSubCategoria, idEstado, idUsuario_cre, idUsuario_mod , fecha_mod, fecha_cre) VALUES ('$nombreProducto', '$precio', '$imgProducto', '$descripcion', '$cantidad', '$idCategoria', '$idSubCategoria', '$idEstado','$idUsuario_cre', '$idUsuario_mod', NOW(), NOW())";

        $db->query($sql); /*  ? header('Location: ../vista/productos.php?res=Producto_Agregado') : header('Location: ../vista/productos.php?res=error') ; */
    }

    public function mostrarProductos()
    {

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


    public function filtrarProductos($itemQuery, $filter)
    {
        $db = new Conexion();

        $sql = "SELECT * FROM productos WHERE $itemQuery LIKE '%$filter%' ";

        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result);
            return $row;
        } else {
            return 'error';
        }
    }



    public function actualizarProductos($idProductoUpdate, $nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado, $idUsuario_cre, $idUsuario_mod, $fecha_mod, $fecha_cre)
    {
        $db = new Conexion();

        $sql = "UPDATE productos SET nombreProducto='$nombreProducto', precio='$precio', imgProducto='$imgProducto', descripcion='$descripcion', cantidad='$cantidad', idCategoria='$idCategoria', idSubCategoria='$idSubCategoria', idEstado='$idEstado', idUsuario_cre='$idUsuario_cre', idUsuario_mod='$idUsuario_mod', fecha_mod='$fecha_mod', fecha_cre='$fecha_cre' WHERE idProducto='$idProductoUpdate' ";

        $db->query($sql)  /* ? header('Location: ../vista/productos.php?res=Producto_Actualizado') : header('Location: ../vista/productos.php?res=error')  */;
    }


    public function eliminarProductos($idProd)
    {
        $db = new Conexion();

        $sql = "DELETE FROM productos WHERE idProducto = '$idProd'";
        $db->query($sql) /* ? header('Location: ../vista/productos.php?res=Producto_Eliminado') : header('Location: ../vista/productos.php?res=error')  */;
    }
    public function consultarProductosPorCategoria($categoria)
    {
        $db = new Conexion();
        $sql = "SELECT p.nombreProducto, p.imgProducto,p.descripcion FROM productos as p INNER JOIN categorias as c on p.idCategoria = c.idCategoria WHERE p.idCategoria = '$categoria'";
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