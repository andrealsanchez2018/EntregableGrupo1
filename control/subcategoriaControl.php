<?php
require(__DIR__ . '/../modelo/class.Subcategoria.php');


//listarCategorias();
//listarCategoriasEstado();

if (isset($_POST['sb_enter'])) {
    $c_boton = $_POST['sb_enter'];
    switch ($c_boton) {
        case 'Registrar':
            agregarSubCategoria();
            break;

        case 'Actualizar':
            editarSubCategoria();
            break;
        case 'Eliminar':
            eliminarSubCategoria();
            break;
    }
}




function listarSubCategorias()
{
    $subCategoria = new SubCategoria();

    $resultado = $subCategoria->mostrarSubCategorias();

    if ($resultado != 'error') {
        foreach ($resultado as $subCategoriaEncontrada) {
            echo "<p>$subCategoriaEncontrada[1]</p><br>";
        }
    } else {
        echo "<p>No hay categorias</p>";
    }
}
function desplegableEstado()
{
    $subCategoria = new SubCategoria();
    $resultado = $subCategoria->mostrarEstado();
    if ($resultado != 'error') {
        echo "<select id='Estado' name='sb_estado'>";
        foreach ($resultado as $Estado) {
            echo "<option value=' $Estado[0]'> $Estado[1] </option>";
        }
        echo "</select>";
    } else {
        echo "<p>No hay categorias</p>";
    }
}

function desplegableSubCategoria()
{
    $subCategoria = new SubCategoria();
    $resultado = $subCategoria->mostrarSubCategorias();
    if ($resultado != 'error') {
        echo "<select id='subCategoria' name='p_subCategoria'>";
        foreach ($resultado as $subCategoria) {
            echo "<option value=' $subCategoria[0]'> $subCategoria[1] </option>";
        }
        echo "</select>";
    } else {
        echo "<p>No hay categorias</p>";
    }
}

function listarSubCategoriasEstado()
{
    $subCategoria = new SubCategoria();
    $resultado = $subCategoria->mostrarSubCategoriasEstado();
    if ($resultado != 'error') {
        foreach ($resultado as $subCategoriaEstado) {
            echo "<br>";
            echo "<span>$subCategoriaEstado[0] </span>";
            echo "<span>$subCategoriaEstado[1] </span>";
            echo "<span>$subCategoriaEstado[2]</span>";
        }
    } else {
        echo "<p>No hay categorias</p>";
    }
}

function agregarSubCategoria()
{
    $sb_nombre = $_POST['sb_nombre'];
    $sb_estado = $_POST['sb_estado'];

    $subCategoria = new SubCategoria();
    $subCategoria->insertarSubCategoria($sb_nombre, $sb_estado);
}
function editarSubCategoria()
{
    $sb_id = $_POST['sb_id'];
    $sb_nombre = $_POST['sb_nombre'];
    $sb_estado = $_POST['sb_estado'];

    $subCategoria = new SubCategoria();
    $subCategoria->actualizarSubCategoria($sb_id, $sb_nombre, $sb_estado);
}
function eliminarSubCategoria()
{
    $sb_id = $_POST['sb_id'];

    $subCategoria = new SubCategoria();
    $subCategoria->eliminarSubCategoria($sb_id);
}
