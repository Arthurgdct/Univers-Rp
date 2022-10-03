<?php
include 'controllers/salonPersonnageCtrl.php';
?>
<main>
    <?php
    if (!empty($characters)) { ?>
        <form method="POST" action="salonAventure.php" class="mx-auto">
            <legend class="text-center mt-5">Choisissez vos personnages.</legend>
            <div class="d-lg-flex flex-row">

                <?php foreach ($characters as $charac) {
                    $i++; ?>
                    <input type="checkbox" value="<?= $charac->id ?>" name="character[]" id="<?= $charac->id ?>" class="selectCard" <?= $i == 1 ? 'checked' : '' ?>>
                    <label for="<?= $charac->id ?>" class="d-flex flex-column w-25-md border border-5 rounded h-100 mt-5 mx-auto">
                        <div class="d-flex justify-content-center">
                            <img class="w-50 border border-1" src="assets/img/<?= $charac->profilPict ?>" alt="Image de profil du personnage">
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




    <?php } ?>
</main>
<?php
include 'Includes/footer.php'
?>