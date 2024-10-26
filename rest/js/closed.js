document.addEventListener('DOMContentLoaded', () => {
  const dayEl = document.getElementById('dia-da-semana');
  const date = new Date();
  const closedColor = "rgb(237, 92, 92)";
  const openedColor = "#57ff1e"
  const closedMessage = "Fechado"
  
  function getNameWeekDay(today) {
    const weekDays = [
      'Domingo',
      'Segunda-feira',
      'Terça-feira',
      'Quarta-feira',
      'Quinta-feira',
      'Sexta-feira',
      'Sábado'
    ]
    return weekDays[today.getDay()]
  }

  function openingHours(closeHour) {
    const now = date.getHours();
    if(now >= closeHour) {
      todayIs = closedMessage;
      dayEl.innerText = todayIs;
      dayEl.style.color = closedColor;
    } 
  }

  let todayIs = getNameWeekDay(date);
  if (todayIs == 'Domingo' || 'Sábado') {
    todayIs = closedMessage;
    dayEl.innerText = todayIs;
    dayEl.style.color = closedColor;
  } else {
    dayEl.innerText = todayIs;
    dayEl.style.color = openedColor
  }

  openingHours(10, 14)
});
