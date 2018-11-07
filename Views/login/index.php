<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Inicio de sesión</h2>
                <p>Por favor coloca tu cuenta y contraseña</p>
            </div>
            <form id="Login">
                <div class="form-group">
                    <input type="text" class="form-control" id="cuenta" placeholder="Numero de cuenta">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <button type="submit" id="signin" class="btn btn-primary">Entrar</button>
                </div>

                <div class="container">
                    <p class="text text-black-50 mx-auto mt-2 mb-10">¿Aún no tienes cuenta con nosotros?</p>
                    <a  href="<?php echo URL?>login/registrar" class="btn btn-primary js-scroll-trigger" id="signin">Registrate</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>