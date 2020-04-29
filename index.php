<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">

</head>

<body class="container">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <header class="principal">
        <div class="row">
            <div class="col-md-3 col-3"><img src="images/logo.png" salt="" style="height: 100px;"></div>
            <div class="col-md-6 col-6">
                <img src="images/nombre.png" salt="" style="height: 100px; width: 400px;">

            </div>
            <div class="ingreso col-md-3 col-3">
                <span><a href="#">Iniciar Sesión </a></span>
                <span><a href="">Registrarme</a></span>
                <span><a href="#"><img src="images/carrito.png" alt="carrito de compras" style="height: 18px;"> </a></span>

            </div>

        </div>

        </div>
        <div class="row">

            <div class="col-md-12 col-12">
                <ul class="nav shadow-sm p-2 mb-4 bg-white rounded">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hombres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contacto.html">Contactanos</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>

    <section class="">
        <div class="row  ">
          
            <div class="col-md-12 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/banner11.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner12.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner13.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

        </div>

    </section>
    <section class="servicios_s">
        <div class="row mt-3">
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mujeres
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner11.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Niños
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner12.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Hombres
                                </button>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner13.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>

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

=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">

</head>

<body class="container">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <header class="principal">
        <div class="row">
            <div class="col-md-3 col-3"><img src="images/logo.png" salt="" style="height: 100px;"></div>
            <div class="col-md-6 col-6">
                <img src="images/nombre.png" salt="" style="height: 100px; width: 400px;">

            </div>
            <div class="ingreso col-md-3 col-3">
                <span><a href="#">Iniciar Sesión </a></span>
                <span><a href="">Registrarme</a></span>
                <span><a href="#"><img src="images/carrito.png" alt="carrito de compras" style="height: 18px;"> </a></span>

            </div>

        </div>

        </div>
        <div class="row">

            <div class="col-md-12 col-12">
                <ul class="nav shadow-sm p-2 mb-4 bg-white rounded">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hombres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contacto.html">Contactanos</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>

    <section class="">
        <div class="row  ">
          
            <div class="col-md-12 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/banner11.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner12.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner13.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

        </div>

    </section>
    <section class="servicios_s">
        <div class="row mt-3">
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mujeres
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner11.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Niños
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner12.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="col-md-4 col-4">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Hombres
                                </button>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="images/banner13.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>

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

>>>>>>> 4a485401597abb9836fb1fdbf3e7fafec6b91ee7
</html>