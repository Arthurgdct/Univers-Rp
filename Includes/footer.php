<footer>
  <div class="courgette fs-1 d-flex justify-content-center">
    <a class="text-white text-decoration-none" href="index.php">Univers Rp</a>
  </div>
  <div class="d-flex justify-content-evenly mt-4">
    <div>
      <p><a class="text-white text-decoration-none" href="index.php">Accueil</a></p>
      <p><a class="text-white text-decoration-none" href="#">Haut de la page</a></p>
    </div>
    <div>
      <?php if (isset($_SESSION['pseudo'])) { ?>
        <p><a class="text-white text-decoration-none" href="personnages.php">Personnages</a></p>
        <p><a class="text-white text-decoration-none" href="salonPersonnage.php">Jouer</a></p>
      <?php } else { ?>
        <p><a class="text-white text-decoration-none" href="inscription.php">S'inscrire</a></p>
        <p><a class="text-white text-decoration-none" href="connexion.php">Se connecter</a></p>
      <?php } ?>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <a class="me-3 fs-4" href="https://discord.gg/S3aRFu9"><i class="bi bi-discord text-white"></i></a>
    <a class="me-3 fs-4" href="https://www.instagram.com/couvarthur/"><i class="bi bi-instagram text-white"></i></a>
    <a class="me-3 fs-4" href="https://twitter.com/cawotte11"><i class="bi bi-twitter text-white"></i></a>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php if ($activePage == 'UniversRp') { ?>
  <script src="assets/js/script.js" type="text/javascript"></script>
<?php } ?>

</body>

</html>