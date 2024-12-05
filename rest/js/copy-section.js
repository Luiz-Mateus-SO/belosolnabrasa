function cloneSection(list, oldTitle, el, newTitle, att) {
  const sectionList = document.querySelectorAll(list);

  sectionList.forEach(section => {
    const sectionTitle = section.firstElementChild.textContent;
  
    if(sectionTitle == oldTitle) {
      const price = document.querySelector(el);
      const clonedSection = section.cloneNode(true);
  
      section.parentNode.insertBefore(clonedSection, section.nextSibling);
  
      clonedSection.firstElementChild.textContent = newTitle;
  
      const mediaPrice= clonedSection.getAttribute(att);
      price.textContent = mediaPrice;
    }
  });
}

cloneSection('.menu-prato', 'Mini', '.menu-prato .prato span', 'Média', 'data-media-price')