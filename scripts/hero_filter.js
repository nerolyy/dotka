
const heroesContainer = document.querySelector('.heroes-container');
const typeFilter = document.getElementById('type-filter');
const complexityFilter = document.getElementById('complexity-filter');
const searchInput = document.getElementById('search-input');

const heroes = [
    { name: "Abaddon", attribute: "strength", complexity: "medium", image: "img/Hero card (1).svg", href: "index.php?page=content/other_pages/abaddone" },
    { name: "Alchemist", attribute: "strength", complexity: "medium", image: "img/Hero card (2).svg", href: "index.php?page=content/other_pages/alchemist" },
    { name: "Axe", attribute: "strength", complexity: "low", image: "img/Hero card (3).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Beastmaster", attribute: "strength", complexity: "medium", image: "img/Hero card (4).svg", href: "index.php?page=content/other_pages/beastmaster" },
    { name: "Brewmaster", attribute: "strength", complexity: "high", image: "img/Hero card (5).svg", href: "index.php?page=content/other_pages/brewmaster" },
    { name: "Bristleback", attribute: "strength", complexity: "low", image: "img/Hero card (6).svg", href: "index.php?page=content/other_pages/bristleback" },
    { name: "Anti-Mage", attribute: "agility", complexity: "medium", image: "img/anti-m.svg", href: "index.php?page=content/other_pages/antimage" },
    { name: "Arc Warden", attribute: "agility", complexity: "high", image: "img/Arc.svg", href: "index.php?page=content/other_pages/arc_warden" },
    { name: "Bloodseeker", attribute: "agility", complexity: "low", image: "img/seeker.svg", href: "index.php?page=content/other_pages/bloodseeker" },
    { name: "Bounty Hunter", attribute: "agility", complexity: "medium", image: "img/bounty_hunter.svg", href: "index.php?page=content/other_pages/bounty_hunter" },
    { name: "Broodmother", attribute: "agility", complexity: "high", image: "img/brudka.svg", href: "index.php?page=content/other_pages/broodmother" },
    { name: "Clinkz", attribute: "agility", complexity: "medium", image: "img/clinz.svg", href: "index.php?page=content/other_pages/clinz" },
    { name: "Ancient Apparition", attribute: "intelligence", complexity: "medium", image: "img/Anciet Apparat.svg", href: "index.php?page=content/other_pages/Ancient_Apparition" },
    { name: "Bane", attribute: "intelligence", complexity: "medium", image: "img/bane.svg", href: "index.php?page=content/other_pages/bane" },
    { name: "Batrider", attribute: "intelligence", complexity: "high", image: "img/betrieder.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Chen", attribute: "intelligence", complexity: "high", image: "img/chen.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Crystal Maiden", attribute: "intelligence", complexity: "low", image: "img/cristalka.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Dark Seer", attribute: "intelligence", complexity: "medium", image: "img/dart seer.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Centaur Warrunner", attribute: "strength", complexity: "low", image: "img/Hero card (7).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Chaos Knight", attribute: "strength", complexity: "medium", image: "img/Hero card (8).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Clockwerk", attribute: "strength", complexity: "medium", image: "img/Hero card (9).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Dawnbreaker", attribute: "strength", complexity: "medium", image: "img/Hero card (10).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Doom", attribute: "strength", complexity: "high", image: "img/Hero card (11).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Dragon Knight", attribute: "strength", complexity: "low", image: "img/Hero card (12).svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Drow Ranger", attribute: "agility", complexity: "low", image: "img/drovka.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Ember Spirit", attribute: "agility", complexity: "high", image: "img/ember spirit.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Faceless Void", attribute: "agility", complexity: "medium", image: "img/facilecec void.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Gyrocopter", attribute: "agility", complexity: "medium", image: "img/giro.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Hoodwink", attribute: "agility", complexity: "medium", image: "img/hoodvink.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Juggernaut", attribute: "agility", complexity: "low", image: "img/juger.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Dark Willow", attribute: "intelligence", complexity: "medium", image: "img/Dark willow.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Dazzle", attribute: "intelligence", complexity: "medium", image: "img/dazzle.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Death Prophet", attribute: "intelligence", complexity: "medium", image: "img/death profit.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Disruptor", attribute: "intelligence", complexity: "medium", image: "img/dizraptor.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Enchantress", attribute: "intelligence", complexity: "medium", image: "img/encha.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Enigma", attribute: "intelligence", complexity: "high", image: "img/enigma.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Earth Spirit", attribute: "strength", complexity: "high", image: "img/Earth spirit.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Earthshaker", attribute: "strength", complexity: "medium", image: "img/Earth shaker.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Elder Titan", attribute: "strength", complexity: "high", image: "img/elder.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Huskar", attribute: "strength", complexity: "medium", image: "img/huskar.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Io", attribute: "strength", complexity: "high", image: "fonts/io.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Kunkka", attribute: "strength", complexity: "medium", image: "fonts/kunka.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Lone Druid", attribute: "agility", complexity: "high", image: "fonts/lone_druid.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Luna", attribute: "agility", complexity: "low", image: "fonts/Luna.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Medusa", attribute: "agility", complexity: "medium", image: "fonts/medusa.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Meepo", attribute: "agility", complexity: "high", image: "fonts/meepo.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Mirana", attribute: "agility", complexity: "medium", image: "fonts/mirana.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Monkey King", attribute: "agility", complexity: "medium", image: "fonts/monkey_king.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Grimstroke", attribute: "intelligence", complexity: "medium", image: "fonts/grim.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Invoker", attribute: "intelligence", complexity: "high", image: "fonts/voker.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Jakiro", attribute: "intelligence", complexity: "medium", image: "fonts/jakiro.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Keeper of the Light", attribute: "intelligence", complexity: "medium", image: "fonts/keeper_of_the_light.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Leshrac", attribute: "intelligence", complexity: "medium", image: "fonts/leshrak.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Lich", attribute: "intelligence", complexity: "low", image: "fonts/lich.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Legion Commander", attribute: "strength", complexity: "medium", image: "images/legion-commander.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Lifestealer", attribute: "strength", complexity: "medium", image: "images/lifestealer.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Lycan", attribute: "strength", complexity: "medium", image: "images/lycan.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Magnus", attribute: "strength", complexity: "medium", image: "images/magnus.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Marci", attribute: "strength", complexity: "medium", image: "images/marci.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Mars", attribute: "strength", complexity: "medium", image: "images/mars.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Morphling", attribute: "agility", complexity: "medium", image: "fonts/morph.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Naga Siren", attribute: "agility", complexity: "high", image: "fonts/Naga_siren.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Nyx Assassin", attribute: "agility", complexity: "medium", image: "fonts/nix_assasin.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Pangolier", attribute: "agility", complexity: "medium", image: "fonts/pango.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Phantom Assassin", attribute: "agility", complexity: "medium", image: "fonts/phantom_assasin.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Phantom Lancer", attribute: "agility", complexity: "medium", image: "fonts/phantom_lancer.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Lina", attribute: "intelligence", complexity: "low", image: "fonts/lina.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Lion", attribute: "intelligence", complexity: "medium", image: "fonts/lion.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Nature's Prophet", attribute: "intelligence", complexity: "medium", image: "fonts/furion.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Necrophos", attribute: "intelligence", complexity: "medium", image: "ifonts/necr.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Ogre Magi", attribute: "intelligence", complexity: "low", image: "ifonts/Ogre_mage.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Oracle", attribute: "intelligence", complexity: "high", image: "fonts/oracle.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Night Stalker", attribute: "strength", complexity: "medium", image: "images/night-stalker.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Omniknight", attribute: "strength", complexity: "low", image: "images/omniknight.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Phoenix", attribute: "strength", complexity: "medium", image: "images/phoenix.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Pudge", attribute: "strength", complexity: "medium", image: "images/pudge.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Sand King", attribute: "strength", complexity: "medium", image: "images/sand-king.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Slardar", attribute: "strength", complexity: "low", image: "images/slardar.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Razor", attribute: "agility", complexity: "medium", image: "fonts/razor.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Riki", attribute: "agility", complexity: "low", image: "fonts/riki.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Shadow Fiend", attribute: "agility", complexity: "medium", image: "fonts/sf.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Slark", attribute: "agility", complexity: "medium", image: "fonts/slark.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Sniper", attribute: "agility", complexity: "low", image: "fonts/sniper.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Spectre", attribute: "agility", complexity: "medium", image: "fonts/spectra.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Outworld Destroyer", attribute: "intelligence", complexity: "medium", image: "images/outworld-destroyer.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Puck", attribute: "intelligence", complexity: "medium", image: "images/puck.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Pugna", attribute: "intelligence", complexity: "medium", image: "images/pugna.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Queen of Pain", attribute: "intelligence", complexity: "medium", image: "images/queen-of-pain.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Rubick", attribute: "intelligence", complexity: "high", image: "images/rubick.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Shadow Demon", attribute: "intelligence", complexity: "medium", image: "images/shadow-demon.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Snapfire", attribute: "strength", complexity: "medium", image: "images/snapfire.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Spirit Breaker", attribute: "strength", complexity: "low", image: "images/spirit-breaker.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Sven", attribute: "strength", complexity: "low", image: "images/sven.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Tidehunter", attribute: "strength", complexity: "medium", image: "images/tidehunter.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Timbersaw", attribute: "strength", complexity: "medium", image: "images/timbersaw.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Tiny", attribute: "strength", complexity: "medium", image: "images/tiny.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Templar Assassin", attribute: "agility", complexity: "medium", image: "fonts/ta.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Terrorblade", attribute: "agility", complexity: "medium", image: "fonts/tb.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Troll Warlord", attribute: "agility", complexity: "medium", image: "fonts/trol_warlord.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Ursa", attribute: "agility", complexity: "low", image: "fonts/ursa.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Vengeful Spirit", attribute: "agility", complexity: "medium", image: "fonts/venga.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Venomancer", attribute: "agility", complexity: "medium", image: "fonts/venomaser.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Shadow Shaman", attribute: "intelligence", complexity: "low", image: "images/shadow-shaman.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Silencer", attribute: "intelligence", complexity: "medium", image: "images/silencer.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Skywrath Mage", attribute: "intelligence", complexity: "medium", image: "images/skywrath-mage.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Storm Spirit", attribute: "intelligence", complexity: "medium", image: "images/storm-spirit.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Techies", attribute: "intelligence", complexity: "high", image: "images/techies.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Tinker", attribute: "intelligence", complexity: "medium", image: "images/tinker.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Treant Protector", attribute: "strength", complexity: "medium", image: "images/treant-protector.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Tusk", attribute: "strength", complexity: "medium", image: "images/tusk.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Underlord", attribute: "strength", complexity: "medium", image: "images/underlord.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Undying", attribute: "strength", complexity: "medium", image: "images/undying.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Wraith King", attribute: "strength", complexity: "low", image: "images/wraith-king.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Viper", attribute: "agility", complexity: "medium", image: "fonts/viper.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Weaver", attribute: "agility", complexity: "medium", image: "fonts/weever.svg", href: "index.php?page=content/other_pages/axe" },
    { name: "Visage", attribute: "intelligence", complexity: "high", image: "images/visage.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Void Spirit", attribute: "intelligence", complexity: "medium", image: "images/void-spirit.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Warlock", attribute: "intelligence", complexity: "medium", image: "images/warlock.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Windranger", attribute: "intelligence", complexity: "medium", image: "images/windranger.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Winter Wyvern", attribute: "intelligence", complexity: "medium", image: "images/winter-wyvern.png", href: "index.php?page=content/other_pages/axe" },
    { name: "Witch Doctor", attribute: "intelligence", complexity: "medium", image: "images/witch-doctor.png", href: "index.php?page=content/other_pages/axe" },

];


function generateHeroCards(filteredHeroes) {
    heroesContainer.innerHTML = '';
    filteredHeroes.forEach(hero => {
        const card = document.createElement('a');
        card.href = hero.href;
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
