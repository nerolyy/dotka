<!DOCTYPE html>
<?php
 ini_set("session.cookie_secure", 1);
 session_start();
?>
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
    <title>Dota 2 Statistics</title>
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
                                <summary class="summary_img">
                                    <img src="img/more.svg" alt="" class="menu_menu_img">
                                </summary>
                                <div class="more_line">
                                    <ul class="menu_more">
                                        <div class="item">
                                            <a href="your_stats.php" class="your_stats">
                                                <span class="vibor">личная статистика</span> 
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="meta_herous.php" class="meta_herous">
                                                <span class="vibor">meta herous</span>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="best_players.php" class="top_players">
                                                <span class="vibor">лучшие игроки</span>
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
                    <a href="antimage.php" class="category_box">
                        <img src="fonts/Anti-mage.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Anti-mage</h1>
                    </a>
                    <a href="arc_warden.php" class="category_box">
                        <img src="fonts/Arc.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Arc Warden</h1>
                    </a>
                    <a href="bloodseeker.php" class="category_box">
                        <img src="fonts/bloodsecer.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bloodseker</h1>
                    </a>
                    <a href="bounty_hunter.php" class="category_box">
                        <img src="fonts/Bounty_hunter.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bounty Hunter</h1>
                    </a>
                    <a href="clinkz.php" class="category_box">
                        <img src="fonts/clinz.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Clinkz</h1>
                    </a>
                    <a href="drow_ranger.php" class="category_box">
                        <img src="fonts/drow ranger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Drow Ranger</h1>
                    </a>
            </div>
            <div class="category_box_row">
                    <a href = "earthshaker.php"class="category_box">
                        <img src="fonts/earth.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earthshaker</h1>
                    </a>
                    <a href = "juggernaut.php"class="category_box">
                        <img src="fonts/juger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Juggernaut</h1>
                    </a>
                    <a href = "mirana.php" class="category_box">
                        <img src="fonts/mirana.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Mirana</h1>
                    </a>
                    <a href = "morphling.php" class="category_box">
                        <img src="fonts/morph.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Morphling</h1>
                    </a>
                    <a  href = "shadow_fiend.php" class="category_box">
                        <img src="fonts/sf.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Shadow Fiend</h1>
                    </a>
                    <a href = "phantom_lancer.php" class="category_box">
                        <img src="fonts/pl.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Phantom Lancer</h1>
                    </a>
            </div>
            <div class="category_box_row">
                <a href = "puck.php" class="category_box">
                    <img src="fonts/Puck.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Puck</h1>
                </a>
                <a href = "pudge.php" class="category_box">
                    <img src="fonts/pudge.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Pudge</h1>
                </a>
                <a href = "razor.php" class="category_box">
                    <img src="fonts/raz.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Razor</h1>
                </a>
                <a href = "sand_king.php" class="category_box">
                    <img src="fonts/Sand king.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sand King</h1>
                </a>
                <a href = "storm_spirit.php" class="category_box">
                    <img src="fonts/Storm Spirit.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Storm Spirit</h1>
                </a>
                <a href = "sven.php" class="category_box">
                    <img src="fonts/Sven.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sven</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a href = "tiny.php"class="category_box">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tiny</h1>
                </a>
                <a href = "venga.php" class="category_box">
                    <img src="fonts/venga.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Vengeful Spirit</h1>
                </a>
                <a href = "windranger.php" class="category_box">
                    <img src="fonts/windranger.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Windranger</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Zeus.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Zeus</h1>
                </a>
                <a href = "Kunka.php" class="category_box">
                    <img src="fonts/Kunka.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Kunkka</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Lina.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Lina</h1>
                </a>
            </div>
        </div>
    </promo>
    <last>
        <div class="bottom_row">
            <div class="container">
                <ul class="logo_bar">
                    <div class="first_img">
                        <img src="img/valve_logo 1.svg" class="Valve_logo">
                    </div>
                    <div class="second_img">
                        <img src="img/dotalogo.svg" class="dota2_logo">
                    </div>
                </ul>
            </div>
        </div>
    </last>
</body>
</html>