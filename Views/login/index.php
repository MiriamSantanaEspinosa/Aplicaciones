<!DOCTYPE html>
<!------------------------------------------------------------------------------->
<html lang="en">
<meta charset="UTF-8">
<head>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo URL?>/Public/EstiloLogin.css">


</head>
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading">Inicio de sesión</h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2></h2>
                <p>Por favor coloca tu cuenta y contraseña</p>
            </div>
            <form id="Login">
                <div class="form-group">
                    <input type="text" class="form-control" id="cuenta" placeholder="Numero de cuenta">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-primary" href="<?php URL ?> login/regisrto">Registrar</button>
            </form>
        </div>
    </div>
</div>
</body>

</div>
</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


