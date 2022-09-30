<?php
include 'controllers/fichePersonnageCtrl.php'
?>
<main>
    <form class="d-lg-flex justify-content-lg-center w-75 mx-auto" method="POST" action="">
        <div class="w-75 mx-auto">
            <div class="d-flex flex-column me-4">
                <label for="firstname">Prénom</label>
                <input class="mb-2" type="text" value="<?= $characterById->firstname ?>" name="firstname" id="firstname">
                <?php if (isset($_SESSION['errors']['firstname'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['firstname'] ?>⚠️</p>
                <?php } ?>
                <label for="lastname">Nom</label>
                <input class="mb-2" type="text" value="<?= $characterById->lastname ?>" name="lastname" id="lastname">
                <?php if (isset($_SESSION['errors']['lastname'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['lastname'] ?>⚠️</p>
                <?php } ?>
                <label for="age">Age</label>
                <input class="mb-2" type="number" value="<?= $characterById->age ?>" name="age" id="age">
                <?php if (isset($_SESSION['errors']['age'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['age'] ?>⚠️</p>
                <?php } ?>
                <label for="gender">Sexe</label>
                <input class="mb-2" type="text" value="<?= $characterById->gender ?>" name="gender" id="gender">
                <?php if (isset($_SESSION['errors']['gender'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['gender'] ?>⚠️</p>
                <?php } ?>
                <label for="job">Metier</label>
                <input type="text" value="<?= $characterById->job ?>" name="job" id="job">
                <?php if (isset($_SESSION['errors']['job'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['job'] ?>⚠️</p>
                <?php } ?>
                <div class="mt-3">
                    <p>De quel origine est votre personnage :</p>
                    <div class="d-flex justify-content-evenly">
                        <div>
                            <input type="radio" name="origin" id="orc" value="1" <?php if ($characterById->origin == 1) {
                                                                                        echo 'checked';
                                                                                    } ?>>
                            <label for="orc">Orc</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="elfe" value="2" <?php if ($characterById->origin == 2) {
                                                                                        echo 'checked';
                                                                                    } ?>>
                            <label for="elfe">Elfe</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="human" value="3" <?php if ($characterById->origin == 3) {
                                                                                        echo 'checked';
                                                                                    } ?>>
                            <label for="human">Humain</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="khajiit" value="4" <?php if ($characterById->origin == 4) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                            <label for="khajiit">Khajiit</label>
                        </div>
                        <?php if (isset($_SESSION['errors']['origin'])) { ?>
                            <p class="errors">⚠️<?= $_SESSION['errors']['origin'] ?>⚠️</p>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="my-5">
                <p class="mb-4">Choisissez une image de profil pour votre personnage :</p>
                <div class="d-flex justify-content-center justify-content-evenly">
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="orcH" value="1" <?php if ($characterById->profilPict == 1) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="orcH"><img class="profil-pict" src="assets/img/d478d52a786cb2d5b4ee55577efdf08f.jpg" alt="Orc homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="orcF" value="2" <?php if ($characterById->profilPict == 2) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="orcF"><img class="profil-pict" src="assets/img/00e775d3c02fd66997ac89420b8f482e.jpg" alt="Orc Femme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="elfeH" value="3" <?php if ($characterById->profilPict == 3) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="elfeH"><img class="profil-pict" src="assets/img/df8f06f8cdb2e0f420af9f804a3ddcd6.jpg" alt="Elfe homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="elfeF" value="4" <?php if ($characterById->profilPict == 4) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="elfeF"><img class="profil-pict" src="assets/img/images.jpg" alt="Elfe femme"></label>
                    </div>
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="humanH" value="5" <?php if ($characterById->profilPict == 5) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="humanH"><img class="profil-pict" src="assets/img/a7c7259ef6050e967a93aa799d2d685d.jpg" alt="Humain homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="humanF" value="6" <?php if ($characterById->profilPict == 6) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="humanF"><img class="profil-pict" src="assets/img/c3ffd2050393725c52a15a004d02c381.jpg" alt="Humain femme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="khajiitH" value="7" <?php if ($characterById->profilPict == 7) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                        <label for="khajiitH"><img class="profil-pict" src="assets/img/khajiit_portrait_by_spyrorue_d7z4cvd-fullview.jpg" alt="Khajiit homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="khajiitF" value="8" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                                if ($_SESSION['profilPict'] == 8) {
                                                                                                                    echo 'checked';
                                                                                                                }
                                                                                                            } ?>>
                        <label for="khajiitF"><img class="profil-pict" src="assets/img/ae2c7b105eeeac6ff160d7159d082f00.jpg" alt="Khajiit femme"></label>
                    </div>
                    <?php if (isset($_SESSION['errors']['profilPict'])) { ?>
                        <p class="errors">⚠️<?= $_SESSION['errors']['profilPict'] ?>⚠️</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column w-75 mx-auto">
            <label for="destiny">Destin</label>
            <input type="number" value="<?= $characterById->destiny ?>" name="destiny" id="destiny">
            <?php if (isset($_SESSION['errors']['destiny'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['destiny'] ?>⚠️</p>
            <?php } ?>
            <label for="courage" class="mt-3">Courage</label>
            <input type="number" value="<?= $characterById->courage ?>" name="courage" id="courage">
            <?php if (isset($_SESSION['errors']['courage'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['courage'] ?>⚠️</p>
            <?php } ?>
            <label for="intelligence" class="mt-3">Intelligence</label>
            <input type="number" value="<?= $characterById->intelligence ?>" name="intelligence" id="intelligence">
            <?php if (isset($_SESSION['errors']['intelligence'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['intelligence'] ?>⚠️</p>
            <?php } ?>
            <label for="charisma" class="mt-3">Charisme</label>
            <input type="number" value="<?= $characterById->charisma ?>" name="charisma" id="charisma">
            <?php if (isset($_SESSION['errors']['charisma'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['charisma'] ?>⚠️</p>
            <?php } ?>
            <label for="agility" class="mt-3">Agilité</label>
            <input type="number" value="<?= $characterById->agility ?>" name="agility" id="agility">
            <?php if (isset($_SESSION['errors']['agility'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['agility'] ?>⚠️</p>
            <?php } ?>
            <label for="strengt" class="mt-3">Force</label>
            <input type="number" value="<?= $characterById->strength ?>" name="strength" id="strength">
            <?php if (isset($_SESSION['errors']['strength'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['strength'] ?>⚠️</p>
            <?php } ?>
            <label for="attack" class="mt-3">Attaque</label>
            <input type="number" value="<?= $characterById->attack ?>" name="attack" id="attack">
            <?php if (isset($_SESSION['errors']['attack'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['attack'] ?>⚠️</p>
            <?php } ?>
            <label for="defense" class="mt-3">Défense</label>
            <input type="number" value="<?= $characterById->defense ?>" name="defense" id="defense">
            <?php if (isset($_SESSION['errors']['defense'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['defense'] ?>⚠️</p>
            <?php } ?>
            <label for="armors">Armure & protections</label>
            <input type="text" value="<?= $characterById->armors ?>" name="armors" id="armors">
            <?php if (isset($_SESSION['errors']['armors'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['armors'] ?>⚠️</p>
            <?php } ?>
            <label for="weapons" class="mt-3">Armes</label>
            <input type="text" value="<?= $characterById->weapons ?>" name="weapons" id="weapons">
            <?php if (isset($_SESSION['errors']['weapons'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['weapons'] ?>⚠️</p>
            <?php } ?>
            <label for="spells" class="mt-3">Sorts & compétences</label>
            <input type="text" value="<?= $characterById->spells ?>" name="spells" id="spells">
            <?php if (isset($_SESSION['errors']['spells'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['spells'] ?>⚠️</p>
            <?php } ?>
            <label for="items" class="mt-3">Consommable</label>
            <input type="text" value="<?= $characterById->items ?>" name="items" id="items">
            <?php if (isset($_SESSION['errors']['items'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['items'] ?>⚠️</p>
            <?php } ?>
            <label for="background" class="mt-3">Background du personnage</label>
            <textarea name="background" id="background" cols="35" rows="5"><?= $characterById->background ?></textarea>
            <?php if (isset($_SESSION['errors']['background'])) { ?>
                <p class="errors">⚠️<?= $_SESSION['errors']['background'] ?>⚠️</p>
            <?php } ?>
            <div class="d-flex mt-5">
                <input type="submit" name="validForm" value="Modifier" class="btn border-white border-5 text-white w-50 mx-auto">
            </div>
        </div>
    </form>
</main>
<?php
include 'Includes/footer.php'
?>