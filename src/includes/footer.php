        </div> <!-- Cierre de <div class="container"> de main -->
    </main>
    <footer id="main-footer" class="site-footer section-padding bg-dark">
        <div class="container">
            <div class="footer-widgets">
                <div class="footer-widget widget-about">
                    <h4 class="widget-title">Ivan Alvarez CPA</h4>
                    <p>Ayudamos a empresarios latinos en EE.UU. a superar retos fiscales y financieros con soluciones personalizadas y éticas. Liderados por Iván Álvarez, CPA, ofrecemos confianza, experiencia y resultados.</p>
                </div>
                <div class="footer-widget widget-contact">
                    <h4 class="widget-title">Información de Contacto</h4>
                    <p><strong>Teléfono:</strong> <a href="tel:2143903255">214-390-3255</a></p>
                    <p><strong>Email:</strong> <a href="mailto:ivan@ivanalvarez.cpa">ivan@ivanalvarez.cpa</a></p>
                    <p><strong>Dirección:</strong><br>8330 LBJ Freeway, Suite B654<br>Dallas, Texas, Estados Unidos 75243</p>
                </div>
                <div class="footer-widget widget-links">
                    <h4 class="widget-title">Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="<?php echo $baseUrl; ?>#hero">Inicio</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#acerca-de-ivan">Acerca de Mí</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#servicios">Servicios</a></li>
                        <li><a href="<?php echo $baseUrl; ?>#contactanos">Contáctanos</a></li>
                        <!-- Puedes añadir un enlace a una página de Política de Privacidad si la tienes -->
                    </ul>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <p>&copy; <?php echo date('Y'); ?> Ivan Alvarez CPA PC. Todos los derechos reservados.</p>
                <!-- <p><small>Sitio web desarrollado con PHP.</small></p> -->
            </div>
        </div>
    </footer>

    <!-- Scripts JS -->
    <script src="<?php echo isset($baseUrl) ? $baseUrl : '/'; ?>js/main.js"></script>
</body>
</html> 