<?php
include 'controllers/indexCtrl.php'
?>
<main>
  <!--starting carousel bootstrap -->
  <div class="d-flex justify-content-center">
    <div id="carousel" class="carousel slide w-100" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/Carousselle1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Carousselle2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Carousselle3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Precédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
  </div>
  <!-- end carousel -->
  <!-- Starting engagement promo -->
  <div class="d-flex justify-content-around mt-5 mb-5 position-relative">
    <div class="w-25 border border-white border-5 rounded m-1 homeCard courgette"><img class="w-100" src="assets/img/2328493.png" alt="image de chevalier"><p class="text-center">Envie de Role Play mais pas de materiel ? Pas de soucis !</p></div>
    <div class="w-25 border border-white border-5 rounded m-1 homeCard courgette"><img class="w-100" src="assets/img/Adventure-Map-icon.png" alt="Carte au trésor"><p class="text-center">Crée vos propres Personnages et partez a l'aventure !</p></div>
    <div class="w-25 border border-white border-5 rounded m-1 homeCard courgette"><img class="w-100" src="assets/img/JD-02-512.png" alt="pieces d'or"><p class="text-center">Créer vous dès maintenant un compte gratuitement !</p></div>
  </div>
  <a href="inscription.php" class="btn border-white border-5 text-white w-50 position-absolute start-50 translate-middle">S'inscrire !</a>
</main>

<?php
include 'Includes/footer.php'
?>