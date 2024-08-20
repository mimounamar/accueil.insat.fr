<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semaine d'accueil 2024 - INSA de Toulouse</title>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body class="body-team-specific" style="background: url('assets/<?php echo $_COOKIE['selected_team']; ?>_bg.jpeg') repeat; background-size: 25%;">
<?php include "nav.php"; ?>
<div class="nes-container with-title text-content">
    <p class="title">La blouse, késako ?</p>
    <section class="nes-content">
        <img src="assets/blouse_cartridge.png" style="max-height: 200px">
        <div class="nes-text">
            <p>Pendant cette semaine d’aventure Pokémon, ta blouse te sera indispensable: elle sera un peu comme ton Pokédex ! Au delà d'être utile pendant tes séances de TPs, elle nous permettra de reconnaître le·la Peintre de Pokémon Acclamé·e en toi (vu que tu vas la porter sur toi pendant toute la semaine :D).</p>
            <p>Et oui, tu as décidé de rejoindre la grande famille des Insaïen·ne·s. À ce titre, tu te dois d’honorer cette ancestrale tradition pratiquée depuis des générations sur nos terres, de Kanto à Sinnoh. À noter que tu devras obligatoirement teindre ta ravissante blouse aux couleurs de ton équipe !</p>
        </div>
    </section>
</div>
<div class="nes-container with-title text-content">
    <p class="title">Les règles.</p>
    <section class="nes-content">
        <div class="nes-text-alt">
            <p>Pour t’aider dans la confection de ta blouse, voici un parchemin ancien qui te donnera les principales instructions à suivre.</p>
            <p>• Uniquement fils et aiguilles tu utiliseras.</p>
            <p>• Par toi-même décorer ta blouse tu devras, l’aide de maman et mamie tu ne demanderas donc pas. Et oui, on y est tous passés, à ton tour maintenant.</p>
            <p>• Pas de marqueurs ou de feutres, ils sont réservés aux Géniaux Donneurs d’Avis que nous sommes pour t'attribuer bonus ou malus ainsi que des tags comme le veut la tradition.</p>
            <p>• Décorer ta blouse tu devras afin de la rendre belle et unique ! Tu peux t’inspirer du schéma mais il ne s’agit pas de le copier !</p>
            <p>• On veut voir sur le devant de ta blouse ton prénom, le blason et le nom de ton lieu d'origine. À l’arrière de ta blouse, il est indispensable de mettre ton surnom (en gros et bien visible) et “INSA 62” en très gros, car tu aimes ta promo.</p>
            <!-- <p>• N’oublie pas le logo de la semaine d’accueil ! Il est tout en bas de ce mot.</p> -->
            <p>• Quant aux espaces vides, aux poches et aux manches, il faudra les combler de broderies et de fantaisies sur le thème de Pokémon aux couleurs de ton équipe ! Créatif et original tu seras, des bonus à la clé il y aura. Et bien sûr, faire preuve d’humour tu n’oublieras pas !</p>
            <p>Voici un modèle ce que nous attendons :)</p>
            <div style="text-align: center">
                <img src="assets/exemple.png" class="illustration"/>
            </div>
        </div>
    </section>
</div>
<div class="nes-container with-title text-content">
    <p class="title">Pimp Your Blouse !</p>
    <section class="nes-content">
        <div class="nes-text-alt">
            <p>La blouse est un moyen de nous reconnaître entre promos, c’est un peu notre carte d’identité ! Tu devras donc teinter et décorer ta blouse aux couleurs de ton équipe : <?php echo $TEAM_COLORS[$_COOKIE['selected_team']];?>, au cas où tu ne l’aurais toujours pas compris. Et qui sait, tu seras peut-être élu miss ou mister blouse !</p>
            <p>Voici quelques exemples pour t'inspirer ;)</p>
            <div class="pokemon-cards">
                <img src="assets/blouse_1.png" style="max-height: 350px" class="illustration-card">
                <img src="assets/blouse_2.png" style="max-height: 350px" class="illustration-card">
                <img src="assets/blouse_3.png" style="max-height: 350px" class="illustration-card">
                <img src="assets/blouse_4.png" style="max-height: 350px" class="illustration-card">
            </div>
        </div>
    </section>
</div>
<p style="font-size: 9px; margin: 15px 20%; text-align: center">Site de la semaine d'accueil 2024 pour l'INSA Toulouse. <br>
    Tous les éléments présents sur ce site sont représentés à des fins humoristiques. Nous ne cherchons en aucun cas à véhiculer un quelconque message et condamnons toute action irrespectueuse.<br>
    Copyright © 2024 - Tous droits réservés </p>
</body>
</html>