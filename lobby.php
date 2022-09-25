<?php
include 'controllers/lobbyCtrl.php'
?>
<main>
    <div class="d-flex">
        <div class="w-25">
            <img class="w-50" src="assets/img/de20.png" alt="">
            <p>+</p>
        </div>
        <!--INSERER LE CAROUSSEL ET LE SCRIPT JS-->
    </div>
    <div class="text-center mt-5">
        <a class="btn text-white border courgette" href="#">Lancer les dées</a>
    </div>
    <?php
    if (!empty($characters)) {
        foreach ($characters as $charac) { ?>
            <section class="mx-3 border border-5 rounded mt-5">
                <div class="d-flex mb-4">
                    <div class="d-flex w-25 border border-2 rounded">
                        <img class="w-100 border border-1" src="assets/img/<?= $charac['profilImg'] ?>" alt="Image de profil du personnage">
                    </div>
                    <div class="d-flex ms-5 mt-4">
                        <div class="me-2 flex-column">
                            <p><?= $charac['firstname'] ?></p>
                            <p><?= $charac['lastname'] ?></p>
                        </div>
                        <div class="me-1 d-flex flex-column">
                            <p><?= $charac['age'] ?> ans</p>
                            <p><?= $charac['job'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex m-1 justify-content-between">
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/DestinIcon.png" alt="Icone destin">
                            <p>Destin : <?= $charac['destiny'] ?></p>
                        </div>
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/iconCourage.png" alt="Icone courage">
                            <p>Courage : <?= $charac['courage'] ?></p>
                        </div>
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/IntelIcon.png" alt="Icone intelligence">
                            <p>Intelligence : <?= $charac['intell'] ?></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/iconcharisme.png" alt="Icone charsime">
                            <p>Charisme : <?= $charac['charisma'] ?></p>
                        </div>
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/AgilityIcon.png" alt="Icone Agilité">
                            <p>Agilité : <?= $charac['agility'] ?></p>
                        </div>
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/forceicon.png" alt="Icone Force">
                            <p>Force : <?= $charac['strenght'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-around text-center">
                    <div>
                        <img class="bg-white icone-size" src="assets/img/armorIcon.png" alt="Icone armure">
                        <p>Équipement</p>
                    </div>
                    <div>
                        <img class="bg-white icone-size" src="assets/img/iconMagie.png" alt="Icone compétence">
                        <p>Compétences</p>
                    </div>
                    <div>
                        <img class="bg-white icone-size" src="assets/img/iconInventaire.png" alt="Icone inventaire">
                        <p>Inventaire</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mx-3">
                    <div class="d-flex">
                        <img class="bg-white icone-size" src="assets/img/SwordIcon.png" alt="Icone attaque">
                        <p>Attaque : <?= $charac['attack'] ?></p>
                    </div>
                    <div class="d-flex">
                        <img class="bg-white icone-size" src="assets/img/shield-png.jpg" alt="Icone défense">
                        <p>Défense : <?= $charac['defense'] ?></p>
                    </div>
                </div>
            </section>
    <?php }
    } ?>

</main>
<?php
include 'Includes/footer.php'
?>