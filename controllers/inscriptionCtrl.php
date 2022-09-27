<?php
$activePage = 'Inscription';
require_once 'Models/Db.php';
require_once 'Models/User.php';
include 'Includes/header.php';

$errors = [];
$user = new User;
if (isset($_POST['validForm'])) {
    if (!empty($_POST['pseudo'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        if (strlen($pseudo) <= 25) {
            $user->pseudo = $pseudo;
        } else {
            $errors['pseudo'] = 'Le Pseudonyme doit contenir maximum 25 caractères.';
        }
    } else {
        $errors['pseudo'] = 'Merci de renseigner un pseudonyme.';
    }
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $user->email = $email;
        } else {
            $errors['email'] = 'Merci de vérifier votre adresse email.';
        }
    } else {
        $errors['email'] = 'Merci de renseigner un email.';
    }
    if (!empty($_POST['password'])) {
        if (strlen($_POST['password']) >= 10) {
            if (!empty($_POST['passwordVerif'])) {
                if ($_POST['password'] == $_POST['passwordVerif']) {
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->password = $password;
                } else {
                    $errors['password'] = 'Attention les mots de passes ne correspondent pas.';
                }
            } else {
                $errors['password'] = 'Merci de renseigner un mot de passe de confirmation.';
            }
        } else {
            $errors['password'] = 'Attention le mot de passe doit être de au moins 10 caractères';
        }
    }else{
        $errors['password'] = 'Merci de renseigner un mot de passe.';
    }
    if (empty($errors)) {
        if (!$user->emailExist()) {
            $success = 'Félicitation votre compte a été créé.';
            $user->createUser();
        }
    }
}
