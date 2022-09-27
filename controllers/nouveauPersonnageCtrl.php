<?php
require_once 'Models/Db.php';
require_once 'Models/Character.php';
$activePage = 'Nouveau Personnage';
$errors = [];
$character = new Character;
include 'Includes/header.php';

if (isset($_POST['validForm'])) {
    if (!empty($_POST['firstname'])) {
        $character->firstname = htmlspecialchars($_POST['firstname']);
    } else {
        $errors['firstname'] = 'Merci d\'entré un prénom.';
    }
    if (!empty($_POST['lastname'])) {
        $character->lastname = htmlspecialchars($_POST['lastname']);
    } else {
        $errors['lastname'] = 'Merci d\'entré un nom.';
    }
    if (!empty($_POST['gender'])) {
        $character->gender = htmlspecialchars($_POST['gender']);
    } else {
        $errors['gender'] = 'Merci d\'entré un sexe.';
    }
    if (!empty($_POST['job'])) {
        $character->job = htmlspecialchars($_POST['job']);
    } else {
        $errors['job'] = 'Merci d\'entré un Métier.';
    }
    if (!empty($_POST['age'])) {
        $age = htmlspecialchars($_POST['age']);
        if (is_int($age)) {
            $character->age = $age;
        } else {
            $errors['age'] = 'Merci d\'entré un numéro comme age.';
        }
    } else {
        $errors['age'] = 'Merci d\'entré un age.';
    }
    if (isset($etape)) {
        if ($etape >= 1) {
        } else {
            if (!empty($_POST['destiny'])) {
                $destiny = htmlspecialchars($_POST['destiny']);
                if (is_int($destiny)) {
                    $character->destiny = $destiny;
                } else {
                    $errors['destiny'] = 'Merci d\'entré un numéro comme destiné.';
                }
            } else {
                $errors['destiny'] = 'Merci d\'entré un numéro comme valeur pour la destiné/chance de votre personnage.';
            }
            if (!empty($_POST['courage'])) {
                $courage = htmlspecialchars($_POST['courage']);
                if (is_int($courage)) {
                    $character->courage = $courage;
                } else {
                    $errors['courage'] = 'Merci d\'entré un numéro comme valeur de courage.';
                }
            } else {
                $errors['courage'] = 'Merci d\'entré une valeur pour le courage de votre personnage.';
            }
            if (!empty($_POST['intelligence'])) {
                $intelligence = htmlspecialchars($_POST['intelligence']);
                if (is_int($intelligence)) {
                    $character->intelligence = $intelligence;
                } else {
                    $errors['intelligence'] = 'Merci d\'entré un numéro comme valeur d\'intelligence de votre personnage.';
                }
            } else {
                $errors['intelligence'] = 'Merci d\'entré une valeur pour l\'intelligence.';
            }
            if (!empty($_POST['charisma'])) {
                $charisma = htmlspecialchars($_POST['charisma']);
                if (is_int($charisma)) {
                    $character->charisma = $charisma;
                } else {
                    $errors['charisma'] = 'Merci d\'entré un numéro comme valeur de charisme.';
                }
            } else {
                $errors['charisma'] = 'Merci d\'entré une valeur pour le charisme de votre personnage.';
            }
            if (!empty($_POST['agility'])) {
                $agility = htmlspecialchars($_POST['agility']);
                if (is_int($agility)) {
                    $character->agility = $agility;
                } else {
                    $errors['agility'] = 'Merci d\'entré un numéro comme valeur d\'agilité.';
                }
            } else {
                $errors['agility'] = 'Merci d\'entré une valeur pour l\'agilité de votre personnage.';
            }
            if (!empty($_POST['strenght'])) {
                $strenght = htmlspecialchars($_POST['strenght']);
                if (is_int($strenght)) {
                    $character->strenght = $strenght;
                } else {
                    $errors['strenght'] = 'Merci d\'entré un numéro comme valeur de force.';
                }
            } else {
                $errors['strenght'] = 'Merci d\'entré une valeur pour la force de votre personnage.';
            }
            if (!empty($_POST['attack'])) {
                $attack = htmlspecialchars($_POST['attack']);
                if (is_int($attack)) {
                    $character->attack = $attack;
                } else {
                    $errors['attack'] = 'Merci d\'entré un numéro comme valeur d\'attaque.';
                }
            } else {
                $errors['attack'] = 'Merci d\'entré une valeur d\'attaque pour votre personnage.';
            }
            if (!empty($_POST['defense'])) {
                $defense = htmlspecialchars($_POST['defense']);
                if (is_int($defense)) {
                    $character->defense = $defense;
                } else {
                    $errors['defense'] = 'Merci d\'entré un numéro comme valeur de défense.';
                }
            } else {
                $errors['defense'] = 'Merci d\'entré une valeur pour la défense de votre personnage.';
            }
        }
        if ($etape >= 2) {
            if (!empty($_POST['armors'])) {
                $character->armors = htmlspecialchars($_POST['armors']);
            } else {
                $errors['armors'] = 'Merci d\'entré un prénom.';
            }
            if (!empty($_POST['spells'])) {
                $character->spells = htmlspecialchars($_POST['spells']);
            } else {
                $errors['spells'] = 'Merci d\'entré un prénom.';
            }
            if (!empty($_POST['weapons'])) {
                $character->weapons = htmlspecialchars($_POST['weapons']);
            } else {
                $errors['weapons'] = 'Merci d\'entré un prénom.';
            }
            if (!empty($_POST['items'])) {
                $character->items = htmlspecialchars($_POST['items']);
            } else {
                $errors['items'] = 'Merci d\'entré un prénom.';
            }
            if (!empty($_POST['origin'])) {
                $origin = htmlspecialchars($_POST['origin']);
                if (is_int($origin)) {
                    $character->origin = $origin;
                } else {
                    $errors['origin'] = 'Merci d\'entré une valeur correct.';
                }
            } else {
                $errors['origin'] = 'Merci de selectionné l\'origine de votre personnage.';
            }
            if (!empty($_POST['background'])) {
                $character->background = htmlspecialchars($_POST['background']);
            } else {
                $errors['background'] = 'N\'oubliez pas de remplir l\'histoire de votre personnage.';
            }
            if (empty($errors)) {
                $success = 'Félicitation votre nouveau personnage a été créé.';
                $character->createCharacter();
            }
        }
    }
}
