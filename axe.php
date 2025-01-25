<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="stylesheet" href="css/herous.css">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:" rel="stylesheet">
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">

    <title></title> 
</head>
<body  style="background-image: url('fonts/greyfade.jpg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
<header style="font-family: 'inherit'">
    <div class="header_container">
        <ul class="header_items">
            <div class="menu_header_item">
                <a href="index.php" class="dota_logo_header">
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
<main style="font-family: 'Montserrat';font-size: 22px;
    }">
    
    <div class="all-hero-inf">
        <div class="hero-continer">
            <div class="hero-vido_container">
                <div class="antimage video">
                <video class="_22nJ5nsfHDS2jEscPEne0-" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.png" autoplay="" preload="auto" loop="" playsinline=""><source type="video/mp4; codecs=&quot;hvc1&quot;" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.mov"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.webm?undefined">
                <img src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.png"></video>
                </div>
            </div>
            <div class="text-hero-container">
                <div class="atribut-row">
                    <img src="img\hero_strength.png" class="atribut-png">
                    <div class="atribut_name">Сила</div>
                </div>
                <div class="h1-tekst">Axe</div>
                <div class="deskription-hero-text">Провоцирует врагов, заставляя их атаковать его</div>
                <div class="b-deskription-hero-text-container">
                    <div class="hero-story">
                        <div class="h-s-text f-b">Axe рубит одного врага за другим, неизменно ступая впереди своей команды. <span class="f-b">  Он вынуждает противников вступить в бой, а затем отвечает на их удары смертоносными взмахами топора. </span>  
                        <span class="f-b">Нещадно круша ослабленных врагов, он всегда несётся вперёд.</span>
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
                        <div class="romb"></div>
                        <div class="romb"></div>
                    </div>
                </div>
                
    </div>
</main> 
</body>