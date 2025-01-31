
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
    { image: 'skins/tiny_prestige_sword_png.png', name: 'Sword of the Colossus', type: 'Weapons', rarity: 'Immortal', hero: 'Tiny' },
    { image: 'skins/tiny_haunted_tree_png.png', name: 'Crystal Dryad', type: 'Weapons', rarity: 'Immortal', hero: 'Tiny' },
    { image: 'skins/tiny_anthozoa_giant_weapon_png.png', name: 'Anthozoan Assault - Weapon', type: 'Weapons', rarity: 'Mythical', hero: 'Tiny' },
    { image: 'skins/tiny_bad_to_the_bone_weapon_png.png', name: 'Ancient Inheritance - Weapon', type: 'Weapons', rarity: 'Mythical', hero: 'Tiny' },
    { image: 'skins/frozen_stonehenge_weapon_png.png', name: 'Frostmoot Tree', type: 'Weapons', rarity: 'Mythical', hero: 'Tiny' },
    { image: 'skins/burning_stone_giant_club_png.png', name: 'Club of the Igneous Stone', type: 'Weapons', rarity: 'Rare', hero: 'Tiny' },
    { image: 'skins/scarletquarry_weapon_png.png', name: 'Scarlet Oak', type: 'Weapons', rarity: 'Rare', hero: 'Tiny' },
    { image: 'skins/tiny_prestige_lvl_04_npc_dota_hero_tiny_variant_3_png.png', name: 'Majesty Of The Colossus - Monolith', type: 'Cosmetics', rarity: 'Immortal', hero: 'Tiny' },
    { image: 'skins/tiny_anthozoa_giant_back_png.png', name: 'Anthozoan Assault - Huge', type: 'Cosmetics', rarity: 'Mythical', hero: 'Tiny' },
    { image: 'skins/frozen_stonehenge_lvl_04_npc_dota_hero_tiny_variant_3_png.png', name: 'Large Frostmoot', type: 'Cosmetics', rarity: 'Rare', hero: 'Tiny' },
    { image: 'skins/burning_stone_giant_04_png.png', name: 'Large Igneous Stone', type: 'Cosmetics', rarity: 'Rare', hero: 'Tiny' },
    { image: 'skins/glacial_tiny04_png.png', name: 'Large Elemental Ice', type: 'Cosmetics', rarity: 'Rare', hero: 'Tiny' },
    { image: 'skins/scarlet_quarry_04_png.png', name: 'Large Scarlet Quarry', type: 'Cosmetics', rarity: 'Uncommon', hero: 'Tiny' },
    { image: 'skins/lycosidae_back_png.png', name: 'Lycosidaes Brood', type: 'Cosmetics', rarity: 'Immortal', hero: 'Broodmother' },
    { image: 'skins/strangling_gloom_back_png.png', name: 'Widow of the Undermount Gloom - Back', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/ti8_brood_the_great_arachne_back_png.png', name: 'Armor of the Silken Queen', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/amber_queen_back_2_png.png', name: 'Abdomen of the Amber Queen', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/elder_blood_back_png.png', name: 'Abdomen of the Gluttons Larder', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/ti9_cache_brood_mother_of_thousands_back_png.png', name: 'Automaton Antiquity Back', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/the_glacial_creeper_back1_png.png', name: 'Winter Lineage Abdomen of the Abysm', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/dplus_malevolent_mother_back_png.png', name: 'Malevolent Mother Back', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/witchs_grasp_back_png.png', name: 'Arcane Infestation Back', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/the_glacial_creeper_back_png.png', name: 'Abdomen of the Abysm', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/araknarok_broodmother_back1_png.png', name: 'Ancient Abdomen of the Arachnarok', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/virulent_matriarchs_back_png.png', name: 'Virulent Matriarchs Back', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/abdomen_of_perception_png.png', name: 'Abdomen of Perception', type: 'Cosmetics', rarity: 'Uncommon', hero: 'Broodmother' },
    { image: 'skins/amber_queen_head_2_png.png', name: 'Fangs of the Amber Queen', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/elder_blood_head_png.png', name: 'Crown of the Gluttons  Larder', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/the_glacial_creeper_head_png.png', name: 'Eyes of the Abysm', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/araknarok_broodmother_head1_png.png', name: 'Ancient Crown of the Arachnarok', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/virulent_matriarchs_head_png.png', name: 'Virulent Matriarchs Head', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/bm_2022_immortal_legs_png.png', name: 'Limbs of Lycosidae', type: 'Cosmetics', rarity: 'Immortal', hero: 'Broodmother' },
    { image: 'skins/amber_queen_legs_2_png.png', name: 'Legs of the Amber Queen', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/elder_blood_legs_png.png', name: 'Legs of the Gluttons Larder', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/the_glacial_creeper_legs_png.png', name: 'Legs of the Abysm', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/araknarok_broodmother_legs1_png.png', name: 'Ancient Legs of the Arachnarok', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/virulent_matriarchs_legs_png.png', name: 'Virulent Matriarchs Legs', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/amber_queen_misc_1_png.png', name: 'Carapace of the Amber Queen', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/elder_blood_misc_png.png', name: 'Cowl of the Gluttons Larder', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/witchs_grasp_misc_png.png', name: 'Arcane Infestation Candles', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/the_glacial_creeper_misc_png.png', name: 'Anterior of the Abysm', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/araknarok_broodmother_misc1_png.png', name: 'Ancient Pedipalps of the Arachnarok', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/lycosidae_spiderling_npc_dota_broodmother_spiderling_png.png', name: 'Lycosidaes Spiderling', type: 'Cosmetics', rarity: 'Immortal', hero: 'Broodmother' },
    { image: 'skins/amber_queen_spiderling_2_npc_dota_broodmother_spiderling_png.png', name: 'Amber Queens Spiderling', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/elder_blood_heir_of_elder_blood_npc_dota_broodmother_spiderling_png.png', name: 'Spidering of the Gluttons Larder', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/virulent_matriarchs_spiderling_npc_dota_broodmother_spiderling_png.png', name: 'Virulent Matriarchs Spiderling', type: 'Cosmetics', rarity: 'Mythical', hero: 'Broodmother' },
    { image: 'skins/araknarok_broodmother_araknarok_spiderling_npc_dota_broodmother_spiderling_png.png', name: 'Ancient Arachnarok Spiderling', type: 'Cosmetics', rarity: 'Rare', hero: 'Broodmother' },
    { image: 'skins/et_2021_immortal_png.png', name: 'Vise of Creation', type: 'Weapons', rarity: 'Immortal', hero: 'Elder Titan' },
    { image: 'skins/harness_of_the_soulforged_weapon_png.png', name: 'Mace of the Fissured Soul', type: 'Weapons', rarity: 'Mythical', hero: 'Elder Titan' },
    { image: 'skins/shapers_relic_png.png', name: 'Shapers Relics', type: 'Weapons', rarity: 'Mythical', hero: 'Elder Titam' },
    { image: 'skins/warden_of_the_gong_weapon_png.png', name: 'Mace of the Wyrmforge Shard', type: 'Weapons', rarity: 'Mythical', hero: 'Elder Titan' },
    { image: 'skins/ti9_cache_et_monuments_weapon_png.png', name: 'Hammer of the Monument of Ruin', type: 'Weapons', rarity: 'Rare', hero: 'Elder Titan' },
    { image: 'skins/mightworld_weapon_png.png', name: 'Might of the Old World', type: 'Weapons', rarity: 'Rare', hero: 'Elder Titan' },
    { image: 'skins/world_splitter_weapon_png.png', name: 'Hammer of the World Splitter', type: 'Weapons', rarity: 'Uncommon', hero: 'Elder Titan' },
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