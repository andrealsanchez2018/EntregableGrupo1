<?php

require(__DIR__ . '/../modelo/class.Producto.php');


if (isset($_GET['accionProd'])) { # isset: comprobar que la variable sea diferente a nulo
    $accionProd = $_GET['accionProd'];

switch ($accionProd) {
    case 'crearProd':
        guardarProducto();
        break;
    case 'consultarProd':
        listarProductos();
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


        foreach ($listaProd as $productoEncontrado) :?>
                <form class="card" method="POST" action="productos.php?accionProd=actualizarProd" enctype="multipart/form-data">
                    <img class="images" src="<?php echo $productoEncontrado[3]; ?>" alt="">
                    <input type="hidden" readonly="readonly" name="idProductoUpdate" id="idProductoUpdate" value="<?php echo $productoEncontrado[0]; ?>"/>
                    <div class="row">
                        <label class="labelsUpdate" for="nombreProductoUpdate">Nombre: </label>
                        <input type="text" name="nombreProductoUpdate" id="nombreProductoUpdate" value="<?php echo $productoEncontrado[1]; ?>"/>
                    </div>
                    <div class="row">
                        <label  class="labelsUpdate" for="precioUpdate">Precio: </label>
                        <input type="text" name="precioUpdate" id="precioUpdate" value="<?php echo $productoEncontrado[2]; ?>"/>
                    </div>
                    <div class="row">
                        <label class="labelsUpdate"  for="descripcionUpdate">Descripción: </label>
                        <input type="text" name="descripcionUpdate" id="descripcionUpdate" value="<?php echo $productoEncontrado[4]; ?>" required/>
                    </div>
                    <div class="row">
                        <label class="labelsUpdate"  for="cantidadUpdate">Cantidad: </label>
                        <input type="text" name="cantidadUpdate" id="cantidadUpdate" value="<?php echo $productoEncontrado[5]; ?>" required/>
                    </div>
                    <!-- <div class="divFile">
                        <input class="file" type="file" name="imgProducto" required/>    
                    </div> -->
                    <div class="buttonsActions">
                        <input class="buttonUpdate" name="btnEnviar" type="submit" value="Actualizar contacto">
                        <a id="Eliminar" href="eliminar.php?idContact=<?php echo $productoEncontrado[0]; ?>">Eliminar contacto</a>
                    </div>
                </div>
        <?php endforeach;

    }else {
        echo 'No hay productos registrados';
    }
}
?>