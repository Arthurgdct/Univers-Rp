<?php
include 'controllers/connexionCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mx-3 p-5 w-50-lg mx-auto">
        <div class="text-center">
            <p>Entrer vos identifiants ici pour vous connecter.</p>
        </div>
        <form action="connexion.php" method="post">
            <div class="d-flex flex-column">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
                <?php if (isset($errors['pseudo'])) { ?>
                    <p><?= $errors['pseudo'] ?></p>
                <?php } ?>
                <label for="password" class="mt-3">Mot de passe</label>
                <input type="password" name="password" id="password">
                <?php if (isset($success)) { ?>
                    <p><?= $success ?></p>
                <?php }elseif (isset($errors['password'])) { ?>
                    <p><?= $errors['password'] ?></p>
                <?php } ?>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <input type="submit" value="Connexion" name="validForm" class="btn border-white border-5 text-white w-75 mb-3">
            </div>
        </form>
        <div>
            <p class="text-center">Ou</p>
            <div class="d-flex justify-content-center">
                <a href="inscription.php" class="btn border-white border-5 text-white w-75">Créer mon compte</a>
            </div>
        </div>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>