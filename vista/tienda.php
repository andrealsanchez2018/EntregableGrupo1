<?php $accion = $_GET['cat'];
include '../control/productoControl.php';

if ($accion == "" || empty($accion)) {
    header('Location: index.php');
} else if ($accion == "Ninos") {
 
    include ('header2.php');
    echo "<body class='container w-100'>
    <div class='row contenedor w-100 d-flex flex-wrap flex-row'>";
    $categoria = 1;
    consultarPrductosCategorias($categoria);
    echo "</div></body>";
} 
else if ($accion == "Mujeres") {
    include ('header2.php');
    echo "<body class='container w-100'>
    <div class='row contenedor w-100 d-flex flex-wrap flex-row'>";
    $categoria = 2;
    consultarPrductosCategorias($categoria);
    echo "</div></body>";
}
 else if ($accion == "Hombres") {
    include ('header2.php');
    echo "<body class='container w-100'>
    <div class='row contenedor w-100 d-flex flex-wrap flex-row'>";
    $categoria = 3;
    consultarPrductosCategorias($categoria);
    echo "</div></body>";

}
