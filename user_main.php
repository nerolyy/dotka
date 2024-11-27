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
                                <a href="#"></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <promo>
        <div class="promo_container">
            <ul class="promo_menu">
                <div class="promo_menu_item"></div>
                <div class="promo_menu_item"></div>
                <div class="promo_menu_item"></div>
            </ul>
            <ul class="promo_filter">
                <div class="promo_filter_item">
                    <div class="atribut_black_row">
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
            </ul>
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