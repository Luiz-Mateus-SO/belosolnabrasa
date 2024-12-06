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

      function priceInline(listSelector, reference, attMedia, attMini) {
        const foodMenuContainerList = document.querySelectorAll(listSelector);

        foodMenuContainerList.forEach(foodMenuEl => {
            let categoryTitle = foodMenuEl.firstElementChild.textContent;

            if(categoryTitle == reference) {
              const priceEl = foodMenuEl.querySelector('.price');
              
              const mediaPrice = priceEl.getAttribute(attMedia);
              const miniPrice = priceEl.getAttribute(attMini);
              priceEl.innerHTML = `<sup>R$</sup>${mediaPrice} - <sup>R$</sup>${miniPrice}`;
            }
        })
      }

      priceInline('.menu-prato', 'Assados', 'data-media-price', 'data-mini-price')
      changeWppLink()

    }
  });
}


cloneSection('.menu-prato', 'Mini', 'Média', 'data-media-price');