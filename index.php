<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

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
            <a class="menu_header_item text_item active">Home</a>
            <a href="herous.php" class="menu_header_item text_item">Herous</a>
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
        <div class="main_menu_card">
            <div class="main_menu_card_container">
            </div>
        </div>
    </div>
</promo>
</body>
</html>