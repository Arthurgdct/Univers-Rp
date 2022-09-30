<?php
$activePage = 'Mes Personnages';
require_once 'Models/Db.php';
require_once 'Models/Character.php';
include 'Includes/header.php';
$perso = new Character;
$perso->user = $_SESSION['pseudo'];
$characters = $perso->getInfoRecap();

if (isset($_GET['suppr'])) {
    $id = htmlspecialchars($_GET['suppr']);
    if ($perso->user == $_SESSION['pseudo']) {
        $perso->deleteCharacter($id);
        $characters = $perso->getInfoRecap();
    } 
}
?>