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
            <h1 class="hero-title">Gestiona tus finanzas con confianza</h1>
            <p class="hero-subtitle">Servicios contables y fiscales especializados para empresarios latinos en Estados Unidos</p>
            <p class="hero-text">Soluciones personalizadas que te permitirán tomar el control de tu negocio, optimizar tus impuestos y maximizar tu flujo de efectivo.</p>
            <a href="#contactanos" class="btn btn-naranja btn-lg">Agenda una consulta gratuita</a>
        </div>
    </section>

    <section id="problemas" class="problemas-section section-padding bg-white">
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
        </div>
    </section>

    <section id="llamada-accion-intermedia" class="cta-section text-center section-padding">
        <div class="container">
            <h2 class="section-title-cta">Miles de Empresarios Latinos en EE.UU. Enfrentan Retos Similares. ¡Hay Solución!</h2>
            <a href="#contactanos" class="btn btn-primary">Hablemos de Tus Desafíos</a>
        </div>
    </section>

    <section id="acerca-de-ivan" class="acerca-section section-padding bg-dark">
        <div class="container">
            <h2 class="section-title text-center">Conoce a Tu Aliado CPA: Iván Alvarez</h2>
            <div class="acerca-content">
                <div class="acerca-imagen">
                    <img src="<?php echo $baseUrl; ?>images/ivan-cpa-foto-acerca-de.png" alt="Ivan Alvarez, CPA">
                </div>
                <div class="acerca-texto">
                    <p>Con más de <strong>14 años de experiencia</strong> en el ámbito fiscal y contable, Iván Alvarez, CPA, se ha consolidado como un referente para la comunidad de empresarios latinos en Estados Unidos. Su trayectoria no solo se destaca por la pericia técnica, sino por un profundo entendimiento de los desafíos únicos que enfrentan los emprendedores latinos al navegar el complejo sistema tributario estadounidense.</p>
                    <p>Iván no es solo un contador; es un <strong>estratega financiero</strong> que se apasiona por el éxito de sus clientes. Su enfoque va más allá de la simple presentación de impuestos; busca empoderar a los dueños de negocios con el conocimiento y las herramientas necesarias para tomar decisiones financieras inteligentes, optimizar su carga fiscal y asegurar la salud financiera a largo plazo de sus empresas.</p>
                    <p>Fundador también de <strong>"Ivan Alvarez Academy"</strong>, demuestra un fuerte compromiso con la educación financiera, buscando desmitificar la contabilidad y los impuestos para que los empresarios puedan tener mayor control y comprensión de sus números. Esta vocación por enseñar se traduce en una comunicación clara, paciente y adaptada a las necesidades de cada cliente, asegurando que comprendan cada paso del proceso.</p>
                    <p>Si buscas un CPA que combine experiencia, ética profesional, un genuino interés en tu éxito y la capacidad de explicarte las cosas de manera comprensible, has encontrado a tu aliado ideal en Iván Alvarez.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Servicios Contables y Fiscales a Tu Medida</h2>
            <p class="section-intro text-center">Soluciones personalizadas diseñadas para las necesidades específicas de tu negocio.</p>
            <div class="grid-servicios">
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="servicio-title">Asesoría Fiscal Estratégica</h3>
                    <p class="servicio-desc">Desarrollamos estrategias fiscales personalizadas para minimizar tu carga tributaria y maximizar tus beneficios financieros a largo plazo.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="servicio-title">Contabilidad Integral</h3>
                    <p class="servicio-desc">Mantenemos tus libros contables en orden, desde la entrada de datos hasta reportes financieros completos, ajustados a las necesidades de tu empresa.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="servicio-title">Planificación Financiera</h3>
                    <p class="servicio-desc">Creamos presupuestos efectivos y planes financieros que te ayudan a alcanzar tus metas de crecimiento y estabilidad empresarial.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="servicio-title">Preparación de Impuestos</h3>
                    <p class="servicio-desc">Gestionamos tus declaraciones fiscales personales y corporativas, asegurando el cumplimiento de todas las regulaciones y aprovechando cada deducción posible.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="servicio-title">Resolución de Problemas con el IRS</h3>
                    <p class="servicio-desc">Te representamos ante el IRS para resolver notificaciones, auditorías y cualquier problema fiscal que pueda surgir, minimizando tu estrés y responsabilidad.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
                <div class="servicio-item">
                    <div class="servicio-icon icon-glow">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="servicio-title">Consultoría para Nuevos Negocios</h3>
                    <p class="servicio-desc">Asesoramos en la formación de entidades (LLC, S-Corp), estructura legal y estrategias fiscales para emprendedores que están iniciando su camino empresarial.</p>
                    <div class="servicio-cta">
                        <a href="#contactanos" class="btn-servicio">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="testimonios-section section-padding bg-white">
        <div class="container">
            <h2 class="section-title text-center">Testimonios que Inspiran Confianza</h2>
            <p class="section-intro text-center">Lo que nuestros clientes dicen de nuestro servicio.</p>
            <div class="grid-testimonios">
                <div class="testimonio-item">
                    <p>"Mi constructora estaba al borde del colapso... Iván no solo salvó mi negocio; también me devolvió la tranquilidad."</p>
                    <footer>- Luis G., Dueño de Constructora en Texas</footer>
                </div>
                <div class="testimonio-item">
                    <p>"Llevaba años pagando impuestos sin estar seguro... Su profesionalismo marcó la diferencia en mis finanzas."</p>
                    <footer>- Marta S., Propietaria de Constructora en California</footer>
                </div>
                <div class="testimonio-item">
                    <p>"Cada mes era un caos intentar manejar la nómina... Hoy mi equipo y yo trabajamos con tranquilidad gracias a su asesoría."</p>
                    <footer>- Jorge M., Dueño de Constructora en Arizona</footer>
                </div>
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