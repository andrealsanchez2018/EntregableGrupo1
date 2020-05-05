<?php $accion = $_GET['cat'];

if ($accion == "" || empty($accion)) {
    header('Location: index.php');
} else if ($accion == "Ninos") {
    include 'header.php';
    echo "Tienda de niños";
} else if ($accion == "Mujer") {
    echo "Tienda de Mujeres";
} else if ($accion == "Hombre") {
    echo "Tienda de Hombres";
}
