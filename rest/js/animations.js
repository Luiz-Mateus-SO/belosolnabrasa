function activeAnimation(event, el, animeteClass) {
  document.addEventListener(event, () => {
    const logotipo = document.querySelector(el);

    logotipo.classList.add(animeteClass);
  });  
}

const initAnimation = () => {
  activeAnimation("DOMContentLoaded", ".logotipo", "animate")
  activeAnimation("DOMContentLoaded", "header div", "animate")
}

initAnimation()