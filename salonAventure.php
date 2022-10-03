<?php
include 'controllers/salonAventureCtrl.php'
?>
<main>
    <?php
    if (!empty($adventures)) { ?>
        <form action="lobby.php" method="POST">
            <div>
                <?php foreach ($adventures as $adventure) {
                    $i++ ?>
                    <div class="d-flex w-25 flex-column mx-auto border border-5 rounded mt-5 text-center">
                        <input class="storyCard" type="radio" name="adventure" id="<?= $adventure->id ?>" value="<?= $adventure->id ?>" <?= $i == 1 ? 'checked' : '' ?>>
                        <label for="<?= $adventure->id ?>">

                            <div class="d-flex justify-content-center">
                                <img class="border w-100 cover border-1" src="assets/img/<?= $adventure->cover ?>" alt="Image de couverture de l'aventure">
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="m-1">
                                    <p><?= $adventure->title ?></p>
                                </div>
                            </div>
                        </label>
                    </div>

                <?php } ?>
            </div>
            <div class="text-center mt-5">
                <input type="submit" value="Commencer la partie" class="btn text-white border" href="lobby.php">
            </div>
            <?php
             foreach ($_POST['character'] as $character) { ?>
            <input type="hidden" value="<?= $character ?>" name="character[]">
        <?php } ?>
        </form>
    <?php } ?>


</main>
<?php
include 'Includes/footer.php'
?>