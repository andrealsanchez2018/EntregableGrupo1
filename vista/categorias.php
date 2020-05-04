<?php include('../vista/header.php'); #prueba?>

<body class="container">
    <?php include('../control/categoriaControl.php');
    $rol = checkRol();
    ?>
    <form action="/EntregableGrupo1/control/categoriaControl.php" method="post">
        <input type="text" id="c_id" name="c_id" placeholder="Id">
        <br>
        <input type="text" id="c_nombre" name="c_nombre" placeholder="nombre de la categoria">
        <br>
        <?php desplegableEstado($rol); ?>
        <br>
        <input type="submit" value="Registrar" name="c_enter">
        <input type="submit" value="Actualizar" name="c_enter">
        <input type="submit" value="Eliminar" name="c_enter">

    </form>
    <?php listarCategorias(); ?>
    <?php listarCategoriasEstado();
    desplegableCategoria(); ?>
    <?php include('footer.php');?>
</body>

</html>