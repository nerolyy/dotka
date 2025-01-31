
const heroesContainer = document.querySelector('.heroes-container');
const typeFilter = document.getElementById('type-filter');
const complexityFilter = document.getElementById('complexity-filter');
const searchInput = document.getElementById('search-input');

const heroes = [
    { name: "Abaddon", attribute: "strength", complexity: "medium", image: "img/Hero card (1).svg" },
    { name: "Alchemist", attribute: "strength", complexity: "medium", image: "img/Hero card (2).svg" },
    { name: "Axe", attribute: "strength", complexity: "low", image: "img/Hero card (3).svg" },
    { name: "Beastmaster", attribute: "strength", complexity: "medium", image: "img/Hero card (4).svg" },
    { name: "Brewmaster", attribute: "strength", complexity: "high", image: "img/Hero card (5).svg" },
    { name: "Bristleback", attribute: "strength", complexity: "low", image: "img/Hero card (6).svg" },
    { name: "Anti-Mage", attribute: "agility", complexity: "medium", image: "img/anti-m.svg" },
    { name: "Arc Warden", attribute: "agility", complexity: "high", image: "img/Arc.svg" },
    { name: "Bloodseeker", attribute: "agility", complexity: "low", image: "img/seeker.svg" },
    { name: "Bounty Hunter", attribute: "agility", complexity: "medium", image: "img/bounty_hunter.svg" },
    { name: "Broodmother", attribute: "agility", complexity: "high", image: "img/Hero card (11).svg" },
    { name: "Clinkz", attribute: "agility", complexity: "medium", image: "img/Hero card (12).svg" },
    { name: "Ancient Apparition", attribute: "intelligence", complexity: "medium", image: "img/Anciet Apparat.svg" },
    { name: "Bane", attribute: "intelligence", complexity: "medium", image: "img/bane.svg" },
    { name: "Batrider", attribute: "intelligence", complexity: "high", image: "img/betrieder.svg" },
    { name: "Chen", attribute: "intelligence", complexity: "high", image: "images/chen.png" },
    { name: "Crystal Maiden", attribute: "intelligence", complexity: "low", image: "images/crystal-maiden.png" },
    { name: "Dark Seer", attribute: "intelligence", complexity: "medium", image: "images/dark-seer.png" },
    { name: "Centaur Warrunner", attribute: "strength", complexity: "low", image: "img/Hero card (7).svg" },
    { name: "Chaos Knight", attribute: "strength", complexity: "medium", image: "img/Hero card (8).svg" },
    { name: "Clockwerk", attribute: "strength", complexity: "medium", image: "img/Hero card (9).svg" },
    { name: "Dawnbreaker", attribute: "strength", complexity: "medium", image: "img/Hero card (10).svg" },
    { name: "Doom", attribute: "strength", complexity: "high", image: "img/Hero card (11).svg" },
    { name: "Dragon Knight", attribute: "strength", complexity: "low", image: "img/Hero card (12).svg" },
    { name: "Drow Ranger", attribute: "agility", complexity: "low", image: "images/drow-ranger.png" },
    { name: "Ember Spirit", attribute: "agility", complexity: "high", image: "images/ember-spirit.png" },
     { name: "Faceless Void", attribute: "agility", complexity: "medium", image: "images/faceless-void.png" },
       { name: "Gyrocopter", attribute: "agility", complexity: "medium", image: "images/gyrocopter.png" },
        { name: "Hoodwink", attribute: "agility", complexity: "medium", image: "images/hoodwink.png" },
    { name: "Juggernaut", attribute: "agility", complexity: "low", image: "images/juggernaut.png" },
     { name: "Dark Willow", attribute: "intelligence", complexity: "medium", image: "images/dark-willow.png" },
    { name: "Dazzle", attribute: "intelligence", complexity: "medium", image: "images/dazzle.png" },
       { name: "Death Prophet", attribute: "intelligence", complexity: "medium", image: "images/death-prophet.png" },
     { name: "Disruptor", attribute: "intelligence", complexity: "medium", image: "images/disruptor.png" },
       { name: "Enchantress", attribute: "intelligence", complexity: "medium", image: "images/enchantress.png" },
    { name: "Enigma", attribute: "intelligence", complexity: "high", image: "images/enigma.png" },
    { name: "Earth Spirit", attribute: "strength", complexity: "high", image: "images/earth-spirit.png" },
     { name: "Earthshaker", attribute: "strength", complexity: "medium", image: "images/earthshaker.png" },
    { name: "Elder Titan", attribute: "strength", complexity: "high", image: "images/elder-titan.png" },
      { name: "Huskar", attribute: "strength", complexity: "medium", image: "images/huskar.png" },
      { name: "Io", attribute: "strength", complexity: "high", image: "images/io.png" },
    { name: "Kunkka", attribute: "strength", complexity: "medium", image: "images/kunkka.png" },
  { name: "Lone Druid", attribute: "agility", complexity: "high", image: "images/lone-druid.png" },
    { name: "Luna", attribute: "agility", complexity: "low", image: "images/luna.png" },
       { name: "Medusa", attribute: "agility", complexity: "medium", image: "images/medusa.png" },
    { name: "Meepo", attribute: "agility", complexity: "high", image: "images/meepo.png" },
   { name: "Mirana", attribute: "agility", complexity: "medium", image: "images/mirana.png" },
       { name: "Monkey King", attribute: "agility", complexity: "medium", image: "images/monkey-king.png" },
     { name: "Grimstroke", attribute: "intelligence", complexity: "medium", image: "images/grimstroke.png" },
    { name: "Invoker", attribute: "intelligence", complexity: "high", image: "images/invoker.png" },
        { name: "Jakiro", attribute: "intelligence", complexity: "medium", image: "images/jakiro.png" },
     { name: "Keeper of the Light", attribute: "intelligence", complexity: "medium", image: "images/keeper-of-the-light.png" },
        { name: "Leshrac", attribute: "intelligence", complexity: "medium", image: "images/leshrac.png" },
   { name: "Lich", attribute: "intelligence", complexity: "low", image: "images/lich.png" },
    { name: "Legion Commander", attribute: "strength", complexity: "medium", image: "images/legion-commander.png" },
    { name: "Lifestealer", attribute: "strength", complexity: "medium", image: "images/lifestealer.png" },
    { name: "Lycan", attribute: "strength", complexity: "medium", image: "images/lycan.png" },
     { name: "Magnus", attribute: "strength", complexity: "medium", image: "images/magnus.png" },
    { name: "Marci", attribute: "strength", complexity: "medium", image: "images/marci.png" },
     { name: "Mars", attribute: "strength", complexity: "medium", image: "images/mars.png" },
      { name: "Morphling", attribute: "agility", complexity: "medium", image: "images/morphling.png" },
    { name: "Naga Siren", attribute: "agility", complexity: "high", image: "images/naga-siren.png" },
        { name: "Nyx Assassin", attribute: "agility", complexity: "medium", image: "images/nyx-assassin.png" },
    { name: "Pangolier", attribute: "agility", complexity: "medium", image: "images/pangolier.png" },
       { name: "Phantom Assassin", attribute: "agility", complexity: "medium", image: "images/phantom-assassin.png" },
    { name: "Phantom Lancer", attribute: "agility", complexity: "medium", image: "images/phantom-lancer.png" },
       { name: "Lina", attribute: "intelligence", complexity: "low", image: "images/lina.png" },
    { name: "Lion", attribute: "intelligence", complexity: "medium", image: "images/lion.png" },
      { name: "Nature's Prophet", attribute: "intelligence", complexity: "medium", image: "images/natures-prophet.png" },
       { name: "Necrophos", attribute: "intelligence", complexity: "medium", image: "images/necrophos.png" },
     { name: "Ogre Magi", attribute: "intelligence", complexity: "low", image: "images/ogre-magi.png" },
     { name: "Oracle", attribute: "intelligence", complexity: "high", image: "images/oracle.png" },
     { name: "Night Stalker", attribute: "strength", complexity: "medium", image: "images/night-stalker.png" },
    { name: "Omniknight", attribute: "strength", complexity: "low", image: "images/omniknight.png" },
    { name: "Phoenix", attribute: "strength", complexity: "medium", image: "images/phoenix.png" },
     { name: "Pudge", attribute: "strength", complexity: "medium", image: "images/pudge.png" },
    { name: "Sand King", attribute: "strength", complexity: "medium", image: "images/sand-king.png" },
   { name: "Slardar", attribute: "strength", complexity: "low", image: "images/slardar.png" },
  { name: "Razor", attribute: "agility", complexity: "medium", image: "images/razor.png" },
    { name: "Riki", attribute: "agility", complexity: "low", image: "images/riki.png" },
    { name: "Shadow Fiend", attribute: "agility", complexity: "medium", image: "images/shadow-fiend.png" },
     { name: "Slark", attribute: "agility", complexity: "medium", image: "images/slark.png" },
     { name: "Sniper", attribute: "agility", complexity: "low", image: "images/sniper.png" },
        { name: "Spectre", attribute: "agility", complexity: "medium", image: "images/spectre.png" },
     { name: "Outworld Destroyer", attribute: "intelligence", complexity: "medium", image: "images/outworld-destroyer.png" },
    { name: "Puck", attribute: "intelligence", complexity: "medium", image: "images/puck.png" },
    { name: "Pugna", attribute: "intelligence", complexity: "medium", image: "images/pugna.png" },
        { name: "Queen of Pain", attribute: "intelligence", complexity: "medium", image: "images/queen-of-pain.png" },
     { name: "Rubick", attribute: "intelligence", complexity: "high", image: "images/rubick.png" },
       { name: "Shadow Demon", attribute: "intelligence", complexity: "medium", image: "images/shadow-demon.png" },
    { name: "Snapfire", attribute: "strength", complexity: "medium", image: "images/snapfire.png" },
    { name: "Spirit Breaker", attribute: "strength", complexity: "low", image: "images/spirit-breaker.png" },
    { name: "Sven", attribute: "strength", complexity: "low", image: "images/sven.png" },
    { name: "Tidehunter", attribute: "strength", complexity: "medium", image: "images/tidehunter.png" },
     { name: "Timbersaw", attribute: "strength", complexity: "medium", image: "images/timbersaw.png" },
    { name: "Tiny", attribute: "strength", complexity: "medium", image: "images/tiny.png" },
      { name: "Templar Assassin", attribute: "agility", complexity: "medium", image: "images/templar-assassin.png" },
    { name: "Terrorblade", attribute: "agility", complexity: "medium", image: "images/terrorblade.png" },
      { name: "Troll Warlord", attribute: "agility", complexity: "medium", image: "images/troll-warlord.png" },
   { name: "Ursa", attribute: "agility", complexity: "low", image: "images/ursa.png" },
     { name: "Vengeful Spirit", attribute: "agility", complexity: "medium", image: "images/vengeful-spirit.png" },
        { name: "Venomancer", attribute: "agility", complexity: "medium", image: "images/venomancer.png" },
  { name: "Shadow Shaman", attribute: "intelligence", complexity: "low", image: "images/shadow-shaman.png" },
    { name: "Silencer", attribute: "intelligence", complexity: "medium", image: "images/silencer.png" },
  { name: "Skywrath Mage", attribute: "intelligence", complexity: "medium", image: "images/skywrath-mage.png" },
     { name: "Storm Spirit", attribute: "intelligence", complexity: "medium", image: "images/storm-spirit.png" },
     { name: "Techies", attribute: "intelligence", complexity: "high", image: "images/techies.png" },
       { name: "Tinker", attribute: "intelligence", complexity: "medium", image: "images/tinker.png" },
    { name: "Treant Protector", attribute: "strength", complexity: "medium", image: "images/treant-protector.png" },
    { name: "Tusk", attribute: "strength", complexity: "medium", image: "images/tusk.png" },
    { name: "Underlord", attribute: "strength", complexity: "medium", image: "images/underlord.png" },
     { name: "Undying", attribute: "strength", complexity: "medium", image: "images/undying.png" },
     { name: "Wraith King", attribute: "strength", complexity: "low", image: "images/wraith-king.png" },
    { name: "Viper", attribute: "agility", complexity: "medium", image: "images/viper.png" },
    { name: "Weaver", attribute: "agility", complexity: "medium", image: "images/weaver.png" },
  { name: "Visage", attribute: "intelligence", complexity: "high", image: "images/visage.png" },
    { name: "Void Spirit", attribute: "intelligence", complexity: "medium", image: "images/void-spirit.png" },
      { name: "Warlock", attribute: "intelligence", complexity: "medium", image: "images/warlock.png" },
      { name: "Windranger", attribute: "intelligence", complexity: "medium", image: "images/windranger.png" },
      { name: "Winter Wyvern", attribute: "intelligence", complexity: "medium", image: "images/winter-wyvern.png" },
    { name: "Witch Doctor", attribute: "intelligence", complexity: "medium", image: "images/witch-doctor.png" },

];


function generateHeroCards(filteredHeroes) {
    heroesContainer.innerHTML = '';
    filteredHeroes.forEach(hero => {
        const card = document.createElement('a'); 
        card.classList.add('hero-card', hero.attribute);
        card.innerHTML = `
            <img src="${hero.image}" alt="${hero.name}">
            <h3>${hero.name}</h3>
        `;
        heroesContainer.appendChild(card);
    });
}

function filterHeroes() {
    const selectedType = typeFilter.value;
    const selectedComplexity = complexityFilter.value;
    const searchTerm = searchInput.value.toLowerCase();

    let filteredHeroes = heroes.filter(hero => {
      const typeMatch = selectedType === 'all' || hero.attribute === selectedType;
      const complexityMatch = selectedComplexity === 'all' || hero.complexity === selectedComplexity;
      const searchMatch = hero.name.toLowerCase().includes(searchTerm);

      return typeMatch && complexityMatch && searchMatch;
    });

  generateHeroCards(filteredHeroes);
}

typeFilter.addEventListener('change', filterHeroes);
complexityFilter.addEventListener('change', filterHeroes);
searchInput.addEventListener('input', filterHeroes);

generateHeroCards(heroes);
