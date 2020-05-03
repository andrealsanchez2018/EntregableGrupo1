<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Productos : Lista General</title>
</head>
<body>

<!-- form crear -->
    <div class="container">
        <h2>Insertar productos</h2>
        <div class="sub-container">
        <form class="formInsertar" method="POST" action="productos.php?accionProd=crearProd" enctype="multipart/form-data">
                <input type="text" name="nombreProducto" placeholder="Nombre producto:"/>
                <input type="text" name="precio" placeholder="Precio:"/>
                <input type="text" name="imgProducto" placeholder="Imagen producto:"/>
                <input type="text" name="cantidad" placeholder="Cantidad:"/>

                <textarea class="descripcionTextarea" type="text" name="descripcion" placeholder="Descripcion:"></textarea>
                
                <select class="itemCategoria" name="idCategoria">
                    <option value="" selected>Seleccione categoria:</option>
                    <option value="1">Niños</option> 
                    <option value="2">Mujeres</option>
                    <option value="3">Hombres</option>
                </select>
                
                <select class="itemSubCategoria" name="idSubCategoria">
                    <option value="" selected>Seleccione categoria:</option>
                    <option value="1">Pantalon</option> 
                    <option value="2">Camisa</option>
                    <option value="3">Zapatos</option>
                </select>
                <input type="hidden" value="1" name="idEstado" placeholder="Estado:"/>
                <input type="hidden" value="1" name="idUsuario_cre" placeholder="Usuario creador"/>
                <input type="hidden" value="1" name="idUsuario_mod" placeholder="Usuario modificador"/>

                <input type="submit" value= "Insertar producto" name="enter"/>
            </form>
        </div>
    </div>


    <!-- Section de filtrar contacto -->
    <div class="container">
        <form class="formQuery" method="POST" action="productos.php?accionProd=filtrarProd" enctype="multipart/form-data">
            <h3>Filtrar contactos</h3>
            <label for="" style="color: gray;">Filtrar por:</label>
            <select class="itemQuery" name="itemQuery">
                <option value="idProducto" selected>Id producto</option> 
                <option value="nombreProducto">Nombre producto</option>
                <option value="precio">Precio</option>
            </select>
            <input type="text" name="filter" id="filter" placeholder="Dato a consultar:" required>
            <input type="submit" value="Buscar producto"/>
        </form>
    </div>









<!-- form Consultar -->
    <div class="container">
        <h2>Lista y actualización de productos</h2>
<<<<<<< HEAD
            <div class="sub-container">
                <form class="formInsertar" method="POST" action="productos.php?accionProd=consultarProd" enctype="multipart/form-data">
                    <input type="submit" value="Consultar">
                <?php
                    
                    include __DIR__ . "/../control/productoControl.php";
                    
                ?> 
                </form>
            </div>
=======
        <div class="sub-container">
            <form class="formConsultar" method="POST" action="productos.php?accionProd=consultarProd" enctype="multipart/form-data">   
                <?php       
                    include_once __DIR__ . "/../control/productoControl.php";
                ?> 
                <input type="submit" value="Consultar todos los productos">
            <form>
        </div>
>>>>>>> f05c4ed53dd9ab42619a8a396e1e2483bd9a2e5a
    </div>

</body>
</html>