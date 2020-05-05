<?php
require(__DIR__ . '/../modelo/class.Categoria.php');


//listarCategorias();
//listarCategoriasEstado();

if (isset($_POST['c_enter'])) {
    $c_boton = $_POST['c_enter'];
    switch ($c_boton) {
        case 'Registrar':
            agregarCategoria();
            break;

        case 'Actualizar':
            editarCategoria();
            break;
        case 'Eliminar':
            eliminarCategoria();
            break;
    }
}




function listarCategorias()
{
    $categoria = new Categoria();

    $resultado = $categoria->mostrarCategorias();

    if ($resultado != 'error') {
        foreach ($resultado as $categoriaEncontrada) {
            echo "<p>$categoriaEncontrada[1]</p><br>";
        }
    } else {
        echo "<p>No hay categorias</p>";
    }
}
function desplegableEstado($rol)
{
    $categoria = new Categoria();
    $resultado = $categoria->mostrarEstado();
    if ($rol == 'SuperAdmin') {

        if ($resultado != 'error') {

            foreach ($resultado as $Estado) {
                echo "<option value=' $Estado[0]'> $Estado[1] </option>";
            }
        } else {
            echo "<p>No hay categorias</p>";
        }
    } else if ($rol == 'Admin') {
        if ($resultado != 'error') {

            foreach ($resultado as $Estado) {
                echo "<option value=' $Estado[0]'> $Estado[1] </option>";
            }
        } else {
            echo "<p>No hay categorias</p>";
        }
    }
}

function desplegableCategoria()
{
    $categoria = new Categoria();
    $resultado = $categoria->mostrarCategorias();
    if ($resultado != 'error') {
        echo "<select id='categoria' name='p_categoria'>";
        foreach ($resultado as $categoria) {
            echo "<option value=' $categoria[0]'> $categoria[1] </option>";
        }
        echo "</select>";
    } else {
        echo "<p>No hay categorias</p>";
    }
}

function listarCategoriasEstado()
{
    $categoria = new Categoria();
    $resultado = $categoria->mostrarCategoriasEstado();


    if ($resultado != 'error') {
        foreach ($resultado as $categoriaEstado) {
            echo "<tr>";
            echo "<td>$categoriaEstado[0] </td>";
            echo "<td>$categoriaEstado[1] </td>";
            echo "<td>$categoriaEstado[2]</td>";
        }
    } else {
        echo "<p>No hay categorias</p>";
    }
}

function agregarCategoria()
{
    $c_nombre = $_POST['c_nombre'];
    $c_estado = $_POST['c_estado'];

    $categoria = new Categoria();
    $categoria->insertarCategoria($c_nombre, $c_estado);
}
function editarCategoria()
{
    $c_id = $_POST['c_id'];
    $c_nombre = $_POST['c_nombre'];
    $c_estado = $_POST['c_estado'];
    $c_rol = $_POST['rol'];

    $categoria = new Categoria();
    $categoria->actualizarCategoria($c_id, $c_nombre, $c_estado, $c_rol);
}
function eliminarCategoria()
{
    $c_id = $_POST['c_id'];

    $categoria = new Categoria();
    $categoria->eliminarCategoria($c_id);
}
