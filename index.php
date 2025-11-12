<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <link rel="stylesheet" href="estilof.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="icon" type="image/png" href="Imagenes/incognito-1.svg" />
  <title>Formulario📝</title>
</head>

<body>
  <header>
    <div class="encabezado">
      <img src="Imagenes/incognito-1.svg" alt="Logo" />
      <h1>Formulario Programacion</h1>
    </div>

    <!-- Botón hamburguesa visible en móviles -->
    <div class="hamburger" id="hamburger" aria-label="Abrir menú" role="button" tabindex="0">
      <i class="bi bi-list"></i>
    </div>

    <div class="Menu" id="menu">
      <a href="#Inicio" class="barra">Inicio</a>
      <a href="#Acerca" class="barra">Acerca De</a>
      <a href="#" class="barra" data-section="Habilidades">Habilidades</a>
      <a href="#Portafolio" class="barra">Actividades</a>
      <a href="#" class="barra" data-section="Contacto">Contacto</a>

      <?php if (!isset($_GET['logueado']) || $_GET['logueado'] != 1): ?>
        <a href="login.php" class="barra login">Iniciar Sesión</a>
      <?php else: ?>
        <a href="./index.php" class="barra logout">Cerrar Sesión</a>
      <?php endif; ?>
    </div>
  </header>

  <main>
    <section id="Inicio">
      <h1>Bienvenidos</h1>
      <p>Nos alegra tenerte aquí. Esperamos que disfrutes de esta experiencia y encuentres todo lo que necesitas.
        Siéntete libre de explorar, aprender y crecer con nosotros. 🚀</p>
      <button onclick="location.href='#Acerca'">Ir a Acerca</button>
    </section>

    <section id="Acerca" class="acerca-de">
      <img src="Imagenes/219d1623-6087-4d27-b074-7df17ea893f1.png" alt="Usuario" class="usuario" />
      <div>
        <h1>Acerca</h1>
        <div class="bio">
          <p>Hola, soy un Ingeniero en sistemas con experiencia en HTML, CSS y JavaScript. Me apasiona crear sitios web
            atractivos y funcionales. Siempre estoy buscando aprender nuevas tecnologías y mejorar mis habilidades.</p>
        </div>
      </div>
    </section>
  <section id="Habilidades" class="pestaña">
    <div class="pestaña-contenido">
      <span class="cerrar" onclick="cerrarPestaña('Habilidades')">&times;</span>
      <h1 class="Titulo-S">Habilidades</h1>
      <p50 class="Descrip-H">Estas tu porcentajes de Habilidades en estos campos </p50>

      <div class="Habilidad">
        <span class="titulo-habilidad">CSS</span>

        <div class="barraH">
          <div class="progresoH" data-valor="60%"></div>
        </div>
        <span class="porcentaje-Habilidado">60%</span>

      </div>
      <div class="Habilidad">
        <span class="titulo-habilidad">JavaScript</span>

        <div class="barraH">
          <div class="progresoH" data-valor="50%"></div>
        </div>
        <span class="porcentaje-Habilidado">50%</span>


      </div>
      <div class="Habilidad">
        <span class="titulo-habilidad">SQL</span>

        <div class="barraH">
          <div class="progresoH" data-valor="80%"></div>
        </div>
        <span class="porcentaje-Habilidado">80%</span>



  </section>
    <!-- Pestaña Contacto (modal) -->
    <section id="Contacto" class="pestaña-C" aria-hidden="true">
      <div class="pestaña-contenido-C" role="dialog" aria-modal="true">
        <span class="cerrar" onclick="cerrarPestaña('Contacto')" role="button" tabindex="0">&times;</span>
        <h1 class="Titulo-C">Contacto</h1>

        <div class="Ubicacion">
          <h2>Ubicación</h2>
          <p>C. Jose Arce S/N<br>Ejido Ignacio Allende Ang, Sin.</p>
        </div>

        <div class="Redes-sociales">
          <h2>Sígueme</h2>
          <a href="https://facebook.com/jesus_saul_pl" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://instagram.com/jesus_saul_pl" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-instagram"></i>
          </a>
        </div>

        <div class="Formulario">
          <form action="https://formsubmit.co/jesussaulpeinadolopez@gmail.com" method="POST" target="_blank">
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre"><br>
            <input type="email" id="correo" name="correo" required placeholder="Correo"><br>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..."></textarea>
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </section>

    <?php
    $mostrarPortafolio = isset($_GET['logueado']) && $_GET['logueado'] == 1 ? 'block' : 'none';
    ?>

    <section id="Portafolio" style="display: <?php echo $mostrarPortafolio; ?>;">
      <div class="ti-P">
        <h1>Actividades</h1>
      </div>
      <div class="contenedor">
        <div class="card">
          <img src="Imagenes/imagen1.png" alt="Imagen 1" />
          <p>Guia rapida para aprender HTML</p>
          <a href="/ProgramacionWeblaragon/Descargas/HTML-El-Lenguaje-HTML.pdf" download="Lenguaje-HTML.pdf">
            <button>Descargar</button>
          </a>
        </div>

        <div class="card">
          <img src="Imagenes/imagen2.png" alt="Imagen 2" />
          <p>Introduccion a CSS</p>
          <a href="/ProgramacionWeblaragon/Descargas/introduccion_css.pdf" download="introduccion_css.pdf">
            <button>Descargar</button>
          </a>
        </div>

        <div class="card">
          <img src="Imagenes/imagen3.png" alt="Imagen 3" />
          <p>Manual para el manejo JavaScript</p>
          <a href="/ProgramacionWeblaragon/Descargas/manual-javascript.pdf" download="manual-javascript.pdf">
            <button>Descargar</button>
          </a>
        </div>

        <div class="card">
          <img src="Imagenes/imagen4.jpg" alt="Imagen 4" />
          <p>Directorio con el Proyecto API</p>
          <a href="/ProgramacionWeblaragon/Descargas/ProyectoAPI_Saul.zip" download="ProyectoAPI_Saulzip.zip">
            <button>Descargar</button>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer></footer>

  <script>

    history.replaceState(null, document.title, location.pathname);
  </script>

  <script src="javacript/script.js"></script>

<script>


    document.addEventListener('DOMContentLoaded', () => {
      const hamburger = document.getElementById('hamburger');
      const menu = document.getElementById('menu');

      // Toggle del menú hamburguesa
      if (hamburger && menu) {
        hamburger.addEventListener('click', () => {
          menu.classList.toggle('active');
        });

        // Permitir apertura con Enter/Space (accesibilidad)
        hamburger.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            menu.classList.toggle('active');
          }
        });

        // Cerrar menú al clicar en cualquier enlace
        menu.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', (ev) => {
            // Si el link tiene data-section, abrimos la pestaña correspondiente
            const target = link.getAttribute('data-section');
            if (target) {
              ev.preventDefault();
              mostrarSeccion(target);
            }
            menu.classList.remove('active');
          });
        });
      }


    // Muestra la pestaña modal correspondiente//
    function mostrarSeccion(id) {
      const seccion = document.getElementById(id);
      if (!seccion) return;
      // Si es modal tipo .pestaña o .pestaña-C mostramos cambiando display
      if (seccion.classList.contains('pestaña') || seccion.classList.contains('pestaña-C')) {
        seccion.style.display = 'flex';
        seccion.setAttribute('aria-hidden', 'false');
        // Animar barras (si existen) dentro de este modal
        if (typeof animateSkillBars === 'function') {
          animateSkillBars(seccion);
        }
      } else {
        // Si es sección normal, hacemos scroll
        seccion.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }

    // Cerrar pestaña/modal
    function cerrarPestaña(id) {
      const seccion = document.getElementById(id);
      if (!seccion) return;
      seccion.style.display = 'none';
      seccion.setAttribute('aria-hidden', 'true');
    }

    // Cerrar modales al pulsar Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.pestaña, .pestaña-C').forEach(p => {
          p.style.display = 'none';
          p.setAttribute('aria-hidden', 'true');
        });
      }
    });

    // Si el usuario hace clic fuera del contenido del modal cerrarlo
    document.addEventListener('click', (e) => {
      document.querySelectorAll('.pestaña, .pestaña-C').forEach(modal => {
        if (modal.style.display === 'flex' && e.target === modal) {
          modal.style.display = 'none';
          modal.setAttribute('aria-hidden', 'true');
        }
      });
    });
  });
  </script>




</body>

</html>
