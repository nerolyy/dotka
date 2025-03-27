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
<body style="
background-image: url('fonts/Dota 2 - redesign - main.svg');
background-repeat: no-repeat;
background-color: #212121;
display: block;
position: sticky;
z-index:10">
    <h1>Upcoming Matches</h1>
    <ul id="matches-list"></ul>

    <script>
        async function fetchMatches() {
            try {
                const response = await fetch('http://127.0.0.1:5000/api/matches'); // URL Flask-сервера
                const matches = await response.json();

                const matchesList = document.getElementById('matches-list');
                matchesList.innerHTML = '';

                matches.forEach(match => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${match.team1} vs ${match.team2} (${match.tournament}) - ${match.date_time}`;
                    matchesList.appendChild(listItem);
                });
            } catch (error) {
                console.error("Error fetching matches:", error);
            }
        }

        fetchMatches();
        setInterval(fetchMatches, 60000); // Обновлять каждую минуту
    </script>
</body>