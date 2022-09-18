<?php
include 'controllers/personnagesCtrl.php';
$characters = ['perso1' => ['firstname' => 'Shagaroth', 'lastname' => 'Grumma', 'race' => 'Orc', 'age' => '32', 'profilImg' => 'd478d52a786cb2d5b4ee55577efdf08f'], 'perso2' => ['firstname' => 'Shagaroth', 'lastname' => 'Grumma', 'race' => 'Orc', 'age' => '32', 'profilImg' => 'd478d52a786cb2d5b4ee55577efdf08f']]
?>

<main>
    <?php
    if (!empty($characters)) {
        foreach ($characters as $charac) {
    ?>
            <div class="shelf d-flex justify-content-between border border-white border-5 rounded mt-5">
                <img class="w-25 h-25" src="assets/img/<?= $charac['profilImg'] ?>" alt="">
                <div class="">
                    <p class="m-2 mt-5"><?= $charac['firstname'] ?></p>
                    <p class="m-2"><?= $charac['race'] ?></p>
                </div>
                <div class="">
                    <p class="m-2 mt-5"><?= $charac['lastname'] ?></p>
                    <p class="m-2"><?= $charac['age'] ?> ans</p>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="text-white text-decoration-none mt-5 bg-success">Modifier</a>
                    <a href="#" class="text-white text-decoration-none mt-2 bg-danger">Supprimer</a>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="border border-white border-5 rounded p-3 mt-8 mb-5 text-center">
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