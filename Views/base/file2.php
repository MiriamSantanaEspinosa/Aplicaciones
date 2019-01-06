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

    copy($_FILES['archivo']['tmp_name'],
        "subidas/Reportes/".$_FILES['archivo']['name']);
}


?>