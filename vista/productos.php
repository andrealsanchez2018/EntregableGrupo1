<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styleProducto.css">
    <title>Productos : Lista General</title>
</head>
<body class="container producto">
<?php include('header.php');?>
<!-- form crear -->
    <div class="container2 ">

    

        <h2>Insertar productos</h2>
        <div class="sub-container">
        <form class="formInsertar" method="POST" action="productos.php?accionProd=crearProd" enctype="multipart/form-data">
                <input class="form-control " type="text" name="nombreProducto" placeholder="Ingrese nombre producto"/>
                <input class="form-control " type="text" name="precio" placeholder="Ingrese precio"/>
                <input class="form-control " type="text" name="imgProducto" placeholder="Ingrese URL imagen producto"/>
                <input class="form-control " type="text" name="cantidad" placeholder="Ingrese cantidad"/>

                <textarea class="descripcionTextarea" type="text" name="descripcion" placeholder="Ingrese descripcion:"></textarea>
                
                <select class="itemCategoria" name="idCategoria">
                    <option value="" selected>Seleccione categoria:</option>
                    <option value="1">Niños</option> 
                    <option value="2">Mujeres</option>
                    <option value="3">Hombres</option>
                </select>
                
                <select class="itemSubCategoria" name="idSubCategoria">
                    <option value="" selected>Seleccione subcategoria:</option>
                    <option value="1">Pantalon</option> 
                    <option value="2">Camisa</option>
                    <option value="3">Zapatos</option>
                </select>
                <input type="hidden" value="1" name="idEstado" placeholder="Estado:"/>
                <input type="hidden" value="1" name="idUsuario_cre" placeholder="Usuario creador"/>
                <input type="hidden" value="1" name="idUsuario_mod" placeholder="Usuario modificador"/>

                <input class="btn btn-light" type="submit" value= "Insertar producto" name="enter"/>
            </form>
        </div>
    </div>


    <!-- Section de filtrar contacto -->
    <div class="container2">
    <h3>Filtrar contactos</h3>
        <div class="sub-container">    
         <form class="formQuery" method="POST" action="productos.php?accionProd=filtrarProd" enctype="multipart/form-data">
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
    </div>









<!-- form Consultar -->
    <div class="container">
        <h2>Lista y actualización de productos</h2>
        <div class="sub-container">
            <form class="formConsultar" method="POST" action="productos.php?accionProd=consultarProd" enctype="multipart/form-data">   
                <?php       
                    include_once __DIR__ . "/../control/productoControl.php";
                ?> 
                <input class="btn btn-light" type="submit" value="Consultar todos los productos">
            <form>
        </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>