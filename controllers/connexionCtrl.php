<?php

$activePage = "Connexion";
require_once 'Models/Db.php';
require_once 'Models/User.php';
include 'Includes/header.php';
$errors = [];
$user = new User;
if (isset($_POST['validForm'])) {

    if (!empty($_POST['pseudo'])) {
        $user->pseudo = htmlspecialchars($_POST['pseudo']);

        if (!empty($_POST['password'])) {
            $user->password = $_POST['password'];
        } else {
            $errors['password'] = 'Le mot de passe doit etre rempli.';
        }
    } else {
        $errors['pseudo'] = 'Merci de renseigner un pseudonyme.';
    }
    if (empty($errors)) {
        if (isset($_SESSION['pseudo'])) {
            $errors['password'] = 'Vous êtes déja connecté.';
        } else {
            if ($user->loginUser()) {
                $success = 'Félicitation vous êtes connecté.';
                $_SESSION['pseudo'] = $user->pseudo;
            } else {
                $errors['password'] = 'Les informations de connexion sont incorrectes';
            }
        }
    }
}
