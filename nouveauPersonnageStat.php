<?php
include 'controllers/nouveauPersonnageStatCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mb-3 p-5 w-50-lg mx-auto">
        <div class="text-center mb-3">
            <h2>Statistique du Personnage</h2>
        </div>
        <form class="d-flex flex-column " action="" method="POST">
            <label for="destiny">Destin</label>
            <input type="number" placeholder="6" name="destiny" id="destiny">
            <label for="courage" class="mt-3">Courage</label>
            <input type="number" placeholder="10" name="courage" id="courage">
            <label for="intelligence" class="mt-3">Intelligence</label>
            <input type="number" placeholder="10" name="intelligence" id="intelligence">
            <label for="charisma" class="mt-3">Charisme</label>
            <input type="number" placeholder="10" name="charisma" id="charisma">
            <label for="agility" class="mt-3">Agilité</label>
            <input type="number" placeholder="10" name="agility" id="agility">
            <label for="strengt" class="mt-3">Force</label>
            <input type="number" placeholder="10" name="strengt" id="strengt">
            <label for="attack" class="mt-3">Attaque</label>
            <input type="number" placeholder="10" name="attack" id="attack">
            <label for="defense" class="mt-3">Défense</label>
            <input type="number" placeholder="10" name="defense" id="defense">
        </form>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="nouveauPersonnageEquipement.php" type="button" class="btn w-25-lg mb-3">
            <img class="w-25" src="assets/img/318275.png" alt="fleche suivant">
        </a>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>