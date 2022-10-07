<?php session_start();
if ($activePage == 'Déconnexion') {
  unset($_SESSION['pseudo']);
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Univers Rp</title>
</head>

<body class="bg-dark-blue text-white">
  <header>
    <!--ajout d'une NavBar de bootstrap personnalisé.-->
    <nav class="navbar navbar-expand-lg bg-dark-blue fixed-top pt-3 pb-3">
      <div class="container-fluid">
        <a class="navbar-brand text-white courgette" href="index.php">Univers Rp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-white rounded"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <!--Suivant si l'utilisateur est connecté, la navbar s'adapte-->
            <?php if (isset($_SESSION['pseudo'])) { ?>
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="personnages.php">Personnages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="salonPersonnage.php">Jouer</a>
              </li>
              <li>
                <a class="nav-link text-white" href="profil.php"><?= $_SESSION['pseudo'] ?></a>
              </li>
              <li>
                <a class="nav-link text-white" href="deconnexion.php">Déconnexion</a>
              </li>
            <?php } else { ?>
              <li><a class="nav-link text-white" href="connexion.php">Se connecter</a></li>
              <li><a class="nav-link text-white" href="inscription.php">S'inscrire</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="bg-top text-center">
      <!--Définition de la page active via le Controller puis affichage du nom dans le header.-->
      <?php
      if ($activePage) { ?>
        <h2 class="text-white courgette mt-3"><?= $activePage ?></h2>
        <?php
        if ($activePage == 'Bienvenue sur UniversRp') { ?>
          <p class="m-3">Le site qui va remplacer votre plateau de jeu et vos crayons !</p>
      <?php }
      } ?>
    </div>
  </header>