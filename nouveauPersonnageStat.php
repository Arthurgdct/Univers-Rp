<?php
include 'controllers/nouveauPersonnageStatCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mb-3 p-5 w-50-lg mx-auto">
        <div class="text-center mb-3">
            <h2>Statistique du Personnage</h2>
        </div>
        <form class="d-flex flex-column" action="nouveauPersonnageEquipement.php" method="POST">
            <label for="destiny">Destin</label>
            <input type="number" placeholder="6" name="destiny" id="destiny">
            <?php if (isset($_SESSION['errors']['destiny'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['destiny'] ?>⚠️</p>
                <?php } ?>
            <label for="courage" class="mt-3">Courage</label>
            <input type="number" placeholder="10" name="courage" id="courage">
            <?php if (isset($_SESSION['errors']['courage'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['courage'] ?>⚠️</p>
                <?php } ?>
            <label for="intelligence" class="mt-3">Intelligence</label>
            <input type="number" placeholder="10" name="intelligence" id="intelligence">
            <?php if (isset($_SESSION['errors']['intelligence'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['intelligence'] ?>⚠️</p>
                <?php } ?>
            <label for="charisma" class="mt-3">Charisme</label>
            <input type="number" placeholder="10" name="charisma" id="charisma">
            <?php if (isset($_SESSION['errors']['charisma'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['charisma'] ?>⚠️</p>
                <?php } ?>
            <label for="agility" class="mt-3">Agilité</label>
            <input type="number" placeholder="10" name="agility" id="agility">
            <?php if (isset($_SESSION['errors']['agility'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['agility'] ?>⚠️</p>
                <?php } ?>
            <label for="strengt" class="mt-3">Force</label>
            <input type="number" placeholder="10" name="strength" id="strength">
            <?php if (isset($_SESSION['errors']['strength'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['strength'] ?>⚠️</p>
                <?php } ?>
            <label for="attack" class="mt-3">Attaque</label>
            <input type="number" placeholder="10" name="attack" id="attack">
            <?php if (isset($_SESSION['errors']['attack'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['attack'] ?>⚠️</p>
                <?php } ?>
            <label for="defense" class="mt-3">Défense</label>
            <input type="number" placeholder="10" name="defense" id="defense">
            <?php if (isset($_SESSION['errors']['defense'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['defense'] ?>⚠️</p>
                <?php } ?>
            <div class="d-flex mt-4">
                <input type="submit" name="validForm2" value="Suivant" class="btn border-white border-5 text-white w-50 mx-auto">
            </div>
        </form>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>