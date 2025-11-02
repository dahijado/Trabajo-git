<?php
///@date 02-11-2025
///Reporta todos los errores
error_reporting(E_ALL);

///Muestra los errores en pantalla
ini_set('display_errors', 1);

///Se requieren los archivos "config.php" y "functions.php"
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/functions.php';


/**
 * Inicia la aplicación usando la plantilla principal.
 * 
 * @see functions.php#init()
 */

init();