<?php
require_once './config/app.php';
require_once './autoload.php';
require_once './app/views/inc/session_start.php';

//Este if verifica si se ha pasado un parámetro views a través de la URL (es decir, si existe $_GET['views']). Por ejemplo, si la URL es http://localhost/app?views=home/index, entonces $_GET['views'] será igual a home/index.

if (isset($_GET['views'])) {

    //Si $_GET['views'] está definido, entonces se utiliza explode() para dividir el valor de $_GET['views'] en un array, usando / como delimitador. Por ejemplo, si $_GET['views'] es home/index, la variable $url se convertirá en ['home', 'index'].
    
    $url=explode('/',$_GET['views']);
} else {
    //Si $_GET['views'] no está presente en la URL, el código establece $url como ['login'], lo que indica que se dirigirá por defecto a la vista de login.
    $url=['login'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <?php require_once './app/views/inc/head.php'; ?>
</head>
<body>
    
    <!-- Incluimos archivos js, en especial ajax.js y main.js -->
    <?php 
    // Acá se va a ejecutar el autoload.php que va a cargar los controladores...
    use app\controllers\viewsController;

    // Crea una nueva instancia del controlador viewsController
    $viewsController = new viewsController();
    
    // Llama al método obtenerVistasControlador del controlador con el primer segmento [0] de la URL como argumento y almacena el resultado en $vista
    $vista = $viewsController->obtenerVistasControlador($url[0]);

    if ($vista=='login' || $vista=='404') {
        require_once './app/views/content/'.$vista.'-view.php';
    } else {
        require_once './app/views/inc/navbar.php';
        require_once $vista;
    }

    require_once './app/views/inc/script.php'; ?>


</body>
</html>