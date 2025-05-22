# Contexto Técnico: Página Web Ivan Alvarez CPA

**1. Tecnologías Utilizadas:**

*   **HTML5:** Para la estructura semántica del contenido de la página web.
    *   Archivos principales: `index.php`, `header.php`, `footer.php` (aunque son .php, su salida principal es HTML).
*   **CSS3:** Para el estilizado, diseño visual, layout y responsividad.
    *   Archivo principal: `public/css/style.css`.
    *   Uso de Variables CSS (Custom Properties).
    *   Flexbox y/o Grid para layouts.
    *   Media Queries para diseño responsivo.
    *   Transiciones y animaciones básicas.
*   **JavaScript (ES6+ Vanilla JS):** Para la interactividad del lado del cliente, manipulación del DOM y mejoras de la experiencia de usuario.
    *   Archivo principal: `public/js/main.js`.
    *   API `IntersectionObserver` para efectos de revelación al hacer scroll.
    *   Manipulación de clases y estilos del DOM.
    *   Gestión de eventos (clics, scroll).
*   **PHP:** Utilizado por el sistema subyacente (presumiblemente WordPress) para la plantillación y renderizado de la página. Las modificaciones directas de PHP no han sido el foco, más allá de la estructura HTML que estos archivos generan.
    *   Archivos involucrados: `index.php`, `header.php`, `footer.php`.

**2. Entorno de Desarrollo (Inferido):**

*   **Servidor Web Local/Remoto:** Necesario para interpretar PHP (ej. XAMPP, MAMP, o un hosting que soporte WordPress).
*   **Navegador Web:** Para pruebas y visualización (Chrome, Firefox, Safari, Edge).
*   **Editor de Código:** Para modificar los archivos (HTML, CSS, JS, PHP).
*   **Herramientas de Desarrollo del Navegador:** Esenciales para depuración de CSS, JavaScript, inspección del DOM y pruebas de responsividad.

**3. Restricciones Técnicas (Observadas/Asumidas):**

*   **No jQuery (Frontend):** Las soluciones de JavaScript se han implementado en Vanilla JS, evitando jQuery para mantener la ligereza o por preferencia del proyecto.
*   **Sin Build Tools Complejas (Frontend):** No hay evidencia del uso de preprocesadores CSS (Sass/Less) o bundlers JavaScript (Webpack/Parcel) en el flujo de trabajo de optimización actual. Los archivos CSS y JS se editan directamente.
*   **Dependencia de la Estructura PHP Existente:** Las modificaciones se realizan dentro del marco de los archivos PHP existentes (`index.php`, `header.php`, `footer.php`), respetando cómo WordPress (presumiblemente) los utiliza.

**4. Dependencias (Frontend):**

*   No se han introducido librerías externas de JavaScript o CSS durante el proceso de optimización descrito.
*   Las únicas dependencias son las propias del navegador (APIs estándar como `IntersectionObserver`).

**5. Consideraciones de Compatibilidad:**

*   Se busca compatibilidad con navegadores modernos debido al uso de CSS3 y ES6+.
*   El uso de `backdrop-filter` puede tener compatibilidad limitada en navegadores más antiguos o específicos (ej. Firefox requiere activación de flag o versiones recientes).
*   `IntersectionObserver` es ampliamente compatible, pero podría requerir polyfills para navegadores muy antiguos (no considerado en el alcance actual). 