<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <link rel="stylesheet" href="estilof.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/png" href="Imagenes/incognito-1.svg">

  <title>Formulario📝</title>
</head>

<body>
  <header>
    <div class="encabezado">
      <img src="Imagenes/incognito-1.svg" alt="Logo">
      <h1>Formulario Programacion Web</h1>
    </div>
      <div class="Menu">
      <a href="#Inicio" class="barra">Inicio</a>
      <a href="#Acerca" class="barra">Acerca De</a>
      <a href="#" class="barra" onclick="mostrarSeccion('Habilidades')">Habilidades</a>
      <a href="#Portafolio" class="barra">Actividades</a>
      <a href="#" class="barra" onclick="mostrarSeccion('Contacto')">Contacto</a>
      <?php if (!isset($_GET['logueado']) || $_GET['logueado'] != 1): ?>
        <a href="login.php" class="barra login">Iniciar Sesión</a>
      <?php else: ?>
        <a href="./index.php" class="barra logout">Cerrar Sesión</a>
      <?php endif; ?>
    </div>
  </header>


  <section id="Inicio">
    <h1>Bienvenidos</h1>
    <p>Nos alegra tenerte aquí. Esperamos que disfrutes de esta experiencia y encuentres todo lo que necesitas.
      Siéntete libre de explorar, aprender y crecer con nosotros. 🚀</p>
    <button onclick="location.href='#Acerca'">Ir a Acerca</button>

  </section>

  <section id="Acerca" class="acerca-de">

    <img src="Imagenes/219d1623-6087-4d27-b074-7df17ea893f1.png" alt="Usuario" class="usuario">
    <h1>Acerca</h1>

    <div class="bio">
      <p>Hola, soy un Ingeniero en sistemas con experiencia en HTML, CSS y JavaScript. Me apasiona crear sitios web
        atractivos y funcionales. Siempre estoy buscando aprender nuevas tecnologías y mejorar mis habilidades.</p>

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



  <section id="Contacto" class="pestaña-C">
    <div class="pestaña-contenido-C">
      <span class="cerrar" onclick="cerrarPestaña('Contacto')">&times;</span>

      <h1 class="Titulo-C">Contacto</h1>

      <div class="Ubicacion">
        <h2>Ubicacion</h2>
        <p> C. Jose Arce S/N<br> Ejido Ignacio Allende Ang, Sin.</p>
        <br> <br> <br>
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
          <input type="correo" id="correo" name="correo" required placeholder="Correo"><br>
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
        <img src="Imagenes/imagen1.png" alt="Imagen 1">
        <p>Guia rapida para aprender HTML</p>
        <a href="/ProgramacionWeblaragon/Descargas/HTML-El-Lenguaje-HTML.pdf" download="Lenguaje-HTML.pdf">
          <button>Descargar</button>
        </a>




      </div>

      <div class="card">
        <img src="Imagenes/imagen2.png" alt="Imagen 2">
        <p>Introduccion a CSS</p>
        <a href="/ProgramacionWeblaragon/Descargas/introduccion_css.pdf" download="introduccion_css.pdf">
          <button>Descargar</button>
        </a>
      </div>

      <div class="card">
        <img src="Imagenes/imagen3.png" alt="Imagen 3">
        <p>Manual para el manejo JavaScript</p>
        <a href="/ProgramacionWeblaragon/Descargas/manual-javascript.pdf" download="manual-javascript.pdf">
          <button>Descargar</button>
        </a>
      </div>

      <div class="card">
        <img src="Imagenes/imagen4.jpg" alt="Imagen 4">
        <p>Directorio con el Proyecto API</p>
        <a href="/ProgramacionWeblaragon/Descargas/Programacion-con-PHP.pdf" download="Programacion-con-PHP.pdf">
          <button>Descargar</button>
        </a>
      </div>
     </div>
     </a>
     </section>






  <footer></footer>

  <script>
    history.replaceState(null, document.title, location.pathname);
  </script>

  <script src="javacript/script.js"></script>

</body>



</html>