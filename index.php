<?php
$activePage = "Personnages";
$loggedUser = true;
$user = 'Ettowak';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Univers Rp</title>
</head>

<body>
  <header>
    <!--ajout d'une NavBar de bootstrap personnalisé.-->
    <nav class="navbar navbar-expand-lg bg-dark-blue pt-3 pb-3">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Univers Rp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
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
    <div id="bg-top" class="d-flex justify-content-center">
      <?php
      if ($activePage != "acceuil") {
      ?><h2><?= $activePage ?> </h2>
      <?php } ?>
    </div>
  </header>
  <!--ajout du carousel de bootstrap -->
  </nav>
  <div class="d-flex justify-content-center">
    <div id="carousel" class="carousel slide w-50" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/Accordeon1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/tavern.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Accordeon3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>