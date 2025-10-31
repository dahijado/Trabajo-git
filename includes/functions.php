<?php

/**
 * Este archivo contiene las funciones que se van a 
 * utilizar en el sitio web
 * 
 * @author: David
 */


/**
 * Muestra el nombre del sitio web
 */

function site_name()
{
    $var = config('name');
    echo $var;
}

/**
 * Muestra la url del sitio web
 */

function site_url()
{
    $var = config('site_url');
    echo $var;
}

/**
 * Muestra la ruta del sitio web
 */

function site_path()
{
    $var = config('path');
    echo $var;
}

/**
 * Muestra la versión del sitio web
 */

function site_version()
{
    $var = config('version');
    echo $var;
}

/**
 * Construye dinámicamente el menú de navegación recorriendo sus elementos
 * @param string $sep (el separador de los elementos del menú)
 */

function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');

    foreach ($nav_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' active' : '';
        $url = config('site_url') . '/' . ($uri == '' ? '' : '?page=') . $uri;
        
        // Constuir menú de navegación, atentos al uso de  (.=)
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    echo trim($nav_menu, $sep);
}

/**
 * Muestra el título de la página a través del parámetro 'page' que se recoge a través del método GET
 */

function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    $titulo = [                             
            'Home' => '>>Inicio',                 // Título parametrizable en función
            'about-us' => '>>Acerca de',          // del nombre de la página física
            'products' => '>>Productos',
            'contact' => '>>Contacto',
    ];  
    echo  $titulo[$page];
}

/**
 * Muestra el contenido de la página, obteniendo la ruta para volcar
 * Si no se encuentra la página, muestra un error 404
 */

function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path =  config('content_path') . '/' . $page . '.phtml';   // Obtiene ruta para volcar
    if (! file_exists($path)) {
        $path =  config('content_path') . '/404.phtml';
    }
    echo file_get_contents($path);          // Volcar contenidos
}

/**
 * Inicia la aplicación utilizando un template
 */

function init()
{
    require config('template_path') . '/template.php';
}
