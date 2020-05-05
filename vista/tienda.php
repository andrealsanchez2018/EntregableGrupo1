<?php $accion = $_GET['cat'];
    include '../control/productoControl.php';


if ($accion == "" || empty($accion)) {
    header('Location: index.php');
} else if ($accion == "Ninos") {
    include 'header.php';
    $categoria=1;
    consultarPrductosCategorias($categoria);
    include 'footer.php';

} else if ($accion == "Mujeres") {
    include 'header.php';
    $categoria=2;
    consultarPrductosCategorias($categoria);
    include 'footer.php';

} else if ($accion == "Hombres") {
    include 'header.php';
    $categoria=3;
    consultarPrductosCategorias($categoria);
    include 'footer.php';

}
