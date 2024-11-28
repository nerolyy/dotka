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
                    <a type="button" href="auth.php" class="btn btn-warning">Sign-up</a>
                </div>

                    </div>
                </div>
            </div>
        </div>
</header>
    
<main class="form-signin w-100 m-auto pt-15">
  <form method="post" action="reg.php">
    <h1 class="h3 mb-3 fw-normal text-center text-white">Please sign in</h1>

    <div class="form-floating text-white">
      <input type="login" name="login" class="form-control bg-dark color-white" id="floatingInput" placeholder="login">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating text-white">
      <input type="password" name="password" class="form-control bg-dark color-white" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start  my-3">
      <input class="form-check-input text-white" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label text-white" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 bg-dark" type="submit">Sign in</button>
  </form>
</main>

<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



  
</body>
</html>