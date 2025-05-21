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

// Título por defecto si no se establece en la página específica
$currentPageTitle = isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Ivan Alvarez CPA';

// Favicon - Asegúrate de que favicon.png esté en public/images/
$faviconPath = $baseUrl . 'images/favicon.png'; // Asumiendo que nombras tu favicon como favicon.png

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentPageTitle; ?></title>
    <?php if (file_exists($_SERVER['DOCUMENT_ROOT'] . $faviconPath)) : ?>
    <link rel="icon" href="<?php echo $faviconPath; ?>" type="image/png">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/style.css">
    <!-- Podrías añadir Google Fonts aquí si lo deseas -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header id="main-header">
        <div class="container">
            <div class="logo-container">
                <a href="<?php echo $baseUrl; ?>">
                    <img src="<?php echo $baseUrl; ?>images/logo-principal-header.png" alt="Ivan Alvarez CPA Logo" id="logo">
                </a>
                <!-- <span class="logo-text">Ivan Alvarez CPA</span> -->
            </div>
            <nav id="main-nav">
                <ul>
                    <li><a href="<?php echo $baseUrl; ?>#hero">Inicio</a></li>
                    <li><a href="<?php echo $baseUrl; ?>#problemas">Desafíos Comunes</a></li>
                    <li><a href="<?php echo $baseUrl; ?>#acerca-de-ivan">Acerca de Mí</a></li>
                    <li><a href="<?php echo $baseUrl; ?>#servicios">Servicios</a></li>
                    <li><a href="<?php echo $baseUrl; ?>#testimonios">Testimonios</a></li>
                    <li><a href="<?php echo $baseUrl; ?>#contactanos" class="cta-nav">Contáctanos</a></li>
                </ul>
            </nav>
            <button id="mobile-menu-toggle">&#9776;<span> Menú</span></button>
        </div>
    </header>
    <main>
        <div class="container"> 