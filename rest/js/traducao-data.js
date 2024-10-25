const traducaoDias = {
  "Sunday": "Domingo",
  "Monday": "Segunda-feira",
  "Tuesday": "Terça-feira",
  "Wednesday": "Quarta-feira",
  "Thursday": "Quinta-feira",
  "Friday": "Sexta-feira",
  "Saturday": "Sábado"
};

// Obtenha o elemento com o dia da semana
const elementoDia = document.getElementById('dia-da-semana');
const diaSemana = elementoDia.innerText;

// Verifique se o dia está em inglês e faça a tradução
if (traducaoDias[diaSemana]) {
  elementoDia.innerText = traducaoDias[diaSemana];
}