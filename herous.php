<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/promo_herous.css">
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
            <a class="menu_header_item text_item active">Herous</a>
            <a href="store.php" class="menu_header_item text_item">Store</a>
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
    <div class="heroes-container">
        <div class="heroes-top">
            <div class="sort-block">
              Sort by
                <select class="attribute-filter-select">
                    <option value="All">Attributes</option>
                    <option value="STRENGTH">STRENGTH</option>
                    <option value="AGILITY">AGILITY</option>
                    <option value="INTELIGENCE">INTELIGENCE</option>
                </select>
             </div>
            <div class="type-block">
                Type
               <select class="type-filter-select">
                    <option value="All">All</option>
                    <option value="CARRY">Carry</option>
                    <option value="MID">Mid</option>
                    <option value="HARD_CARRY">Hard Carry</option>
                   <option value="HARD_SUPPORT">Hard Support</option>
                    <option value="FULL_SUPPORT">Full Support</option>
                </select>
            </div>
            <div class="complexity-block">
                Complexity
               <select class="complexity-filter-select">
                    <option value="All">All</option>
                    <option value="1">1</option>
                   <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="search-block">
               <input type="text" placeholder="Search hero" class="search-input">
                <img src="img/search.svg" alt="Search" class="search-icon">
            </div>
        </div>
        <div class="heroes-grid"></div>
    </div>
    <script src="scripts/hero_filter.js"></script>
</promo>
</body>
</html>