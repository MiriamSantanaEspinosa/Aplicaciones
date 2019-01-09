<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div><?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?></div>

            <div class="panel">
                <h2>Inicio de sesión</h2>
                <p>Por favor coloca tu cuenta y contraseña</p>
            </div>

            <form id="regis" name="regis" class="needs-validation"  method="post" action="<?php echo URL?>login/Verify">
                <div class="form-group">
                    <input type="email" class="form-control" id="nickname" name="nickname" value="" placeholder="Correo electrónico">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" value="" placeholder="Contraseña" required>
                </div>

                <div class="form-group">
                    <!--<button type="submit" id="signin" class="col s12 btn btn-large waves-effect indigo">Entrar</button> -->
                    <button type='submit' name='btn_login' class='btn btn-primary'>Entrar</button>
                </div>

                <div class="container">
                    <p class="text text-black-50 mx-auto mt-2 mb-10">¿Aún no tienes cuenta con nosotros?</p>
                    <a  href="<?php echo URL?>personas" class="btn btn-primary js-scroll-trigger" id= required"signin">Registrate</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    $("#regis").validate({
        rules:{
            nickname:{
                required:true,
                maxlength: 10,
                minlength: 5,
                lettersonly:true,
            },
            pass:{
                required:true,
                maxlength: 3,
                minlength: 1,
                number:true,
            },
        },
        messages:{
            nickname:{
                required:"Agrega una descripción",
                maxlength:"Máximo 12 caracteres",
                minlength:"Mínimo 4 caracteres",
                text:"solo letras",
            },
            pass:{
                required:"Ingresa  números",
                maxlength:"Maximo 10 caracteres",
                minlength:"Minimo 1 caracteres",
                number:"Solo números",
            }
        },
        errorPlacement: function(error, element) {
            $(element)
                .closest("form")
                .find("label[for='" + element.attr("id") + "']")
                .attr('data-error', error.text());
        }
    });
</script>