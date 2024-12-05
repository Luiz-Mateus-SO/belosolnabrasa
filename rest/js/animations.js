function logotipoAnimation(event, el, animeteClass) {
  document.addEventListener(event, () => {
    const logotipo = document.querySelector(el);

    logotipo.classList.add(animeteClass);
  });  
}

const initAnimation = () => {
  logotipoAnimation("DOMContentLoaded", ".logotipo", "animate")
}

initAnimation()