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
      <div class="sidebar-group">
        THE INTERNATIONAL 2016
      </div>
      <div class="sidebar-group">
        TREASURES & CHARMS
      </div>
      <div class="sidebar-group">
        HEROES
      </div>
        <div class="sidebar-group">
        COURIERS & WARDS
      </div>
      <div class="sidebar-group">
        AUDIO
      </div>
        <div class="sidebar-group">
          INTERFACE
        </div>
          <div class="sidebar-group">
        WORLD
      </div>
        <div class="sidebar-group">
        OTHER
      </div>
      <div class="sidebar-header">COLLECTION</div>
    </div>

    <div class="collection-main">
      <div class="collection-header">
        <div class="collection-filters">
            <div class="filter-label">FILTER:</div>
            <select class="filter-select">
              <option>None</option>
              <option>Heroes</option>
              <option>Weapons</option>
              <option>Cosmetics</option>
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