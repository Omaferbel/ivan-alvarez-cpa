<?php
// index.php (Punto de entrada principal)

// Definir el título de la página (puede ser dinámico más adelante)
$pageTitle = 'Bienvenido a Ivan Alvarez CPA';

// Incluir el archivo de configuración de la base de datos
// (Lo incluimos aquí aunque no lo usemos en esta versión simple de la landing)
// La ruta es relativa a ESTE archivo (index.php en public/)
require_once __DIR__ . '/../src/config/database.php';

// Incluir el encabezado
require_once __DIR__ . '/../src/includes/header.php';

?>

<!-- Contenido específico de la página de inicio -->
<section id="hero">
    <h2>Tu Aliado Estratégico en Contabilidad y Finanzas</h2>
    <p>Soluciones personalizadas para empresarios latinos en EE.UU. Recupera el control de tu negocio.</p>
    <a href="#contactanos" class="btn-primary">Solicita una Consulta</a>
</section>

<section id="sobre-nosotros">
    <h3>Sobre Nosotros</h3>
    <p>Con más de 14 años de experiencia, Ivan Alvarez CPA lidera el camino hacia el éxito financiero...</p>
    <!-- Más contenido aquí, basado en tu HTML actual -->
</section>

<section id="servicios">
    <h3>Nuestros Servicios</h3>
    <ul>
        <li>Asesoría Fiscal</li>
        <li>Contabilidad para Empresas</li>
        <li>Planificación Financiera</li>
        <li>Resolución de Problemas con el IRS</li>
        <!-- Más servicios -->
    </ul>
</section>

<section id="testimonios">
    <h3>Testimonios</h3>
    <blockquote>
        <p>"Ivan no solo salvó mi negocio; también me devolvió la tranquilidad."</p>
        <footer>- Luis G., Dueño de Constructora</footer>
    </blockquote>
    <!-- Más testimonios -->
</section>

<section id="contactanos">
    <h3>Contáctanos</h3>
    <p>¿Listo para tomar el control de tus finanzas? Completa el formulario.</p>
    <!-- Aquí iría el formulario de contacto (a implementar) -->
    <form action="#" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit">Enviar Mensaje</button>
    </form>
</section>

<?php
// Incluir el pie de página
require_once __DIR__ . '/../src/includes/footer.php';
?> 