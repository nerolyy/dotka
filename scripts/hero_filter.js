
const heroesGrid = document.querySelector('.heroes-grid');
const attributeFilterSelect = document.querySelector('.attribute-filter-select');
const typeFilterSelect = document.querySelector('.type-filter-select');
const complexityFilterSelect = document.querySelector('.complexity-filter-select');
const searchInput = document.querySelector('.search-input');

let heroes = [
 { image: 'abaddon.svg', name: 'Abaddon', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'alchemist.svg', name: 'Alchemist', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'axe.svg', name: 'Axe', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'beastmaster.svg', name: 'Beastmaster', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'brewmaster.svg', name: 'Brewmaster', attribute: 'STRENGTH', type: 'CARRY', complexity: 3 },
    { image: 'bristleback.svg', name: 'Bristleback', attribute: 'STRENGTH', type: 'MID', complexity: 1 },
    { image: 'centaur.svg', name: 'Centaur Warrunner', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'chaos.svg', name: 'Chaos Knight', attribute: 'STRENGTH', type: 'CARRY', complexity: 3 },
    { image: 'clockwerk.svg', name: 'Clockwerk', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'dawnbreaker.svg', name: 'Dawnbreaker', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'doom.svg', name: 'Doom', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 3 },
    { image: 'dragon.svg', name: 'Dragon Knight', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'earthspirit.svg', name: 'Earth Spirit', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 3 },
    { image: 'earthshaker.svg', name: 'Earthshaker', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'eldertitan.svg', name: 'Elder Titan', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'huskar.svg', name: 'Huskar', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'io.svg', name: 'Io', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'kunkka.svg', name: 'Kunkka', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'legion.svg', name: 'Legion Commander', attribute: 'STRENGTH', type: 'CARRY', complexity: 2 },
    { image: 'lifestealer.svg', name: 'Lifestealer', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'lycan.svg', name: 'Lycan', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'magnus.svg', name: 'Magnus', attribute: 'STRENGTH', type: 'MID', complexity: 3 },
    { image: 'marci.svg', name: 'Marci', attribute: 'STRENGTH', type: 'CARRY', complexity: 1 },
    { image: 'mars.svg', name: 'Mars', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'nightstalker.svg', name: 'Night Stalker', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'omniknight.svg', name: 'Omniknight', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'phoenix.svg', name: 'Phoenix', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'pudge.svg', name: 'Pudge', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'sandking.svg', name: 'Sand King', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'slardar.svg', name: 'Slardar', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
     { image: 'antimage.svg', name: 'Anti-Mage', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'arcwarden.svg', name: 'Arc Warden', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'bloodseeker.svg', name: 'Bloodseeker', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'bountyhunter.svg', name: 'Bounty Hunter', attribute: 'AGILITY', type: 'MID', complexity: 1 },
    { image: 'broodmother.svg', name: 'Broodmother', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'clinkz.svg', name: 'Clinkz', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'drowranger.svg', name: 'Drow Ranger', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'emberspirit.svg', name: 'Ember Spirit', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'facelessvoid.svg', name: 'Faceless Void', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 2 },
    { image: 'gyrocopter.svg', name: 'Gyrocopter', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'hoodwink.svg', name: 'Hoodwink', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'juggernaut.svg', name: 'Juggernaut', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'lonedruid.svg', name: 'Lone Druid', attribute: 'AGILITY', type: 'CARRY', complexity: 3 },
    { image: 'luna.svg', name: 'Luna', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'medusa.svg', name: 'Medusa', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 2 },
    { image: 'meepo.svg', name: 'Meepo', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'mirana.svg', name: 'Mirana', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'monkeyking.svg', name: 'Monkey King', attribute: 'AGILITY', type: 'CARRY', complexity: 3 },
    { image: 'morphling.svg', name: 'Morphling', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'nagasiren.svg', name: 'Naga Siren', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'nyxassassin.svg', name: 'Nyx Assassin', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'pangolier.svg', name: 'Pangolier', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'phantomassassin.svg', name: 'Phantom Assassin', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'phantomlancer.svg', name: 'Phantom Lancer', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
  { image: 'razor.svg', name: 'Razor', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
  { image: 'riki.svg', name: 'Riki', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
  { image: 'shadowfiend.svg', name: 'Shadow Fiend', attribute: 'AGILITY', type: 'MID', complexity: 2 },
  { image: 'slark.svg', name: 'Slark', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
  { image: 'sniper.svg', name: 'Sniper', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
  { image: 'spectre.svg', name: 'Spectre', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
  { image: 'templarassassin.svg', name: 'Templar Assassin', attribute: 'AGILITY', type: 'MID', complexity: 2 },
  { image: 'terrorblade.svg', name: 'Terrorblade', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
  { image: 'trollwarlord.svg', name: 'Troll Warlord', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
  { image: 'ursa.svg', name: 'Ursa', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
  { image: 'vengefulspirit.svg', name: 'Vengeful Spirit', attribute: 'AGILITY', type: 'FULL_SUPPORT', complexity: 1 },
  { image: 'venomancer.svg', name: 'Venomancer', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 2 },
  { image: 'viper.svg', name: 'Viper', attribute: 'AGILITY', type: 'MID', complexity: 1 },
  { image: 'weaver.svg', name: 'Weaver', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'ancientapparition.svg', name: 'Ancient Apparition', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'bane.svg', name: 'Bane', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'batrider.svg', name: 'Batrider', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'chen.svg', name: 'Chen', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'crystalmaiden.svg', name: 'Crystal Maiden', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'darkseer.svg', name: 'Dark Seer', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'darkwillow.svg', name: 'Dark Willow', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'dazzle.svg', name: 'Dazzle', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'deathprophet.svg', name: 'Death Prophet', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'disruptor.svg', name: 'Disruptor', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'enchantress.svg', name: 'Enchantress', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'enigma.svg', name: 'Enigma', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 3 },
    { image: 'grimstroke.svg', name: 'Grimstroke', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'invoker.svg', name: 'Invoker', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'jakiro.svg', name: 'Jakiro', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'keeperofthelight.svg', name: 'Keeper of the Light', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'leshrac.svg', name: 'Leshrac', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'lich.svg', name: 'Lich', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'lina.svg', name: 'Lina', attribute: 'INTELIGENCE', type: 'MID', complexity: 1 },
    { image: 'lion.svg', name: 'Lion', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'naturesprophet.svg', name: "Nature's Prophet", attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'necrophos.svg', name: 'Necrophos', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
  { image: 'ogremagi.svg', name: 'Ogre Magi', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 1 },
  { image: 'oracle.svg', name: 'Oracle', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
  { image: 'outworlddestroyer.svg', name: 'Outworld Destroyer', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'puck.svg', name: 'Puck', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
  { image: 'pugna.svg', name: 'Pugna', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
  { image: 'queenofpain.svg', name: 'Queen of Pain', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
  { image: 'rubick.svg', name: 'Rubick', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 3 },
  { image: 'shadowdemon.svg', name: 'Shadow Demon', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
  { image: 'shadowshaman.svg', name: 'Shadow Shaman', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'silencer.svg', name: 'Silencer', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'skywrathmage.svg', name: 'Skywrath Mage', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'stormspirit.svg', name: 'Storm Spirit', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'techies.svg', name: 'Techies', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'tinker.svg', name: 'Tinker', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'visage.svg', name: 'Visage', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'voidspirit.svg', name: 'Void Spirit', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
  { image: 'warlock.svg', name: 'Warlock', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
  { image: 'windranger.svg', name: 'Windranger', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'winterwyvern.svg', name: 'Winter Wyvern', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
  { image: 'witchdoctor.svg', name: 'Witch Doctor', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
     { image: 'snapfire.svg', name: 'Snapfire', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'spiritbreaker.svg', name: 'Spirit Breaker', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'sven.svg', name: 'Sven', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'tidehunter.svg', name: 'Tidehunter', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'timbersaw.svg', name: 'Timbersaw', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'tiny.svg', name: 'Tiny', attribute: 'STRENGTH', type: 'CARRY', complexity: 2 },
  { image: 'treant.svg', name: 'Treant Protector', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
  { image: 'tusk.svg', name: 'Tusk', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'underlord.svg', name: 'Underlord', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'undying.svg', name: 'Undying', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'wraithking.svg', name: 'Wraith King', attribute: 'STRENGTH', type: 'CARRY', complexity: 1 },
];

function filterHeroes() {
    const selectedAttribute = attributeFilterSelect.value;
    const selectedType = typeFilterSelect.value;
    const selectedComplexity = complexityFilterSelect.value;
     const searchTerm = searchInput.value.toLowerCase();

    let filteredHeroes = heroes;

    if (selectedAttribute !== 'All') {
        filteredHeroes = filteredHeroes.filter(hero => hero.attribute === selectedAttribute);
    }
    if (selectedType !== 'All') {
        filteredHeroes = filteredHeroes.filter(hero => hero.type === selectedType);
    }
    if (selectedComplexity !== 'All') {
        filteredHeroes = filteredHeroes.filter(hero => hero.complexity == selectedComplexity);
    }
  if (searchTerm) {
        filteredHeroes = filteredHeroes.filter(hero => hero.name.toLowerCase().includes(searchTerm));
    }

    let gridHTML = '';
    filteredHeroes.forEach(hero => {
         const imageUrl = new URL(`img/${hero.image}`, import.meta.url).href;
         gridHTML += `
            <div class="hero-item">
                <img src="${imageUrl}" alt="${hero.name}">
                <div class="hero-name">${hero.name}</div>
            </div>
        `;
    });

    heroesGrid.innerHTML = gridHTML;
}

attributeFilterSelect.addEventListener('change', filterHeroes);
typeFilterSelect.addEventListener('change', filterHeroes);
complexityFilterSelect.addEventListener('change', filterHeroes);
searchInput.addEventListener('input', filterHeroes);

filterHeroes();
