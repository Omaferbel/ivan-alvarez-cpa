// Archivo JavaScript principal

document.addEventListener("DOMContentLoaded", function() {
    // Funcionalidad para el menú móvil
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');
    const mainHeader = document.getElementById('main-header');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    }

    // Cerrar menú al hacer clic en un enlace (en móvil)
    const navLinks = document.querySelectorAll('#main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                mainNav.classList.remove('active');
            }
        });
    });

    // Cambiar estilo del header al hacer scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            mainHeader.classList.add('scrolled');
        } else {
            mainHeader.classList.remove('scrolled');
        }
    });

    // Animación de desplazamiento suave para enlaces de anclaje
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 100; // Altura del encabezado fijo
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Manejar el envío del formulario (simulación)
    const contactForm = document.getElementById('contactForm');
    const formMessages = document.getElementById('form-messages');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validación básica del formulario
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            
            if (!nombre || !email) {
                // Mostrar mensaje de error
                formMessages.className = 'form-messages error';
                formMessages.textContent = 'Por favor complete todos los campos requeridos.';
                formMessages.style.display = 'block';
                return;
            }
            
            // Simulación de envío exitoso
            // En un caso real, aquí se enviaría el formulario a un endpoint de backend
            formMessages.className = 'form-messages success';
            formMessages.textContent = '¡Gracias por contactarnos! Nos pondremos en contacto con usted pronto.';
            formMessages.style.display = 'block';
            
            // Limpiar el formulario
            contactForm.reset();
            
            // Ocultar el mensaje después de 5 segundos
            setTimeout(function() {
                formMessages.style.display = 'none';
            }, 5000);
        });
    }

    // Efecto de revelación al hacer scroll
    const revealElements = document.querySelectorAll('.problema-item, .servicio-item, .testimonio-item, .acerca-imagen, .acerca-texto');
    
    function checkReveal() {
        const windowHeight = window.innerHeight;
        const revealPoint = 150;
        
        revealElements.forEach(element => {
            const revealTop = element.getBoundingClientRect().top;
            
            if (revealTop < windowHeight - revealPoint) {
                element.classList.add('revealed');
            }
        });
    }
    
    // Verificar al cargar la página
    checkReveal();
    
    // Verificar al hacer scroll
    window.addEventListener('scroll', checkReveal);

    // Adaptar colores de iconos basados en el tema
    const problemaIcons = document.querySelectorAll('.problema-icon');
    problemaIcons.forEach(icon => {
        // Iconos blancos para el fondo oscuro - mantener simple
        icon.style.filter = 'brightness(0) invert(1)';
    });
    
    // Añadir efectos sutiles a elementos seleccionados
    function setupSubtleEffects() {
        // Seleccionar elementos que tendrán el efecto de brillo
        const accentElements = document.querySelectorAll('.btn-primary, .section-title::after, .problema-title::after, .servicio-title::after');
        
        // Aplicar una animación más sutil y profesional
        accentElements.forEach(element => {
            if (element) {
                const randomDuration = 4 + Math.random() * 2; // Entre 4-6 segundos
                const randomDelay = Math.random() * 3; // Delay aleatorio hasta 3 segundos
                
                element.style.animation = `subtleGlow ${randomDuration}s infinite ${randomDelay}s`;
            }
        });
        
        // Añadir efectos a los iconos de servicio
        const servicioIcons = document.querySelectorAll('.servicio-icon');
        servicioIcons.forEach(icon => {
            const randomDuration = 5 + Math.random() * 3; // Entre 5-8 segundos
            const randomDelay = Math.random() * 2; // Delay aleatorio hasta 2 segundos
            
            icon.style.animation = `iconPulse ${randomDuration}s infinite ${randomDelay}s`;
        });
    }
    
    // Estilos CSS adicionales para las animaciones refinadas
    const styleElement = document.createElement('style');
    styleElement.textContent = `
        @keyframes subtleGlow {
            0%, 100% {
                box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
            }
            50% {
                box-shadow: 0 0 8px rgba(59, 130, 246, 0.5);
            }
        }
        
        @keyframes iconPulse {
            0%, 100% {
                box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 0 12px rgba(59, 130, 246, 0.5);
                transform: scale(1.05);
            }
        }
        
        @keyframes iconShine {
            0% {
                background-position: 0% 0%;
            }
            100% {
                background-position: 200% 0%;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        /* Efecto de brillo para los iconos de servicio - Modificado para quitar el efecto amarillo */
        .servicio-item:hover .servicio-icon {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 50%, #2563eb 100%);
            background-size: 200% 100%;
            animation: iconShine 2s linear infinite;
            color: #ffffff;
        }
        
        /* Asegurar que los iconos siempre sean visibles */
        .servicio-item:hover .servicio-icon i {
            color: #ffffff;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            transform: scale(1.1);
        }
        
        /* Transición suave para la imagen de fondo */
        .hero-section {
            transition: background-image 0.8s ease-in-out;
        }
        
        /* Efecto de seguimiento de cursor sutil */
        .custom-cursor {
            pointer-events: none;
            position: fixed;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.5);
            transform: translate(-50%, -50%);
            z-index: 9999;
            mix-blend-mode: screen;
            box-shadow: 0 0 5px 2px rgba(59, 130, 246, 0.3);
            transition: width 0.2s, height 0.2s, opacity 0.3s;
            opacity: 0.7;
        }
        
        .custom-cursor.hover {
            width: 12px;
            height: 12px;
            opacity: 0.9;
        }
    `;
    document.head.appendChild(styleElement);
    
    // Inicializar efectos
    setupSubtleEffects();
    
    // Añadir efectos específicos para los servicios
    const setupServiceEffects = () => {
        const servicioItems = document.querySelectorAll('.servicio-item');
        
        servicioItems.forEach(item => {
            // Obtener el icono dentro del item de servicio
            const icon = item.querySelector('.servicio-icon i');
            const iconContainer = item.querySelector('.servicio-icon');
            
            if (icon) {
                // Eventos para el efecto al pasar el cursor
                item.addEventListener('mouseenter', () => {
                    // Aplicar transición suave al icono
                    icon.style.transition = 'all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1)';
                    icon.style.transform = 'scale(1.2)';
                    icon.style.color = '#ffffff'; // Asegurar que el color es blanco
                    
                    // Mejorar el contenedor del icono
                    if (iconContainer) {
                        iconContainer.style.boxShadow = '0 0 15px rgba(37, 99, 235, 0.5), 0 0 10px rgba(59, 130, 246, 0.3)';
                        iconContainer.style.borderColor = 'rgba(255, 255, 255, 0.5)';
                    }
                });
                
                item.addEventListener('mouseleave', () => {
                    // Restaurar el estado original con una transición suave
                    icon.style.transform = 'scale(1)';
                    icon.style.color = '#ffffff'; // Mantener el color blanco
                    
                    // Restaurar el contenedor del icono
                    if (iconContainer) {
                        iconContainer.style.boxShadow = '';
                        iconContainer.style.borderColor = '';
                    }
                });
            }
        });
    };
    
    // Llamar a la función para configurar los efectos de servicio
    setupServiceEffects();
    
    // Efecto de cursor personalizado más sutil
    const cursor = document.createElement('div');
    cursor.classList.add('custom-cursor');
    document.body.appendChild(cursor);
    
    // Mostrar cursor solo cuando se mueve el ratón
    let cursorTimeout;
    
    document.addEventListener('mousemove', e => {
        cursor.style.opacity = '0.7';
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        
        clearTimeout(cursorTimeout);
        cursorTimeout = setTimeout(() => {
            cursor.style.opacity = '0';
        }, 3000); // Desvanecer después de 3 segundos sin movimiento
    });
    
    // Cambiar cursor cuando está sobre elementos interactivos
    document.querySelectorAll('a, button, .btn, .problema-item, .servicio-item, .testimonio-item').forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
        });
        
        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
        });
    });
    
    // Ocultar cursor cuando el ratón sale de la ventana
    document.addEventListener('mouseout', () => {
        cursor.style.opacity = '0';
    });
    
    // Mostrar elementos con transición suave
    document.querySelectorAll('.hero-title, .hero-subtitle, .hero-text').forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        element.style.transitionDelay = (0.2 * index) + 's';
        
        setTimeout(() => {
            element.style.opacity = '1';
        }, 100);
    });
});

// Función para animación de números/estadísticas (se puede agregar luego si se necesita)
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
} 