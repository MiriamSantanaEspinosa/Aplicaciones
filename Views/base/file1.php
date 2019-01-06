<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02/01/2019
 * Time: 10:47 PM
 */

if ($_FILES['archivo']["error"] > 0)
{
    //echo "Error: " . $_FILES['archivo']['error'] . "<br>";
    ?>
    <script type="text/javascript">
        swal("No has seleccionado un archivo", "Intentalo de nuevo", "error");
        setTimeout(function(){
            window.location.href = "<?php echo URL?>base";
        },2200)
    </script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
        swal("Subiendo archivo", "Archivo cargado exitosamente", "success");
        setTimeout(function(){
            window.location.href = "<?php echo URL?>base";

        },2200)
    </script>
    <?php


    //copy($_FILES['archivo']['tmp_name'],
      //  "subidas/Informes/".$_FILES['archivo']['name']);

    if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        // creamos las variables para subir a la db
        $ruta = "subidas/Informes";
        $nombrefinal= trim ($_FILES['archivo']['name']); //Eliminamos los espacios en blanco
        $upload= $ruta . $nombrefinal;

        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion

            echo "<b>Upload exitoso!. Datos:</b><br>";
            echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['archivo']['name']."</a></i><br>";
            echo "Tipo MIME: <i>".$_FILES['archivo']['type']."</i><br>";
            echo "Peso: <i>".$_FILES['archivo']['size']." bytes</i><br>";
            echo "<br><hr><br>";



            $nombre  = $_POST["nombre"];
            $description  = $_POST["description"];

            $sql = "INSERT INTO archivos (name,description,ruta,tipo,size) 
    VALUES ('$nombre','$description','".$nombrefinal."','".$_FILES['archivo']['type']."','".$_FILES['archivo']['size']."')";
            if (mysqli_query($con, $sql)){
                echo "Dato insertado exitosamente";
            }
            else{
                echo "Error:" . $sql . "<br>" . mysqli_error($con);
            }


        }
    }
}


?>