<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 03:23 PM
 */

namespace AppData\Config;


class Autoload
{
    public static function run()
    {
        spl_autoload_register(function ($class)
        {
            $ruta=str_replace("\\",'/',$class).'.php';
            //echo $ruta;
            require_once ($ruta);
        });

    }
}