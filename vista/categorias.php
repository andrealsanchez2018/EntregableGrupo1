<?php include('../vista/header.php'); #prueba
?>
<?php include('../control/categoriaControl.php');
    $rol = checkRol();
    if($rol=='Admin'||$rol=='SuperAdmin'):
?>
<body class="container">
    
    <form action="/EntregableGrupo1/control/categoriaControl.php" method="post" class="w-50 m-auto">
        <div class="form-group">
            <label for="c_id">Id</label>
            <input type="text" id="c_id" name="c_id" placeholder="Id" class="form-control">
        </div>
        <div class="form-group">
            <label for="c_nombre">Nombre de categoria</label>
            <input type="text" id="c_nombre" name="c_nombre" placeholder="nombre de la categoria" class="form-control">
        </div>
        <div class="form-group">
            <label for="Estado">Estado</label>
            <select id='Estado' name='c_estado' class='form-control'>
            <?php desplegableEstado($rol); ?>
            </select>
        </div>
        <div class="btn-group m-auto">
            <input type="submit" class="btn btn-light" value="Registrar" name="c_enter">
            <input type="submit" class="btn btn-light" value="Actualizar" name="c_enter">
            <input type="submit" class="btn btn-light" value="Eliminar" name="c_enter">
        </div>
    </form>
<br>
    <div class="table table-responsive m-auto w-50">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Categoria</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <?php listarCategoriasEstado(); ?>
            </tbody>
        </table>
    </div>
    
    <?php include('footer.php');?>
</body>
    <?php else: header('Location: ../index.php')?>
        <?php endif?>
</html>