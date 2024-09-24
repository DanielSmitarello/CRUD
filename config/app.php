<?php

const APP_URL='http://localhost/php/CRUD/';
const APP_NAME='CRUD POO MySQL';
const APP_SESSION_NAME='CRUD';
date_default_timezone_set('America/Argentina/Buenos_Aires');




// Definición de la URL base de la aplicación

// const APP_URL = 'http://localhost/php/CRUD/';

// APP_URL define la URL base desde donde se ejecuta la aplicación. 
// Es útil para generar enlaces absolutos dentro de la aplicación, asegurando que todos apunten al lugar correcto. 
// En este caso, la aplicación se encuentra en el directorio 'php/CRUD/' en un servidor local.


// Nombre de la aplicación

// const APP_NAME = 'CRUD POO MySQL';

// APP_NAME es una constante que define el nombre de la aplicación.
// Es útil para mostrar el nombre de la aplicación en diferentes partes de la interfaz, como en la barra de título, encabezados, etc.


// Nombre de la sesión para la aplicación

// const APP_SESSION_NAME = 'CRUD';

// APP_SESSION_NAME establece un nombre único para las sesiones de la aplicación.
// Es importante tener un nombre de sesión específico para evitar conflictos con otras aplicaciones que puedan estar ejecutándose en el mismo servidor.
// Este valor se usa cuando se trabaja con sesiones PHP para asegurarse de que los datos de sesión no se mezclen entre diferentes aplicaciones.


// Establecer la zona horaria por defecto
// date_default_timezone_set('America/Argentina/Buenos_Aires');
// Esta función establece la zona horaria por defecto utilizada por todas las funciones de fecha/hora en un script.
// En este caso, la zona horaria se configura para 'America/Argentina/Buenos_Aires'.
// Es crucial establecer la zona horaria correcta para evitar problemas con la hora en las operaciones de la base de datos, registros de logs, etc.

//**Constantes (`APP_URL`, `APP_NAME`, `APP_SESSION_NAME`)**: 
//- Son utilizadas para almacenar valores que no cambiarán durante la ejecución del programa. Definir estos valores como constantes es una buena práctica, ya que mejora la claridad del código y facilita su mantenimiento.
  
//**`date_default_timezone_set`**:
//- Es fundamental para manejar correctamente las operaciones relacionadas con la fecha y la hora, asegurando que todas las funciones de tiempo utilicen la misma zona horaria predeterminada. Esto es especialmente importante en aplicaciones que realizan operaciones dependientes del tiempo o que interactúan con usuarios en diferentes zonas horarias.


?>