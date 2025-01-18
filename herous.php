<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all_hero_page.css">
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <title>Main Page</title>
</head>
<body style="background-image: url('fonts/Dota 2 - redesign - main.svg');
background-repeat: no-repeat;
background-color: #212121;
display: block;
z-index:10">
<header>
    <div class="header_container">
        <ul class="header_items">
            <div class="menu_header_item">
                <a class="dota_logo_header">
                    <img src="img/icons8-dota-2 1.svg" class="dota_logo_header_img">
                </a>
            </div>
            <a href="index.php" class="menu_header_item text_item">Home</a>
            <a class="menu_header_item text_item active">Herous</a>
            <a class="menu_header_item text_item">Store</a>
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
        <ul class="herous_agility_all">
            <div class="col-33">
                <ul class="name_of_atribut">
                    <div class="create-line"></div>
                    <img src="img/Level dot.svg" class="atribut_name_img">
                    <div class="text_name_atribut">STRENGTH</div>
                    <div class="create-line"></div>
                </ul>
                <div class="container_of_herous">
                    <a href="#" class="hero_card">
                        <img src="img/Hero card (1).svg" class="hero_prev_img">
                        <div class="hero_card_name">Abaddon</div>
                    </a>
                    <a href="alchemist.php" class="hero_card">
                        <img src="img/Hero card (2).svg" class="hero_prev_img">
                        <div class="hero_card_name">Alchemist</div>
                    </a>
                    <a href="axe.php" class="hero_card">
                        <img src="img/Hero card (3).svg" class="hero_prev_img">
                        <div class="hero_card_name">Axe</div>
                    </a>
                    <a href="#" class="hero_card">
                        <img src="img/Hero card (4).svg" class="hero_prev_img">
                        <div class="hero_card_name">Beastmaster</div>
                    </a>
                    <a href="#" class="hero_card">
                        <img src="img/Hero card (5).svg" class="hero_prev_img">
                        <div class="hero_card_name">Brewmaster</div>
                    </a>
                    <a href="bristleback.php" class="hero_card">
                        <img src="img/Hero card (6).svg" class="hero_prev_img">
                        <div class="hero_card_name">Bristleback</div>
                    </a>
                </div>
            </div>
            <div class="col-33"></div>
            <div class="col-33"></div>
        </ul>
    </div>
</promo>
</body>
</html>