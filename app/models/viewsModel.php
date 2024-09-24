<?php

namespace app\models;

class viewsModel{
    protected function obtenerVistasModelo($vista){
        //define los valores de vista que se van a mostrar. Si no existe genera error 404
        $listaBlanca=['dashboard'];
        //si el contenido esta dentro de la lista blanca entra al if...
        if (in_array($vista,$listaBlanca)) {
            if(is_file('./app/views/content/'.$vista.'-view.php')){
                $contenido='./app/views/content/'.$vista.'-view.php';
            }
        //verifica que sea login o index...  
        }elseif($vista=='login' || $vista=='index'){
            $contenido='login';
        } else {
            // sino verifica genera página 404 Page not found.
            $contenido='404';
        }
        return $contenido;
    }
};
?>