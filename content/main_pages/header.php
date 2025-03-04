<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/media/desktop_media.css">
    <link rel="stylesheet" href="css/media/Sdesktop_media.css">
    <script src="scripts/profile_img.js" href="scripts/profile_img.js"></script>
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
</head>
<body>
<header>
    <div class="header_container">
        <ul class="header_items">
            <div class="menu_header_item">
                <a class="dota_logo_header">
                    <img src="img/icons8-dota-2 1.svg" class="dota_logo_header_img">
                </a>
            </div>
            <a href="index.php?page=home" class="menu_header_item text_item">Home</a>
            <a href="index.php?page=herous" class="menu_header_item text_item">Heroes</a>
            <a href="index.php?page=store" class="menu_header_item text_item">Store</a>
            <a href="index.php?page=cyber"class="menu_header_item text_item">Watch</a>
            <a class="menu_header_item text_item">Learn</a>
            <a class="menu_header_item text_item">Arcade</a>
            <div class="menu_header_item mrg-l-669">
                    <a href="#" class="lk">
                        <p><?php isset($_COOKIE['login'])?></p>
                    </a>
                </div>
                    <?php
                                if(isset($_COOKIE['login']))
                                    echo 
                                    '<ul class="lk_header">
                                        <div for="profile-image-input" class="lk_img_profile">
                                            <img src="" alt="" class="profile-img">
                                            <input type="file" id="profile-image-input" accept="image/*" class="hidden">
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
                                    <a href="content/login.php" class="login_btn">Login</a>
                                    <a href="content/auth.php" class="">Sign-up</a>
                                    </div>'
                    ?>
        </ul>
    </div>
    </header>
    <main>
