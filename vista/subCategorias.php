<?php include('../vista/header.php'); #prueba
?>
<?php $rol = checkRol();
    if($rol=='Admin'||$rol=='SuperAdmin'):
?>
<head>
<link rel="stylesheet" href="../public/css/styleProducto.css">
</head>
<body class="container">
    <?php include('../control/subcategoriaControl.php');
    $rol = checkRol();
    ?>
    <div class="container2">
        <h2 class="h2producto">Registro sub-categoria</h2>
    <form action="/EntregableGrupo1/control/subcategoriaControl.php" method="post" class="w-50 m-auto">
        <div class="form-group">
            <label for="sb_id">Id</label>
            <input type="text" id="sb_id" class="form-control" name="sb_id" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="sb_nombre">Nombre de la Subcategoria</label>
            <input type="text" id="sb_nombre" class="form-control" name="sb_nombre" placeholder="Nombre de la categoria">
        </div>
        <div class="form-group">
            <label for="Estado">Estado</label>
            <select id='Estado' name='sb_estado' class='form-control'>
                <?php desplegableEstado($rol); ?>
            </select>
        </div>
        <div class="btn-group m-auto">
            <input type="submit" class="btn btn-light" value="Registrar" name="sb_enter">
            <input type="submit" class="btn btn-light" value="Actualizar" name="sb_enter">
            <input type="submit" class="btn btn-light" value="Eliminar" name="sb_enter">
        </div>
    </form>
    </div>
    <br>
    <div class="container2">
        <h2 class="h2producto">Listado sub categorias</h2>
    <div class="table table-responsive m-auto w-50">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Subcategoria</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <?php listarSubCategoriasEstado(); ?>
            </tbody>
        </table>
    </div>
        </div>
    <?php include('footer.php'); ?>
</body>
<?php else: header('Location: ../index.php')?>
        <?php endif?>
</html>