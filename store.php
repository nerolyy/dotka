<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/store.css">
    <script src="scripts/filter.js"></script>
    <script src="scripts/type_filter.js"></script>
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" href="css/all_hero_page.css">
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <title>Main Page</title>
</head>
<body style="background-image: url('fonts/Dota 2 - redesign - main.svg');
background-repeat: no-repeat;
background-color: #212121;
display: block;
position: sticky;
z-index:10">
<header>
    <div class="header_container">
        <ul class="header_items">
            <div class="menu_header_item">
                <a href="index.php" class="dota_logo_header">
                    <img src="img/icons8-dota-2 1.svg" class="dota_logo_header_img">
                </a>
            </div>
            <a href="index.php" class="menu_header_item text_item">Home</a>
            <a href="herous.php" class="menu_header_item text_item">Herous</a>
            <a class="menu_header_item text_item active">Store</a>
            <a class="menu_header_item text_item">Watch</a>
            <a class="menu_header_item text_item">Learn</a>
            <a class="menu_header_item text_item">Arcade</a>
            <div class="menu_header_item mrg-l-669">
                    <a href="#" class="lk">
                        <p><?php isset($_COOKIE['login'])?></p>
                    </a>
                </div>
                    <?php
                                if(isset($_COOKIE['login']))
                                    echo '
                                <ul class="lk_header">
                                    <div class="lk_img_profile">
                                        <img src="" alt="" class="">
                                    </div>
                                    <div class="lk_name_profile"></div>
                                </ul>
                                <div class="menu_header_item small_img">
                                    <a class="setting_header">
                                        <img src="img/bi_gear-fill.svg" class="settings_header_img">
                                    </a>
                                </div>
                                <a class="menu_header_item small_img">
                                    <img src="img/heroicons-solid_logout.svg" class="logoout_header_img">
                                </a>';
                                else
                                    echo '<div class="menu_header_item text_item">
                                    <a href="login.php" class="login_btn">Login</a>
                                    <a href="auth.php" class="">Sign-up</a>
                                    </div>'
                    ?>
        </ul>
    </div>
</header>
<promo>
<div class="collection-container">
    <div class="collection-sidebar">
        <div class="sidebar-header">RECENT</div>
        <div class="sidebar-item active" data-filter="all">ALL</div>
        <div class="sidebar-group" data-filter="Frostivus 2023 Treasure Chest">Frostivus 2023 Treasure Chest</div>
        <div class="sidebar-group" data-filter="August 2023: Collector's Cache">August 2023: Collector's Cache</div>
        <div class="sidebar-group" data-filter="10th Anniversary: ​​Treasure Trove">10th Anniversary: ​​Treasure Trove</div>
        <div class="sidebar-group" data-filter="Dead Reckoning Chest">Dead Reckoning Chest</div>
        <div class="sidebar-group" data-filter="Battle Pass 2022: Collector's Cache II">Battle Pass 2022: Collector's Cache II</div>
        <div class="sidebar-group" data-filter="Battle Pass 2022: Collector's Cache">Battle Pass 2022: Collector's Cache</div>
        <div class="sidebar-group" data-filter="Battle Pass 2022: Immortal Treasure II">Battle Pass 2022: Immortal Treasure II</div>
        <div class="sidebar-group" data-filter="Battle Pass 2022: Ageless Heirlooms">Battle Pass 2022: Ageless Heirlooms</div>
        <div class="sidebar-group" data-filter="Battle Pass 2022: Immortal Treasure I">Battle Pass 2022: Immortal Treasure I</div>
        <div class="sidebar-group" data-filter="Aghanim's Labyrinth 2021: Ageless Heirlooms">Aghanim's Labyrinth 2021: Ageless Heirlooms</div>
        <div class="sidebar-group" data-filter="Aganim's Labyrinth 2021: Continuum Collection">Aganim's Labyrinth 2021: Continuum Collection</div>
        <div class="sidebar-group" data-filter="Aghanim's Labyrinth 2021: Immortal Treasure">Aghanim's Labyrinth 2021: Immortal Treasure</div>
        <div class="sidebar-group" data-filter="Labyrinth of Aghanim 2021: Scenes from the Continuum Vault">Labyrinth of Aghanim 2021: Scenes from the Continuum Vault</div>
        <div class="sidebar-group" data-filter="Labyrinth of Aghanim 2021: Trust of the Benefactor">Labyrinth of Aghanim 2021: Trust of the Benefactor</div>
        <div class="sidebar-group" data-filter="Treasure of the Wordless Trek">Treasure of the Wordless Trek</div>
        <div class="sidebar-group" data-filter="Treasure of the Crimson Witness 2021">Treasure of the Crimson Witness 2021</div>
        <div class="sidebar-group" data-filter="Hostilities 2021: Collector's Cache">Hostilities 2021: Collector's Cache</div>
        <div class="sidebar-group" data-filter="Feud 2021: Immortal Treasure">Feud 2021: Immortal Treasure</div>
        <div class="sidebar-group" data-filter="Feud 2021: Rarities of the Benefactor">Feud 2021: Rarities of the Benefactor</div>
        <div class="sidebar-group" data-filter="Enmity 2021: Trust of the Benefactor">Enmity 2021: Trust of the Benefactor</div>
        <div class="sidebar-group" data-filter="Feud 2021: Thematic Treasure Trove">Feud 2021: Thematic Treasure Trove</div>
        <div class="sidebar-group" data-filter="Summer Treasure 2021">Summer Treasure 2021</div>
        <div class="sidebar-group" data-filter="Spring Treasure 2021">Spring Treasure 2021</div>
        <div class="sidebar-group" data-filter="international_2016">OTHER</div>
        <div class="sidebar-header">COLLECTION</div>
    </div>

    <div class="collection-main">
      <div class="collection-header">
        <div class="collection-filters">
            <div class="filter-label">FILTER:</div>
            <select class="filter-select">
              <option>None</option>
              <option>Audio</option>
              <option>Weapons</option>
              <option>Cosmetics</option>
              <option>Interface</option>
              <option>COURIERS & WARDS</option>
              <option>TREASURES & CHARMS</option>
            </select>
            <select class="hero-filter-select">
            <option value="All">All Heroes</option>
            <option value="Abaddon">Abaddon</option>
            <option value="Alchemist">Alchemist</option>
            <option value="Ancient Apparition">Ancient Apparition</option>
            <option value="Anti-Mage">Anti-Mage</option>
            <option value="Arc Warden">Arc Warden</option>
            <option value="Axe">Axe</option>
            <option value="Bane">Bane</option>
            <option value="Batrider">Batrider</option>
            <option value="Beastmaster">Beastmaster</option>
            <option value="Bloodseeker">Bloodseeker</option>
            <option value="Bounty Hunter">Bounty Hunter</option>
            <option value="Brewmaster">Brewmaster</option>
            <option value="Bristleback">Bristleback</option>
            <option value="Broodmother">Broodmother</option>
            <option value="Centaur Warrunner">Centaur Warrunner</option>
            <option value="Chaos Knight">Chaos Knight</option>
            <option value="Chen">Chen</option>
            <option value="Clinkz">Clinkz</option>
            <option value="Clockwerk">Clockwerk</option>
            <option value="Crystal Maiden">Crystal Maiden</option>
            <option value="Dark Seer">Dark Seer</option>
            <option value="Dark Willow">Dark Willow</option>
            <option value="Dawnbreaker">Dawnbreaker</option>
            <option value="Dazzle">Dazzle</option>
            <option value="Death Prophet">Death Prophet</option>
            <option value="Disruptor">Disruptor</option>
            <option value="Doom">Doom</option>
            <option value="Dragon Knight">Dragon Knight</option>
            <option value="Drow Ranger">Drow Ranger</option>
            <option value="Earth Spirit">Earth Spirit</option>
            <option value="Earthshaker">Earthshaker</option>
            <option value="Elder Titan">Elder Titan</option>
            <option value="Ember Spirit">Ember Spirit</option>
            <option value="Enchantress">Enchantress</option>
            <option value="Enigma">Enigma</option>
            <option value="Faceless Void">Faceless Void</option>
            <option value="Grimstroke">Grimstroke</option>
            <option value="Gyrocopter">Gyrocopter</option>
            <option value="Hoodwink">Hoodwink</option>
            <option value="Huskar">Huskar</option>
            <option value="Invoker">Invoker</option>
            <option value="Jakiro">Jakiro</option>
            <option value="Juggernaut">Juggernaut</option>
            <option value="Keeper of the Light">Keeper of the Light</option>
            <option value="Kunkka">Kunkka</option>
            <option value="Legion Commander">Legion Commander</option>
            <option value="Leshrac">Leshrac</option>
            <option value="Lich">Lich</option>
            <option value="Lifestealer">Lifestealer</option>
            <option value="Lina">Lina</option>
            <option value="Lion">Lion</option>
            <option value="Lone Druid">Lone Druid</option>
            <option value="Luna">Luna</option>
            <option value="Lycan">Lycan</option>
            <option value="Magnus">Magnus</option>
            <option value="Marci">Marci</option>
            <option value="Mars">Mars</option>
            <option value="Medusa">Medusa</option>
            <option value="Meepo">Meepo</option>
            <option value="Mirana">Mirana</option>
            <option value="Monkey King">Monkey King</option>
            <option value="Morphling">Morphling</option>
            <option value="Muerta">Muerta</option>
            <option value="Naga Siren">Naga Siren</option>
            <option value="Nature's Prophet">Nature's Prophet</option>
            <option value="Necrophos">Necrophos</option>
            <option value="Night Stalker">Night Stalker</option>
            <option value="Nyx Assassin">Nyx Assassin</option>
            <option value="Ogre Magi">Ogre Magi</option>
            <option value="Omniknight">Omniknight</option>
            <option value="Oracle">Oracle</option>
            <option value="Outworld Destroyer">Outworld Destroyer</option>
            <option value="Pangolier">Pangolier</option>
            <option value="Phantom Assassin">Phantom Assassin</option>
            <option value="Phantom Lancer">Phantom Lancer</option>
            <option value="Phoenix">Phoenix</option>
            <option value="Primal Beast">Primal Beast</option>
            <option value="Puck">Puck</option>
            <option value="Pudge">Pudge</option>
            <option value="Pugna">Pugna</option>
            <option value="Queen of Pain">Queen of Pain</option>
            <option value="Razor">Razor</option>
            <option value="Riki">Riki</option>
            <option value="Ringmaster">Ringmaster</option>
            <option value="Rubick">Rubick</option>
            <option value="Sand King">Sand King</option>
            <option value="Shadow Demon">Shadow Demon</option>
            <option value="Shadow Fiend">Shadow Fiend</option>
            <option value="Shadow Shaman">Shadow Shaman</option>
            <option value="Silencer">Silencer</option>
            <option value="Skywrath Mage">Skywrath Mage</option>
            <option value="Slardar">Slardar</option>
            <option value="Slark">Slark</option>
            <option value="Snapfire">Snapfire</option>
            <option value="Sniper">Sniper</option>
            <option value="Spectre">Spectre</option>
            <option value="Spirit Breaker">Spirit Breaker</option>
            <option value="Storm Spirit">Storm Spirit</option>
            <option value="Sven">Sven</option>
            <option value="Techies">Techies</option>
            <option value="Templar Assassin">Templar Assassin</option>
            <option value="Terrorblade">Terrorblade</option>
            <option value="Tidehunter">Tidehunter</option>
            <option value="Timbersaw">Timbersaw</option>
            <option value="Tinker">Tinker</option>
            <option value="Tiny">Tiny</option>
            <option value="Treant Protector">Treant Protector</option>
            <option value="Troll Warlord">Troll Warlord</option>
            <option value="Tusk">Tusk</option>
            <option value="Underlord">Underlord</option>
            <option value="Undying">Undying</option>
            <option value="Ursa">Ursa</option>
            <option value="Vengeful Spirit">Vengeful Spirit</option>
            <option value="Venomancer">Venomancer</option>
            <option value="Viper">Viper</option>
            <option value="Visage">Visage</option>
            <option value="Void Spirit">Void Spirit</option>
            <option value="Warlock">Warlock</option>
            <option value="Weaver">Weaver</option>
            <option value="Windranger">Windranger</option>
            <option value="Winter Wyvern">Winter Wyvern</option>
            <option value="Witch Doctor">Witch Doctor</option>
            <option value="Wraith King">Wraith King</option>
            <option value="Zeus">Zeus</option>
            </select>
        </div>
        <div class="collection-sort">
            <div class="sort-type">
                <input type="checkbox" id="groupByType" class="group-checkbox"><label for="groupByType">GROUP BY TYPE</label>
            </div>
            <div class="sort-by">
                SORT BY:
                <select class="sort-select">
                  <option>Rarity</option>
                  <option>Name</option>
                  <option>Date Added</option>
                </select>
            </div>
        </div>
      </div>
      <div class="collection-grid">
          </div>
    </div>
  </div>
  <script src="scripts/store_filter.js"></script>
</promo>
</body>
</html>