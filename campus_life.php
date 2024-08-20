<?php
include 'global.php';
session_start();
if(isset($_COOKIE['selected_team']) and in_array($_COOKIE['selected_team'], $TEAMS_ID)) {
    include 'specific/campus_life.php';
} else {
    header('Location: /~mamar');
}