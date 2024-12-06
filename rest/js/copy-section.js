function cloneSection(list, oldTitle, newTitle, att) {
  const sectionList = document.querySelectorAll(list);

  sectionList.forEach(section => {
    const sectionTitle = section.firstElementChild.textContent;

    if (sectionTitle === oldTitle) {
      const clonedSection = section.cloneNode(true);
      clonedSection.classList.add('clone');

      section.parentNode.insertBefore(clonedSection, section.nextSibling);

      clonedSection.firstElementChild.textContent = newTitle

      const clonePriceList = clonedSection.querySelectorAll('.price');

      clonePriceList.forEach(item => {
        const mediaPrice = item.getAttribute(att);
        item.innerHTML = `<sup>R$</sup>${mediaPrice}`;
      });
    
      function changeWppLink() {
        const wppLinksList = document.querySelectorAll('.clone .whatsapp-buy-btn__link');

        wppLinksList.forEach(item => {
          let mediaLink = item.attributes[0].value;
      
          if(!!mediaLink) {
            item.href = mediaLink
          }
        })
      }

      changeWppLink()

    }
  });
}


cloneSection('.menu-prato', 'Mini', 'Média', 'data-media-price');