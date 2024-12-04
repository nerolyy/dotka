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
<body style="background-color: #091227;
background-repeat: no-repeat;
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
<div class="main_music_container">
    <script>
        let array = [
            ['music/smaller_then_3.jpeg', 'music/god system.jpg', 'music/smaller_then_3.jpeg', 'music/smaller_then_3.jpeg', 'music/smaller_then_3.jpeg'],
            ['HELL', 'VICTIM', 'Одиноко', 'Dubsova', 'трек-5', 'трек-6'],
            ['Егор Крид • 9mice • Kai Angel', 'Kai Angel', 'Егор Крид', 'Егор Крид', 'Егор Крид', 'Егор Крид'],
            ['music/track0.mp3', 'music/kai-angel-victim-mp3.mp3', 'music/ЕГОР КРИД - Одиноко.mp3', 'music/ЕГОР КРИД - DUBTSOVA.mp3', 'music/ЕГОР КРИД - RM  PUSSY BOY 2.mp3'],
        ];

        let audio = new Audio();
        let song = document.querySelector('.song');
        let index = 0; // трек по умолчанию

        function selecting_track(direction) {
            index += direction;
            if (index >= array[0].length) index = 0;
            if (index < 0) index = array[0].length - 1;
            play_track(index);
        }

        function play_track(ind) {
            image.src = array[0][ind];
            document.querySelector('.track').innerText = array[1][ind];
            document.querySelector('.artist').innerText = array[2][ind];
            

            audio.src = array[3][ind];
            

            audio.onloadedmetadata = function() {
                duration.innerText = formatingTime(this.duration);
            };
            
      
            audio.play();
        }

        function play_pause(e) {
            if (audio.paused) {
                audio.play();
                e.src = 'https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348534-music-pause-stop-control-play_80459.png';
            } else {
                audio.pause();
                e.src = 'https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348532-music-play-pause-control-go-arrow_80458.png';
            }
        }

        audio.ontimeupdate = function() {
            song.value = audio.currentTime / audio.duration * 100;
            currentTime.innerText = formatingTime(audio.currentTime);
        };

        function formatingTime(time) {
            let s = Math.floor(time % 60);
            return Math.floor(time / 60) + ':' + (s < 10 ? '0' + s : s);
        }

        audio.onended = function() { selecting_track(1); };

        song.oninput = function() { audio.currentTime = this.value / 100 * audio.duration; };
        
        song.value = 0;
        volume.value = 80; 
        currentTime.innerText = formatingTime(audio.currentTime);
        
        play_track(index);
    </script>

    <div class="cards">
        <div class="tracks_list" id="track-play-gruppy">
            <img id=image src="music/smaller_then_3.jpeg" alt="">
            <div class="name_container">
                <div class="track">HELL</div>
                <div class="artist">Егор Крид • 9mice • Kai Angel</div>
            </div>
            <div class="progress_bar">
                <input class="song" type="range" min='0 'max="100" >
            </div>
            <div class="time_bar">
                <div id=currentTime class="music-progress__time-item music-current-time start_track"></div>
                <div id=duration class="music-progress__time-item music-duration-time end_track"></div>
            </div>
            <div class="panel_players">
                <div class="left_button" onclick='selecting_track(-1)'>
                    <img src="music/aaaaaaaaaaaaaaaa.svg" alt="">
                </div>
                <div class="play_button">
                    <img id=playPause class='pause_active' src="https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348532-music-play-pause-control-go-arrow_80458.png" alt="" onclick='play_pause(this)' />
                </div>
                <div class="right_button" onclick='selecting_track(1)'>
                    <img  id="right-next-track-perviy-raz" src="music/BBBBBBB.svg" alt="">
                </div>
            </div>
            <div class="volume_regulator">
                <div class="left_volume" onclick='audio.muted = true'>
                    <img src="https://cdn.icon-icons.com/icons2/2248/PNG/512/volume_mute_icon_135038.png" alt="">
                </div>
                <div class="panel_volume">
                    <input id=volume type="range" min='0 'max="100" onpointerdown='audio.volume = this.value / 100' onpointermove='audio.volume = this.value / 100'>
                </div>
                <div class="right_volume" onclick='audio.muted = false'>
                    <img src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-volume-mute_90639.png" alt="">
                </div>
            </div>
        </div>
        
</div>
