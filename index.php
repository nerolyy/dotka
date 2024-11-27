<html lang="en">
<?php
 ini_set("session.cookie_secure", 1);
 session_start();
?>
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

                <div class="text-end">
                    <a href="#" class="lk">
                        <p><?php isset($_COOKIE['login'])?></p>
                    </a>
                </div>
                    <?php
                                if(isset($_COOKIE['login']))
                                    echo '<div class="text-end">
                                    <a href="user_main.php" class="btn btn-outline-light me-2 lk">Личный кабинет</a>
                                    </div>';
                                else
                                    echo '<div class="text-end">
                                    <a type="button" href="login.php" class="btn btn-outline-light me-2">Login</a>
                                    <a type="button" href="#" class="btn btn-warning">Sign-up</a>
                                    </div>'
                            ?> 
                    </div>
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
                    <a href="antimage.php" class="category_box bg-dark">
                        <img src="fonts/Anti-mage.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Anti-mage</h1>
                    </a>
                    <a href="arc_warden.php" class="category_box bg-dark">
                        <img src="fonts/Arc.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Arc Warden</h1>
                    </a>
                    <a href="bloodseeker.php" class="category_box bg-dark">
                        <img src="fonts/bloodsecer.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bloodseker</h1>
                    </a>
                    <a href="bounty_hunter.php" class="category_box bg-dark">
                        <img src="fonts/Bounty_hunter.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bounty Hunter</h1>
                    </a>
                    <a href="clinkz.php" class="category_box bg-dark">
                        <img src="fonts/clinz.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Clinkz</h1>
                    </a>
                    <a href="drow_ranger.php" class="category_box bg-dark">
                        <img src="fonts/drow ranger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Drow Ranger</h1>
                    </a>
            </div>
            <div class="category_box_row">
                    <a href = "earthshaker.php"class="category_box bg-dark">
                        <img src="fonts/earth.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earthshaker</h1>
                    </a>
                    <a href = "juggernaut.php"class="category_box bg-dark">
                        <img src="fonts/juger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Juggernaut</h1>
                    </a>
                    <a href = "mirana.php" class="category_box bg-dark">
                        <img src="fonts/mirana.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Mirana</h1>
                    </a>
                    <a href = "morphling.php" class="category_box bg-dark">
                        <img src="fonts/morph.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Morphling</h1>
                    </a>
                    <a  href = "shadow_fiend.php" class="category_box bg-dark">
                        <img src="fonts/sf.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Shadow Fiend</h1>
                    </a>
                    <a href = "phantom_lancer.php" class="category_box bg-dark">
                        <img src="fonts/pl.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Phantom Lancer</h1>
                    </a>
            </div>
            <div class="category_box_row">
                <a href = "puck.php" class="category_box bg-dark">
                    <img src="fonts/Puck.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Puck</h1>
                </a>
                <a href = "pudge.php" class="category_box bg-dark">
                    <img src="fonts/pudge.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Pudge</h1>
                </a>
                <a href = "razor.php" class="category_box bg-dark">
                    <img src="fonts/raz.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Razor</h1>
                </a>
                <a href = "sand_king.php" class="category_box bg-dark">
                    <img src="fonts/Sand king.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sand King</h1>
                </a>
                <a href = "storm_spirit.php" class="category_box bg-dark">
                    <img src="fonts/Storm Spirit.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Storm Spirit</h1>
                </a>
                <a href = "sven.php" class="category_box bg-dark">
                    <img src="fonts/Sven.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sven</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a href = "tiny.php"class="category_box bg-dark">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tiny</h1>
                </a>
                <a href = "venga.php" class="category_box bg-dark">
                    <img src="fonts/venga.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Vengeful Spirit</h1>
                </a>
                <a href = "windranger.php" class="category_box bg-dark">
                    <img src="fonts/windranger.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Windranger</h1>
                </a>
                <a href = "zeus.php" class="category_box bg-dark">
                    <img src="fonts/Zeus.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Zeus</h1>
                </a>
                <a href = "Kunka.php" class="category_box bg-dark">
                    <img src="fonts/Kunka.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Kunkka</h1>
                </a>
                <a href = "lina.php" class="category_box bg-dark">
                    <img src="fonts/Lina.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Lina</h1>
                </a>
            </div>
        </div>
    </promo>
</body>
</html>