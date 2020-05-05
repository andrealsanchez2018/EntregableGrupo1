<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    $logueado=true;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Mi hoja de estilos, debe estar creada en la carpeta css -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fontello.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"><!-- letra -->
    
</head>

<body class="container">
<header class="principal">
        <div class="row">
            <div class="col-md-3 col-3"><img src="public/img/logo3.png" salt="" style="height: 100px;"></div>
            <div class="col-md-6 col-9">
            <h1 class="h1-header">Clothing Bictia</h1>

            </div>
            <div class="ingreso col-md-3 col-12">
                <?php if(!isset($logueado)):?>
                <span><a href="vista/login.php">Iniciar Sesión </a></span>
                <span><a href="vista/registroUsuario.php">Registrarme</a></span>
                <?php else:?>
                <span><a href="control/usuarioControl.php?mod=close">Cerrar Sesión </a></span>
                <span><a href="#"><?php echo $_SESSION['user']['nombre'];?> </a></span>
                <?php endif;?>
                
                <span><a href="#" class="icon-cart-arrow-down"></a></span>

            </div>

        </div>

        </div>
        <div class="row">

            <div class="col-md-12 col-12">
                <ul class="nav shadow-sm p-2 mb-4 bg-white rounded">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="vista/tienda.php?cat=Ninos">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vista/tienda.php?cat=Mujeres">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vista/tienda.php?cat=Hombres">Hombres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contactanos</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

   

    <section class="banner">
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
                        <img src="public/img/banner11.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="public/img/banner12.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="public/img/banner13.jpg" class="d-block w-100" alt="...">
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
                                <button class="btn btn-link nin" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Niños 
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="public/img/banner11.jpg" />
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
                                    Mujeres
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="img-fluid" src="public/img/banner12.jpg" />
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
                                <img class="img-fluid" src="public/img/banner13.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </figure>

        </div>

    </section>

   
<?php include 'vista/footer.php'; ?>
    

</body>

</html>