<?php
include 'controllers/nouveauPersonnageEquipementCtrl.php'
?>
<main>
<div class="border border-white border-5 rounded mt-5 mx-5 mb-3 p-5">
        <div class="text-center mb-3">
            <h2>Equipement & Background</h2>
        </div>
        <form action="" method="POST">
            <label for="armor">Armure & protection</label>
            <input type="text" name="armor" id="armor">
            <label for="weapon" class="mt-3">Armes</label>
            <input type="text" name="weapon" id="weapon">
            <label for="spell" class="mt-3">Sorts & compétences</label>
            <input type="text" name="spell" id="spell">
            <label for="consumable" class="mt-3">Consommable</label>
            <input type="text" name="consumable" id="consumable">
            <label for="agility" class="mt-3">Background du personnage</label>
            <textarea name="background" id="background" cols="20" rows="5"></textarea>
        </form>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="personnages.php" type="button" value="Connexion" class="btn w-50 mb-3"><img class="w-25" src="assets/img/318275.png" alt="fleche suivant"></a>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>