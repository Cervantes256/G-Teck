<?php
/*Definicion de variables globales
ROOT_PATH: Esta constante representa la ruta absoluta del 
directorio en el que se encuentra el archivo PHP actual.
*/
define('ROOT_PATH', realpath(dirname(__FILE__)));
#BASE_URL: Contiene la URL base del sitio web.
define('BASE_URL', 'http://localhost/G-Teck/');

//Fecha y hora de mexico
date_default_timezone_set('America/Mexico_City');
