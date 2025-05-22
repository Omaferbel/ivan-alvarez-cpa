// Archivo JavaScript principal

document.addEventListener("DOMContentLoaded", function() {
    // Funcionalidad para el menú móvil
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');
    const mainHeader = document.getElementById('main-header');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            this.setAttribute('aria-expanded', mainNav.classList.contains('active') ? 'true' : 'false');
            document.body.classList.toggle('nav-open');
        });
    }

    // Inicializar acordeón para el footer
    function initFooterAccordion() {
        const accordionWidgets = document.querySelectorAll('#main-footer .footer-widget.accordion-mode');

        accordionWidgets.forEach(widget => {
            const title = widget.querySelector('.widget-title');
            if (title) {
                title.classList.add('accordion-icon');

                title.addEventListener('click', function() {
                    const parentWidget = this.parentElement;
                    const isActive = parentWidget.classList.contains('active');

                    // Cerrar todos los widgets activos primero
                    accordionWidgets.forEach(otherWidget => {
                        if (otherWidget !== parentWidget) { // No cerrar el que se está clickeando todavía
                            otherWidget.classList.remove('active');
                        }
                    });

                    // Abrir/cerrar el widget clickeado
                    if (isActive) {
                        parentWidget.classList.remove('active');
                    } else {
                        parentWidget.classList.add('active');
                    }
                });
            }
        });

        // Opcional: Activar el primer widget por defecto si es necesario y visible en modo acordeón
        // Esto se puede manejar mejor con CSS o si se requiere explícitamente.
        // Por ahora, lo dejamos así para que el usuario decida cuál abrir.
        // const firstWidget = document.querySelector('#main-footer .footer-widget.accordion-mode');
        // if (firstWidget && window.innerWidth <= 768) { // Solo activar si estamos en vista móvil
        //     firstWidget.classList.add('active');
        // }
    }
    
    // Inicializar acordeón solo una vez al cargar
    initFooterAccordion();

    // No es necesario reinicializar en resize si la funcionalidad no cambia drásticamente con el tamaño
    // window.addEventListener('resize', initFooterAccordion);

    // Cerrar menú al hacer clic en un enlace (en móvil) o al hacer clic fuera del menú
    const navLinks = document.querySelectorAll('#main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                mainNav.classList.remove('active');
                document.body.classList.remove('nav-open');
                if (mobileMenuToggle) {
                    mobileMenuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });

    // Cerrar el menú al hacer clic fuera de él
    document.addEventListener('click', function(event) {
        if (mainNav.classList.contains('active') && 
            !mainNav.contains(event.target) && 
            event.target !== mobileMenuToggle) {
            mainNav.classList.remove('active');
            document.body.classList.remove('nav-open');
            if (mobileMenuToggle) {
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
            }
        }
    });

    // Cambiar estilo del header al hacer scroll
    window.addEventListener('scroll', function() {
        requestAnimationFrame(function() {
        if (window.scrollY > 50) {
            mainHeader.classList.add('scrolled');
        } else {
            mainHeader.classList.remove('scrolled');
        }
        });
    });

    // Animación de desplazamiento suave para enlaces de anclaje con offset dinámico para el header
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Cálculo dinámico del offset basado en la altura actual del header
                const headerHeight = mainHeader.offsetHeight;
                const offsetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20; // 20px de padding extra

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
            const mensaje = document.getElementById('mensaje').value;
            
            // Array para recopilar mensajes de error
            let errorMessages = [];
            
            if (!nombre) {
                errorMessages.push('Por favor ingrese su nombre.');
            }
            
            if (!email) {
                errorMessages.push('Por favor ingrese su correo electrónico.');
            } else if (!isValidEmail(email)) {
                errorMessages.push('Por favor ingrese un correo electrónico válido.');
            }
            
            if (!mensaje) {
                errorMessages.push('Por favor ingrese un mensaje.');
            }
            
            if (errorMessages.length > 0) {
                // Mostrar errores
                formMessages.className = 'form-messages error';
                formMessages.innerHTML = errorMessages.join('<br>');
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

    // Función para validar correo electrónico
    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Efecto de revelación al hacer scroll con intersección observer para mejor rendimiento
    function initIntersectionObserver() {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15 // Elemento visible al 15%
        };
        
    const revealElements = document.querySelectorAll('.problema-item, .servicio-item, .testimonio-item, .acerca-imagen, .acerca-texto');
    
        const revealCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    // Forzar estilos para asegurar visibilidad
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target); // Dejar de observar una vez revelado
                }
            });
        };
        
        const observer = new IntersectionObserver(revealCallback, observerOptions);
        
        revealElements.forEach(element => {
            // Asegurarse que los elementos comienzan ocultos si JavaScript está activo
            // Esto previene un "flash" de contenido si el CSS tarda en aplicarse
            element.style.opacity = '0';
            element.style.transform = 'translateY(50px)';
            observer.observe(element);
        });
    }
    
    // Inicializar observer
    initIntersectionObserver();
    
    // Resaltar la sección actual en el menú de navegación
    function highlightCurrentSection() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('#main-nav a');
        
        // Usar requestAnimationFrame para optimizar rendimiento
        requestAnimationFrame(() => {
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - mainHeader.offsetHeight - 100;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                    currentSection = '#' + section.getAttribute('id');
            }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentSection) {
                    link.classList.add('active');
                }
            });
        });
        }
        
    // Ejecutar al cargar y al hacer scroll
    highlightCurrentSection();
    window.addEventListener('scroll', highlightCurrentSection);
    
    // Añadir clase CSS para estilizar el texto y botones según la sección
    function setupContextualStyling() {
        const sections = document.querySelectorAll('section');
        
        sections.forEach(section => {
            const buttons = section.querySelectorAll('.btn');
            const headings = section.querySelectorAll('h1, h2, h3, h4, h5, h6');
            
            // Aplicar estilos basados en el fondo de la sección
            if (section.classList.contains('bg-dark')) {
                buttons.forEach(btn => {
                    if (!btn.classList.contains('btn-primary') && !btn.classList.contains('btn-naranja')) {
                        btn.classList.add('btn-light');
                    }
                });
                
                headings.forEach(heading => {
                    heading.classList.add('text-light');
                });
            }
        });
    }
    
    setupContextualStyling();
    
    // Efecto de indicador de scroll
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        // Ocultar el indicador cuando el usuario hace scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                scrollIndicator.style.opacity = '0';
            } else {
                scrollIndicator.style.opacity = '0.8';
            }
        });
        
        // Al hacer clic en el indicador, desplazarse a la siguiente sección
        scrollIndicator.addEventListener('click', function() {
            const nextSection = document.querySelector('.problemas-section');
            if (nextSection) {
                const headerHeight = mainHeader.offsetHeight;
                const offsetPosition = nextSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    }
});

// Cargar la página con una transición suave
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
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