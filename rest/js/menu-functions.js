
  const section = document.querySelectorAll('.container');
  const pratos = document.querySelectorAll('.prato');
  const listaDePratos = document.querySelectorAll('.menu-prato ul')
  
  function exibirPratos(att) {
    pratos.forEach(prato => {
      const atributo = prato.getAttribute(att);
      if(atributo != 1) {
        prato.remove()
      }
    })
  }

  function verifyContents(firstEl, secondEl) {
    listaDePratos.forEach(item => {
      if(!item.querySelector(firstEl)) {
        item.parentElement.remove()
      }
  
      section.forEach(item => {
        if(!item.querySelector(secondEl)) {
          item.remove()
        }
      })
    })
  }

  function removeExtraWppBtn(btn) {
    const contactBtnList = document.querySelectorAll(btn);
    contactBtnList.forEach(item => {
      let previousItemEl = item.previousElementSibling.classList.value;
      if(previousItemEl != 'container') {
        item.remove()
      }
    })
  }
  
  const init = () => {
    exibirPratos('data-exibir-prato')
    verifyContents('li', 'div')
    removeExtraWppBtn('.contact-btn__container')
  }

  init()