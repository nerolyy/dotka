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
        <div class="sidebar-item active">ALL</div>
        <div class="sidebar-group">THE INTERNATIONAL 2016</div>
        <div class="sidebar-group">WORLD</div>
        <div class="sidebar-group">OTHER</div>
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
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
            <option value="Io">Io</option>
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