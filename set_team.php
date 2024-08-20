<?php
include 'global.php';
session_start();
if(isset($_GET['selected_team']) and in_array($_GET['selected_team'], $TEAMS_ID)) {
        setcookie('selected_team', $_GET['selected_team'], time()+15780000);
}
header('Location: /~mamar');
