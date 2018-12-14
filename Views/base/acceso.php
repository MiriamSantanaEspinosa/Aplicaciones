<?php

session_start();

//incluir la liberería de php de Google API
require_once '../google-api-php-client-2.1.3/vendor/autoload.php';

//deifnir los permisos requeridos
$scopes = array('https://www.googleapis.com/auth/drive');

//crear el objeto cliente
$cliente = new Google_Client();
$cliente->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/gestor/acceso.php');
$cliente->setAuthConfig("client_secret.json");
$cliente->addScope($scopes);
$cliente->setAccessType('offline');

if (isset($_SESSION['token_de_acceso']) && $_SESSION['token_de_acceso']) {

    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";

    //crear conexión
    $con = new mysqli($servidor, $usuario, $contraseña);

    //revisar la conexión
    if ($con->connect_error) {
        die("Fallo en la conexión: " . $con->connect_error);
    }

    //crear base de datos si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS gestor";
    if ($con->query($sql) === TRUE) {
        echo "Base de datos creada con éxito<br><br>";
    } else {
        echo "Fallo creando base de datos: " . $con->error . "<br><br>";
    }

    mysqli_select_db($con,"gestor");

    //crear tabla en la base de datos si no existe
    $sql = "CREATE TABLE IF NOT EXISTS token (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, token_de_acceso VARCHAR(2000))";
    if ($con->query($sql) === TRUE) {
        echo "Tabla creada con éxito<br><br>";
    } else {
        echo "Fallo creando la tabla: " . $con->error . "<br><br>";
    }

    //guardar el token de acceso en forma de un JSON string
    $token_de_acceso = json_encode($_SESSION['token_de_acceso']);
    $sql = "INSERT INTO token (token_de_acceso) VALUES ('$token_de_acceso')";
    if ($con->query($sql) === TRUE) {
        echo "Token guardado con éxito<br><br>";
    } else {
        echo "Error guardado token: " . $sql . "<br>" . $con->error . "<br><br>";
    }

    $con->close();
    header("Location: index.php");

} else {

    if (!isset($_GET['code'])) {

        $url_de_auth = $cliente->createAuthUrl();
        header('Location: ' . filter_var($url_de_auth, FILTER_SANITIZE_URL));

    } else {

        $cliente->authenticate($_GET['code']);
        $_SESSION['token_de_acceso'] = $cliente->getAccessToken();
        $uri_de_redireccion = 'http://' . $_SERVER['HTTP_HOST'] . '/gestor/acceso.php';
        header('Location: ' . filter_var($uri_de_redireccion, FILTER_SANITIZE_URL));

    }

}