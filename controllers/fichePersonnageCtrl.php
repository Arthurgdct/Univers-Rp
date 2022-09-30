<?php
require_once 'Models/Db.php';
require_once 'Models/Character.php';
$activePage = 'Fiche Personnage';
$errors = [];
$character = new Character;
require_once 'Includes/header.php';

if (isset($_SESSION['pseudo'])) {
    $user = $_SESSION['pseudo'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
        if ($character->haveThisCharacter($id, $user)) {
            $characterById = $character->getCharacterById($id);
            if (isset($_POST['validForm'])) {
                if (!empty($_POST['firstname'])) {
                    $character->firstname = htmlspecialchars($_POST['firstname']);
                } else {
                    $errors['firstname'] = 'Merci d\'entrer un prénom.';
                }
                if (!empty($_POST['lastname'])) {
                    $character->lastname = htmlspecialchars($_POST['lastname']);
                } else {
                    $errors['lastname'] = 'Merci d\'entrer un nom.';
                }
                if (!empty($_POST['gender'])) {
                    $character->gender = htmlspecialchars($_POST['gender']);
                } else {
                    $errors['gender'] = 'Merci d\'entrer un sexe.';
                }
                if (!empty($_POST['job'])) {
                    $character->job = htmlspecialchars($_POST['job']);
                } else {
                    $errors['job'] = 'Merci d\'entrer un Métier.';
                }
                if (!empty($_POST['age'])) {
                    $age = htmlspecialchars($_POST['age']);
                    if (is_numeric($age)) {
                        $character->age = $age;
                    } else {
                        $errors['age'] = 'Merci d\'entrer un numéro comme age.';
                    }
                } else {
                    $errors['age'] = 'Merci d\'entrer un age.';
                }
                if (!empty($_POST['origin'])) {
                    $origin = htmlspecialchars($_POST['origin']);
                    if ($origin == 1 || $origin == 2 || $origin == 3 || $origin == 4) {
                        $character->origin = $origin;
                    } else {
                        $errors['origin'] = 'Merci d\'entrer une valeur correct.';
                    }
                } else {
                    $errors['origin'] = 'Merci de selectionné l\'origine de votre personnage.';
                }
                if (!empty($_POST['profilPict'])) {
                    $profilPict = htmlspecialchars($_POST['profilPict']);
                    if ($profilPict == 1 || $profilPict == 2 || $profilPict == 3 || $profilPict == 4 || $profilPict == 5 || $profilPict == 6 || $profilPict == 7 || $profilPict == 8) {
                        $character->profilPict = $profilPict;
                    } else {
                        $errors['profilPict'] = 'Merci d\'entrer une valeur correct.';
                    }
                } else {
                    $errors['profilPict'] = 'Merci de selectionné une image pour votre personnage.';
                }
                if (!empty($_POST['destiny'])) {
                    $destiny = htmlspecialchars($_POST['destiny']);
                    if (is_numeric($destiny)) {
                        $character->destiny = htmlspecialchars($_POST['destiny']);
                    } else {
                        $errors['destiny'] = 'Merci d\'entrer un numéro comme destiné.';
                    }
                } else {
                    $errors['destiny'] = 'Merci d\'entrer une valeur pour la destiné/chance de votre personnage.';
                }
                if (!empty($_POST['courage'])) {
                    $courage = htmlspecialchars($_POST['courage']);
                    if (is_numeric($courage)) {
                        $character->courage = htmlspecialchars($_POST['courage']);
                    } else {
                        $errors['courage'] = 'Merci d\'entrer un numéro comme valeur de courage.';
                    }
                } else {
                    $errors['courage'] = 'Merci d\'entrer une valeur pour le courage de votre personnage.';
                }
                if (!empty($_POST['intelligence'])) {
                    $intelligence = htmlspecialchars($_POST['intelligence']);
                    if (is_numeric($intelligence)) {
                        $character->intelligence = htmlspecialchars($_POST['intelligence']);
                    } else {
                        $errors['intelligence'] = 'Merci d\'entrer un numéro comme valeur d\'intelligence de votre personnage.';
                    }
                } else {
                    $errors['intelligence'] = 'Merci d\'entrer une valeur pour l\'intelligence.';
                }
                if (!empty($_POST['charisma'])) {
                    $charisma = htmlspecialchars($_POST['charisma']);
                    if (is_numeric($charisma)) {
                        $character->charisma = htmlspecialchars($_POST['charisma']);
                    } else {
                        $errors['charisma'] = 'Merci d\'entrer un numéro comme valeur de charisme.';
                    }
                } else {
                    $errors['charisma'] = 'Merci d\'entrer une valeur pour le charisme de votre personnage.';
                }
                if (!empty($_POST['agility'])) {
                    $agility = htmlspecialchars($_POST['agility']);
                    if (is_numeric($agility)) {
                        $character->agility = htmlspecialchars($_POST['agility']);
                    } else {
                        $errors['agility'] = 'Merci d\'entrer un numéro comme valeur d\'agilité.';
                    }
                } else {
                    $errors['agility'] = 'Merci d\'entrer une valeur pour l\'agilité de votre personnage.';
                }
                if (!empty($_POST['strength'])) {
                    $strength = htmlspecialchars($_POST['strength']);

                    if (is_numeric($strength)) {
                        $character->strength = htmlspecialchars($_POST['strength']);
                    } else {
                        $errors['strength'] = 'Merci d\'entrer un numéro comme valeur de force.';
                    }
                } else {
                    $errors['strength'] = 'Merci d\'entrer une valeur pour la force de votre personnage.';
                }
                if (!empty($_POST['attack'])) {
                    $attack = htmlspecialchars($_POST['attack']);
                    if (is_numeric($attack)) {
                        $character->attack = htmlspecialchars($_POST['attack']);
                    } else {
                        $errors['attack'] = 'Merci d\'entrer un numéro comme valeur d\'attaque.';
                    }
                } else {
                    $errors['attack'] = 'Merci d\'entrer une valeur d\'attaque pour votre personnage.';
                }
                if (!empty($_POST['defense'])) {
                    $defense = htmlspecialchars($_POST['defense']);
                    if (is_numeric($defense)) {
                        $character->defense = htmlspecialchars($_POST['defense']);
                    } else {
                        $errors['defense'] = 'Merci d\'entrer un numéro comme valeur de défense.';
                    }
                } else {
                    $errors['defense'] = 'Merci d\'entrer une valeur pour la défense de votre personnage.';
                }
                if (!empty($errors)) {
                    $_SESSION['errors'] = $errors;
                } else {
                    $_SESSION['errors'] = [];
                }
                if (!empty($_POST['armors'])) {
                    $character->armors = htmlspecialchars($_POST['armors']);
                } else {
                    $errors['armors'] = 'Merci d\'entrer une pièce d\'equipement pour votre personnage.';
                }
                if (!empty($_POST['spells'])) {
                    $character->spells = htmlspecialchars($_POST['spells']);
                } else {
                    $errors['spells'] = 'Merci d\'entrer un sort ou une compétence.';
                }
                if (!empty($_POST['weapons'])) {
                    $character->weapons = htmlspecialchars($_POST['weapons']);
                } else {
                    $errors['weapons'] = 'Merci d\'entrer le nom d\'une arme pour votre personnage.';
                }
                if (!empty($_POST['items'])) {
                    $character->items = htmlspecialchars($_POST['items']);
                } else {
                    $errors['items'] = 'Merci d\'entrer un consommable.';
                }
                if (!empty($_POST['background'])) {
                    $character->background = htmlspecialchars($_POST['background']);
                } else {
                    $errors['background'] = 'N\'oubliez pas de remplir l\'histoire de votre personnage.';
                }
                if (empty($errors)) {
                    $character->modifyCharacter($id);
                    header('Location: personnages.php');
                } else {
                    header("Location: fichePersonnage.php?id=$_SESSION[id]");
                }
            }
        } else {
            $errors['409'] = 'La requête ne peut être traitée dans l\'état actuel';
        }
    } else {
        $errors['409'] = 'La requête ne peut être traitée dans l\'état actuel';
    }
} else {
    $errors['401'] = 'Accès à la ressource refusé, vérifier si vous êtes bien connecter.';
}
