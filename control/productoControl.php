<?php

require(__DIR__ . '/../modelo/class.Producto.php');

listarProductos();

if (isset($_GET['accionProd'])) { # isset: comprobar que la variable sea diferente a nulo
    $accionProd = $_GET['accionProd'];

switch ($accionProd) {
    case 'crearProd':
        guardarProducto();
        break;
}
} 

// guardar producto
function guardarProducto(){
    $producto = new Producto();

    $nombreProducto = $_POST['nombreProducto'];
    $precio = $_POST['precio'];
    $imgProducto = $_POST['imgProducto']; 
    $descripcion = $_POST['descripcion']; 
    $cantidad = $_POST['cantidad'];
    $idCategoria = $_POST['idCategoria'];
    $idSubCategoria = $_POST['idSubCategoria'];
    $idEstado = $_POST['idEstado'];
    $idUsuario_cre = $_POST['idUsuario_cre']; 
    $idUsuario_mod = $_POST['idUsuario_mod']; 
   /*  $u_fechaModifica = $_POST['fecha_mod']; 
    $u_fechaCreador = $_POST['fecha_cre']; */


    $producto->agregarProducto($nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado,$idUsuario_cre, $idUsuario_mod/* , $u_fechaModifica, $u_fechaCreador */);
}

// listar productos
function listarProductos(){
    $producto= new Producto();
    
    $result = $producto->mostrarProductos();

    if ($result != 'error') {
        $listaProd = $result;


        foreach ($listaProd as $productoEncontrado) {
            echo "$productoEncontrado[1] $productoEncontrado[3] $productoEncontrado[6] <br>";
            }

    }else {
        echo 'No hay productos registrados';
    }
}
/* ctrl + \  = dividir en 2 ventanas */
?>