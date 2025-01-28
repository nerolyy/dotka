
const collectionGrid = document.querySelector('.collection-grid');
const filterSelect = document.querySelector('.filter-select');
const sortSelect = document.querySelector('.sort-select');
const groupByCheckbox = document.querySelector('#groupByType');
const heroFilterSelect = document.querySelector('.hero-filter-select');
const sidebarItems = document.querySelectorAll('.sidebar-item, .sidebar-group');

let collectionItems = [
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Abaddon', category: 'international'},
    { image: 'skins/Blade of the Demonic Vessel.png', name: 'Blade of the Demonic Vessel', type: 'Weapons', rarity: 'Legendary', hero: 'Abaddon' },
    { image: 'skins/Blightfall - Weapon.png', name: 'Blightfall - Weapon', type: 'Weapons', rarity: 'Mythical', hero: 'Abaddon' },
    { image: 'skins/Trenchknight - Weapon.png', name: 'Trenchknight - Weapon', type: 'Weapons', rarity: 'Mythical', hero: 'Abaddon' },
    { image: 'skins/Scythe of the Everblack.png', name: 'Scythe of the Everblack', type: 'Weapons', rarity: 'Mythical', hero: 'Abaddon' },
    { image: 'skins/Endless Night Sword.png', name: 'Endless Night Sword', type: 'Weapons', rarity: 'Mythical', hero: 'Abaddon' },
    { image: 'skins/pudge_arcana_back_png.png', name: 'Feast of Abscession', type: 'Cosmetics', rarity: 'Arcana', hero: 'Pudge' },
    { image: 'skins/juggernaut_arcana_mask_style1_png.png', name: 'Bladeform Legacy', type: 'Cosmetics', rarity: 'Arcana', hero: 'Juggernaut' },
    { image: 'skins/zeus_arcana_png.png', name: 'Tempest Helm of the Thundergod', type: 'Set', rarity: 'Arcana', hero: 'Zeus' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal', hero: 'Anti-Mage' },
];

function filterAndSortItems() {
    const selectedFilter = filterSelect.value;
    const selectedSort = sortSelect.value;
    const isGroupByType = groupByCheckbox.checked;
    const selectedHero = heroFilterSelect.value;
    const selectedCategory = document.querySelector('.sidebar-item.active, .sidebar-group.active')?.getAttribute('data-filter') || 'all';

    let filteredItems = collectionItems;

  if (selectedCategory !== 'all'){
      filteredItems = filteredItems.filter(item => item.category === selectedCategory);
  }

    if (selectedFilter !== 'None') {
        filteredItems = filteredItems.filter(item => item.type === selectedFilter);
    }
  if (selectedHero !== 'All') {
        filteredItems = filteredItems.filter(item => item.hero === selectedHero);
    }

    filteredItems.sort((a, b) => {
      if (selectedSort === 'Rarity') {
        const rarityOrder = { 'Common': 1, 'Uncommon': 2, 'Rare': 3, 'Mythical': 4, 'Legendary': 5, 'Immortal': 6, 'Arcana': 7 };
        return rarityOrder[a.rarity] - rarityOrder[b.rarity];
      } else if (selectedSort === 'Name') {
        return a.name.localeCompare(b.name);
      }
    });


    let gridHTML = '';

    if (isGroupByType) {
      const groupedItems = {};
      filteredItems.forEach(item => {
        if (!groupedItems[item.type]) {
          groupedItems[item.type] = [];
        }
        groupedItems[item.type].push(item);
      });

      for (const type in groupedItems){
        gridHTML += `<div class="collection-group">${type}</div>`;
          groupedItems[type].forEach(item => {
          gridHTML += `
                <div class="collection-item ${item.rarity}">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="item-overlay">
                       </div>
                     <div class="rarity-corner"></div>
                </div>
                `;
        });
      }
    } else {
      filteredItems.forEach(item => {
        gridHTML += `
                <div class="collection-item ${item.rarity}">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="item-overlay">
                      </div>
                     <div class="rarity-corner"></div>
                </div>
                `;
        });
    }

    collectionGrid.innerHTML = gridHTML;
}


sidebarItems.forEach(item => {
  item.addEventListener('click', function() {
      sidebarItems.forEach(el => el.classList.remove('active'));
      this.classList.add('active');
    filterAndSortItems();
  });
});

filterSelect.addEventListener('change', filterAndSortItems);
sortSelect.addEventListener('change', filterAndSortItems);
groupByCheckbox.addEventListener('change', filterAndSortItems);
heroFilterSelect.addEventListener('change', filterAndSortItems);

filterAndSortItems();