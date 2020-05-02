<!DOCTYPE html>
<html lang="en" class="log">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/fontello.css"><!-- iconos -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script><!-- iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"><!-- letra -->
</head>

<body class="container login">

<header>
    <h1 class="h1-login" > Clothing Bictia</h1>
</header>
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Iniciar Sesión</h3>
                
            </div>
            <div class="card-body">
                <form>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-user"></span>
                        </div>
                        <input type="text" class="form-control" placeholder="correo">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-key"></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Iniciar Sesión" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    ¿No tienes contraseña?<a href="registroUsuario.php">Regístrate</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Olvidé mi contraseña</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>