<?php namespace AppData\Config; //Se crea  nombre de namespace / se suele llamar boostrap

class Enrutador //Se crea clase de enrutador
{
    public static function run(Request $request) //Se crea metodo estatico, recibe como parametro  el request
    {
        $controlador =$request->getControlador(). "Controller"; //Se manda a llamar el controlador esto con el nombre camel space
        $ruta=ROOT."AppData".DS."Controller".DS.$controlador.".php";
        // echo $ruta;
        $metodo=$request->getMetodo();
        $argumento=$request->getArgumento();
        //print_r($ruta);
        if(is_readable($ruta))
        {
            require_once($ruta);
            $mostrar="AppData\\Controller\\".$controlador;
            // echo $mostrar;
            $controlador = new $mostrar;
            //$controlador->index(); Llamar al metodo index y decirle que se ejecute para mostrar el mensaje.
            //print_r($ruta);
            if(!isset($argumento))
            {
                $datos=call_user_func(array($controlador,$metodo));
                //print_r($datos);
            }
            else
            {
                if(is_callable(array($controlador,$metodo)))
                    $datos=call_user_func_array(array($controlador,$metodo),$argumento);
                //print_r($datos);
            }
        }
        $ruta=ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
        //print_r($ruta);
        if (is_readable($ruta))
        {
            if (empty($_POST))
            {
                require_once $ruta;
                //print_r($ruta);
            }
        }
        else
        {
            echo "ruta no encontrada";
        }
    }
}
?>
