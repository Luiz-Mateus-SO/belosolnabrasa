document.addEventListener('DOMContentLoaded', () => {
  function verificarHora() {
    const elementoDia = document.getElementById('dia-da-semana');
    const agora = new Date();
    const horaAtual = agora.getHours();

    if (horaAtual >= 14) {
      elementoDia.innerText = "Fechado";
      elementoDia.style.color = "#ff3838"
      clearInterval(intervaloHora);
      configurarVerificacaoAposFechado();
    } else if (horaAtual === 6) {
      location.reload();
      elementoDia.style.color = "#57ff1e"
    }
  }

 function configurarVerificacaoAposFechado() {
    const agora = new Date();
    const proximaSeisHoras = new Date(
      agora.getFullYear(),
      agora.getMonth(),
      agora.getDate() + 1,
      6, 0, 0
    );

    const tempoParaSeisHoras = proximaSeisHoras - agora;

    setTimeout(() => {
      location.reload();
    }, tempoParaSeisHoras);
  }

  let intervaloHora = setInterval(verificarHora, 3600000);
  verificarHora();
});
