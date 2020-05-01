<?php include('../control/subcategoriaControl.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBCategotias::: </title>
</head>
<body>

<form action="/EntregableGrupo1/control/subcategoriaControl.php" method="post">
<input type="text" id="sb_id" name="sb_id" placeholder="Id">
<br>
<input type="text" id="sb_nombre" name="sb_nombre" placeholder="nombre de la categoria">
<br>
<?php desplegableEstado();?> 
<br>
<input type="submit" value="Registrar" name="sb_enter">
<input type="submit" value="Actualizar" name="sb_enter">
<input type="submit" value="Eliminar" name="sb_enter">

</form>
<?php listarSubCategorias();?>
<?php listarSubCategoriasEstado(); desplegableSubCategoria();?>

</body>
</html>