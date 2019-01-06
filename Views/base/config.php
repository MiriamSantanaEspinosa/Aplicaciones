<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05/01/2019
 * Time: 12:49 AM
 */

$con=mysqli_connect("localhost",
    "root",
    "",
    "saveinfo");

if (mysqli_connect_errno())
{
    echo "Error en la conexion con la base de datos: " . mysqli_connect_error();
}
?>