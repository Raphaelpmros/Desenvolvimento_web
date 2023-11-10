
  // Selecione o botão de reserva pelo ID
  const reserveButton = document.getElementById('reserve-button');

  // Selecione a seção de reserva pelo ID
  const reservationSection = document.getElementById('reservation');

  // Adicione um evento de clique ao botão
  reserveButton.addEventListener('click', () => {
    // Altere o estilo da seção para mostrar quando o botão for clicado
    reservationSection.style.display = 'block';
  });

