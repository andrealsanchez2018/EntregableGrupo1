<?php include('../vista/header.php'); #prueba 
?>

<body class="container">
    <?php include('../control/subcategoriaControl.php');
    $rol = checkRol();
    ?>
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
    <br>
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
    <?php include('footer.php'); ?>
</body>

</html>