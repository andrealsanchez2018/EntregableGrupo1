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
        <form class="formInsertar" method="POST" action="productos.php?accionProd=crearProd">
            <input type="text" name="nombreProducto" placeholder="Nombre:"/>
            <input type="number" name="precio" placeholder="Precio:"/>
            <input type="number" name="cantidad" placeholder="Cantidad:"/>
            <div class="divFile">
                <input type="file" class="file" name="imgProducto" required>
            </div>
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
            
            <input type="hidden" name="idEstado" placeholder="Estado:"/>
            <input type="hidden" name="idUsuario_cre" placeholder="Usuario creador:"/>
            <input type="hidden" name="idUsuario_mod" placeholder="Usuario modificador:"/>
            <input type="submit" value= "Insertar Producto" name="enter"/>
        </form>
    </div>
</div>


<div class="container">
    <h2>Lista y actualización de productos</h2>
    <div class="sub-container">
        <?php
            include __DIR__ . "/../control/productoControl.php";
        ?>

    </div>
</div>



    <form method="POST" action="productos.php?accionProd=crearProd">
    <input type="text" name="nombreProducto" placeholder="Escriba nombre producto"/>
    <input type="number" name="precio" placeholder="Escriba nombre precio"/>
    <input type="text" name="imgProducto" placeholder="Escriba el enlace"/>
    <input type="text" name="descripcion" placeholder="Escriba descripcion"/>
    <input type="number" name="cantidad" placeholder="Escriba cantidad"/>
    <input type="text" name="idCategoria" placeholder="Escriba id Categoria"/>
    <input type="text" name="idSubCategoria" placeholder="Escriba id Subcategoria"/>
    <input type="text" name="idEstado" placeholder="Escriba id de Estado"/>
    <input type="text" name="idUsuario_cre" placeholder="Escriba id de usuario creador"/>
    <input type="text" name="idUsuario_mod" placeholder="Escriba id de usuario modificador"/>
    <!-- <input type="text" name="fecha_mod" placeholder="Escriba fecha de modificación"/>
    <input type="hidden" name="fecha_cre" placeholder="Escriba fecha de creación"/> -->
    <input type="submit" value= "Crear" name="enter"/>
        </form>

<!-- form Consultar -->

    <form method="POST" action="productos.php?accionProd=consultarProd">
    <input type="submit" value= "Consultar"/>
        </form>
    
<!-- form Actualizar -->
    
    <form method="POST" action="productos.php?accionProd=actualizarProd">
        <input type="text" name="nombreProducto" placeholder="Escriba nombre producto"/>
        <input type="text" name="precio" placeholder="Escriba nombre precio"/>
        <input type="text" name="imgProducto" placeholder="Escriba el enlace"/>
        <input type="text" name="descripcion" placeholder="Escriba descripcion"/>
        <input type="text" name="cantidad" placeholder="Escriba cantidad"/>
        <input type="text" name="idCategoria" placeholder="Escriba id Categoria"/>
        <input type="text" name="idSubCategoria" placeholder="Escriba id Subcategoria"/>
        <input type="text" name="idEstado" placeholder="Escriba id de Estado"/>
        <input type="text" name="idUsuario_cre" placeholder="Escriba id de usuario creador"/>
        <input type="text" name="idUsuario_mod" placeholder="Escriba id de usuario modificador"/>
        <input type="text" name="fecha_mod" placeholder="Escriba fecha de modificación"/>
<!--     <input type="hidden" name="fecha_cre" placeholder="Escriba fecha de creación"/>
 -->    <input type="submit" name= "Actualizar"/>
        </form>

<!-- form Eliminar -->

    <form method="POST" action="productos.php?accionProd=eliminarProd">
    <input type="submit" name= "Eliminar"/>
        </form>

</body>
</html>