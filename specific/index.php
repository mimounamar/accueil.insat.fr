<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semaine d'accueil 2024 - INSA de Toulouse</title>
    <link rel="stylesheet" href="../styles/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>
<body class="body-team-specific" style="background: url('../assets/<?php echo $_COOKIE['selected_team']; ?>_bg.jpeg') repeat; background-size: 25%;">
    <?php include "nav.php"; ?>
    <div class="nes-container with-title text-content">
        <p class="title">Bienvenue à l'INSA de Toulouse !</p>
        <section class="nes-content">
            <img src="../assets/insa_cartridge.png" style="max-height: 200px">
            <div class="nes-text">
                <p>Toutes nos salutations jeune dresseur·se. Ce site est fait pour t'aider à commencer ton aventure en toute sérénité.</p>
                <p>Ici, tu trouveras des informations générales sur la semaine d'accueil ainsi que sur la vie Insaïenne !</p>
            </div>
        </section>
    </div>

    <div class="nes-container with-title text-content">
        <p class="title">Apprends à connaître ton équipe.</p>
        <section class="nes-content">
            <div class="nes-text">
                <p><?php echo $TEAMS_DESCRIPTIONS[$_COOKIE['selected_team']]; ?></p>
            </div>
            <img src="../assets/<?php echo $_COOKIE['selected_team']; ?>_game.png" style="max-height: 200px">
        </section>
    </div>
    <p style="font-size: 9px; margin: 15px 20%; text-align: center">Site de la semaine d'accueil 2024 pour l'INSA Toulouse. <br>
        Tous les éléments présents sur ce site sont représentés à des fins humoristiques. Nous ne cherchons en aucun cas à véhiculer un quelconque message et condamnons toute action irrespectueuse.<br>
        Copyright © 2024 - Tous droits réservés </p>
</body>
</html>