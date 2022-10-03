<?php
include 'controllers/lobbyCtrl.php'
?>
<main>
    <div class="carouselIg">
        <div class="slideContainer">
            <div class="slide">
                <img class="w-100" src="assets/img/Accordeon1.jpg" alt="slide1">
            </div>
            <div class="slide">
                <img class="w-100" src="assets/img/Accordeon2.jpg" alt="slide2">
            </div>
            <div class="slide">
                <p>Bonjour le monde</p>
            </div>
        </div>
        <div class="btnContainer">
            <div class="button-previous" aria-label="Diapositive précédente"> &larr; </div>
            <div class="button-next" aria-label="Diapositive suivante"> &rarr; </div>
        </div>

    </div>

    <div id="diceBox" class="d-flex justify-content-between m-5">
        <div class="d-flex flex-column">
            <button class="btn btn-success" type="button" id="addDice">+</button>
            <img id="originalDice" src="assets/img/de20.png" alt="image de dé.">
            <button class="btn btn-danger" type="button" id="deleteDice">-</a>
        </div>
        <div id="diceContainer" class="d-flex mt-4">
            <p class="dice">15</p>
        </div>
        <div class="text-center mt-1 d-flex flex-column col-2" id="diceConfig">
            <button id="launchDice" class="btn text-white btn-primary courgette">Lancer les dées</button>
            <input type="number" id="minNumber" class="mt-3" value="1">
            <input type="number" id="maxNumber" value="20">
        </div>
    </div>
    <section class="d-lg-flex mx-auto w-70-lg">
        <?php
        if (!empty($characters)) {
            foreach ($characters as $character) { ?>
                <div class="mx-auto col-5 border border-5 rounded mt-5 ">
                    <div class="d-flex mb-4">
                        <div class="d-flex w-25">
                            <img class="profil-pict" src="assets/img/<?= $character->profilPict ?>" alt="Image de profil du personnage">
                        </div>
                        <div class="d-flex ms-5 mt-4">
                            <div class="me-2 flex-column">
                                <p><?= $character->firstname ?></p>
                                <p><?= $character->lastname ?></p>
                            </div>
                            <div class="me-1 d-flex flex-column">
                                <p><?= $character->age ?> ans</p>
                                <p><?= $character->job ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex m-1 justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/DestinIcon.png" alt="Icone destin">
                                <p>Destin : <?= $character->destiny ?></p>
                            </div>
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/iconCourage.png" alt="Icone courage">
                                <p>Courage : <?= $character->courage ?></p>
                            </div>
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/IntelIcon.png" alt="Icone intelligence">
                                <p>Intelligence : <?= $character->intelligence ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/iconcharisme.png" alt="Icone charsime">
                                <p>Charisme : <?= $character->charisma ?></p>
                            </div>
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/AgilityIcon.png" alt="Icone Agilité">
                                <p>Agilité : <?= $character->agility ?></p>
                            </div>
                            <div class="d-flex">
                                <img class="bg-white icone-size" src="assets/img/forceicon.png" alt="Icone Force">
                                <p>Force : <?= $character->strength ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-around text-center">
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
                            <p>Attaque : <?= $character->attack ?></p>
                        </div>
                        <div class="d-flex">
                            <img class="bg-white icone-size" src="assets/img/shield-png.jpg" alt="Icone défense">
                            <p>Défense : <?= $character->defense ?></p>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </section>
</main>
<?php
include 'Includes/footer.php'
?>