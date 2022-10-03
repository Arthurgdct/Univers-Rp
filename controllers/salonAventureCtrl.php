<?php

$activePage = 'Choix de l\'aventure';
require_once 'Models/Db.php';
require_once 'Models/Adventure.php';
include 'Includes/header.php';
$adven = new Adventure;
$i = 0;
$adventures = $adven->getAdventureInfo();