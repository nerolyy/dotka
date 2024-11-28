<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
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
<body style="background-image: url('fonts/mainfont.svg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
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
        <main>
        <div class="name">
            <img src="img\heroavatar\antimage.gif" alt="">
            <h2>Anti-Mage</h2>
        </div>
        <div class="info">
            <p>
               Краткое описание героя<br><br> Если Anti-Mage наберёт полную силу, мало кто сможет его остановить. Он способен забирать у врагов ману каждым ударом или телепортироваться на небольшие расстояния, что не позволяет врагам загнать его в угол.
            </p> 
               <br>Способности:<br> <img src="imgskills\antimage_mana_break.png" alt=""><p1>Mana Break</p1>
            <br>Каждая атака сжигает ману цели и наносит ей урон, равный доле от сожжённой маны.<br>
                <img src="imgskills\antimage_blink.png" alt=""><p1>Blink</p1>
            <br> Перемещение на короткую дистанцию, позволяющее ворваться в схватку или быстро из неё сбежать.<br>
                <img src="imgskills\antimage_counterspell.png" alt=""><p1>Counterspell</p1>
            <br>Перемещение на короткую дистанцию, позволяющее ворваться в схватку или быстро из неё сбежать.<br>
                <img src="imgskills\antimage_mana_void.png" alt=""><p1>Mana Void</p1>
            <br>Кратковременно оглушает вражескую цель, а затем наносит ей и всем окружающим её противникам урон, пропорциональный числу отсутствующей у неё маны<br>
           
        </div>
        </main>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Designed for engineers</h1>
            <h3 class="fw-normal text-muted mb-3">Build anything you want with Aperture</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                Learn more
                    <img src="img\heroavatar\antimage.gif" alt="antimage" class="">
                </a>
                <a class="icon-link" href="#">
                Buy
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <footer class="py-3 my-4">
            <div class="container">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="your_stats.php" class="nav-link px-2 text-body-secondary text-white">личная статистика</a></li>
                <li class="nav-item"><a href="meta_herous.php" class="nav-link px-2 text-body-secondary text-white">meta herous</a></li>
                <li class="nav-item"><a href="best_players.php" class="nav-link px-2 text-body-secondary text-white">лучшие игроки</a></li>
                </ul>
            </div>
        </footer>