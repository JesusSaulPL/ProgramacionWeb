  const inicioToggle = document.getElementById('inicioToggle');
    const registroToggle = document.getElementById('registroToggle');
    const inicioForm = document.getElementById('inicioForm');
    const registroForm = document.getElementById('registroForm');

    inicioForm.style.display = 'flex';
    registroForm.style.display = 'none';
    inicioToggle.classList.add('active');

    inicioToggle.addEventListener('click', () => {
      inicioForm.style.display = 'flex';
      registroForm.style.display = 'none';
      inicioToggle.classList.add('active');
      registroToggle.classList.remove('active');
    });

    registroToggle.addEventListener('click', () => {
      registroForm.style.display = 'flex';
      inicioForm.style.display = 'none';
      registroToggle.classList.add('active');
      inicioToggle.classList.remove('active');
    });