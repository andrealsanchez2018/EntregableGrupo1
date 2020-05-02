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
                    <option value="3">Mujeres</option>
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


<!-- form Consultar -->

    <div class="container">
        <h2>Lista y actualización de productos</h2>
            <div class="sub-container">
                <?php
                    include __DIR__ . "/../control/productoControl.php";
                ?>
            </div>
    </div>
    
    
    
<!-- form Actualizar -->


</body>
</html>