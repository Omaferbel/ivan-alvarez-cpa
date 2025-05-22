# Patrones del Sistema: Página Web Ivan Alvarez CPA

**1. Arquitectura General:**

El proyecto es una landing page única (one-page website) construida sobre una base que parece ser un tema de WordPress (dado el uso de `index.php`, `header.php`, `footer.php` y la estructura de directorios `public/`, `src/`). Sin embargo, la interacción se ha centrado exclusivamente en la parte frontend (HTML, CSS, JavaScript dentro de la carpeta `public/`).

*   **Estructura Principal (`index.php`):** Contiene el esqueleto HTML de todas las secciones de la página.
*   **Encabezado (`header.php`):** Gestiona la barra de navegación superior, logo y menú móvil.
*   **Pie de Página (`footer.php`):** Contiene información de copyright y posiblemente enlaces adicionales.
*   **Estilos (`public/css/style.css`):** Archivo CSS principal que define toda la apariencia visual y responsividad.
*   **Interactividad (`public/js/main.js`):** Archivo JavaScript que maneja el comportamiento dinámico, animaciones y mejoras de UX.

**2. Decisiones Técnicas Clave:**

*   **Vanilla JavaScript:** Toda la lógica del lado del cliente se implementa con JavaScript puro, sin recurrir a frameworks o librerías externas (aparte de lo que WordPress pueda incluir por defecto, lo cual no ha sido foco de esta optimización).
*   **CSS Moderno:** Se utilizan características de CSS3 como:
    *   Variables CSS (Custom Properties) para consistencia y facilidad de mantenimiento (ej. `--section-gap`, colores, etc.).
    *   Flexbox y Grid (implícito en el centrado y la disposición de elementos) para el layout.
    *   Media Queries para un diseño responsivo detallado.
    *   Efectos visuales como `backdrop-filter` para el header y `box-shadow` para tarjetas.
    *   Transiciones y animaciones CSS para hover y efectos de revelación.
*   **Intersection Observer API:** Utilizada para el efecto de "revelación al hacer scroll", mejorando el rendimiento en comparación con la detección de scroll tradicional.
*   **Diseño Responsivo Mobile-First (Orientación):** Aunque no se declaró explícitamente como mobile-first desde el inicio, las media queries se han estructurado para adaptar el diseño a pantallas más pequeñas, lo cual es una práctica común y efectiva.
*   **Clases Utilitarias y Específicas:** Se ha optado por una combinación de clases específicas para componentes (ej. `.problema-item`, `.service-card`) y clases más genéricas/utilitarias (ej. `.container`, `.full-width-section`, `.btn`).

**3. Patrones de Diseño (Frontend):**

*   **One-Page Navigation:** Navegación principal que enlaza a diferentes secciones dentro de la misma página (scroll suave).
*   **Hero Section Prominente:** Una sección de bienvenida a pantalla completa (`100vh`) con un mensaje clave y llamada a la acción (implícita o explícita).
*   **Diseño Basado en Tarjetas (Card Design):** Utilizado para presentar información de forma modular y visualmente atractiva (ej. secciones de "problemas", "servicios", "testimonios").
*   **Header Fijo (Sticky Header):** La barra de navegación permanece visible en la parte superior de la pantalla al hacer scroll, mejorando la accesibilidad a los enlaces.
*   **Footer Estándar:** Sección al final de la página con información de copyright y enlaces.
*   **Formulario de Contacto Directo:** Inclusión de un formulario en la página para facilitar la generación de leads.
*   **Scroll-Triggered Animations/Revelations:** Elementos que aparecen o se animan a medida que el usuario se desplaza por la página.
*   **Indicador Visual de Scroll:** Un pequeño elemento gráfico para sugerir al usuario que hay más contenido debajo de la sección hero.

**4. Relaciones Entre Componentes:**

*   **`header.php` y `main.js`:** JavaScript maneja la funcionalidad del menú móvil en el header (abrir/cerrar, bloqueo de scroll) y el resaltado de la sección activa.
*   **`index.php` (Secciones) y `main.js` (`IntersectionObserver`):** Las secciones o elementos en `index.php` con clases específicas son observados por `main.js` para aplicar el efecto de revelación.
*   **`index.php` (Enlaces de Navegación) y `main.js` (Scroll Suave):** Los enlaces en el header que apuntan a IDs de secciones en `index.php` activan la funcionalidad de scroll suave en `main.js`, que también considera la altura del header fijo.
*   **`style.css` y Todos los Archivos HTML/PHP/JS:** CSS es fundamental para la presentación de todos los elementos definidos en HTML/PHP y afectados por JS.
*   **Secciones `.full-width-section` en `index.php` y `style.css`:** La clase `.full-width-section` aplicada en `index.php` activa estilos específicos en `style.css` para lograr el efecto de ancho completo con contenido centrado. 