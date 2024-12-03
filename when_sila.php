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
                    <a href="alchemist.php" class="category_box">
                        <img src="fonts/Alhimik.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Alchemist</h1>
                    </a>
                    <a href="axe.php" class="category_box">
                        <img src="fonts/Axe.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Axe</h1>
                    </a>
                    <a href="bristleback.php" class="category_box">
                        <img src="fonts/Bristle.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bristleback</h1>
                    </a>
                    <a href="centaur.php" class="category_box">
                        <img src="fonts/centaur.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Centaur Warrunner</h1>
                    </a>
                    <a href="chaos_knight.php" class="category_box">
                        <img src="fonts/chaos knight.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Chaos Knight</h1>
                    </a>
                    <a href="dawnbreaker.php" class="category_box">
                        <img src="fonts\Doom.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Dawnbreaker</h1>
                    </a>
            </div>
            <div class="category_box_row">
                    <a href = "doom.php"class="category_box">
                        <img src="fonts/Doom.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Doom</h1>
                    </a>
                    <a href = "dragon_knight.php"class="category_box">
                        <img src="fonts/Dragon knight.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Dragon Knight</h1>
                    </a>
                    <a href="earth_spirit.php"class="category_box">
                        <img src="fonts/earth_spirit.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earth Spirit</h1>
                    </a>
                    <a  href = "earthshaker.php" class="category_box">
                        <img src="fonts/earth.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earthshaker</h1>
                    </a>
                    <a href = "elder_titan.php" class="category_box">
                        <img src="fonts/Elder_titan.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Elder Titan</h1>
                    </a>
                    <a href = "huskar.php" class="category_box">
                        <img src="fonts/Huskar.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Huskar</h1>
                    </a>
            </div>
            <div class="category_box_row">
                <a href = "kunka.php"class="category_box">
                    <img src="fonts/Kunka.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Kunkka</h1>
                </a>
                <a  href = "legion_commander.php" class="category_box">
                    <img src="fonts/legion_comander.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Legion Commander</h1>
                </a>
                <a href = "lifestealer.php" class="category_box">
                    <img src="fonts/life_stil.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Lifestealer</h1>
                </a>
                <a href = "mars.php" class="category_box">
                    <img src="fonts/Mars.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Mars</h1>
                </a>
                <a href = "night_stalker.php" class="category_box">
                    <img src="fonts/Night_stalker.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Night Stalker</h1>
                </a>
                <a href = "ogre_mage.php" class="category_box">
                    <img src="fonts/ogre_magi.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Ogre Magi</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a href = "omniknight.php" class="category_box">
                    <img src="fonts/omni.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Omniknight</h1>
                </a>
                <a href = "primal_beast.php" class="category_box">
                    <img src="fonts/primal.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Primal Beast</h1>
                </a>
                <a href = "pudge.php" class="category_box">
                    <img src="fonts/pudge.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Pudge</h1>
                </a>
                <a href = "slardar.php" class="category_box">
                    <img src="fonts/slardar.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Slardar</h1>
                </a>
                <a href = "spirit_breaker.php" class="category_box">
                    <img src="fonts/Spirit_breaker.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Spirit Breaker</h1>
                </a>
                <a href = "sven.php" class="category_box">
                    <img src="fonts/Sven.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sven</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a href = "tidehunter.php" class="category_box">
                    <img src="fonts/Tidehunter.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tidehunter</h1>
                </a>
                <a href = "tiny.php" class="category_box">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tiny</h1>
                </a>
                <a href = "treant.php" class="category_box">
                    <img src="fonts/Treant.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Treant Protector</h1>
                </a>
                <a href = "tusk.php" class="category_box">
                    <img src="fonts/Tusk.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tusk</h1>
                </a>
                <a href = "underlord.php" class="category_box">
                    <img src="fonts/Underlord.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Underlord</h1>
                </a>
                <a href = "undying.php" class="category_box">
                    <img src="fonts/undie.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Undying</h1>
                </a>
            </div>
            <div class="category_box_row">
                <a  href = "papich.php" class="category_box">
                    <img src="fonts/wrath king.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Wraith King</h1>
                </a>
            </div>
        </div>
    </promo>
</body>
</html>