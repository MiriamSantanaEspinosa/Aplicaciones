<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02/01/2019
 * Time: 10:47 PM
 */
include 'config.php';
if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
    {
    if(is_uploaded_file($_FILES['archivo']['tmp_name']))
    {
        $ruta = "C:/xampp/htdocs/Aplicaciones/Views/base/subidas/Actas/";
        $nombrefinal= trim ($_FILES['archivo']['name']);
        $upload= $ruta . $nombrefinal;

        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) {

            echo "<b>Upload exitoso!. Datos:</b><br>";
            echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['archivo']['name']."</a></i><br>";
            echo "Tipo MIME: <i>".$_FILES['archivo']['type']."</i><br>";
            echo "Peso: <i>".$_FILES['archivo']['size']." bytes</i><br>";
            echo "<br><hr><br>";



            $sql = "INSERT INTO archivos (nombre,tipo,size) 
            VALUES ('".$nombrefinal."','".$_FILES['archivo']['type']."','".$_FILES['archivo']['size']."')";
        }
    }
}
?>