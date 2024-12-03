<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/herous.css">
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
<main style="background-image: url('fonts/greyfade.jpg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
    <div class="all-hero-inf">
        <div class="hero-continer">
            <div class="hero-vido_container">
                <div class="antimage video">
                    <video class="_22nJ5nsfHDS2jEscPEne0- " poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/mirana.png" autoplay preload="auto" loop playsinline>
                        <source type="video/mp4; codecs=&quot;hvc1&quot;" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/mirana.mov">
                        <source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/mirana.webm?undefined"><img src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/mirana.png">
                    </video>
                </div>
            </div>
            <div class="text-hero-container">
                <div class="atribut-row">
                    <img src="img\hero_universal.png" class="atribut-png">
                    <div class="atribut_name">Универсальный</div>
                </div>
                <div class="h1-tekst">Mirana</div>
                <div class="deskription-hero-text">Оглушает врагов точными попаданиями стрел</div>
                <div class="b-deskription-hero-text-container">
                    <div class="hero-story">
                        <div class="h-s-text f-b">  <span class="f-b">Всегда готовая влететь в битву Mirana</span>  издалека подыскивает жертву для своей смертоносной стрелы.
                        <span class="f-b">Она способна скрыть команду</span>от глаз врагов и возглавить охоту на них.
                    <div>
                        <div class="atack-type">Тип атаки</div>
                        <div class="atack-type-row">
                            <img class="atack-type-img" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/icons/ranged.svg">
                        <div class="atack-range">Дальний бой</div>
                    </div>
                </div>
                <div>
                    <div class="complexity">Сложность</div>
                    <div class="complexity-row">
                        <div class="romb w-r"></div>
                        <div class="romb w-r"></div>
                        <div class="romb "></div>
                    </div>
                </div> 
    </div>
</main>