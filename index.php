<?php
include 'controllers/indexCtrl.php'
?>
<main>
  <div>
  </div>
  <!--starting carousel bootstrap -->
  <div class="d-flex justify-content-center mt-3 mx-auto border border-white border-5 rounded w-50-lg">
    <div id="carousel" class="carousel slide w-100" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/Carousselle1.jpg" class="d-block w-100" alt="Image de démonstration d'une carte">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Carousselle2.jpg" class="d-block w-100" alt="Image de démonstration d'une carte">
        </div>
        <div class="carousel-item">
          <img src="assets/img/Carousselle3.jpg" class="d-block w-100" alt="Image de démonstration d'une carte">
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
  <div class="d-flex justify-content-around mt-5 mb-5 position-relative w-50-lg mx-auto">
    <div class="border border-white border-5 rounded m-1 w-25 p-2">
      <img class="w-100" src="assets/img/2328493.png" alt="image de chevalier">
      <p class="text-center my-auto">Envie de Role Play mais pas de materiel ? Pas de soucis !</p>
    </div>
    <div class="border border-white border-5 rounded m-1 w-25 p-2">
      <img class="w-100" src="assets/img/Adventure-Map-icon.png" alt="Carte au trésor">
      <p class="text-center my-auto">Crée vos propres Personnages et partez a l'aventure !</p>
    </div>
    <div class="border border-white border-5 rounded m-1 w-25 p-2">
      <img class="w-100" src="assets/img/JD-02-512.png" alt="pieces d'or">
      <p class="text-center my-auto">Créer vous dès maintenant un compte gratuit !</p>
    </div>
  </div>
  <a href="inscription.php" class="btn border-white border-5 text-white w-50 position-absolute start-50 translate-middle">S'inscrire !</a>
</main>

<?php
include 'Includes/footer.php'
?>