<?php
include 'controllers/salonPersonnageCtrl.php'
?>
<main>
    <div class="d-md-flex">
        <?php
        if (!empty($characters)) {
            foreach ($characters as $charac) { ?>
                <div class="d-flex flex-column w-25-md mx-auto border border-5 rounded mt-5">
                    <div class="d-flex justify-content-center">
                        <img class="w-50 border border-1" src="assets/img/<?= $charac['profilImg'] ?>" alt="Image de profil du personnage">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="m-1 flex-column">
                            <p><?= $charac['firstname'] ?></p>
                            <p><?= $charac['lastname'] ?></p>
                        </div>
                        <div class="m-1 d-flex flex-column">
                            <p><?= $charac['age'] ?> ans</p>
                            <p><?= $charac['job'] ?></p>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
    <div class="text-center mt-5">
        <a class="btn text-white border" href="salonAventure.php">Suivant</a>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>