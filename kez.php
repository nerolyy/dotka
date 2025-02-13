<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/herous.css">
    <link rel="stylesheet" href="css/main_manu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:" rel="stylesheet">

    <style>
    body {
        font-family: 'Montserrat';font-size: 22px;
    }
    </style>
    <title></title>
</head>
<body style="background-image: url('fonts/greyfade.jpg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
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
                                        <a href="login.php" class="login_btn">Login</a>
                                        <a href="auth.php" class="">Sign-up</a>
                                        </div>'
                        ?>
            </ul>
        </div>
    </header>
    <main>
        <div class="all-hero-inf">
            <div class="hero-continer">
                <div class="hero-vido_container">
                    <div class="antimage video">
                    <video class="_22nJ5nsfHDS2jEscPEne0-" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/doom_bringer.png" autoplay="" preload="auto" loop="" playsinline=""><source type="video/mp4; codecs=&quot;hvc1&quot;" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/doom_bringer.mov"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/doom_bringer.webm?undefined">
                    <img src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/doom_bringer.png"></video>
                    </div>
                </div>
                <div class="text-hero-container">
                    <div class="atribut-row">
                        <img src="img\hero_strength.png" class="atribut-png">
                        <div class="atribut_name">Сила</div>
                    </div>
                    <div class="h1-tekst">Doom</div>
                    <div class="deskription-hero-text">Запрещает одному врагу применять способности и восстанавливать здоровье</div>
                    <div class="b-deskription-hero-text-container">
                        <div class="hero-story">
                            <div class="h-s-text f-b">Doom забирает жизни своих врагов разными способами.<span class="f-b">Он пожирает существ, чтобы перенять их способности, </span>  
                            <span class="f-b">а также способен наслать на врага адское пламя, не дающее тому использовать способности и предметы.</span>
                        </div>
                        <div>
                            <div class="atack-type">Тип атаки</div>
                            <div class="atack-type-row">
                                <img class="atack-type-img" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
                            <div class="atack-range">Ближний бой</div>
                        </div>
                    </div>
                    <div>
                        <div class="complexity">Сложность</div>
                        <div class="complexity-row">
                            <div class="romb w-r"></div>
                            <div class="romb w-r"></div>
                            <div class="romb"></div>
                        </div>
                    </div> 
        </div>
    </main> 
</body>