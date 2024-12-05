function activeAnimateOneEl(event, el, animeteClass) {
  document.addEventListener(event, () => {
    const elSelect = document.querySelector(el);

    elSelect.classList.add(animeteClass);
  });  
}

function activeAnimateAllChildren(event, dadEl, animeteClass) {
  document.addEventListener(event, () => {
    const elChildrens = document.querySelector(dadEl).childNodes;
    
    elChildrens.forEach(children => {
      children.classList.add(animeteClass)
    })
  });  
}

const initAnimation = () => {
  activeAnimateOneEl("DOMContentLoaded", ".logotipo", "animate")
  activeAnimateAllChildren("DOMContentLoaded", "header", "animate")
}

initAnimation()