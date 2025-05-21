<?php
// Determinar la ruta base para los assets (CSS, JS, imágenes)
// Esto asume que el header.php está en src/includes/ y los assets están en public/
// Si el DocumentRoot es /path/to/project/public/
// y la URL es http://subdomain.example.com/
// entonces $baseUrl debería ser '/'
// Si el sitio está en un subdirectorio, ej. http://example.com/mi-sitio/
// (donde DocumentRoot es /path/to/project/ y mi-sitio/public/ es donde están los assets)
// entonces $baseUrl debería ser '/mi-sitio/'

// Una forma simple de intentar detectar el baseUrl asumiendo que el script index.php
// está en el directorio raíz accesible por web (public/)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$baseUrl = rtrim($scriptDir, '/') . '/';
if ($baseUrl === '//') {
    $baseUrl = '/'; // Corrige el caso raíz donde dirname puede devolver solo '/'
}

// Si tu proyecto SIEMPRE estará en la raíz del subdominio (ej. app.ivanalvarez.cpa/),
// puedes simplificar esto a: $baseUrl = '/';
// O si va a estar en un subdirectorio fijo del subdominio, ej. app.ivanalvarez.cpa/landing/
// $baseUrl = '/landing/';

// Para este proyecto, ya que app.ivanalvarez.cpa apunta a /public/, el baseUrl es '/'
$baseUrl = '/';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Ivan Alvarez CPA'; ?></title>
    <!-- Favicon (ejemplo, actualiza la ruta si es necesario) -->
    <!-- <link rel="icon" href="<?php echo $baseUrl; ?>images/favicon.ico" type="image/x-icon"> -->
    
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/style.css">
    
    <!-- Puedes añadir más metaetiquetas aquí (descripción, keywords, etc.) -->
</head>
<body>
    <header>
        <div class="container">
            <!-- Logo (ejemplo) -->
            <!-- <a href="<?php echo $baseUrl; ?>index.php" class="logo">
                <img src="<?php echo $baseUrl; ?>images/logo.png" alt="Logo Ivan Alvarez CPA">
            </a> -->
            <h1><a href="<?php echo $baseUrl; ?>index.php">Ivan Alvarez CPA (Sitio en Desarrollo)</a></h1>
            
            <nav>
                <ul>
                    <!-- <li><a href="<?php echo $baseUrl; ?>index.php">Inicio</a></li> -->
                    <!-- <li><a href="<?php echo $baseUrl; ?>servicios.php">Servicios</a></li> -->
                    <!-- <li><a href="<?php echo $baseUrl; ?>contacto.php">Contacto</a></li> -->
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container"> 