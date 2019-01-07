<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 06/01/2019
 * Time: 05:04 PM
 */

//obtiene el nombre del archivo a descargar pasado por 'url'
$file = $archivo;
//seencuentra en el directorio 'export/' en el servidor
$url = "http://localhost/Aplicaciones/Views/base/subidas/Actas/".$file;


//header ("Content-Disposition: attachment; filename=".$file.";" );
//header ("Content-Type: application/force-download");
//readfile($url);
//exit;

?>