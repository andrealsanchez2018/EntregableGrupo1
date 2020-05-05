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
    case 'filtrarProd':
        filtrarProductos();
    break;
    case 'actualizarProd':
        actualizaProductos();
    break;
    case 'eliminarProd':
        eliminaProductos();
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
                <div class="card">
                    <form  class="formConsultar" method="POST" action="productos.php?accionProd=actualizarProd" enctype="multipart/form-data">
                        <img class="images" src="<?php echo $productoEncontrado[3]; ?>" alt="">
                        <input type="hidden" readonly="readonly" name="idProductoUpdate" id="idProductoUpdate" value="<?php echo $productoEncontrado[0]; ?>"/>
                        <div class="row">
                            <label class="labelsUpdate" for="imgProductoUpdate">Link imagen: </label>
                            <input type="text" name="imgProductoUpdate" id="imgProductoUpdate" value="<?php echo $productoEncontrado[3]; ?>"/>
                        </div>
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


                        <div class="row">
                            <label class="labelsUpdate" for="idCategoriaUpdate">Categoria: </label>
                            <input type="text" name="idCategoriaUpdate" id="idCategoriaUpdate" value="<?php echo $productoEncontrado[6]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idSubCategoriaUpdate">Sub categoria: </label>
                            <input type="text" name="idSubCategoriaUpdate" id="idSubCategoriaUpdate" value="<?php echo $productoEncontrado[7]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="idEstadoUpdate">Estado: </label>
                            <input type="text" name="idEstadoUpdate" id="idEstadoUpdate" value="<?php echo $productoEncontrado[8]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idUsuario_creUpdate">Creador: </label>
                            <input type="text" name="idUsuario_creUpdate" id="idUsuario_creUpdate" value="<?php echo $productoEncontrado[9]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idUsuario_modUpdate">Modificador: </label>
                            <input type="text" name="idUsuario_modUpdate" id="idUsuario_modUpdate" value="<?php echo $productoEncontrado[10]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="fecha_modUpdate">Fecha modificación: </label>
                            <input type="text" name="fecha_modUpdate" id="fecha_modUpdate" value="<?php echo $productoEncontrado[11]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="fecha_creUpdate">Fecha creación: </label>
                            <input type="text" name="fecha_creUpdate" id="fecha_creUpdate" value="<?php echo $productoEncontrado[12]; ?>"/>
                        </div>
                        


                        <div class="buttonsActions">
                            <input type="submit" id="actualizar" class="btn btn-light" name="btnEnviar"  value="Actualizar Producto">
                            <a id="Eliminar" href="productos.php?accionProd=eliminarProd&idProd=<?php echo $productoEncontrado[0]; ?>">Eliminar contacto</a>
                        </div>
                    </form> 
                </div>
        <?php endforeach;


    }else {
        echo 'No hay productos registrados';
    }



}



function filtrarProductos(){
    $producto = new Producto();

    $itemQuery = $_POST['itemQuery'];
    $filter = $_POST['filter'];

    $result = $producto->filtrarProductos($itemQuery, $filter);

    if ($result != 'error') {
        $listaProd = $result;


        foreach ($listaProd as $productoEncontrado) :?>
                <div class="card">
                    <form  class="formfiltrar" method="POST" action="productos.php?accionProd=actualizarProd" enctype="multipart/form-data">
                        <img class="images" src="<?php echo $productoEncontrado[3]; ?>" alt="">
                        <input type="hidden" readonly="readonly" name="idProductoUpdate" id="idProductoUpdate" value="<?php echo $productoEncontrado[0]; ?>"/>
                        <div class="row">
                            <label class="labelsUpdate" for="imgProductoUpdate">Link imagen: </label>
                            <input type="text" name="imgProductoUpdate" id="imgProductoUpdate" value="<?php echo $productoEncontrado[3]; ?>"/>
                        </div>
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


                        <div class="row">
                            <label class="labelsUpdate" for="idCategoriaUpdate">Categoria: </label>
                            <input type="text" name="idCategoriaUpdate" id="idCategoriaUpdate" value="<?php echo $productoEncontrado[6]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idSubCategoriaUpdate">Sub categoria: </label>
                            <input type="text" name="idSubCategoriaUpdate" id="idSubCategoriaUpdate" value="<?php echo $productoEncontrado[7]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="idEstadoUpdate">Estado: </label>
                            <input type="text" name="idEstadoUpdate" id="idEstadoUpdate" value="<?php echo $productoEncontrado[8]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idUsuario_creUpdate">Creador: </label>
                            <input type="text" name="idUsuario_creUpdate" id="idUsuario_creUpdate" value="<?php echo $productoEncontrado[9]; ?>"/>
                        </div>
                        <div class="row">
                            <label class="labelsUpdate" for="idUsuario_modUpdate">Modificador: </label>
                            <input type="text" name="idUsuario_modUpdate" id="idUsuario_modUpdate" value="<?php echo $productoEncontrado[10]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="fecha_modUpdate">Fecha modificación: </label>
                            <input type="text" name="fecha_modUpdate" id="fecha_modUpdate" value="<?php echo $productoEncontrado[11]; ?>"/>
                        </div>
                        <div class="row">
                            <label  class="labelsUpdate" for="fecha_creUpdate">Fecha creación: </label>
                            <input type="text" name="fecha_creUpdate" id="fecha_creUpdate" value="<?php echo $productoEncontrado[12]; ?>"/>
                        </div>
                        


                        <div class="buttonsActions">
                            <input type="submit" class="buttonUpdate btn btn-light" name="btnEnviar"  value="Actualizar contacto">
                            <a id="Eliminar" href="productos.php?accionProd=eliminarProd&idProd=<?php echo $productoEncontrado[0]; ?>">Eliminar contacto</a>
                        </div>
                    </form> 
                </div>
        <?php endforeach;


    }else {
        echo 'No hay productos registrados';
    }
}



function actualizaProductos(){
    $producto = new Producto();

    $idProductoUpdate = $_POST['idProductoUpdate'];
    $nombreProducto = $_POST['nombreProductoUpdate'];
    $precio = $_POST['precioUpdate'];
    $imgProducto = $_POST['imgProductoUpdate']; 
    $descripcion = $_POST['descripcionUpdate']; 
    $cantidad = $_POST['cantidadUpdate'];

    $idCategoria = $_POST['idCategoriaUpdate'];
    $idSubCategoria = $_POST['idSubCategoriaUpdate'];
    $idEstado = $_POST['idEstadoUpdate'];
    $idUsuario_cre = $_POST['idUsuario_creUpdate']; 
    $idUsuario_mod = $_POST['idUsuario_modUpdate']; 
    $fecha_mod = $_POST['fecha_modUpdate']; 
    $fecha_cre = $_POST['fecha_creUpdate']; 


    $producto->actualizarProductos($idProductoUpdate, $nombreProducto, $precio, $imgProducto, $descripcion, $cantidad, $idCategoria, $idSubCategoria, $idEstado, $idUsuario_cre, $idUsuario_mod, $fecha_mod, $fecha_cre);
}


function eliminaProductos(){
    $producto = new Producto();

    $idProd = $_GET['idProd'];

    $producto->eliminarProductos($idProd);
}
function consultarPrductosCategorias($categoria){
    $producto = new Producto();
    $result=$producto->consultarProductosPorCategoria($categoria);
    if ($result != 'error') {
        $listaProductos = $result;
        foreach ($listaProductos as $productoEncontrado) {
        echo "<div class='card m-auto' style='width: 18rem;'>";
        echo "<img src='$productoEncontrado[1]' class='card-img-top' alt='...'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$productoEncontrado[0]</h5>";
        echo "<p class='card-text'>$productoEncontrado[2]</p>";
        echo "<a href='#' class='btn btn-primary'>Añandir</a>";
        echo "</div>";
        }
    }
}
// <div class="card" style="width: 18rem;">
//   <img src="..." class="card-img-top" alt="...">
//   <div class="card-body">
//     <h5 class="card-title">Card title</h5>
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>

// echo "<div class='card'>
//         <div class='imgBx'> 
//         <img src='$productoEncontrado[1]'></img>
//         </div>
//         <div class='contentBx'>
//         <h2>$productoEncontrado[0]<h2>
//         <div class='size'>
//             <h3>Talla: </h3>
//             <span>S</span>
//             <span>M</span>
//             <span>L</span>
//             <span>X</span>
//         </div>
//         <h3>$productoEncontrado[2]</h3>
//         <div class='link'><a href='#'>Añadir</a></div>";
        
?>