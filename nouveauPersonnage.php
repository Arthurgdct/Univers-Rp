<?php
include 'controllers/nouveauPersonnageCtrl.php'
?>
<main>
    <form action="nouveauPersonnageStat.php" method="post">
        <div class="border border-white border-5 rounded mt-5 mx-3 p-5 w-50-lg mx-auto">
            <div class="text-center mb-3">
                <h1>Identité du personnage:</h1>
            </div>
            <div class="d-flex flex-column">
                <label for="firstname">Prénom</label>
                <input class="mb-2" type="text" value="<?= isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '' ?>" name="firstname" id="firstname">
                <?php if (isset($_SESSION['errors']['firstname'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['firstname'] ?>⚠️</p>
                <?php } ?>
                <label for="lastname">Nom</label>
                <input class="mb-2" type="text" value="<?= isset($_SESSION['lastname']) ? $_SESSION['lastname'] : '' ?>" name="lastname" id="lastname">
                <?php if (isset($_SESSION['errors']['lastname'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['lastname'] ?>⚠️</p>
                <?php } ?>
                <label for="age">Age</label>
                <input class="mb-2" type="number" value="<?= isset($_SESSION['age']) ? $_SESSION['age'] : '' ?>" name="age" id="age">
                <?php if (isset($_SESSION['errors']['age'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['age'] ?>⚠️</p>
                <?php } ?>
                <label for="gender">Sexe</label>
                <input class="mb-2" type="text" value="<?= isset($_SESSION['gender']) ? $_SESSION['gender'] : '' ?>" name="gender" id="gender">
                <?php if (isset($_SESSION['errors']['gender'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['gender'] ?>⚠️</p>
                <?php } ?>
                <label for="job">Metier</label>
                <input type="text" value="<?= isset($_SESSION['job']) ? $_SESSION['job'] : '' ?>" name="job" id="job">
                <?php if (isset($_SESSION['errors']['job'])) { ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['job'] ?>⚠️</p>
                <?php } ?>
                <div class="mt-3">
                    <p>De quel origine est votre personnage :</p>
                    <div class="d-flex justify-content-evenly">
                        <div>
                            <input type="radio" name="origin" id="orc" value="1" <?php if (isset($_SESSION['origin'])) {
                                                                                        if ($_SESSION['origin'] == 1) {
                                                                                            echo 'checked';
                                                                                        }
                                                                                    } else {
                                                                                        echo 'checked';
                                                                                    } ?>>
                            <label for="orc">Orc</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="elfe" value="2" <?php if (isset($_SESSION['origin'])) {
                                                                                        if ($_SESSION['origin'] == 2) {
                                                                                            echo 'checked';
                                                                                        }
                                                                                    } ?>>
                            <label for="elfe">Elfe</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="human" value="3" <?php if (isset($_SESSION['origin'])) {
                                                                                        if ($_SESSION['origin'] == 3) {
                                                                                            echo 'checked';
                                                                                        }
                                                                                    } ?>>
                            <label for="human">Humain</label>
                        </div>
                        <div>
                            <input type="radio" name="origin" id="khajiit" value="4" <?php if (isset($_SESSION['origin'])) {
                                                                                            if ($_SESSION['origin'] == 4) {
                                                                                                echo 'checked';
                                                                                            }
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
                <div class="d-flex justify-content-center justify-content-lg-evenly">
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="orcH" value="1" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                        <label for="orcH"><img class="profil-pict" src="assets/img/d478d52a786cb2d5b4ee55577efdf08f.jpg" alt="Orc homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="orcF" value="2" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 2) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                        <label for="orcF"><img class="profil-pict" src="assets/img/00e775d3c02fd66997ac89420b8f482e.jpg" alt="Orc Femme"></label>
                    </div>
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="elfeH" value="3" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 3) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                        <label for="elfeH"><img class="profil-pict" src="assets/img/df8f06f8cdb2e0f420af9f804a3ddcd6.jpg" alt="Elfe homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="elfeF" value="4" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 4) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                        <label for="elfeF"><img class="profil-pict" src="assets/img/images.jpg" alt="Elfe femme"></label>
                    </div>
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="humanH" value="5" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 5) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                        <label for="humanH"><img class="profil-pict" src="assets/img/a7c7259ef6050e967a93aa799d2d685d.jpg" alt="Humain homme"></label>
                        <input type="radio" name="profilPict" class="profilPict" id="humanF" value="6" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                            if ($_SESSION['profilPict'] == 6) {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                        } ?>>
                        <label for="humanF"><img class="profil-pict" src="assets/img/c3ffd2050393725c52a15a004d02c381.jpg" alt="Humain femme"></label>
                    </div>
                    <div class="d-flex flex-column">
                        <input type="radio" name="profilPict" class="profilPict" id="khajiitH" value="7" <?php if (isset($_SESSION['profilPict'])) {
                                                                                                                if ($_SESSION['profilPict'] == 7) {
                                                                                                                    echo 'checked';
                                                                                                                }
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
            <div class="d-flex mt-4">
                <input type="submit" name="validForm1" value="Suivant" class="btn border-white border-5 text-white w-50 mx-auto">
            </div>
        </div>
    </form>
</main>
<?php
include 'Includes/footer.php'
?>