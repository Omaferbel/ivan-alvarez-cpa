        </div> <!-- Cierre de <div class="container"> de main -->
    </main>
    <footer id="main-footer" class="site-footer bg-dark">
        <div class="container">
            <div class="footer-logo">
                <img src="<?php echo $baseUrl; ?>images/logo-principal-header.png" alt="Ivan Alvarez CPA Logo">
            </div>
            <div class="footer-widgets">
                <div class="footer-widget widget-about">
                    <h4 class="widget-title">Ivan Alvarez CPA</h4>
                    <p>Ayudamos a empresarios latinos en EE.UU. a superar retos fiscales y financieros con soluciones personalizadas y éticas. Liderados por Iván Álvarez, CPA, ofrecemos confianza, experiencia y resultados.</p>
                    <div class="footer-social">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-widget widget-contact">
                    <h4 class="widget-title">Información de Contacto</h4>
                    <ul>
                        <li><strong>Teléfono:</strong> <a href="tel:2143903255">214-390-3255</a></li>
                        <li><strong>Email:</strong> <a href="mailto:ivan@ivanalvarez.cpa">ivan@ivanalvarez.cpa</a></li>
                        <li><strong>Dirección:</strong> 8330 LBJ Freeway, Suite B654, Dallas, Texas, Estados Unidos 75243</li>
                    </ul>
                </div>
                <div class="footer-widget widget-links">
                    <h4 class="widget-title">Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="<?php echo $baseUrl; ?>#hero">Inicio</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#acerca-de-ivan">Acerca de Mí</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#servicios">Servicios</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#contactanos">Contáctanos</a></li>
                    </ul>
                </div>
                <div class="footer-widget widget-horario">
                    <h4 class="widget-title">Horario de Atención</h4>
                    <ul>
                        <li>Lunes a Viernes: 9:00 AM - 6:00 PM</li>
                        <li>Sábados: 10:00 AM - 2:00 PM</li>
                        <li>Domingos: Cerrado</li>
                    </ul>
                    <p style="margin-top: 15px;">
                        <a href="<?php echo $baseUrl; ?>#contactanos" class="btn btn-primary btn-sm">Agenda tu consulta</a>
                    </p>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo $baseUrl; ?>">Ivan Alvarez CPA PC</a>. Todos los derechos reservados.</p>
                <p><small>La excelencia en <a href="<?php echo $baseUrl; ?>#servicios">servicios contables</a> para empresarios latinos.</small></p>
            </div>
        </div>
    </footer>

    <!-- Agregar Font Awesome para los iconos sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Scripts JS -->
    <script src="<?php echo isset($baseUrl) ? $baseUrl : '/'; ?>js/main.js"></script>
</body>
</html> 