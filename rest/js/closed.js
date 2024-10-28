document.addEventListener('DOMContentLoaded', () => {
  const dayEl = document.getElementById('dia-da-semana');
  const closedColor = "rgb(237, 92, 92)";
  const openedColor = "#57ff1e";
  const closedMessage = "Fechado";
  
  function getNameWeekDay(today) {
    const weekDays = [
      'Domingo',
      'Segunda-feira',
      'Terça-feira',
      'Quarta-feira',
      'Quinta-feira',
      'Sexta-feira',
      'Sábado'
    ];
    return weekDays[today.getDay()];
  }

  function openingHours(closeHour, openHour) {
    const now = new Date().getHours();
    if (now >= closeHour || now < openHour) {
      dayEl.innerText = closedMessage;
      dayEl.style.color = closedColor;
    } else {
      dayEl.innerText = getNameWeekDay(new Date());
      dayEl.style.color = openedColor;
    }
  }

  let todayIs = getNameWeekDay(new Date());
  if (todayIs === 'Domingo' || todayIs === 'Sábado') {
    dayEl.innerText = closedMessage;
    dayEl.style.color = closedColor;
  } else {
    dayEl.innerText = todayIs;
    dayEl.style.color = openedColor;
    openingHours(14, 6); // Horário de fechamento e abertura
  }
});
