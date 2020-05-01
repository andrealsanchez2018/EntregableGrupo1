<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothing Bictia- Administración de Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/fontello.css">


</head>

<body class="container">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <header class="principal">
        <div class="row">
            <div class="col-md-3 col-3"><img src="../public/img/logo.png" salt="" style="height: 100px;"></div>
            <div class="col-md-6 col-6">
                <img src="../public/img/nombre.png" salt="" style="height: 100px; width: 400px;">

            </div>
            <div class="ingreso col-md-3 col-3">
                <span><a href="#">Iniciar Sesión </a></span>
                <span><a href="">Registrarme</a></span>
                <span><a href="#"><img src="../public/img/car.png" alt="carrito de compras" style="height: 18px;"> </a></span>

            </div>

        </div>

        </div>

        
        <div class="row">

            <div class="col-md-12 col-12">
            <ul class="nav shadow-sm p-2 mb-4 bg-white rounded">
                    <li class="nav-item">
                        <a class="nav-link active" href="adminUsuario.php">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subcategorías</a>
                    </li>
                                       
                </ul>
           
            </div>
        </div>
    </header>

    <!-- Formulario del producto -->
   <center> <h2>Administración de Usuario</h2></center>
    <section class="formulario" style="margin-top: 20px;" >
        <div class="row">
            <div class="col-md-5 col-12">
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
                    <th scope="col">Contraseña</th>
                    <th scope="col">idRol</th>
                    <th scope="col">idEstado</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
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
    <footer class="footer mt-auto py-3" >
        <div class="container">
            <div class="row ">
                <div class="col-md-3">

                    <a href="index.php"><b>Home</b></a> <br><br>
                    <a href="contactanos.php"><b>Contactanos</b></a><br><br>
                    

                </div>
                <div class="col-md-3">
                     <h3>Categorías</h3>
                    <ul>
                        <li><a href="niños.php">Niños</a>
                        </li>
                        <li><a href="mujeres.php">Mujeres</a>
                        </li>
                        <li><a href="hombres.php">Hombres</a>
                        </li>
                        
                    </ul>
                    <a href=""></a>
                </div>
                <div class="col-md-3"> <h3>Contactanos</h3> <br>
                    <p> Dirección: Calle 35 #5 – 15 , Bogotá <br>
                        cel: 316 830 57 01 <br>
                        Tel:2222222  <br>
                    info@clothingbictia.com  </p></div>
                <div class="col-md-3"><h3> Redes</h3>
                <a href="https://api.whatsapp.com/send?phone=573168305701&text=Hola%2C%20quisiera%saber%20más%20de%20ustedes"  class="whatsapp"> </a>
                <a href="#" class="icon-instagram"></a>
                <a href="#" class="icon-facebook"></a>
                <a href="#" class="icon-youtube"></a>
                </div>
                
            </div>

            <center> Todos los derechos reservados Clothing Bictia 2020.</center>
        </div>



    </footer>

</body>

</html>