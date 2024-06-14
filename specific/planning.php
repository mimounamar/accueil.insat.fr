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
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>
<body class="body-team-specific">
<?php include "nav.php"; ?>

<div class="nes-container with-title text-content">
    <p class="title">Voici le planning de ta semaine !</p>
    <section class="nes-content">
        <div class="nes-planning">
            <div class="column">
                <div class="cell header-cell nes-container" id="time-header">
                    Heure
                </div>
                <?php
                    for ($row = 7; $row <= 25; $row++) {
                        $modulo_time = $row % 24;
                        if ($modulo_time < 10) {
                            $formated_time = "0" . $modulo_time;
                        } else {
                            $formated_time = $modulo_time;
                        }
                        echo "
                        <div class='cell nes-container'>
                           {$formated_time}h00
                        </div>
                        ";
                    }
                ?>
            </div>

            <?php
            $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
            $planning = [
                [
                    // Planning du Lundi.
                    array(
                        "title" => "RDV SUR LE MAIL",
                        "start" => 7.5,
                        "end" => 8,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "ACCUEIL",
                        "start" => 8,
                        "end" => 9.5,
                        "color" => "#ffdfba"
                    ),
                    array(
                        "title" => "IZLY & LYDIA",
                        "start" => 9.5,
                        "end" => 10,
                        "color" => "#ffffba"
                    ),
                    array(
                        "title" => "REMISE À NIVEAU PHYSIQUE",
                        "start" => 10,
                        "end" => 11.5,
                        "color" => "#baffc9"
                    ),
                    array(
                        "title" => "REPAS",
                        "start" => 11.5,
                        "end" => 13,
                        "color" => "#bae1ff"
                    ),
                    array(
                        "title" => "FABCAMP",
                        "start" => 13,
                        "end" => 18,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "TEMPS LIBRE",
                        "start" => 18,
                        "end" => 21,
                        "color" => "#ffdfba"
                    ),
                    array(
                        "title" => "SOIRÉE BRISE GLACE",
                        "start" => 21,
                        "end" => 25,
                        "color" => "#ffffba"
                    ),
                ],

                [
                    // Planning du mardi
                    array(
                        "title" => "FABCAMP",
                        "start" => 8,
                        "end" => 12,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "REPAS",
                        "start" => 12,
                        "end" => 14,
                        "color" => "#bae1ff"
                    ),
                    array(
                        "title" => "FABCAMP",
                        "start" => 14,
                        "end" => 18,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "TEMPS LIBRE",
                        "start" => 18,
                        "end" => 21,
                        "color" => "#ffdfba"
                    ),
                    array(
                        "title" => "SOIRÉE PK",
                        "start" => 21,
                        "end" => 26,
                        "color" => "#ffffba"
                    ),
                ],

                [
                    // Planning du mercredi
                    array(
                        "title" => "FABCAMP",
                        "start" => 8,
                        "end" => 12,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "REPAS",
                        "start" => 12,
                        "end" => 14,
                        "color" => "#bae1ff"
                    ),
                    array(
                        "title" => "FABCAMP",
                        "start" => 14,
                        "end" => 15,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "STPI",
                        "start" => 15,
                        "end" => 17,
                        "color" => "#ffdfba"
                    ),
                    array(
                        "title" => "PARRAINAGE",
                        "start" => 17,
                        "end" => 17.5,
                        "color" => "#ffffba"
                    )
                ],

                [
                    // Planning du jeudi
                    array(
                        "title" => "RALLY - VILLE",
                        "start" => 8,
                        "end" => 12,
                        "color" => "#baffc9"
                    ),
                    array(
                        "title" => "REPAS",
                        "start" => 12,
                        "end" => 14,
                        "color" => "#bae1ff"
                    ),
                    array(
                        "title" => "RALLY - VILLE",
                        "start" => 14,
                        "end" => 19,
                        "color" => "#baffc9"
                    ),
                    array(
                        "title" => "SOIRÉE DES TALENTS",
                        "start" => 19,
                        "end" => 24,
                        "color" => "#ffffba"
                    )
                    ],
                [
                    // Planning du vendredi
                array(
                    "title" => "BENE",
                    "start" => 8,
                    "end" => 12,
                    "color" => "#BEB4C5"
                ),
                    array(
                        "title" => "REPAS",
                        "start" => 12,
                        "end" => 14,
                        "color" => "#bae1ff"
                    ),
                    array(
                        "title" => "COURSE DE CHARS",
                        "start" => 14,
                        "end" => 16,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "MISS ET MISTER BLOUSE",
                        "start" => 16,
                        "end" => 17,
                        "color" => "#ffb3ba"
                    ),
                    array(
                        "title" => "REMISE DE PRIX",
                        "start" => 16,
                        "end" => 16.5,
                        "color" => "#baffc9"
                    ),
                    array(
                        "title" => "PHOTO DE PROMO",
                        "start" => 16.5,
                        "end" => 17,
                        "color" => "#ffdfba"
                    )],
                    [
                        // Planning du samedi
                        array(
                            "title" => "WINI",
                            "start" => 7,
                            "end" => 26,
                            "color" => "#ffdfba"
                        )
                    ],
                [
                    // Planning du dimanche
                    array(
                        "title" => "WINI",
                        "start" => 7,
                        "end" => 14,
                        "color" => "#ffdfba"
                    )
                ]
            ];
            for ($k = 0; $k<7; $k++) {
                echo "
                <div class='column' data-day='{$days[$k]}'>
                    <div class='cell header-cell nes-container'>
                        {$days[$k]}
                    </div>
                ";

                foreach ($planning[$k] as $event) {
                    echo "
                        <div class='cell' style='position: absolute; top: calc(85px + ({$event['start']} - 7)*50px ); height: calc(({$event['end']} - {$event['start']})*50px) !important; width: calc(100% / 8 - 8px) ! important; background:{$event['color']};'>
                            {$event['title']}
                        </div>
                    ";
                }

                echo "</div>";
            }
            ?>
        </div>
    </section>
</div>
</body>
</html>