<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Univers Rp</title>
</head>

<body class="bg-dark-blue">
  <header>
    <!--ajout d'une NavBar de bootstrap personnalisé.-->
    <nav class="navbar navbar-expand-lg bg-dark-blue fixed-top pt-3 pb-3">
      <div class="container-fluid">
        <a class="navbar-brand text-white courgette" href="#">Univers Rp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <?php if ($loggedUser) { ?>
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="#">Personnages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Jouer</a>
              </li> <?php } ?>
            <?php if ($loggedUser) { ?>
              <li><a class="nav-link text-white" href="#"><?= $user ?></a></li>
            <?php } else { ?>
              <li><a class="nav-link text-white" href="#">Se connecter</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="d-flex justify-content-center bg-top">
      <?php
      if ($activePage) {
      ?><h2 class="text-white courgette mt-3"><?= $activePage ?></h2>
      <?php } ?>
    </div>
  </header>
  </nav>