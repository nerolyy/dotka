<html lang="en">
<?php
 ini_set("session.cookie_secure", 1);
 session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media/desktop_media.css">
    <link rel="stylesheet" href="css/media/Sdesktop_media.css">
    <script src="scripts/profile_img.js" href="scripts/profile_img.js"></script>
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <title>Main Page</title>
</head>
<body style="background-image: url('fonts/mainfont.svg');
background-repeat: no-repeat;
background-color: #212121;
z-index:10">

    
<main class="form-signin w-100 m-auto pt-15">
  <form method="post" action="php-indor/reg.php">
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