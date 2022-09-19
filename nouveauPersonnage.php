<?php
include 'controllers/nouveauPersonnageCtrl.php'
?>
<main>
    <form action="" method="post">
        <div class="border border-white border-5 rounded mt-5 mx-5 p-5">
            <div class="text-center mb-3">
                <h1>Identité du personnage:</h1>
            </div>

            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
            <label for="sex">Sexe</label>
            <input type="text" name="sex" id="sex">
            <label for="job">Metier</label>
            <input type="text" name="job" id="job">
            <label for="breed">Race</label>
            <input type="text" name="breed" id="breed">
        </div>
        <div class="text-center mt-4">
            <label for="imgcharac">Selectionner un illustration pour votre personnage:</label>
        </div>
        <div>
            <div class="d-flex flex-column">
                <div>
                    <img class="w-25" src="assets/img/d478d52a786cb2d5b4ee55577efdf08f.jpg" alt="orc homme">
                    <img class="w-25" src="assets/img/00e775d3c02fd66997ac89420b8f482e.jpg" alt="orc femme">
                </div>
                <div>
                    <img class="w-25" src="assets/img/df8f06f8cdb2e0f420af9f804a3ddcd6.jpg" alt="elf homme">
                    <img class="w-25" src="assets/img/images.jpg" alt="elf femme">
                </div>
                <div>
                    <img class="w-25" src="assets/img/a7c7259ef6050e967a93aa799d2d685d.jpg" alt="humain homme">
                    <img class="w-25" src="assets/img/c3ffd2050393725c52a15a004d02c381.jpg" alt="humain femme">
                </div>
                <div>
                    <img class="w-25" src="assets/img/khajiit_portrait_by_spyrorue_d7z4cvd-fullview.jpg" alt="chat homme">
                    <img class="w-25" src="assets/img/ae2c7b105eeeac6ff160d7159d082f00.jpg" alt="chat femme">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="nouveauPersonnageStat.php" type="button" value="Connexion" class="btn w-50 mb-3"><img class="w-25" src="assets/img/318275.png" alt="fleche suivant"></a>
        </div>
    </form>
</main>
<?php
include 'Includes/footer.php'
?>