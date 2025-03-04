
const heroesContainer = document.querySelector('.heroes-container');
const typeFilter = document.getElementById('type-filter');
const complexityFilter = document.getElementById('complexity-filter');
const searchInput = document.getElementById('search-input');

const heroes = [
    { name: "Abaddon", attribute: "strength", complexity: "medium", image: "img/Hero card (1).svg", href: "#" },
    { name: "Alchemist", attribute: "strength", complexity: "medium", image: "img/Hero card (2).svg", href: "content/alchemist.php" },
    { name: "Axe", attribute: "strength", complexity: "low", image: "img/Hero card (3).svg", href: "axe.php" },
    { name: "Beastmaster", attribute: "strength", complexity: "medium", image: "img/Hero card (4).svg", href: "#" },
    { name: "Brewmaster", attribute: "strength", complexity: "high", image: "img/Hero card (5).svg", href: "#" },
    { name: "Bristleback", attribute: "strength", complexity: "low", image: "img/Hero card (6).svg", href: "#" },
    { name: "Anti-Mage", attribute: "agility", complexity: "medium", image: "img/anti-m.svg", href: "#" },
    { name: "Arc Warden", attribute: "agility", complexity: "high", image: "img/Arc.svg", href: "#" },
    { name: "Bloodseeker", attribute: "agility", complexity: "low", image: "img/seeker.svg", href: "bloodseeker.php" },
    { name: "Bounty Hunter", attribute: "agility", complexity: "medium", image: "img/bounty_hunter.svg", href: "#" },
    { name: "Broodmother", attribute: "agility", complexity: "high", image: "img/brudka.svg", href: "#" },
    { name: "Clinkz", attribute: "agility", complexity: "medium", image: "img/clinz.svg", href: "#" },
    { name: "Ancient Apparition", attribute: "intelligence", complexity: "medium", image: "img/Anciet Apparat.svg", href: "#" },
    { name: "Bane", attribute: "intelligence", complexity: "medium", image: "img/bane.svg", href: "#" },
    { name: "Batrider", attribute: "intelligence", complexity: "high", image: "img/betrieder.svg", href: "#" },
    { name: "Chen", attribute: "intelligence", complexity: "high", image: "img/chen.svg", href: "#" },
    { name: "Crystal Maiden", attribute: "intelligence", complexity: "low", image: "img/cristalka.svg", href: "#" },
    { name: "Dark Seer", attribute: "intelligence", complexity: "medium", image: "img/dart seer.svg", href: "#" },
    { name: "Centaur Warrunner", attribute: "strength", complexity: "low", image: "img/Hero card (7).svg", href: "#" },
    { name: "Chaos Knight", attribute: "strength", complexity: "medium", image: "img/Hero card (8).svg", href: "#" },
    { name: "Clockwerk", attribute: "strength", complexity: "medium", image: "img/Hero card (9).svg", href: "#" },
    { name: "Dawnbreaker", attribute: "strength", complexity: "medium", image: "img/Hero card (10).svg", href: "#" },
    { name: "Doom", attribute: "strength", complexity: "high", image: "img/Hero card (11).svg", href: "#" },
    { name: "Dragon Knight", attribute: "strength", complexity: "low", image: "img/Hero card (12).svg", href: "#" },
    { name: "Drow Ranger", attribute: "agility", complexity: "low", image: "img/drovka.svg", href: "#" },
    { name: "Ember Spirit", attribute: "agility", complexity: "high", image: "img/ember spirit.svg", href: "#" },
    { name: "Faceless Void", attribute: "agility", complexity: "medium", image: "img/facilecec void.svg", href: "#" },
    { name: "Gyrocopter", attribute: "agility", complexity: "medium", image: "img/giro.svg", href: "#" },
    { name: "Hoodwink", attribute: "agility", complexity: "medium", image: "img/hoodvink.svg", href: "#" },
    { name: "Juggernaut", attribute: "agility", complexity: "low", image: "img/juger.svg", href: "#" },
    { name: "Dark Willow", attribute: "intelligence", complexity: "medium", image: "img/Dark willow.svg", href: "#" },
    { name: "Dazzle", attribute: "intelligence", complexity: "medium", image: "img/dazzle.svg", href: "#" },
    { name: "Death Prophet", attribute: "intelligence", complexity: "medium", image: "img/death profit.svg", href: "#" },
    { name: "Disruptor", attribute: "intelligence", complexity: "medium", image: "img/dizraptor.svg", href: "#" },
    { name: "Enchantress", attribute: "intelligence", complexity: "medium", image: "img/encha.svg", href: "#" },
    { name: "Enigma", attribute: "intelligence", complexity: "high", image: "img/enigma.svg", href: "#" },
    { name: "Earth Spirit", attribute: "strength", complexity: "high", image: "img/Earth spirit.svg", href: "#" },
    { name: "Earthshaker", attribute: "strength", complexity: "medium", image: "img/Earth shaker.svg", href: "#" },
    { name: "Elder Titan", attribute: "strength", complexity: "high", image: "img/elder.svg", href: "#" },
    { name: "Huskar", attribute: "strength", complexity: "medium", image: "img/huskar.svg", href: "#" },
    { name: "Io", attribute: "strength", complexity: "high", image: "fonts/io.svg", href: "#" },
    { name: "Kunkka", attribute: "strength", complexity: "medium", image: "fonts/kunka.svg", href: "#" },
    { name: "Lone Druid", attribute: "agility", complexity: "high", image: "fonts/lone_druid.svg", href: "#" },
    { name: "Luna", attribute: "agility", complexity: "low", image: "fonts/Luna.svg", href: "#" },
    { name: "Medusa", attribute: "agility", complexity: "medium", image: "fonts/medusa.svg", href: "#" },
    { name: "Meepo", attribute: "agility", complexity: "high", image: "fonts/meepo.svg", href: "#" },
    { name: "Mirana", attribute: "agility", complexity: "medium", image: "fonts/mirana.svg", href: "#" },
    { name: "Monkey King", attribute: "agility", complexity: "medium", image: "fonts/monkey_king.svg", href: "#" },
    { name: "Grimstroke", attribute: "intelligence", complexity: "medium", image: "fonts/grim.svg", href: "#" },
    { name: "Invoker", attribute: "intelligence", complexity: "high", image: "fonts/voker.svg", href: "#" },
    { name: "Jakiro", attribute: "intelligence", complexity: "medium", image: "fonts/jakiro.svg", href: "#" },
    { name: "Keeper of the Light", attribute: "intelligence", complexity: "medium", image: "fonts/keeper_of_the_light.svg", href: "#" },
    { name: "Leshrac", attribute: "intelligence", complexity: "medium", image: "fonts/leshrak.svg", href: "#" },
    { name: "Lich", attribute: "intelligence", complexity: "low", image: "fonts/lich.svg", href: "#" },
    { name: "Legion Commander", attribute: "strength", complexity: "medium", image: "images/legion-commander.png", href: "#" },
    { name: "Lifestealer", attribute: "strength", complexity: "medium", image: "images/lifestealer.png", href: "#" },
    { name: "Lycan", attribute: "strength", complexity: "medium", image: "images/lycan.png", href: "#" },
    { name: "Magnus", attribute: "strength", complexity: "medium", image: "images/magnus.png", href: "#" },
    { name: "Marci", attribute: "strength", complexity: "medium", image: "images/marci.png", href: "#" },
    { name: "Mars", attribute: "strength", complexity: "medium", image: "images/mars.png", href: "#" },
    { name: "Morphling", attribute: "agility", complexity: "medium", image: "fonts/morph.svg", href: "#" },
    { name: "Naga Siren", attribute: "agility", complexity: "high", image: "fonts/Naga_siren.svg", href: "#" },
    { name: "Nyx Assassin", attribute: "agility", complexity: "medium", image: "fonts/nix_assasin.svg", href: "#" },
    { name: "Pangolier", attribute: "agility", complexity: "medium", image: "fonts/pango.svg", href: "#" },
    { name: "Phantom Assassin", attribute: "agility", complexity: "medium", image: "fonts/phantom_assasin.svg", href: "#" },
    { name: "Phantom Lancer", attribute: "agility", complexity: "medium", image: "fonts/phantom_lancer.svg", href: "#" },
    { name: "Lina", attribute: "intelligence", complexity: "low", image: "fonts/lina.svg", href: "#" },
    { name: "Lion", attribute: "intelligence", complexity: "medium", image: "fonts/lion.svg", href: "#" },
    { name: "Nature's Prophet", attribute: "intelligence", complexity: "medium", image: "images/natures-prophet.png", href: "#" },
    { name: "Necrophos", attribute: "intelligence", complexity: "medium", image: "images/necrophos.png", href: "#" },
    { name: "Ogre Magi", attribute: "intelligence", complexity: "low", image: "images/ogre-magi.png", href: "#" },
    { name: "Oracle", attribute: "intelligence", complexity: "high", image: "images/oracle.png", href: "#" },
    { name: "Night Stalker", attribute: "strength", complexity: "medium", image: "images/night-stalker.png", href: "#" },
    { name: "Omniknight", attribute: "strength", complexity: "low", image: "images/omniknight.png", href: "#" },
    { name: "Phoenix", attribute: "strength", complexity: "medium", image: "images/phoenix.png", href: "#" },
    { name: "Pudge", attribute: "strength", complexity: "medium", image: "images/pudge.png", href: "#" },
    { name: "Sand King", attribute: "strength", complexity: "medium", image: "images/sand-king.png", href: "#" },
    { name: "Slardar", attribute: "strength", complexity: "low", image: "images/slardar.png", href: "#" },
    { name: "Razor", attribute: "agility", complexity: "medium", image: "fonts/razor.svg", href: "#" },
    { name: "Riki", attribute: "agility", complexity: "low", image: "fonts/riki.svg", href: "#" },
    { name: "Shadow Fiend", attribute: "agility", complexity: "medium", image: "fonts/sf.svg", href: "#" },
    { name: "Slark", attribute: "agility", complexity: "medium", image: "fonts/slark.svg", href: "#" },
    { name: "Sniper", attribute: "agility", complexity: "low", image: "fonts/sniper.svg", href: "#" },
    { name: "Spectre", attribute: "agility", complexity: "medium", image: "fonts/spectra.svg", href: "#" },
    { name: "Outworld Destroyer", attribute: "intelligence", complexity: "medium", image: "images/outworld-destroyer.png", href: "#" },
    { name: "Puck", attribute: "intelligence", complexity: "medium", image: "images/puck.png", href: "#" },
    { name: "Pugna", attribute: "intelligence", complexity: "medium", image: "images/pugna.png", href: "#" },
    { name: "Queen of Pain", attribute: "intelligence", complexity: "medium", image: "images/queen-of-pain.png", href: "#" },
    { name: "Rubick", attribute: "intelligence", complexity: "high", image: "images/rubick.png", href: "#" },
    { name: "Shadow Demon", attribute: "intelligence", complexity: "medium", image: "images/shadow-demon.png", href: "#" },
    { name: "Snapfire", attribute: "strength", complexity: "medium", image: "images/snapfire.png", href: "#" },
    { name: "Spirit Breaker", attribute: "strength", complexity: "low", image: "images/spirit-breaker.png", href: "#" },
    { name: "Sven", attribute: "strength", complexity: "low", image: "images/sven.png", href: "#" },
    { name: "Tidehunter", attribute: "strength", complexity: "medium", image: "images/tidehunter.png", href: "#" },
    { name: "Timbersaw", attribute: "strength", complexity: "medium", image: "images/timbersaw.png", href: "#" },
    { name: "Tiny", attribute: "strength", complexity: "medium", image: "images/tiny.png", href: "#" },
    { name: "Templar Assassin", attribute: "agility", complexity: "medium", image: "fonts/ta.svg", href: "#" },
    { name: "Terrorblade", attribute: "agility", complexity: "medium", image: "fonts/tb.svg", href: "#" },
    { name: "Troll Warlord", attribute: "agility", complexity: "medium", image: "fonts/trol_warlord.svg", href: "#" },
    { name: "Ursa", attribute: "agility", complexity: "low", image: "fonts/ursa.svg", href: "#" },
    { name: "Vengeful Spirit", attribute: "agility", complexity: "medium", image: "fonts/venga.svg", href: "#" },
    { name: "Venomancer", attribute: "agility", complexity: "medium", image: "fonts/venomaser.svg", href: "#" },
    { name: "Shadow Shaman", attribute: "intelligence", complexity: "low", image: "images/shadow-shaman.png", href: "#" },
    { name: "Silencer", attribute: "intelligence", complexity: "medium", image: "images/silencer.png", href: "#" },
    { name: "Skywrath Mage", attribute: "intelligence", complexity: "medium", image: "images/skywrath-mage.png", href: "#" },
    { name: "Storm Spirit", attribute: "intelligence", complexity: "medium", image: "images/storm-spirit.png", href: "#" },
    { name: "Techies", attribute: "intelligence", complexity: "high", image: "images/techies.png", href: "#" },
    { name: "Tinker", attribute: "intelligence", complexity: "medium", image: "images/tinker.png", href: "#" },
    { name: "Treant Protector", attribute: "strength", complexity: "medium", image: "images/treant-protector.png", href: "#" },
    { name: "Tusk", attribute: "strength", complexity: "medium", image: "images/tusk.png", href: "#" },
    { name: "Underlord", attribute: "strength", complexity: "medium", image: "images/underlord.png", href: "#" },
    { name: "Undying", attribute: "strength", complexity: "medium", image: "images/undying.png", href: "#" },
    { name: "Wraith King", attribute: "strength", complexity: "low", image: "images/wraith-king.png", href: "#" },
    { name: "Viper", attribute: "agility", complexity: "medium", image: "fonts/viper.svg", href: "#" },
    { name: "Weaver", attribute: "agility", complexity: "medium", image: "fonts/weever.svg", href: "#" },
    { name: "Visage", attribute: "intelligence", complexity: "high", image: "images/visage.png", href: "#" },
    { name: "Void Spirit", attribute: "intelligence", complexity: "medium", image: "images/void-spirit.png", href: "#" },
    { name: "Warlock", attribute: "intelligence", complexity: "medium", image: "images/warlock.png", href: "#" },
    { name: "Windranger", attribute: "intelligence", complexity: "medium", image: "images/windranger.png", href: "#" },
    { name: "Winter Wyvern", attribute: "intelligence", complexity: "medium", image: "images/winter-wyvern.png", href: "#" },
    { name: "Witch Doctor", attribute: "intelligence", complexity: "medium", image: "images/witch-doctor.png", href: "#" },

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
