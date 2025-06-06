<html lang="en">
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
<body style="background-image: url('fonts/radiant_dire5.jpg');
background-repeat: no-repeat;
background-color: #212121;
background-size: cover;
display: block;
z-index:10">
<promo>
<div class="main-container">
    <div class="main-content">
    <?php
                                if(isset($_COOKIE['login']))
                                    echo 
                                    '<div class="sidebar">
                                    <div class="guild">
                                      <img src="guild_logo.png" alt="Guild Logo" class="guild-logo">
                                       <div class="guild-info">
                                           Guild of the noon
                                           <div class="guild-members">5.755 guild members</div>
                                       </div>
                                   </div>
                                    <div class="dota-party">
                                       Dota Party
                                      <div class="dota-party-icons">
                                         <div class="party-icon" style="background-image: url("party_icon1.png);"></div>
                                         <div class="party-icon"></div>
                                         <div class="party-icon"></div>
                                          <div class="party-icon"></div>
                                        </div>
                                    </div>
                                  <div class="friends-groups">
                                    Friends and groups
                                      <button class="friends-add">+</button>
                                  </div>
                                    <div class="friends-online">
                                     Online (4)
                                    </div>
                                     <div class="friends-list">
                                        <div class="friend-item">
                                            <img src="friend1.png" alt="GHX_monument22" class="friend-avatar">
                                            <div class="friend-info">
                                                <div class="friend-name">GHX_monument22</div>
                                                 <div class="friend-status">
                                                    <span class="status online"></span>
                                                    Online | <span class="message">1 message</span>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="friend-item">
                                            <img src="friend2.png" alt="Andrew.ggg" class="friend-avatar">
                                            <div class="friend-info">
                                                <div class="friend-name">Andrew.ggg</div>
                                                 <div class="friend-status">
                                                    <span class="status online"></span>
                                                    Online
                                                </div>
                                            </div>
                                        </div>
                                         <div class="friend-item">
                                            <img src="friend3.png" alt="Anti-turtle" class="friend-avatar">
                                            <div class="friend-info">
                                                <div class="friend-name">Anti-turtle</div>
                                                 <div class="friend-status">
                                                     <span class="status online"></span>
                                                    Online
                                                </div>
                                            </div>
                                        </div>
                                         <div class="friend-item">
                                                           <img src="friend4.png" alt="Dash//\\\" class="friend-avatar">
                                            <div class="friend-info">
                                                <div class="friend-name">Dash//\\</div>
                                                 <div class="friend-status">
                                                    <span class="status online"></span>
                                                    Online
                                                </div>
                                            </div>
                                        </div>
                                       <div class="friends-offline">
                                          Offline (577)
                                      </div>
                                    </div>
                                    </div>';
                                else
                                    echo ''
                    ?>
    </div>

    <div class="main-header">
        <div class="strength">
            <span class="strength-label">19.02.2025</span>
        </div>
           <div class="marci-headline">
            New patch! (7.38)
           </div>
          <div class="marci-text">
                Just like the space miners extracting water in the movie Dune. Part Two" (and maybe in the book of the same name), Dota has always been the only game that considers water the most valuable resource both in the Dune universe and in our universe - the Universe.
          </div>
        <a class="test-hero-button" href="kez.php">Watch about</a>
    </div>
    </div>
  </div>
  <div class="main-bottom">
           <div class="main-bottom-item">
                <div class="bottom-item-header">
                  <img src="fonts/7.39patch.png" alt="New Hero"> New Patch(7.38)
                   <span class="bottom-item-date">19/02/2025</span>
                 </div>
              <div class="bottom-item-content">
                  <div class="bottom-item-text">
                    <span class="bottom-item-name">MARCI</span>
                      Dashes around beating enemies with fast attacks.
                  </div>
                    <span class="bottom-item-strength"> STRENGTH</span>
                </div>
          </div>
            <div class="main-bottom-item">
             <div class="bottom-item-header">
                <img src="new-treasure.png" alt="New Treasure"> New Treasure
                <span class="bottom-item-date">20/11/2021</span>
            </div>
                <div class="bottom-item-content">
                    <div class="bottom-item-text">
                         <span class="bottom-item-name">Treasure of the Crimson Witness 2021</span>
                       <span class="bottom-item-rarity">3 regular </span><span class="bottom-item-rarity">2 rare </span><span class="bottom-item-rarity">1 epic </span><span class="bottom-item-rarity">1 immortal</span>
                    </div>
                </div>
          </div>
            <div class="main-bottom-item">
                <div class="bottom-item-header">
                    <img src="weekly-challenge.png" alt="Weekly Challenge"> Weekly challenge
                    <span class="bottom-item-date">20/11/2021</span>
                </div>
                 <div class="bottom-item-content">
                   <div class="bottom-item-text">
                       <span class="bottom-item-name">Win 3 games this week!</span>
                       <span class="bottom-item-hours">22 hours remaining</span>
                   </div>
                 <div class="bottom-item-progressbar">
                        <div class="progress-icon complete"></div>
                       <div class="progress-icon complete"></div>
                        <div class="progress-icon incomplete"></div>
                   </div>
                 </div>
          </div>
        </div>
</promo>

</body>
</html>