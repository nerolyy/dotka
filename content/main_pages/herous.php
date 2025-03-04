<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_manu.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/promo_herous.css">
    <script src="scripts/drop_down.js"></script>
    <script src="scripts/drop_down_type.js"></script>
    <link rel="stylesheet" href="css/media/desktop_media.css">
    <link rel="stylesheet" href="css/media/Sdesktop_media.css">
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" href="css/all_hero_page.css">
    <link rel="icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons8-dota-2 1.svg" type="image/x-icon">
    <title>Main Page</title>
</head>
<body style="
background-image: url('fonts/Dota 2 - redesign - main.svg');
background-repeat: no-repeat;
background-color: #212121;
display: block;
position: sticky;
z-index:10">
<main> 
<div class="container">
         <div class="filters">
             <div class="sort-by-container">
                  <label for="sort-by">Sort by</label>
                  <select id="sort-by">
                         <option value="attributes">Attributes</option>
                 </select>
             </div>

                <div class="type-container">
                    <label for="type-filter">Type</label>
                    <select id="type-filter">
                        <option value="all">All</option>
                        <option value="strength">Strength</option>
                        <option value="agility">Agility</option>
                        <option value="intelligence">Intelligence</option>
                    </select>
                </div>
                 <div class="complexity-container">
                   <label for="complexity-filter">Complexity</label>
                   <select id="complexity-filter">
                        <option value="all">All</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                  </select>
                 </div>

                <input type="text" id="search-input" placeholder="Search Hero">
            </div>
        
        <div class="heroes-container">
        </div>
    </div>
    <script src="scripts/hero_filter.js"></script>
</main>