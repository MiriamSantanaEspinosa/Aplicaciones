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
    if(is_uploaded_file($_FILES['archivo']['tmp_name']))
    {

        ?>
        <script type="text/javascript">
            swal("Subiendo archivo", "Archivo cargado exitosamente", "success");
            setTimeout(function(){

            },1000)
        </script>
        <?php


        $ruta = "C:/xampp/htdocs/Aplicaciones/Views/base/subidas/Pendientes/";
        $ruta2="http://localhost/Aplicaciones/Views/base/subidas/Pendientes/";
        $nombrefinal= trim ($_FILES['archivo']['name']);
        $upload= $ruta . $nombrefinal;

        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) {
            ?>
            <div align="center">
                <?php
                echo "<b> Este es el archivo que acabas de subir:</b><br>";

                ?>
                <br>
                <?php
                echo "Nombre: <i><a target='_blank' href=\"".$ruta2. $nombrefinal."\">".$_FILES['archivo']['name']."</a></i><br>";
                echo "Tipo MIME: <i>".$_FILES['archivo']['type']."</i><br>";
                echo "Peso: <i>".$_FILES['archivo']['size']." bytes</i><br>";

                ?>
                <br>
                <?php

                echo "<b> Responsable:</b><br>";
                ?>
                <br>
                <?php

                echo "Tu eres: " . $_SESSION['nickname'];
                ?>
                <br>
                <?php
                echo "Hoy es dia: ".date_default_timezone_set('america/mexico_city');  echo date('Y-m-d', time());
                ?>
                <br>
                <?php
                echo "La hora es: ".date('H:i:s', time());
                echo "<br><hr><br>";
                ?>
            </div>

            <?php

            $fecha  =date('Y-m-d', time());
            $hora  = date('H:i:s', time());
            $user = $_SESSION["nickname"];


            $sql = "INSERT INTO archivos (nombre,tipo,size,usuario,fecha,time) 
                VALUES ('".$nombrefinal."','".$_FILES['archivo']['type']."','".$_FILES['archivo']['size']."','".$user."','".$fecha."','".$hora."')";

            if (mysqli_query($con, $sql)){
                //echo "Dato insertado exitosamente";
            }
            else{
                echo "Error:" . $sql . "<br>" . mysqli_error($con);
            }

        }
    }
    ?>
    <div class="container" align="center">
        <a  href="<?php echo URL?>base" class="btn btn-primary js-scroll-trigger" id="base" >Regresar</a>
    </div>
    <?php
}
?>


