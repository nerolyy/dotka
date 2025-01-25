
const collectionGrid = document.querySelector('.collection-grid');
const filterSelect = document.querySelector('.filter-select');
const sortSelect = document.querySelector('.sort-select');
const groupByCheckbox = document.querySelector('#groupByType');

let collectionItems = [
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Blade of the Demonic Vessel.png', name: 'Blade of the Demonic Vessel', type: 'Weapons', rarity: 'Legendary' },
    { image: 'item3.png', name: 'Common Cos', type: 'Cosmetics', rarity: 'Common' },
    { image: 'item4.png', name: 'Hero Item 1', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item5.png', name: 'Hero Item 2', type: 'Heroes', rarity: 'Rare' },
    { image: 'item6.png', name: 'Uncommon Weapon', type: 'Weapons', rarity: 'Uncommon' },
    { image: 'item7.png', name: 'item 7', type: 'Cosmetics', rarity: 'Common' },
    { image: 'item8.png', name: 'item 8', type: 'Weapons', rarity: 'Rare' },
    { image: 'item9.png', name: 'item 9', type: 'Cosmetics', rarity: 'Arcana' },
    { image: 'item10.png', name: 'item 10', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item11.png', name: 'item 11', type: 'Weapons', rarity: 'Common' },
    { image: 'item12.png', name: 'item 12', type: 'Cosmetics', rarity: 'Uncommon' },
    { image: 'item13.png', name: 'item 13', type: 'Heroes', rarity: 'Rare' },
    { image: 'item14.png', name: 'item 14', type: 'Weapons', rarity: 'Uncommon' },
    { image: 'item15.png', name: 'item 15', type: 'Cosmetics', rarity: 'Common' },
    { image: 'item16.png', name: 'item 16', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item17.png', name: 'item 17', type: 'Weapons', rarity: 'Rare' },
    { image: 'item18.png', name: 'item 18', type: 'Cosmetics', rarity: 'Arcana' },
    { image: 'item19.png', name: 'item 19', type: 'Heroes', rarity: 'Common' },
    { image: 'item20.png', name: 'item 20', type: 'Weapons', rarity: 'Uncommon' },
    { image: 'item21.png', name: 'item 21', type: 'Cosmetics', rarity: 'Rare' },
    { image: 'item22.png', name: 'item 22', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item23.png', name: 'item 23', type: 'Weapons', rarity: 'Common' },
    { image: 'item24.png', name: 'item 24', type: 'Cosmetics', rarity: 'Arcana' },
    { image: 'item25.png', name: 'item 25', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item26.png', name: 'item 26', type: 'Weapons', rarity: 'Rare' },
    { image: 'item27.png', name: 'item 27', type: 'Cosmetics', rarity: 'Common' },
    { image: 'item28.png', name: 'item 28', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item29.png', name: 'item 29', type: 'Weapons', rarity: 'Rare' },
    { image: 'item30.png', name: 'item 30', type: 'Cosmetics', rarity: 'Uncommon' },
    { image: 'item31.png', name: 'item 31', type: 'Heroes', rarity: 'Arcana' },
    { image: 'item32.png', name: 'item 32', type: 'Weapons', rarity: 'Common' },
    { image: 'item33.png', name: 'item 33', type: 'Cosmetics', rarity: 'Rare' },
    { image: 'item34.png', name: 'item 34', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item35.png', name: 'item 35', type: 'Weapons', rarity: 'Common' },
    { image: 'item36.png', name: 'item 36', type: 'Cosmetics', rarity: 'Arcana' },
    { image: 'item37.png', name: 'item 37', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item38.png', name: 'item 38', type: 'Weapons', rarity: 'Rare' },
    { image: 'item39.png', name: 'item 39', type: 'Cosmetics', rarity: 'Common' },
    { image: 'item40.png', name: 'item 40', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'item41.png', name: 'item 41', type: 'Weapons', rarity: 'Rare' },
    { image: 'item42.png', name: 'item 42', type: 'Cosmetics', rarity: 'Uncommon' },
    { image: 'item43.png', name: 'item 43', type: 'Heroes', rarity: 'Common' },
    { image: 'item44.png', name: 'item 44', type: 'Weapons', rarity: 'Uncommon' },
    { image: 'item45.png', name: 'item 45', type: 'Cosmetics', rarity: 'Arcana' },
    { image: 'item46.png', name: 'item 46', type: 'Heroes', rarity: 'Uncommon' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
    { image: 'skins/Mace_of_the_chossen.png', name: 'Mace of the Chosen', type: 'Weapons', rarity: 'Immortal' },
];

function filterAndSortItems() {
    const selectedFilter = filterSelect.value;
    const selectedSort = sortSelect.value;
    const isGroupByType = groupByCheckbox.checked;

    let filteredItems = collectionItems;

    if (selectedFilter !== 'None') {
      filteredItems = collectionItems.filter(item => item.type === selectedFilter);
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
            })
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
                `
        });
    }

    collectionGrid.innerHTML = gridHTML;
}

filterSelect.addEventListener('change', filterAndSortItems);
sortSelect.addEventListener('change', filterAndSortItems);
groupByCheckbox.addEventListener('change', filterAndSortItems);

filterAndSortItems();