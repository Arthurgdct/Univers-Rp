<?php
include 'controllers/personnagesCtrl.php';
?>
<main>
    <?php if (!empty($characters)) { ?>
        <div class="d-lg-flex flex-lg-wrap">
            <?php foreach ($characters as $charac) { ?>
                <div class="d-flex justify-content-between border border-white border-5 rounded mt-5 w-40-lg mx-auto">
                    <div class="d-flex">
                        <img class="profil-pict" src="assets/img/<?= $charac->profilPict ?>" alt="">
                        <div class="mt-2 ms-2">
                            <p><?= $charac->firstname ?></p>
                            <p><?= $charac->origin ?></p>
                            <p><?= $charac->lastname ?></p>
                            <p><?= $charac->age ?> ans</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="fichePersonnage.php?id=<?= $charac->id ?>" class="btn text-white text-decoration-none mt-5 bg-success">Informations</a>
                        <a href="personnages.php?suppr=<?= $charac->id ?>" class="btn text-white text-decoration-none mt-3 bg-danger">Supprimer</a>
                    </div>
                </div>
        
    <?php } ?>
     </div> 
        <?php } else { ?>
    <div class="border border-white border-5 rounded p-3 mt-8 mb-5 text-center mx-auto">
        <p>Vous n'avez encore aucun personnage, vous pouvez en créer gratuitement en cliquant sur le bouton ci-dessous.</p>
    </div>
<?php } ?>

<div class="mt-7 text-center">
    <a href="nouveauPersonnage.php" class="text-decoration-none text-white border border-white border-5 rounded-pill p-3">+ Créer un personnage</a>
</div>
</main>
<?php
include 'Includes/footer.php'
?>