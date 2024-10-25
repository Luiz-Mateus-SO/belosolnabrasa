document.addEventListener('DOMContentLoaded', () => {
  function verificarHora() {
    const elementoDia = document.getElementById('dia-da-semana');
    const agora = new Date();
    const horaAtual = agora.getHours();
    const minutosAtual = agora.getMinutes();

    // Use os valores passados do PHP
    const horaFechamento = meusDados.horaFechamento;
    const minutosFechamento = meusDados.minutosFechamento;
    const horaAbertura = meusDados.horaAbertura; // Adiciona a hora de abertura
    const minutosAbertura = meusDados.minutosAbertura; // Adiciona os minutos de abertura

    // Verifica se está no horário de fechamento
    if (horaAtual > horaFechamento || (horaAtual === horaFechamento && minutosAtual >= minutosFechamento)) {
      elementoDia.innerText = "Fechado";
      clearInterval(intervaloHora);
      configurarVerificacaoAposFechado();
    } 
    // Verifica se está no horário de abertura
    else if (horaAtual === horaAbertura && minutosAtual === minutosAbertura) {
      location.reload(); // Recarrega a página se for o horário de abertura
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

  let intervaloHora = setInterval(verificarHora, 60000);
  verificarHora();
});
