<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$activePage = "Connexion";
require_once 'Models/Db.php';
require_once 'Models/User.php';
include 'Includes/header.php';
$errors = [];
$user = new User;
//vérifie si le bouton de validation a été appuyer, si oui alors on lance la vérification des informations de connexion
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
        //si l'utilisateur est déja identifier
        if (isset($_SESSION['pseudo'])) {
            $errors['password'] = 'Vous êtes déja connecté.';
        } else {
            if ($user->loginUser()) {
                $success = 'Félicitation vous êtes connecté.';
                $_SESSION['pseudo'] = $user->pseudo;
                header('Location: index.php');
            } else {
                $errors['password'] = 'Les informations de connexion sont incorrectes';
            }
        }
    }
}
