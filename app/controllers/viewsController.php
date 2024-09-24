<?php

namespace app\controllers;
use app\models\viewsModel;


class viewsController extends viewsModel{

    public function obtenerVistasControlador($vista){
        if ($vista!='') {
            //sino viene vacio si fija cual es el nombre de vista que trae, incluso login o index.
            $respuesta=$this->obtenerVistasModelo($vista);
        } else {
            //si viene vacio... por defecto devuelve login
            $respuesta='login';
        }
        //devuelve la respuesta
        return $respuesta;
    }
}
?>