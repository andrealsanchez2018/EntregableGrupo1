<?php include('../control/categoriaControl.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categotias::: </title>
</head>
<body>

<form action="/EntregableGrupo1/control/categoriaControl.php" method="post">
<input type="text" id="c_id" name="c_id" placeholder="Id">
<br>
<input type="text" id="c_nombre" name="c_nombre" placeholder="nombre de la categoria">
<br>
<?php desplegableEstado();?> 
<br>
<input type="submit" value="Registrar" name="c_enter">
<input type="submit" value="Actualizar" name="c_enter">
<input type="submit" value="Eliminar" name="c_enter">

</form>
<?php listarCategorias();?>
<?php listarCategoriasEstado(); desplegableCategoria();?>

</body>
</html>