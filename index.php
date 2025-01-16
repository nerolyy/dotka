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
    <link rel="stylesheet" href="css/promo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="like_button.js"></script>
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
                    <li><a href="meta_herous.php" class="nav-link px-2 text-white tmsk">music</a></li>
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
<promo>



<h1 class="pre_h1">Dota-heroes</h1>

<div id="myBtnContainer" class="button_container">
    <a class="atribut_btn lk" type="button" onclick="filterSelection('all')"> show all</a>
    <div class="atribut_grey_row">
        <a class="atribut_btn" onclick="filterSelection('sila')">
            <img class="atribut_img" src="fonts/sila_atribut.svg">
        </a>
        <a class="atribut_btn" onclick="filterSelection('lovk')">
            <img class="atribut_img" src="fonts/lovkost_atribut.svg">
        </a>
        <a class="atribut_btn" onclick="filterSelection('int')">
            <img class="atribut_img" src="fonts/int_atribut.svg">
        </a>
        <a class="atribut_btn" onclick="filterSelection('uni')">
            <img class="atribut_img" src="fonts/uni_atribut.svg">
        </a>
    </div>
</div>

<div class="container_of_herous">
    
                    <a href="antimage.php" class="category_box filterDiv lovk">
                        <img src="fonts/Anti-mage.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Anti-mage</h1>
                    </a>
                    <a href="arc_warden.php" class="category_box category_box filterDiv lovk">
                        <img src="fonts/Arc.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Arc Warden</h1>
                    </a>
                    <a href="bloodseeker.php" class="category_box category_box filterDiv lovk">
                        <img src="fonts/bloodsecer.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bloodseker</h1>
                    </a>
                    <a href="Bloodseker.html" class="category_box category_box filterDiv lovk">
                        <img src="fonts/Bounty_hunter.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Bounty Hunter</h1>
                    </a>
                    <a href="cm.html" class="category_box category_box filterDiv lovk">
                        <img src="fonts/clinz.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Clinkz</h1>
                    </a>
                    <a href="dr.html" class="category_box category_box filterDiv lovk">
                        <img src="fonts/drow ranger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Drow Ranger</h1>
                    </a>

   
                    <a class="category_box filterDiv sila">
                        <img src="fonts/earth.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Earthshaker</h1>
                    </a>
                    <a class="category_box filterDiv lovk">
                        <img src="fonts/juger.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Juggernaut</h1>
                    </a>
                    <a class="category_box filterDiv uni">
                        <img src="fonts/mirana.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Mirana</h1>
                    </a>
                    <a class="category_box filterDiv lovk">
                        <img src="fonts/morph.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Morphling</h1>
                    </a>
                    <a class="category_box filterDiv lovk">
                        <img src="fonts/sf.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Shadow Fiend</h1>
                    </a>
                    <a class="category_box filterDiv lovk">
                        <img src="fonts/pl.svg" stile="width=115px; height=115px;">
                        <h1 class="hero_name">Phantom Lancer</h1>
                    </a>

                <a class="category_box filterDiv int">
                    <img src="fonts/Puck.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Puck</h1>
                </a>
                <a class="category_box filterDiv sila">
                    <img src="fonts/pudge.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Pudge</h1>
                </a>
                <a class="category_box filterDiv lovk">
                    <img src="fonts/raz.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Razor</h1>
                </a>
                <a class="category_box filterDiv uni">
                    <img src="fonts/Sand king.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sand King</h1>
                </a>
                <a class="category_box filterDiv int">
                    <img src="fonts/Storm Spirit.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Storm Spirit</h1>
                </a>
                <a class="category_box filterDiv sila">
                    <img src="fonts/Sven.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Sven</h1>
                </a>

                <a class="category_box filterDiv sila">
                    <img src="fonts/Tiny.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Tiny</h1>
                </a>
                <a class="category_box filterDiv uni">
                    <img src="fonts/venga.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Vengeful Spirit</h1>
                </a>
                <a class="category_box filterDiv uni">
                    <img src="fonts/windranger.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Windranger</h1>
                </a>
                <a class="category_box filterDiv int">
                    <img src="fonts/Zeus.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Zeus</h1>
                </a>
                <a class="category_box filterDiv sila">
                    <img src="fonts/Kunka.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Kunkka</h1>
                </a>
                <a class="category_box filterDiv int">
                    <img src="fonts/Lina.svg" stile="width=115px; height=115px;">
                    <h1 class="hero_name">Lina</h1>
                </a>
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Добавьте активный класс к текущей кнопке (выделите его)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</promo>



<footer class="py-3 my-4">
    <div class="container">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="your_stats.php" class="nav-link px-2 text-body-secondary text-white">личная статистика</a></li>
          <li class="nav-item"><a href="meta_herous.php" class="nav-link px-2 text-body-secondary text-white">meta herous</a></li>
          <li class="nav-item"><a href="best_players.php" class="nav-link px-2 text-body-secondary text-white">лучшие игроки</a></li>
        </ul>
    </div>
</footer>
</body>
</html>