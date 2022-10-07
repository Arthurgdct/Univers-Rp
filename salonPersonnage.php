<?php
include 'controllers/salonPersonnageCtrl.php';
?>
<main>
    <?php
    if (!empty($characters)) { ?>
        <form method="POST" action="salonAventure.php" class="mx-auto">
            <legend class="text-center my-5">Choisissez vos personnages :</legend>
            <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($characters as $charac) {
                    $i++; ?>
                    <input type="checkbox" value="<?= $charac->id ?>" name="character[]" id="<?= $charac->id ?>" class="selectCard" <?= $i == 1 ? 'checked' : '' ?>>
                    <label for="<?= $charac->id ?>" class="d-flex flex-column border border-5 rounded h-100 mt-5 col-lg-3 col-6 mx-2">
                        <div class="d-flex justify-content-center">
                            <img class="w-50 border border-1 profil-pict" src="assets/img/<?= $charac->profilPict ?>" alt="Image de profil du personnage">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="m-1 flex-column">
                                <p><?= $charac->firstname ?></p>
                                <p><?= $charac->lastname ?></p>
                            </div>
                            <div class="m-1 d-flex flex-column">
                                <p><?= $charac->age ?> ans</p>
                                <p><?= $charac->job ?></p>
                            </div>
                        </div>
                    </label>
                <?php } ?>
            </div>
            <div class="text-center mt-5">
                <input type="submit" class="btn text-white border" value="Suivant" href="salonAventure.php">
            </div>
        </form>




    <?php } else { ?>
        <div class="border border-white border-5 rounded p-3 mt-8 mb-5 text-center mx-auto">
            <p>Vous n'avez encore aucun personnage, rendez vous dans la section "Personnage" afin de créer votre premier personnage.</p>
        </div>
    <?php } ?>
</main>
<?php
include 'Includes/footer.php'
?>