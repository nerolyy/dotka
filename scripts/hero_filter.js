
const heroesGrid = document.querySelector('.heroes-grid');
const attributeFilterSelect = document.querySelector('.attribute-filter-select');
const typeFilterSelect = document.querySelector('.type-filter-select');
const complexityFilterSelect = document.querySelector('.complexity-filter-select');
const searchInput = document.querySelector('.search-input');


let heroes = [
    { image: 'img/Hero card (1).svg', name: 'Abaddon', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'img/Hero card (8).svg', name: 'Alchemist', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'img/Hero card (4).svg', name: 'Axe', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'img/Hero card (3).svg', name: 'Beastmaster', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'img/Hero card (2).svg', name: 'Brewmaster', attribute: 'STRENGTH', type: 'CARRY', complexity: 3 },
    { image: 'bristleback.png', name: 'Bristleback', attribute: 'STRENGTH', type: 'MID', complexity: 1 },
    { image: 'centaur.png', name: 'Centaur Warrunner', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'chaos.png', name: 'Chaos Knight', attribute: 'STRENGTH', type: 'CARRY', complexity: 3 },
    { image: 'clockwerk.png', name: 'Clockwerk', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'dawnbreaker.png', name: 'Dawnbreaker', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'doom.png', name: 'Doom', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 3 },
    { image: 'dragon.png', name: 'Dragon Knight', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'earthspirit.png', name: 'Earth Spirit', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 3 },
    { image: 'earthshaker.png', name: 'Earthshaker', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'eldertitan.png', name: 'Elder Titan', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'huskar.png', name: 'Huskar', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'io.png', name: 'Io', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'kunkka.png', name: 'Kunkka', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'legion.png', name: 'Legion Commander', attribute: 'STRENGTH', type: 'CARRY', complexity: 2 },
    { image: 'lifestealer.png', name: 'Lifestealer', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'lycan.png', name: 'Lycan', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'magnus.png', name: 'Magnus', attribute: 'STRENGTH', type: 'MID', complexity: 3 },
    { image: 'marci.png', name: 'Marci', attribute: 'STRENGTH', type: 'CARRY', complexity: 1 },
    { image: 'mars.png', name: 'Mars', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'nightstalker.png', name: 'Night Stalker', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'omniknight.png', name: 'Omniknight', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'phoenix.png', name: 'Phoenix', attribute: 'STRENGTH', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'pudge.png', name: 'Pudge', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'sandking.png', name: 'Sand King', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'slardar.png', name: 'Slardar', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'antimage.png', name: 'Anti-Mage', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'arcwarden.png', name: 'Arc Warden', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'bloodseeker.png', name: 'Bloodseeker', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'bountyhunter.png', name: 'Bounty Hunter', attribute: 'AGILITY', type: 'MID', complexity: 1 },
    { image: 'broodmother.png', name: 'Broodmother', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'clinkz.png', name: 'Clinkz', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'drowranger.png', name: 'Drow Ranger', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'emberspirit.png', name: 'Ember Spirit', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'facelessvoid.png', name: 'Faceless Void', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 2 },
    { image: 'gyrocopter.png', name: 'Gyrocopter', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'hoodwink.png', name: 'Hoodwink', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'juggernaut.png', name: 'Juggernaut', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'lonedruid.png', name: 'Lone Druid', attribute: 'AGILITY', type: 'CARRY', complexity: 3 },
    { image: 'luna.png', name: 'Luna', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'medusa.png', name: 'Medusa', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 2 },
    { image: 'meepo.png', name: 'Meepo', attribute: 'AGILITY', type: 'MID', complexity: 3 },
    { image: 'mirana.png', name: 'Mirana', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'monkeyking.png', name: 'Monkey King', attribute: 'AGILITY', type: 'CARRY', complexity: 3 },
    { image: 'morphling.png', name: 'Morphling', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'nagasiren.png', name: 'Naga Siren', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'nyxassassin.png', name: 'Nyx Assassin', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'pangolier.png', name: 'Pangolier', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'phantomassassin.png', name: 'Phantom Assassin', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'phantomlancer.png', name: 'Phantom Lancer', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'razor.png', name: 'Razor', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'riki.png', name: 'Riki', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'shadowfiend.png', name: 'Shadow Fiend', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'slark.png', name: 'Slark', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'sniper.png', name: 'Sniper', attribute: 'AGILITY', type: 'CARRY', complexity: 1 },
    { image: 'spectre.png', name: 'Spectre', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'templarassassin.png', name: 'Templar Assassin', attribute: 'AGILITY', type: 'MID', complexity: 2 },
    { image: 'terrorblade.png', name: 'Terrorblade', attribute: 'AGILITY', type: 'HARD_CARRY', complexity: 3 },
    { image: 'trollwarlord.png', name: 'Troll Warlord', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'ursa.png', name: 'Ursa', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'vengefulspirit.png', name: 'Vengeful Spirit', attribute: 'AGILITY', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'venomancer.png', name: 'Venomancer', attribute: 'AGILITY', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'viper.png', name: 'Viper', attribute: 'AGILITY', type: 'MID', complexity: 1 },
    { image: 'weaver.png', name: 'Weaver', attribute: 'AGILITY', type: 'CARRY', complexity: 2 },
    { image: 'ancientapparition.png', name: 'Ancient Apparition', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'bane.png', name: 'Bane', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'batrider.png', name: 'Batrider', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'chen.png', name: 'Chen', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'crystalmaiden.png', name: 'Crystal Maiden', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'darkseer.png', name: 'Dark Seer', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'darkwillow.png', name: 'Dark Willow', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'dazzle.png', name: 'Dazzle', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'deathprophet.png', name: 'Death Prophet', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'disruptor.png', name: 'Disruptor', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'enchantress.png', name: 'Enchantress', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'enigma.png', name: 'Enigma', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 3 },
    { image: 'grimstroke.png', name: 'Grimstroke', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'invoker.png', name: 'Invoker', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'jakiro.png', name: 'Jakiro', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'keeperofthelight.png', name: 'Keeper of the Light', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'leshrac.png', name: 'Leshrac', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'lich.png', name: 'Lich', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
    { image: 'lina.png', name: 'Lina', attribute: 'INTELIGENCE', type: 'MID', complexity: 1 },
    { image: 'lion.png', name: 'Lion', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'naturesprophet.png', name: "Nature's Prophet", attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'necrophos.png', name: 'Necrophos', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'ogremagi.png', name: 'Ogre Magi', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'oracle.png', name: 'Oracle', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'outworlddestroyer.png', name: 'Outworld Destroyer', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'puck.png', name: 'Puck', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'pugna.png', name: 'Pugna', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'queenofpain.png', name: 'Queen of Pain', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'rubick.png', name: 'Rubick', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 3 },
    { image: 'shadowdemon.png', name: 'Shadow Demon', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'shadowshaman.png', name: 'Shadow Shaman', attribute: 'INTELIGENCE', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'silencer.png', name: 'Silencer', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'skywrathmage.png', name: 'Skywrath Mage', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'stormspirit.png', name: 'Storm Spirit', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'techies.png', name: 'Techies', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'tinker.png', name: 'Tinker', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'visage.png', name: 'Visage', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'voidspirit.png', name: 'Void Spirit', attribute: 'INTELIGENCE', type: 'MID', complexity: 3 },
    { image: 'warlock.png', name: 'Warlock', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'windranger.png', name: 'Windranger', attribute: 'INTELIGENCE', type: 'MID', complexity: 2 },
    { image: 'winterwyvern.png', name: 'Winter Wyvern', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 2 },
    { image: 'witchdoctor.png', name: 'Witch Doctor', attribute: 'INTELIGENCE', type: 'FULL_SUPPORT', complexity: 1 },
   { image: 'snapfire.png', name: 'Snapfire', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
   { image: 'spiritbreaker.png', name: 'Spirit Breaker', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'sven.png', name: 'Sven', attribute: 'STRENGTH', type: 'HARD_CARRY', complexity: 1 },
    { image: 'tidehunter.png', name: 'Tidehunter', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'timbersaw.png', name: 'Timbersaw', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'tiny.png', name: 'Tiny', attribute: 'STRENGTH', type: 'CARRY', complexity: 2 },
    { image: 'treant.png', name: 'Treant Protector', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 1 },
    { image: 'tusk.png', name: 'Tusk', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'underlord.png', name: 'Underlord', attribute: 'STRENGTH', type: 'MID', complexity: 2 },
    { image: 'undying.png', name: 'Undying', attribute: 'STRENGTH', type: 'HARD_SUPPORT', complexity: 2 },
    { image: 'wraithking.png', name: 'Wraith King', attribute: 'STRENGTH', type: 'CARRY', complexity: 1 },
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
        gridHTML += `
         <div class="hero-item">
             <img src="img/${hero.image}" alt="${hero.name}">
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