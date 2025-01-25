<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="stylesheet" href="css/herous.css">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:" rel="stylesheet">
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">

    <title></title> 
</head>
<body  style="background-image: url('fonts/greyfade.jpg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
<header style="font-family: 'inherit'">
    <div class="header_container">
        <ul class="header_items">
            <div class="menu_header_item">
                <a href="index.php" class="dota_logo_header">
                    <img src="img/icons8-dota-2 1.svg" class="dota_logo_header_img">
                </a>
            </div>
            <a href="index.php" class="menu_header_item text_item">Home</a>
            <a class="menu_header_item text_item active">Herous</a>
            <a class="menu_header_item text_item">Store</a>
            <a class="menu_header_item text_item">Watch</a>
            <a class="menu_header_item text_item">Learn</a>
            <a class="menu_header_item text_item">Arcade</a>
            <div class="menu_header_item mrg-l-669">
                    <a href="#" class="lk">
                        <p><?php isset($_COOKIE['login'])?></p>
                    </a>
                </div>
                    <?php
                                if(isset($_COOKIE['login']))
                                    echo '
                                <ul class="lk_header">
                                    <div class="lk_img_profile">
                                        <img src="" alt="" class="">
                                    </div>
                                    <div class="lk_name_profile"></div>
                                </ul>
                                <div class="menu_header_item small_img">
                                    <a class="setting_header">
                                        <img src="img/bi_gear-fill.svg" class="settings_header_img">
                                    </a>
                                </div>
                                <a class="menu_header_item small_img">
                                    <img src="img/heroicons-solid_logout.svg" class="logoout_header_img">
                                </a>';
                                else
                                    echo '<div class="menu_header_item text_item">
                                    <a href="login.php" class="login_btn">Login</a>
                                    <a href="auth.php" class="">Sign-up</a>
                                    </div>'
                    ?>
        </ul>
    </div>
</header>
<main style="font-family: 'Montserrat';font-size: 22px;
    }">
    
    <div class="all-hero-inf">
        <div class="hero-continer">
            <div class="hero-vido_container">
                <div class="antimage video">
                <video class="_22nJ5nsfHDS2jEscPEne0-" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.png" autoplay="" preload="auto" loop="" playsinline=""><source type="video/mp4; codecs=&quot;hvc1&quot;" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.mov"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.webm?undefined">
                <img src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/axe.png"></video>
                </div>
            </div>
            <div class="text-hero-container">
                <div class="atribut-row">
                    <img src="img\hero_strength.png" class="atribut-png">
                    <div class="atribut_name">Сила</div>
                </div>
                <div class="h1-tekst">Axe</div>
                <div class="deskription-hero-text">Провоцирует врагов, заставляя их атаковать его</div>
                <div class="b-deskription-hero-text-container">
                    <div class="hero-story">
                        <div class="h-s-text f-b">Axe рубит одного врага за другим, неизменно ступая впереди своей команды. <span class="f-b">  Он вынуждает противников вступить в бой, а затем отвечает на их удары смертоносными взмахами топора. </span>  
                        <span class="f-b">Нещадно круша ослабленных врагов, он всегда несётся вперёд.</span>
                    </div>
                    <div>
                        <div class="atack-type">Тип атаки</div>
                        <div class="atack-type-row">
                            <img class="atack-type-img" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
                        <div class="atack-range">Ближний бой</div>
                    </div>
                </div>
                <div>
                    <div class="complexity">Сложность</div>
                    <div class="complexity-row">
                        <div class="romb w-r"></div>
                        <div class="romb"></div>
                        <div class="romb"></div>
                    </div>
                </div>
            <div class="sposobnost_container">
                <div class="sposobnost_zagolovok">Способности</div>
                <div class="sposobosti_geroev_row">
                    <div class="_3ty-o0Vg7AspURxYD_vDO0">
                        <img class="_9eyi-y0N7HQeAgY_e4IX3" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/icons/talents.svg">
                        <div class="_1ALRldYHhqQh2p5Ro4yV7C _2abeJ8EsTgK_96G-pPJAbb">
                            <div class="_3AsciWX0cGyLvTIulgX51j _2abeJ8EsTgK_96G-pPJAbb">
                                <div class="m_wahwAk1radLNEPsCGxG">
                                    <div class="_2j-WC-5NVatiZi_hbF71s8">Древо талантов</div>
                                    <div class="_3BgAvspn7pMCJOv-WcfmYl">
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn _1F43S3W5UlahR4a_gKyc-U">Безмолвие от Flux, если рядом с жертвой никого нет</div>
                                        <div class="_1OBdYLyWHp3adekYGqp1o1">
                                            <div class="_1kzauCe7gxPg42R3fzXscY">25</div>
                                        </div>
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn vNURB3XfbUorYbvwEZCgl">Урон по копии от Tempest Double не увеличивается</div>
                                    </div>
                                    <div class="_3BgAvspn7pMCJOv-WcfmYl">
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn _1F43S3W5UlahR4a_gKyc-U">–7 сек. перезарядки Magnetic Field</div>
                                        <div class="_1OBdYLyWHp3adekYGqp1o1">
                                            <div class="_1kzauCe7gxPg42R3fzXscY">20</div>
                                        </div>
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn vNURB3XfbUorYbvwEZCgl">+40% к урону от Spark Wraith</div>
                                    </div>
                                    <div class="_3BgAvspn7pMCJOv-WcfmYl">
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn _1F43S3W5UlahR4a_gKyc-U">+16 к скорости атаки и урону от Magnetic Field</div>
                                        <div class="_1OBdYLyWHp3adekYGqp1o1">
                                            <div class="_1kzauCe7gxPg42R3fzXscY">15</div>
                                        </div>
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn vNURB3XfbUorYbvwEZCgl">+2 сек. действия Flux</div>
                                    </div><div class="_3BgAvspn7pMCJOv-WcfmYl">
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn _1F43S3W5UlahR4a_gKyc-U">+200 к здоровью</div>
                                        <div class="_1OBdYLyWHp3adekYGqp1o1">
                                            <div class="_1kzauCe7gxPg42R3fzXscY">10</div>
                                        </div>
                                        <div class="_1SJ4JZrp7rwc6FG-vINkFn vNURB3XfbUorYbvwEZCgl">+200 к дальности применения Flux</div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="_3ty-o0Vg7AspURxYD_vDO0"><img class="sdE5vlhCr1gzvziS9-dIh" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/icons/innate_icon.png">
                                    <div class="_1ALRldYHhqQh2p5Ro4yV7C">
                                        <div class="_3AsciWX0cGyLvTIulgX51j">
                                            <div class="_10lc5aoHOP5BafKhDC_AuD">
                                                <div class="oRzqVIPO5vD9aPxv582G9">Runic Infusion </div>
                                                <div class="_1GUxaKU8ts0aIJaMfIfMS_">Активируя любую руну, герой также получает эффект руны регенерации на 4 сек. </div>
                                            </div>
                                            </div></div></div>
                                            <div class="_3ty-o0Vg7AspURxYD_vDO0"><img class="_3Chop4A9yz7Af_BwR1r_NW" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/abilities/arc_warden_flux.png">
                                            <div class="_1ALRldYHhqQh2p5Ro4yV7C">
                                                <div class="_3AsciWX0cGyLvTIulgX51j">
                                                    <div class="_1fH3AuG8zzGoLyzou3ZHkL"><video class="_22nJ5nsfHDS2jEscPEne0-" autoplay="" preload="auto" loop="" playsinline="" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_flux.jpg"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_flux.webm"><source type="video/mp4" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_flux.mp4"></video></div><div class="_10lc5aoHOP5BafKhDC_AuD"><div class="oRzqVIPO5vD9aPxv582G9">Flux </div><div class="_1GUxaKU8ts0aIJaMfIfMS_">Охватывает одинокого врага нестабильной энергией, замедляя его передвижение и нанося урон. Урон блокируется, если рядом с целью есть её союзники. </div></div></div></div></div><div class="_3ty-o0Vg7AspURxYD_vDO0"><img class="_3Chop4A9yz7Af_BwR1r_NW" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/abilities/arc_warden_magnetic_field.png"><div class="_1ALRldYHhqQh2p5Ro4yV7C"><div class="_3AsciWX0cGyLvTIulgX51j"><div class="_1fH3AuG8zzGoLyzou3ZHkL"><video class="_22nJ5nsfHDS2jEscPEne0-" autoplay="" preload="auto" loop="" playsinline="" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_magnetic_field.jpg"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_magnetic_field.webm"><source type="video/mp4" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_magnetic_field.mp4"></video></div><div class="_10lc5aoHOP5BafKhDC_AuD"><div class="oRzqVIPO5vD9aPxv582G9">Magnetic Field </div><div class="_1GUxaKU8ts0aIJaMfIfMS_">Герой создаёт вокруг себя круглое магнитное поле. </div></div></div></div></div><div class="_3ty-o0Vg7AspURxYD_vDO0"><img class="_3Chop4A9yz7Af_BwR1r_NW" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/abilities/arc_warden_spark_wraith.png"><div class="_1ALRldYHhqQh2p5Ro4yV7C"><div class="_3AsciWX0cGyLvTIulgX51j"><div class="_1fH3AuG8zzGoLyzou3ZHkL"><video class="_22nJ5nsfHDS2jEscPEne0-" autoplay="" preload="auto" loop="" playsinline="" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_spark_wraith.jpg"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_spark_wraith.webm"><source type="video/mp4" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_spark_wraith.mp4"></video></div><div class="_10lc5aoHOP5BafKhDC_AuD"><div class="oRzqVIPO5vD9aPxv582G9">Spark Wraith </div><div class="_1GUxaKU8ts0aIJaMfIfMS_">Призывает призрачную искру, которая медленно материализуется и сторожит выделенную область. При появлении врага искра бросается на него и взрывается, нанося жертве магический урон и замедляя её. Наносит существам, не являющимся героями, на 40% больше урона. </div></div></div></div></div><div class="_3ty-o0Vg7AspURxYD_vDO0"><img class="_3Chop4A9yz7Af_BwR1r_NW" src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/abilities/arc_warden_tempest_double.png"><div class="_1ALRldYHhqQh2p5Ro4yV7C"><div class="_3AsciWX0cGyLvTIulgX51j"><div class="_1fH3AuG8zzGoLyzou3ZHkL"><video class="_22nJ5nsfHDS2jEscPEne0-" autoplay="" preload="auto" loop="" playsinline="" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_tempest_double.jpg"><source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_tempest_double.webm"><source type="video/mp4" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/abilities/arc_warden/arc_warden_tempest_double.mp4"></video></div><div class="_10lc5aoHOP5BafKhDC_AuD"><div class="oRzqVIPO5vD9aPxv582G9">Tempest Double </div><div class="_1GUxaKU8ts0aIJaMfIfMS_">Сконцентрировав свои осколки в единую сущность, герой создаёт свою идеальную электрическую копию, способности которой имеют эффекты противоположной команды. Копия может использовать все предметы оригинала, кроме многих расходуемых и тех, что теряются при смерти, и имеет отдельное время перезарядки для них.<br><br>Убийство копии принесёт противнику золото и начнёт перезарядку способности.<br><br>Копия теряет себя, если находится на слишком большом расстоянии от своего создателя, отчего ей наносят больше урона. </div></div></div></div></div></div></div>
    </div>
</main> 
</body>