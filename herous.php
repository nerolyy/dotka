<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/promo_herous.css">
    <script src="scripts/drop_down.js"></script>
    <script src="scripts/drop_down_type.js"></script>
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
    <div class="promo_container">
        <ul class="filter_container">
            <div class="attribut_sort">
                <div class="dropdown">
                    <button class="dropdown-button" id="dropdownButton">Sort by<br>Attributes<span class="arrow">&#9660;</span></button>
                    <div class="dropdown-content" id="dropdownContent">
                        <a class="atribut_btn" data-filter="STRENGTH">
                            <ul class="filter_con">
                                <img src="img/Level dot.svg" class="atribut_name_img">
                                <div class="text_name_atribut_filter">STRENGTH</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="AGILITY">
                            <ul class="filter_con">
                                <img src="img/Level dot (1).svg" class="atribut_name_img">
                                <div class="text_name_atribut_filter">AGILITY</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="INTELIGENCE">
                            <ul class="filter_con">
                                <img src="img/Level dot (2).svg" class="atribut_name_img">
                                <div class="text_name_atribut_filter">Intelligence</div>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <div class="type_of_herous">
                <div class="dropdown_type dropdown">
                    <button class="dropdown-button" id="dropdownButton_type">Sort by<br>Type<span class="arrow">&#9660;</span></button>
                    <div class="dropdown-content" id="dropdownContent_type">
                        <a class="atribut_btn" data-filter="CARRY">
                            <ul class="filter_con">
                                <div class="text_name_atribut_filter">Carry</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="MID">
                            <ul class="filter_con">
                            <div class="text_name_atribut_filter">Mid</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="HARD_CARRY">
                            <ul class="filter_con">
                                <div class="text_name_atribut_filter">Hard Carry</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="HARD_SUPPORT">
                            <ul class="filter_con">
                                <div class="text_name_atribut_filter">Hard Support</div>
                            </ul>
                        </a>
                        <a class="atribut_btn" data-filter="FULL_SUPPORT">
                            <ul class="filter_con">
                                <div class="text_name_atribut_filter">Full Support</div>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </ul>
        <ul class="herous_agility_all">
            <div class="col-33 sila pokaz typedif CARRY MID HC HS FS">
                <ul class="name_of_atribut">
                    <div class="create-line"></div>
                    <img src="img/Level dot.svg" class="atribut_name_img">
                    <div class="text_name_atribut">STRENGTH</div>
                    <div class="create-line"></div>
                </ul>
                <div class="container_of_herous">
                    <a href="#" class="hero_card FS HS HC pokaz typedif sila">
                        <img src="img/Hero card (1).svg" class="hero_prev_img">
                        <div class="hero_card_name medium_name">Abaddon</div>
                    </a>
                    <a href="alchemist.php" class="hero_card CARRY HS pokaz typedif sila">
                        <img src="img/Hero card (2).svg" class="hero_prev_img">
                        <div class="hero_card_name medium_name">Alchemist</div>
                    </a>
                    <a href="axe.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (3).svg" class="hero_prev_img">
                        <div class="hero_card_name small_name">Axe</div>
                    </a>
                    <a href="#" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (4).svg" class="hero_prev_img">
                        <div class="hero_card_name bg_name">Beastmaster</div>
                    </a>
                    <a href="#" class="hero_card HC MID typedif sila pokaz">
                        <img src="img/Hero card (5).svg" class="hero_prev_img">
                        <div class="hero_card_name bg_name">Brewmaster</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC FS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name mbg_name">Bristleback</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (7).svg" class="hero_prev_img">
                        <div class="hero_card_name">Centaur<br>Warrunner</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC CARRY typedif sila pokaz">
                        <img src="img/Hero card (8).svg" class="hero_prev_img">
                        <div class="hero_card_name">Chaos<br>Knight</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS MID typedif sila pokaz">
                        <img src="img/Hero card (9).svg" class="hero_prev_img">
                        <div class="hero_card_name">Clockwerk</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (10).svg" class="hero_prev_img">
                        <div class="hero_card_name">Dawnbreaker</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (11).svg" class="hero_prev_img">
                        <div class="hero_card_name small_name">Doom</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC CARRY typedif sila pokaz">
                        <img src="img/Hero card (12).svg" class="hero_prev_img">
                        <div class="hero_card_name">Dragon<br>Knight</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Earth Spirit</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Earthshaker</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Elder Titan</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Huskar</div>
                    </a>
                    <a href="bristleback.php" class="hero_card FS HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Io</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Kunkka</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC MID typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Legion<br>Commander</div>
                    </a>
                    <a href="bristleback.php" class="hero_card CARRY typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Lifestealer</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Lycan</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID CARRY HC HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Magnus</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS CARRY typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Marci</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Mars</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC MID typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Night Stalker</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Omniknight</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Phoenix</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS MID typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Pudge</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Sand King</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Slardar</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS MID typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Snapfire</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Spirit<br>Breaker</div>
                    </a>
                    <a href="bristleback.php" class="hero_card CARRY FS typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Sven</div>
                    </a>
                    <a href="bristleback.php" class="hero_card HS HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Tidehunter</div>
                    </a>
                    <a href="bristleback.php" class="hero_card MID HC typedif sila pokaz">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Timbersaw</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Tiny</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Treant<br>Protector</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Tusk</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Underlord</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Undying</div>
                    </a>
                    <a href="bristleback.php" class="hero_card typedif sila">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Wraith King</div>
                    </a>
                </div>
            </div>
            <div class="col-33 pokaz typedif lovk CARRY MID HC HS FS">
                <ul class="name_of_atribut">
                    <div class="create-line"></div>
                    <img src="img/Level dot (1).svg" class="atribut_name_img">
                    <div class="text_name_atribut">AGILITY</div>
                    <div class="create-line"></div>
                </ul>
            </div>
            <div class="col-33 pokaz typedif int CARRY MID HC HS FS">
                <ul class="name_of_atribut">
                    <div class="create-line"></div>
                    <img src="img/Level dot (2).svg" class="atribut_name_img">
                    <div class="text_name_atribut">Intelligence</div>
                    <div class="create-line"></div>
                </ul>
            </div>
        </ul>
    </div>
</promo>
</body>
</html>