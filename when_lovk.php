<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-image: url('fonts/mainfont.svg');
background-repeat: no-repeat;
background-color: #212121;
z-index:10">
<header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2 tmsk" src="img/dotalogo.svg" width="109" height="22" role="img" aria-label="Bootstrap">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="your_stats.php" class="nav-link px-2 text-white tmsk">личная статистика</a></li>
                    <li><a href="meta_herous.php" class="nav-link px-2 text-white tmsk">meta herous</a></li>
                    <li><a href="best_players.php" class="nav-link px-2 text-white tmsk">лучшие игроки</a></li>
                </ul>

                <div class="text-end menu_item">
                    <a href="#" class="lk">
                        <p><?php isset($_COOKIE['login'])?></p>
                    </a>
                </div>
                    <?php
                                if(isset($_COOKIE['login']))
                                    echo '<div class="text-end">
                                        <a href="user_main.php" type="button" class="btn btn-outline-light me-2 lk">Личный кабинет</a>
                                    </div>';
                                else
                                    echo '<div class="text-end">
                                    <a type="button" href="login.php" class="btn btn-outline-light me-2">Login</a>
                                    <a type="button" href="auth.php" class="btn btn-warning">Sign-up</a>
                                    </div>'
                    ?>
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
                    <a href="antimage.php" class="category_box">
                        <img src="fonts/bloodsecer.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bloodseker</h1>
                    </a>
                    <a href="Bloodseker.html" class="category_box">
                        <img src="fonts/Bounty_hunter.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bounty Hunter</h1>
                    </a>
                    <a href="cm.html" class="category_box">
                        <img src="fonts/clinz.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Clinkz</h1>
                    </a>
                    <a href="dr.html" class="category_box">
                        <img src="fonts/drow ranger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Drow Ranger</h1>
                    </a>
            </div>
            <div class="category_box_row">
                    <a class="category_box">
                        <img src="fonts/ember spirit.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Ember Spirit</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/Fac_void.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Faceless Void</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/gyrocopter.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Gyrocopter</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/hoodwink.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Hoodwink</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/juger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Juggernaut</h1>
                    </a>
                    <a class="category_box">
                        <img src="fonts/luna.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Luna</h1>
                    </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/raz.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Razor</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/pl.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Phantom Lancer</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/sf.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Shadow Fiend</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/sniper.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sniper</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/spectra.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Spectre</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/templat_assasin.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Templar Assassin</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a class="category_box">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Terrorblade</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/venga.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Vengeful Spirit</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/windranger.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Windranger</h1>
                </a>
                <a class="category_box">
                    <img src="fonts/Zeus.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Zeus</h1>
                </a>
                <a class="category_box">
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
</body>
</html>