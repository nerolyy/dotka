const abilities = document.querySelectorAll('.ability');

abilities.forEach(ability => {
  const tooltip = ability.parentElement.querySelector('.ability-tooltip');
  const abilityName = ability.getAttribute('data-ability-name');
  const abilityDescription = ability.getAttribute('data-ability-description');
    const abilityImage = ability.getAttribute('data-ability-image');

  const tooltipContent = `
    <img src="${abilityImage}">
    <h3>${abilityName}</h3>
      <p>${abilityDescription}</p>
    `;

  tooltip.innerHTML = tooltipContent;

  ability.addEventListener('mouseenter', () => {
    tooltip.classList.add('show');
  });

  ability.addEventListener('mouseleave', () => {
    tooltip.classList.remove('show');
  });
});
