function mostrarSeccion(id) {
    const seccion = document.getElementById(id);
    seccion.style.display = "flex";

    const barras = seccion.querySelectorAll(".progresoH");

    barras.forEach(barraH => {
        const valorFinal = parseInt(barraH.getAttribute("data-valor"));
        const porcentajeElem = barraH.closest('.Habilidad').querySelector(".porcentaje-Habilidado");

        barraH.style.width = "0%";
        if (porcentajeElem) porcentajeElem.textContent = "0%";

        barraH.offsetWidth; 
        barraH.style.width = valorFinal + "%";

        const duracion = 6000;
        let inicio = null;
        let numero = 0;

        function animar(timestamp) {
            if (!inicio) inicio = timestamp;
            const tiempoTranscurrido = timestamp - inicio;

            let valorActual = (tiempoTranscurrido / duracion) * valorFinal;
            if (valorActual > valorFinal) valorActual = valorFinal;

            if (porcentajeElem) {
                if (numero + 2 <= valorActual) {
                    numero += 2;
                }
                if (valorActual === valorFinal) numero = valorFinal;
                porcentajeElem.textContent = numero + "%";
            }

            if (valorActual < valorFinal) {
                requestAnimationFrame(animar);
            }
        }

        requestAnimationFrame(animar);
    });
}

function cerrarPestaña(id) {
    const seccion = document.getElementById(id);
    seccion.style.display = "none";

    const barras = seccion.querySelectorAll(".progresoH");
    barras.forEach(barraH => {
        barraH.style.width = "0%";
        const porcentajeElem = barraH.closest('.Habilidad').querySelector(".porcentaje-Habilidado");
        if (porcentajeElem) porcentajeElem.textContent = "0%";
    });


}

const secciones = document.querySelectorAll('section[id]');
const botones = document.querySelectorAll('.Menu .barra');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const boton = document.querySelector(`.Menu a[href="#${entry.target.id}"]`);
        if(boton){
            if(entry.isIntersecting){
                boton.classList.add('animacion-activa');
            } else {
                boton.classList.remove('animacion-activa');
            }
        }
    });
}, { threshold: 0});


secciones.forEach(sec => observer.observe(sec));

// Función reutilizable para animar las barras de progreso dentro de una sección/modal
function animateSkillBars(seccion) {
    if (!seccion) return;
    const barras = seccion.querySelectorAll(".progresoH");

    barras.forEach(barraH => {
        const valorFinal = parseInt(barraH.getAttribute("data-valor"));
        const porcentajeElem = barraH.closest('.Habilidad') ? barraH.closest('.Habilidad').querySelector(".porcentaje-Habilidado") : null;

        barraH.style.width = "0%";
        if (porcentajeElem) porcentajeElem.textContent = "0%";

        // Forzar reflow para que la transición funcione incluso si cambian seguido
        void barraH.offsetWidth;
        barraH.style.width = (isNaN(valorFinal) ? 0 : valorFinal) + "%";

        const duracion = 6000;
        let inicio = null;
        let numero = 0;

        function animar(timestamp) {
            if (!inicio) inicio = timestamp;
            const tiempoTranscurrido = timestamp - inicio;

            let valorActual = (tiempoTranscurrido / duracion) * valorFinal;
            if (valorActual > valorFinal) valorActual = valorFinal;

            if (porcentajeElem) {
                if (numero + 2 <= valorActual) {
                    numero += 2;
                }
                if (valorActual === valorFinal) numero = valorFinal;
                porcentajeElem.textContent = Math.round(numero) + "%";
            }

            if (valorActual < valorFinal) {
                requestAnimationFrame(animar);
            }
        }

        requestAnimationFrame(animar);
    });
}

