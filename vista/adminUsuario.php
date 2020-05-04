
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothing Bictia- Administración de Usuario</title>


</head>

<body class="container">

<?php 

    require_once('header.php'); 

    //require(__DIR__ . '/../control/usuarioControl.php');
    if(checkRol()=='Usuario'||checkRol()=="")
    {
        header('location: ../index.php?err=SBIA');
    }

?>
    <!-- Formulario del producto -->
    <center>
        <h2>Administración de Usuario</h2>
    </center>
    <section class="formulario" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-3 col-12">
                <?php //include('registroUsuario.php')
                ?>
                <form action="" id="Registro">
                    <div class="form-group row">
                        <input class="form-control " type="number" id="idusuario" placeholder="Código de usuario" name="idusuario">
                        <input class="form-control " type="text" id="nombre" placeholder="Nombre de usuario" name="nombre">
                        <input class="form-control " type="text" id="correo" placeholder="Correo" name="correo">
                        <input class="form-control " type="text" id="pass" placeholder="Contraseña" name="pass">
                        <?php  if (checkRol() == 'admin' || checkRol() == 'SuperAdmin') :   ?>
                        <select class="form-control" name="rol" id="rol" name="rol">
                            <option value="3">Super Admin</option>
                            <option value="2">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>

                        <select class="form-control" name="estado" id="estado" name="estado">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                        <?php  else: ?>
                        <input type="hidden" id="rol" name="rol" value="1">
                        <?php endif;  ?>

                        <center>
                            <button type="submit" class="btn btn-light">Modificar</button>
                            <button type="submit" class="btn btn-light">Cancelar</button>
                        </center>
                    </div>


                </form>
            </div>
            <!-- sección de opciones -->
            <div class="col-md-9 col-12">
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
                                <th scope="col">Contraseña</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="result">
                            

                            

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="../public/js/Async.js"></script>
</body>

</html>