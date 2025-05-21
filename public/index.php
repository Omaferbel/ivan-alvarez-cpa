<?php
// index.php (Punto de entrada principal)

// Definir el título de la página (puede ser dinámico más adelante)
$pageTitle = 'Ivan Alvarez CPA - Tu Aliado en Contabilidad y Finanzas';
$pageDescription = "Servicios de contabilidad y asesoría fiscal para empresarios latinos en EE.UU. por Ivan Alvarez, CPA. Soluciones personalizadas para impuestos, flujo de efectivo y más.";

// Incluir el archivo de configuración de la base de datos
// (Lo incluimos aquí aunque no lo usemos en esta versión simple de la landing)
// La ruta es relativa a ESTE archivo (index.php en public/)
require_once __DIR__ . '/../src/config/database.php';

// Incluir el encabezado
require_once __DIR__ . '/../src/includes/header.php';

?>

<div class="main-content">
    <section id="hero" class="hero-section text-center">
        <div class="container">
            <!-- La imagen ivan-cpa-foto-principal.png se añadirá como fondo mediante CSS -->
            <h1 class="hero-title">Ivan Alvarez CPA</h1>
            <p class="hero-subtitle">Contador Público Certificado y Asesor Fiscal para Empresarios Latinos en EE.UU.</p>
            <p class="hero-text">Recupera el control de tu negocio con estrategias personalizadas para gestionar tus impuestos, el flujo de efectivo y mucho más.</p>
            <a href="#contactanos" class="btn btn-primary btn-lg">Solicita una Consulta</a>
        </div>
    </section>

    <section id="problemas" class="problemas-section section-padding">
        <div class="container">
            <h2 class="section-title text-center">¿Te Sientes Identificado?</h2>
            <p class="section-intro text-center">Muchos empresarios enfrentan estos desafíos. No estás solo.</p>
            <div class="grid-problemas">
                <div class="problema-item">
                    <img src="<?php echo $baseUrl; ?>images/logo-seguridad-confianza.png" alt="Icono Confianza" class="problema-icon">
                    <h3 class="problema-title">Falta de Confianza</h3>
                    <p>No encuentras un contador ético y confiable que realmente entienda tus necesidades específicas.</p>
                </div>
                <div class="problema-item">
                    <img src="<?php echo $baseUrl; ?>images/logo-problemas-fiscales.png" alt="Icono Errores Fiscales" class="problema-icon">
                    <h3 class="problema-title">Temor a Errores</h3>
                    <p>Temes cometer errores costosos en tus impuestos que puedan resultar en multas o problemas legales.</p>
                </div>
                <div class="problema-item">
                    <img src="<?php echo $baseUrl; ?>images/logo-cash-flow.png" alt="Icono Flujo de Efectivo" class="problema-icon">
                    <h3 class="problema-title">Flujo de Efectivo</h3>
                    <p>El flujo de efectivo de tu negocio es un desafío constante y difícil de gestionar.</p>
                </div>
                <div class="problema-item">
                    <img src="<?php echo $baseUrl; ?>images/logo-cargas-fiscales.png" alt="Icono Cargas Fiscales" class="problema-icon">
                    <h3 class="problema-title">Cargas Fiscales</h3>
                    <p>Tus responsabilidades fiscales son cada vez más complejas y difíciles de manejar por tu cuenta.</p>
                </div>
            </div>
            <!-- Considerar añadir aquí la imagen ivan-cpa-foto-problemas.png si se integra bien con el nuevo diseño -->
            <!-- <img src="<?php echo $baseUrl; ?>images/ivan-cpa-foto-problemas.png" alt="Desafíos de empresarios" class="img-fluid mt-4"> -->
        </div>
    </section>

    <section id="llamada-accion-intermedia" class="cta-section text-center section-padding bg-light">
        <div class="container">
            <h2 class="section-title-cta">Miles de Empresarios Latinos en EE.UU. Enfrentan Retos Similares. ¡Hay Solución!</h2>
        </div>
    </section>

    <section id="acerca-de-ivan" class="acerca-section section-padding">
        <div class="container">
            <h2 class="section-title text-center">Conoce a Tu Aliado CPA: Iván Alvarez</h2>
            <div class="acerca-content">
                <img src="<?php echo $baseUrl; ?>images/ivan-cpa-foto-acerca-de.png" alt="Ivan Alvarez, CPA" class="acerca-imagen">
                <div class="acerca-texto">
                    <p>Con más de 14 años de experiencia en el ámbito fiscal y contable, Iván Alvarez, CPA, se ha consolidado como un referente para la comunidad de empresarios latinos en Estados Unidos. Su trayectoria no solo se destaca por la pericia técnica, sino por un profundo entendimiento de los desafíos únicos que enfrentan los emprendedores latinos al navegar el complejo sistema tributario estadounidense.</p>
                    <p>Iván no es solo un contador; es un estratega financiero que se apasiona por el éxito de sus clientes. Su enfoque va más allá de la simple presentación de impuestos; busca empoderar a los dueños de negocios con el conocimiento y las herramientas necesarias para tomar decisiones financieras inteligentes, optimizar su carga fiscal y asegurar la salud financiera a largo plazo de sus empresas.</p>
                    <p>Fundador también de "Ivan Alvarez Academy", demuestra un fuerte compromiso con la educación financiera, buscando desmitificar la contabilidad y los impuestos para que los empresarios puedan tener mayor control y comprensión de sus números. Esta vocación por enseñar se traduce en una comunicación clara, paciente y adaptada a las necesidades de cada cliente, asegurando que comprendan cada paso del proceso.</p>
                    <p>Si buscas un CPA que combine experiencia, ética profesional, un genuino interés en tu éxito y la capacidad de explicarte las cosas de manera comprensible, has encontrado a tu aliado ideal en Iván Alvarez.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Servicios Contables y Fiscales a Tu Medida</h2>
            <ul class="grid-servicios">
                <li class="servicio-item">Asesoría Fiscal Estratégica</li>
                <li class="servicio-item">Contabilidad Integral para Empresas</li>
                <li class="servicio-item">Planificación Financiera y Presupuestos</li>
                <li class="servicio-item">Preparación de Impuestos Personales y Corporativos</li>
                <li class="servicio-item">Resolución de Problemas con el IRS</li>
                <li class="servicio-item">Consultoría para Nuevos Negocios (LLC, S-Corp)</li>
            </ul>
        </div>
    </section>

    <section id="testimonios" class="testimonios-section section-padding">
        <div class="container">
            <h2 class="section-title text-center">Testimonios que Inspiran Confianza</h2>
            <div class="grid-testimonios">
                <div class="testimonio-item">
                    <p>"Mi constructora estaba al borde del colapso... Iván no solo salvó mi negocio; también me devolvió la tranquilidad."</p>
                    <footer>- Luis G., Dueño de Constructora en Texas</footer>
                </div>
                <div class="testimonio-item">
                    <p>"Llevaba años pagando impuestos sin estar seguro... Su profesionalismo marcó la diferencia."</p>
                    <footer>- Marta S., Propietaria de Constructora en California</footer>
                </div>
                <div class="testimonio-item">
                    <p>"Cada mes era un caos intentar manejar la nómina... Hoy mi equipo y yo trabajamos con tranquilidad."</p>
                    <footer>- Jorge M., Dueño de Constructora en Arizona</footer>
                </div>
                <!-- Añadir más testimonios si es necesario -->
            </div>
        </div>
    </section>

    <section id="contactanos" class="contacto-section section-padding bg-dark">
        <div class="container">
            <h2 class="section-title text-center text-light">Da el Primer Paso Hacia la Claridad Financiera</h2>
            <p class="section-intro text-center text-light">¿Listo para tomar el control de tus finanzas? Cuéntanos tu situación y permítenos ayudarte. Completa el formulario y agenda una consulta.</p>
            <form id="contactForm" class="contact-form">
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono (Opcional):</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="mensaje">¿Cómo podemos ayudarte?</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar Solicitud de Consulta</button>
                <div id="form-messages" class="form-messages"></div>
            </form>
        </div>
    </section>
</div> <!-- Cierre de .main-content -->

<?php
// Incluir el pie de página
require_once __DIR__ . '/../src/includes/footer.php';
?> 