<?php
require_once 'Models/Db.php';
require_once 'Models/Character.php';
$activePage = 'Nouveau Personnage';
$errors = [];
$_SESSION['errors'] = [];
$character = new Character;
require_once 'Includes/header.php';

if (isset($_POST['validForm1'])) {
    if (!empty($_POST['firstname'])) {
        $_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
    } else {
        $errors['firstname'] = 'Merci d\'entré un prénom.';
    }
    if (!empty($_POST['lastname'])) {
        $_SESSION['lastname'] = htmlspecialchars($_POST['lastname']);
    } else {
        $errors['lastname'] = 'Merci d\'entré un nom.';
    }
    if (!empty($_POST['gender'])) {
        $_SESSION['gender'] = htmlspecialchars($_POST['gender']);
    } else {
        $errors['gender'] = 'Merci d\'entré un sexe.';
    }
    if (!empty($_POST['job'])) {
        $_SESSION['job'] = htmlspecialchars($_POST['job']);
    } else {
        $errors['job'] = 'Merci d\'entré un Métier.';
    }
    if (!empty($_POST['age'])) {
        $age = htmlspecialchars($_POST['age']);
        if (is_numeric($age)) {
            $_SESSION['age'] = $age;
        } else {
            $errors['age'] = 'Merci d\'entré un numéro comme age.';
        }
    } else {
        $errors['age'] = 'Merci d\'entré un age.';
    }
    if (!empty($_POST['origin'])) {
        $origin = htmlspecialchars($_POST['origin']);
        if ($origin == 1 || $origin == 2 || $origin == 3 || $origin == 4) {
            $_SESSION['origin'] = $_POST['origin'];
        } else {
            $errors['origin'] = 'Merci d\'entré une valeur correct.';
        }
    } else {
        $errors['origin'] = 'Merci de selectionné l\'origine de votre personnage.';
    }
    if (!empty($_POST['profilPict'])) {
        $profilPict = htmlspecialchars($_POST['profilPict']);
        if ($profilPict == 1 || $profilPict == 2 || $profilPict == 3 || $profilPict == 4 || $profilPict == 5 || $profilPict == 6 || $profilPict == 7 || $profilPict == 8) {
            $_SESSION['profilPict'] = $_POST['profilPict'];
        } else {
            $errors['profilPict'] = 'Merci d\'entré une valeur correct.';
        }
    } else {
        $errors['profilPict'] = 'Merci de selectionné une image pour votre personnage.';
    }
    /*si il y a des erreurs dans la page alors, on stock les messages correspondant dans la variable session puis on redirige
    notre utilisateur sur la meme page en affichant ces erreurs.*/

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: nouveauPersonnage.php');
    }else{
        $_SESSION['errors'] = [];
    }
}
if (isset($_POST['validForm2'])) {
    if (!empty($_POST['destiny'])) {
        $destiny = htmlspecialchars($_POST['destiny']);
        if (is_numeric($destiny)) {
            $_SESSION['destiny'] = htmlspecialchars($_POST['destiny']);
        } else {
            $errors['destiny'] = 'Merci d\'entré un numéro comme destiné.';
        }
    } else {
        $errors['destiny'] = 'Merci d\'entré une valeur pour la destiné/chance de votre personnage.';
    }
    if (!empty($_POST['courage'])) {
        $courage = htmlspecialchars($_POST['courage']);
        if (is_numeric($courage)) {
            $_SESSION['courage'] = htmlspecialchars($_POST['courage']);
        } else {
            $errors['courage'] = 'Merci d\'entré un numéro comme valeur de courage.';
        }
    } else {
        $errors['courage'] = 'Merci d\'entré une valeur pour le courage de votre personnage.';
    }
    if (!empty($_POST['intelligence'])) {
        $intelligence = htmlspecialchars($_POST['intelligence']);
        if (is_numeric($intelligence)) {
            $_SESSION['intelligence'] = htmlspecialchars($_POST['intelligence']);
        } else {
            $errors['intelligence'] = 'Merci d\'entré un numéro comme valeur d\'intelligence de votre personnage.';
        }
    } else {
        $errors['intelligence'] = 'Merci d\'entré une valeur pour l\'intelligence.';
    }
    if (!empty($_POST['charisma'])) {
        $charisma = htmlspecialchars($_POST['charisma']);
        if (is_numeric($charisma)) {
            $_SESSION['charisma'] = htmlspecialchars($_POST['charisma']);
        } else {
            $errors['charisma'] = 'Merci d\'entré un numéro comme valeur de charisme.';
        }
    } else {
        $errors['charisma'] = 'Merci d\'entré une valeur pour le charisme de votre personnage.';
    }
    if (!empty($_POST['agility'])) {
        $agility = htmlspecialchars($_POST['agility']);

        if (is_numeric($agility)) {
            $_SESSION['agility'] = htmlspecialchars($_POST['agility']);
        } else {
            $errors['agility'] = 'Merci d\'entré un numéro comme valeur d\'agilité.';
        }
    } else {
        $errors['agility'] = 'Merci d\'entré une valeur pour l\'agilité de votre personnage.';
    }
    if (!empty($_POST['strength'])) {
        $strength = htmlspecialchars($_POST['strength']);

        if (is_numeric($strength)) {
            $_SESSION['strength'] = htmlspecialchars($_POST['strength']);
        } else {
            $errors['strength'] = 'Merci d\'entré un numéro comme valeur de force.';
        }
    } else {
        $errors['strength'] = 'Merci d\'entré une valeur pour la force de votre personnage.';
    }
    if (!empty($_POST['attack'])) {
        $attack = htmlspecialchars($_POST['attack']);
        if (is_numeric($attack)) {
            $_SESSION['attack'] = htmlspecialchars($_POST['attack']);
        } else {
            $errors['attack'] = 'Merci d\'entré un numéro comme valeur d\'attaque.';
        }
    } else {
        $errors['attack'] = 'Merci d\'entré une valeur d\'attaque pour votre personnage.';
    }
    if (!empty($_POST['defense'])) {
        $defense = htmlspecialchars($_POST['defense']);
        if (is_numeric($defense)) {
            $_SESSION['defense'] = htmlspecialchars($_POST['defense']);
        } else {
            $errors['defense'] = 'Merci d\'entré un numéro comme valeur de défense.';
        }
    } else {
        $errors['defense'] = 'Merci d\'entré une valeur pour la défense de votre personnage.';
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: nouveauPersonnageStat.php');
    }else{
        $_SESSION['errors'] = [];
    }
}
if (isset($_POST['validForm3'])) {
    if (!empty($_POST['armors'])) {
        $_SESSION['armors'] = htmlspecialchars($_POST['armors']);
        $character->armors = htmlspecialchars($_POST['armors']);
    } else {
        $errors['armors'] = 'Merci d\'entré une pièce d\'equipement pour votre personnage.';
    }
    if (!empty($_POST['spells'])) {
        $_SESSION['spells'] = htmlspecialchars($_POST['spells']);
        $character->spells = htmlspecialchars($_POST['spells']);
    } else {
        $errors['spells'] = 'Merci d\'entré un sort ou une compétence.';
    }
    if (!empty($_POST['weapons'])) {
        $_SESSION['weapons'] = htmlspecialchars($_POST['weapons']);
        $character->weapons = htmlspecialchars($_POST['weapons']);
    } else {
        $errors['weapons'] = 'Merci d\'entré le nom d\'une arme pour votre personnage.';
    }
    if (!empty($_POST['items'])) {
        $_SESSION['items'] = htmlspecialchars($_POST['items']);
        $character->items = htmlspecialchars($_POST['items']);
    } else {
        $errors['items'] = 'Merci d\'entré un consommable.';
    }
    if (!empty($_POST['background'])) {
        $_SESSION['background'] = htmlspecialchars($_POST['background']);
        $character->background = htmlspecialchars($_POST['background']);
    } else {
        $errors['background'] = 'N\'oubliez pas de remplir l\'histoire de votre personnage.';
    }
    if (empty($errors)) {
        $character->firstname = $_SESSION['firstname'];
        $character->lastname = $_SESSION['lastname'];
        $character->age = $_SESSION['age'];
        $character->job = $_SESSION['job'];
        $character->gender = $_SESSION['gender'];
        $character->origin = $_SESSION['origin'];
        $character->profilPict = $_SESSION['profilPict'];
        $character->defense = $_SESSION['defense'];
        $character->attack = $_SESSION['attack'];
        $character->strength = $_SESSION['strength'];
        $character->agility = $_SESSION['agility'];
        $character->charisma = $_SESSION['charisma'];
        $character->intelligence = $_SESSION['intelligence'];
        $character->courage = $_SESSION['courage'];
        $character->destiny = $_SESSION['destiny'];
        $character->user = $_SESSION['pseudo'];
        $success = 'Félicitation votre nouveau personnage a été créé.';
        $character->createCharacter();
        $_SESSION['firstname'] = null;
        $_SESSION['lastname'] = null;
        $_SESSION['age'] = null;
        $_SESSION['job'] = null;
        $_SESSION['gender'] = null;
        $_SESSION['origin'] = null;
        $_SESSION['profilPict'] = null;
        $_SESSION['defense'] = null;
        $_SESSION['attack'] = null;
        $_SESSION['strength'] = null;
        $_SESSION['agility'] = null;
        $_SESSION['charisma'] = null;
        $_SESSION['intelligence'] = null;
        $_SESSION['courage'] = null;
        $_SESSION['destiny'] = null;
        $_SESSION['background'] = null;
        $_SESSION['items'] = null;
        $_SESSION['weapons'] = null;
        $_SESSION['spells'] = null;
        $_SESSION['armors'] = null;
        $_SESSION['errors'] = [];
        header('Location: personnages.php');
    } else {
        $_SESSION['errors'] = $errors;
        header('Location: nouveauPersonnageEquipement.php');
    }
}