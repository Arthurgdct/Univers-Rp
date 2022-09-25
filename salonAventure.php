<?php
include 'controllers/salonAventureCtrl.php'
?>
<main>
    <?php
    if (!empty($adventures)) {
        foreach ($adventures as $adventure) { ?>
            <div class="d-flex flex-column w-50 mx-auto border border-5 rounded mt-5">
                <div class="d-flex justify-content-center">
                    <img class="border w-100 border-1" src="assets/img/<?= $adventure['cover'] ?>" alt="Image de couverture de l'aventure">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="m-1">
                        <p><?= $adventure['name'] ?></p>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="text-center mt-5">
        <a class="btn text-white border" href="lobby.php">Commencer la partie</a>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>