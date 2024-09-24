<?php


//obtine los nombre de las clases de nuestro sistema.
spl_autoload_register(function($clase){
    $archivo=__DIR__.'/'.$clase.'.php';
    //linea exclusivo para OSx
    $archivo=str_replace('\\','/',$archivo);

    if (is_file($archivo)) {
        require_once $archivo;
        // echo $archivo;
    }
});

?>