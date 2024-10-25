const traducaoDias = {
  "Domingo": "Domingo",
  "Segunda": "Segunda-feira",
  "Terça": "Terça-feira",
  "Quarta": "Quarta-feira",
  "Quinta": "Quinta-feira",
  "Sexta": "Sexta-feira",
  "Sábado": "Sábado"
};

// Obtenha o elemento com o dia da semana
const elementoDia = document.getElementById('dia-da-semana');
const diaSemana = elementoDia.innerText;

// Verifique se o dia está em inglês e faça a tradução
if (traducaoDias[diaSemana]) {
  elementoDia.innerText = traducaoDias[diaSemana];
}