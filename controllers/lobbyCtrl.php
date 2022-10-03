<?php
$activePage = "UniversRp";
include 'Includes/header.php';
require_once 'Models/Db.php';
require_once 'Models/Adventure.php';
require_once 'Models/Character.php';
$adven = new Adventure;
$adventure = $adven->getAdventure($_POST['adventure']);

$charac = new Character;
$characters = $charac->getCharacters($_POST['character']);

