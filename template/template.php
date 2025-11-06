/**
*@author Alvaro_Lorenzo
*/
<!DOCTYPE html>
<html>
<head>
/**
*Declaración del documento HTML5 y configuración básica del encabezado.
*Incluye metaetiquetas para codificación, compatibilidad y diseño adaptable (responsive).
*/
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

/**
*El título de la pestaña se genera dinámicamente.
*page_title() -> obtiene el título de la página actual.
*site_name()  -> devuelve el nombre del sitio configurado en el sistema.
*/
<title><?php page_title(); ?> | <?php site_name(); ?></title>

/**
*Vinculación del archivo de estilos CSS principal de la plantilla.
*site_path() -> devuelve la ruta base del sitio.
*"/template/style.css" -> ruta del archivo CSS dentro de la carpeta 'template'.
*/    
<link href="<?php site_path(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<div class="wrap"> <!-- Contenedor general de toda la página -->

    <header>
    
/**
*site_name() -> función que imprime el nombre configurado del sitio.
*/  
        <h1><?php site_name(); ?></h1>

    
        
/**
*nav_menu() -> genera automáticamente los enlaces de navegación definidos en el CMS.
*/     
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>

/**
*Título de la página actual, generado dinámicamente.
*/     
        <h2><?php page_title(); ?></h2>

      
/**
*age_content() -> muestra el contenido almacenado en el CMS o sistema dinámico.
*/     
        <?php page_content(); ?>
    </article>

    <footer>
/**
*Pie de página con información adicional:
*- date('Y') -> muestra el año actual.
*- Texto identificativo del curso o autor.
*- site_version() -> imprime la versión del sitio o CMS.
*/       
        <small>
            <?php echo date('Y'); ?> <?php echo "DAW2V-0613" ?>.<br>
            <?php site_version(); ?>
        </small>
    </footer>

</div> 
</body>
</html>
