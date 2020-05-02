<?php
session_start();
echo @$_SESSION['user']['nombre'];
    
require(__DIR__.'/../control/usuarioControl.php');


?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothing Bictia- Administración de Usuario</title>
 

</head>

<body class="container">
<!--script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <?php include'header.php'?>

    <!-- Formulario del producto -->
   <center> <h2>Administración de Usuario</h2></center>
    <section class="formulario" style="margin-top: 20px;" >
        <div class="row">
            <div class="col-md-5 col-12">
                <?php //include('registroUsuario.php')?>
        <form>
           
            <div class="form-group row">
              <label for="idusuario" class="col-sm-2 ">idUsuario</label>
              <div class="col-sm-10">
              <input class="form-control" type="number" id="idusuario" placeholder="Código de usuario" name="idusuario">
              </div>
            </div>
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input class="form-control" type="text"  id="nombre" placeholder="Nombre de usuario" name="nombre">
                </div>
              </div>
              <div class="form-group row">
                <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                <input class="form-control" type="text"  id="correo" placeholder="Correo" name="correo">
                </div>
              </div>
              <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                <input class="form-control" type="text"  id="pass" placeholder="Contraseña" name="pass">
                </div>
              </div>
              <div class="form-group row">
                <label for="rol" class="col-sm-2 col-form-label">idRol</label>
                <div class="col-sm-10">
                <input class="form-control" type="number"  id="rol" placeholder="Rol del usuario" name="rol">
                </div>
              </div>
              <div class="form-group row">
                <label for="estado" class="col-sm-2 col-form-label">idEstado</label>
                <div class="col-sm-10">
                <input class="form-control" type="number"  id="estado" placeholder=" en Stock" name="estado">
                </div>
              </div>

              
          </form>
        </div>
        <!-- sección de opciones -->
        <div class="col-md-7 col-12">
             <form class="form-inline my-2 ">
             <input class="buscar mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
             
            </form>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-ligth ">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope
                    ="col">Contraseña</th>
                    <th scope="col">idRol</th>
                    <th scope="col">idEstado</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="result">
                    <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button>Modificar</button><button class="icon-trash-empty"></button></td>
                    </tr>
                    
                    <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button>Modificar</button><button class="icon-trash-empty"></button></td>
                    </tr>
                   
                </tbody>
            </table>
            </div>


        </div>
        </div>
    </section>
   <?php include'footer.php' ?>
<script type="text/javascript" src="../public/js/Async.js"></script>
</body>

</html>