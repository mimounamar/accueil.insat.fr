<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semaine d'accueil 2024 - INSA de Toulouse</title>
    <link rel="stylesheet" href="../styles/common.css">
    <link rel="stylesheet" href="../styles/gameboy.css">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>
<body>
<div class="page-division" style="background: #E70013">
    <div class="gameboy power-on">
        <div class="front-plate">
            <div class="front-plate-head">
                <div class="vertical-stripe"></div>
                <div class="vertical-stripe"></div>
                <div class="vertical-stripe"></div>

                <div class="vertical-gouge vertical-gouge-1"></div>
                <div class="vertical-gouge vertical-gouge-2"></div>

                <div class="on-off">
                    <div class="spike spike-left"><div></div></div>
                    <div class="spike spike-right"><div></div></div>
                    <span>
            OFF
            <i></i>
            ON
          </span>
                </div>
            </div>

            <div class="screen-container">
                <div class="screen-headline">
                    <span>DOT MATRIX WITH STEREO SOUND</span>
                </div>

                <div class="battery-light">
                    <span>BATTERY</span>
                </div>

                <div class="screen" id="game">
                    <canvas id="mainCanvas">No Canvas Support</canvas>

                    <div id="hue"></div>


                </div>
            </div>

            <div class="logo"></div>

            <div id="controller">

                <div class="buttons-a-b">
                    <div class="button-b button-key-j" id="controller_b"></div>

                    <div class="button-a button-key-k" id="controller_a"></div>
                </div>

                <div class="start button-key-m" id="controller_start"><div></div></div>

                <div class="select button-key-n" id="controller_select"><div></div></div>

                <div class="cross-container">
                    <div class="spike"><div></div></div>
                    <div class="spike"><div></div></div>
                    <div class="spike"><div></div></div>
                    <div class="spike"><div></div></div>

                    <div class="cross" id="controller_dpad">
                        <div class="top-down">
                            <div class="button-top button-key-w" id="controller_up">
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                            </div>
                            <div class="button-bottom button-key-s" id="controller_down">
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                            </div>
                        </div>

                        <div class="left-right">
                            <div class="button-left button-key-a" id="controller_left">
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                            </div>
                            <div class="button-right button-key-d" id="controller_right">
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                                <div class="button-stripe"></div>
                            </div>
                        </div>
                        <div class="cross-middle-bumb"></div>
                    </div>
                </div>

            </div>

            <div class="speaker">
                <div><div class="speaker-inner-shadow"></div></div>
                <div><div class="speaker-inner-shadow"></div></div>
                <div><div class="speaker-inner-shadow"></div></div>
                <div><div class="speaker-inner-shadow"></div></div>
                <div><div class="speaker-inner-shadow"></div></div>
                <div><div class="speaker-inner-shadow"></div></div>
            </div>

            <div class="phones" id="volume-switch">
                <div class="vertical-stripe"></div>
                <div class="vertical-stripe"></div>
                <div class="vertical-stripe"></div>
                <i></i>
                <span>PHONES</span>
            </div>

        </div>

        <div class="power-button"><div></div></div>

        <script>
            const audio = new Audio('assets/nggyu.mp3');
            document.getElementById('controller_start').addEventListener('click', ()=>{
                audio.play()

            })

            const customControls = {}
            element = document.getElementById('mainCanvas')
            document.getElementById('mainCanvas').style.width = '100%';
            document.getElementById('mainCanvas').style.height = '100%';


        </script>
        <script src="../game/binjgb.js"></script>
        <script src="../game/js/script.js"></script>
    </div>
</div>

<div class="page-division" id="cartridge-choice">
    <h1>Il est temps de rejoindre ton équipe.</h1>
    <h2>Pour ton choix, base-toi sur l'équipe que tu as reçue par mail !</h2>
    <div id="cartridges-container">
        <?php
        include 'global.php';
        foreach ($TEAMS_ID as $team_id) {
            echo "
            <button class='cartridge-click' onclick='window.location.href=\"set_team.php?selected_team={$team_id}\"'>
            <img src='../assets/{$team_id}_game.png' class='cartridge-click' alt='Équipe {$TEAMS_DISPLAY_NAMES[$team_id]}'>
        </button>
            ";
        }
        ?>
    </div>
    <p style="font-size: 9px; margin: 0 20%">Site de la semaine d'accueil 2024 pour l'INSA Toulouse. <br>
        Tous les éléments présents sur ce site sont représentés à des fins humoristiques. Nous ne cherchons en aucun cas à véhiculer un quelconque message et condamnons toute action irrespectueuse.<br>
        Copyright © 2024 - Tous droits réservés </p>
</div>
</body>
</html>
