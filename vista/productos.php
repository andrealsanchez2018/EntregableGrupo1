<?php

include __DIR__ . "/../control/productoControl.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos : Lista General</title>
</head>
<body>

<!-- form crear -->
    <form method="POST" action="productos.php?accionProd=crearProd">
    <input type="text" name="nombreProducto" placeholder="Escriba nombre producto"/>
    <input type="text" name="precio" placeholder="Escriba nombre precio"/>
    <input type="text" name="imgProducto" placeholder="Escriba el enlace"/>
    <input type="text" name="descripcion" placeholder="Escriba descripcion"/>
    <input type="text" name="cantidad" placeholder="Escriba cantidad"/>
    <input type="text" name="idCategoria" placeholder="Escriba id Categoria"/>
    <input type="text" name="idSubcategoria" placeholder="Escriba id Subcategoria"/>
    <input type="text" name="idEstado" placeholder="Escriba id de Estado"/>
    <input type="text" name="idUsuario_cre" placeholder="Escriba id de usuario creador"/>
    <input type="text" name="idUsuario_mod" placeholder="Escriba id de usuario modificador"/>
<!--     <input type="text" name="fecha_mod" placeholder="Escriba fecha de modificación"/>
    <input type="text" name="fecha_cre" placeholder="Escriba fecha de creación"/>
 -->    <input type="submit" value= "Crear" name="enter"/>
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
    <input type="text" name="idSubcategoria" placeholder="Escriba id Subcategoria"/>
    <input type="text" name="idEstado" placeholder="Escriba id de Estado"/>
    <input type="text" name="idUsuario_cre" placeholder="Escriba id de usuario creador"/>
    <input type="text" name="idUsuario_mod" placeholder="Escriba id de usuario modificador"/>
<!--     <input type="text" name="fecha_mod" placeholder="Escriba fecha de modificación"/>
    <input type="text" name="fecha_cre" placeholder="Escriba fecha de creación"/>
 -->    <input type="submit" name= "Actualizar"/>
        </form>

<!-- form Eliminar -->

    <form method="POST" action="productos.php?accionProd=eliminarProd">
    <input type="submit" name= "Eliminar"/>
        </form>

</body>
</html>