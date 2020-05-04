<?php include('../vista/header.php'); #prueba ?>

<body class="container">
    <?php include('../control/subcategoriaControl.php');
    $rol = checkRol();
    ?>
    <form action="/EntregableGrupo1/control/subcategoriaControl.php" method="post">
        <input type="text" id="sb_id" name="sb_id" placeholder="Id">
        <br>
        <input type="text" id="sb_nombre" name="sb_nombre" placeholder="nombre de la categoria">
        <br>
        <?php desplegableEstado($rol); ?>
        <br>
        <input type="submit" value="Registrar" name="sb_enter">
        <input type="submit" value="Actualizar" name="sb_enter">
        <input type="submit" value="Eliminar" name="sb_enter">

    </form>
    <?php listarSubCategorias(); ?>
    <?php listarSubCategoriasEstado();
    desplegableSubCategoria(); ?>

</body>

</html>