<?php
include 'controllers/nouveauPersonnageEquipementCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mx-5 mb-3 p-5 w-50-lg mx-auto">
        <div class="text-center mb-3">
            <h2>Equipement & Background</h2>
        </div>
        <form method="POST" class="d-flex flex-column">
            <label for="armors">Armure & protections</label>
            <input type="text" placeholder="Plastron doré de la garde royal ..." name="armors" id="armors">
            <?php if (isset($_SESSION['errors']['armors'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['armors'] ?>⚠️</p>
                <?php } ?>
            <label for="weapons" class="mt-3">Armes</label>
            <input type="text" placeholder="Grand griffe ..." name="weapons" id="weapons">
            <?php if (isset($_SESSION['errors']['weapons'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['weapons'] ?>⚠️</p>
                <?php } ?>
            <label for="spells" class="mt-3">Sorts & compétences</label>
            <input type="text" placeholder="Cri de guerre, provocation ..." name="spells" id="spells">
            <?php if (isset($_SESSION['errors']['spells'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['spells'] ?>⚠️</p>
                <?php } ?>
            <label for="items" class="mt-3">Consommable</label>
            <input type="text" placeholder="Potion de vie, gateau de maman ..." name="items" id="items">
            <?php if (isset($_SESSION['errors']['items'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['items'] ?>⚠️</p>
                <?php } ?>
            <label for="agility" class="mt-3">Background du personnage</label>
            <textarea name="background" placeholder="Originaire du petit village de bourg-palette, Sacha part a l'aventure avec sa nouvelle meilleure amie Ondine ..." id="background" cols="20" rows="5"></textarea>
            <?php if (isset($_SESSION['errors']['background'])){ ?>
                    <p class="errors">⚠️<?= $_SESSION['errors']['background'] ?>⚠️</p>
                <?php } ?>
            <div class="d-flex mt-4">
                <input type="submit" name="validForm3" value="Suivant" class="btn border-white border-5 text-white w-50 mx-auto">
            </div>
        </form>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>