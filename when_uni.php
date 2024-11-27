<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="css/promo.css">
    <link rel="stylesheet" href="css/last.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';font-size: 22px;
    }
    </style>
    <title></title>
</head>
<body style="background-image: url('fonts/mainfont.svg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
        <header>
            <div class="top_row">
                <div class="container">
                    <div class="col-50">
                        <ul class="left_side">
                            <div class="menu_item">
                                <div class="dota_logo_menu">
                                    <a href="index.php" class="dota_logo">
                                        <img src="img/dotalogo.svg" alt="" class="dota_logo_img">
                                    </a>
                                </div>
                            </div>
                            <div class="menu_item">
                                <details class="menu_menu_more">
                                <summary>
                                    <img src="img/more.svg" alt="" class="menu_menu_img">
                                </summary>
                                <div class="more_line">
                                    <ul class="menu_more">
                                        <div class="item">
                                            <a href="#" class="your_stats">
                                                личная статистика
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#" class="meta_herous">
                                                meta herous
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#" class="top_players">
                                                лучшие игроки
                                            </a>
                                        </div>
                                    </ul>
                                </div>
                                </details>
                            </div>
                        </ul>
                    </div>
                    <div class="col-50">
                        <ul class="right_side">
                            <div class="menu_item">
                                <a href="#" class="mail_href">
                                    <img src="img/mail.svg" alt="" class="mail_img">
                                </a>
                            </div>
                            <div class="menu_item">
                                <a href="#" class="kolokol_href">
                                    <img id="image" src="img/kolokol.svg" onClick="imgsrc();" class="kolokol_img">
                                </a>
                            </div>
                            <div class="menu_item">
                                <a href="#" class="setings_href">
                                    <img src="img/Layer 10.svg" alt="" class="setings_img">
                                </a>
                            </div>
                            <div class="menu_item">
                                <a href="#" class="lk">
                                    <p>
                                        <?php isset($_COOKIE['login'])
                                        ?>
                                    </p>
                                </a>
                            </div>


                            <?php
                                if(isset($_COOKIE['login']))
                                    echo '<div class="menu_item"><a href="#" class="lk">
                                    <a href="user_main.php" class="btn">Личный кабинет</a>
                                </div>';
                                else
                                    echo '<div class="menu_item">
                                    <a href="login.php" class="btn">Login</a>
                                    </div>'
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <promo class="herous">
        <div class="herous_contauner">
            <div class="atribut_search">
                <h1 class="heroous_search">Dota-heroes</h1>
                <div class="atribut_grey_row">
                    <a href="when_sila.php" class="sila">
                        <img class="atribut_img" src="fonts/sila_atribut.svg">
                    </a>
                    <a href="when_lovk.php" class="lovkost">
                        <img class="atribut_img" src="fonts/lovkost_atribut.svg">
                    </a>
                    <a href="when_int.php" class="int">
                        <img class="atribut_img" src="fonts/int_atribut.svg">
                    </a>
                    <a href="when_uni.php" class="universal">
                        <img class="atribut_img" src="fonts/uni_atribut.svg">
                    </a>
                </div>
            </div>
            <div class="category_box_row">
                    <a href="#" class="category_box">
                        <img src="fonts/Alhimik.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Alchemist</h1>
                    </a>
                    <a href="Axe.html" class="category_box">
                        <img src="fonts/Axe.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Axe</h1>
                    </a>
                    <a href="#" class="category_box">
                        <img src="fonts/Bristle.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bristleback</h1>
                    </a>
                    <a href="#" class="category_box">
                        <img src="fonts/centaur.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Centaur Warrunner</h1>
                    </a>
                    <a href="#" class="category_box">
                        <img src="fonts/chaos knight.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Chaos Knight</h1>
                    </a>
                    <a href="#" class="category_box">
                        <img src="fonts/Dawnbreaker.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Dawnbreaker</h1>
                    </a>
            </div>
            <div class="category_box_row">
                    <a class="category_box">
                        <img src="fonts/Doom.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Doom</h1>
                    </a>
                    <a href=""class="category_box">
                        <img src="fonts/Dragon knight.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Dragon Knight</h1>
                    </a>
                    <a href='earth_spirit.html' class="category_box">
                        <img src="fonts/earth_spirit.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earth Spirit</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/earth.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earthshaker</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/Elder_titan.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Elder Titan</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/Huskar.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Huskar</h1>
                    </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/Kunka.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Kunkka</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/legion_comander.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Legion Commander</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/life_stil.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Lifestealer</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Mars.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Mars</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Night_stalker.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Night Stalker</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/ogre_magi.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Ogre Magi</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/omni.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Omniknight</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/primal.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Primal Beast</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/pudge.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Pudge</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/slardar.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Slardar</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Spirit_breaker.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Spirit Breaker</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Sven.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sven</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/Tidehunter.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tidehunter</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tiny</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Treant.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Treant Protector</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Tusk.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tusk</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Underlord.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Underlord</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/undie.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Undying</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/wrath king.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Wraith King</h1>
                </a>
            </div>
        </div>
    </promo>
</body>
</html>