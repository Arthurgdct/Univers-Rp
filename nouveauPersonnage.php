<?php
include 'controllers/nouveauPersonnageCtrl.php'
?>
<main>
    <form action="" method="post">
        <div class="border border-white border-5 rounded mt-5 mx-3 p-5 w-50-lg mx-auto">
            <div class="text-center mb-3">
                <h1>Identité du personnage:</h1>
            </div>
            <div class="d-flex flex-column">
                <label for="firstname">Prénom</label>
                <input type="text" value="<?php isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" name="firstname" id="firstname">
                <label for="name">Nom</label>
                <input type="text" value="<?php isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" name="name" id="name">
                <label for="number">Age</label>
                <input type="int" value="<?php isset($_POST['age']) ? $_POST['age'] : '' ?>" name="age" id="age">
                <label for="gender">Sexe</label>
                <input type="text" value="<?php isset($_POST['gender']) ? $_POST['gender'] : '' ?>" name="gender" id="gender">
                <label for="job">Metier</label>
                <input type="text" value="<?php isset($_POST['job']) ? $_POST['job'] : '' ?>" name="job" id="job">
                <div class="text-center mt-3">
                    <p>De quel origine est votre personnage :</p>
                    <div class="d-flex justify-content-evenly">
                        <div>
                            <input type="radio" name="breed" id="orc" value="1">
                            <label for="orc">Orc</label>
                        </div>
                        <div>
                            <input type="radio" name="breed" id="elfe" value="2">
                            <label for="elfe">Elfe</label>
                        </div>
                        <div>
                            <input type="radio" name="breed" id="human" value="3">
                            <label for="human">Humain</label>
                        </div>
                        <div>
                            <input type="radio" name="breed" id="khajiit" value="4">
                            <label for="khajiit">Khajiit</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <!-- FONCTIONELLE MAIS CA CE VOIT APS MERRDE-->
            <p>Choisissez une image de profil pour votre personnage :</p>
            <div class="d-flex">
                <div classe="d-flex flex-column">
                    <input type="radio" name="profilPict" class="profilPict" id="orcH" value="1" checked>
                    <label for="orcH"><img class="profil-pict"  src="assets/img/d478d52a786cb2d5b4ee55577efdf08f.jpg" alt="Orc homme"></label>
                    <input type="radio" name="profilPict" class="profilPict" id="orcF" value="2">
                    <label for="orcF"><img class="profil-pict"  src="assets/img/00e775d3c02fd66997ac89420b8f482e.jpg" alt="Orc Femme"></label>
                </div>
                <div class="d-flex flex-column">
                    <input type="radio" name="profilPict" class="profilPict" id="elfeH" value="3">
                    <label for="elfeH"><img class="profil-pict"  src="assets/img/df8f06f8cdb2e0f420af9f804a3ddcd6.jpg" alt="Elfe homme"></label>
                    <input type="radio" name="profilPict" class="profilPict" id="elfeF" value="4">
                    <label for="elfeF"><img class="profil-pict"  src="assets/img/images.jpg" alt="Elfe femme"></label>
                </div>
                <div class="d-flex flex-column">
                    <input type="radio" name="profilPict" class="profilPict" id="humanH" value="5">
                    <label for="humanH"><img class="profil-pict"  src="assets/img/a7c7259ef6050e967a93aa799d2d685d.jpg" alt="Humain homme"></label>
                    <input type="radio" name="profilPict" class="profilPict" id="humanF" value="6">
                    <label for="humanF"><img class="profil-pict"  src="assets/img/c3ffd2050393725c52a15a004d02c381.jpg" alt="Humain femme"></label>
                </div>
                <div class="d-flex flex-column">
                    <input type="radio" name="profilPict" class="profilPict" id="khajiitH" value="7">
                    <label for="khajiitH"><img class="profil-pict"  src="assets/img/khajiit_portrait_by_spyrorue_d7z4cvd-fullview.jpg" alt="Khajiit homme"></label>
                    <input type="radio" name="profilPict" class="profilPict" id="khajiitF" value="8">
                    <label for="khajiitF"><img class="profil-pict"  src="assets/img/ae2c7b105eeeac6ff160d7159d082f00.jpg" alt="Khajiit femme"></label>
                </div>
            </div>
        </div>
            <input type="submit" name="validForm">
        </div>
    </form>
</main>
<?php
include 'Includes/footer.php'
?>