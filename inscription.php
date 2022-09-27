<?php
include 'controllers/inscriptionCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mb-3 p-5 w-50-lg mx-auto">
        <div class="text-center">
            <h2>Créer un compte</h2>
            <p>Bienvenue sur Univers Rp ! Remplissez le formulaire pour créer votre compte gratuit.</p>
        </div>

        <form action="inscription.php" method="POST">
            <div class="d-flex flex-column">
                <label for="pseudo">Pseudonyme</label>
                <input type="text" name="pseudo" id="pseudo">
                <?php if (isset($errors['pseudo'])) { ?>
                    <p><?= $errors['pseudo'] ?></p>
                <?php } ?>
                <label for="email" class="mt-3">Adresse e-mail</label>
                <input type="mail" name="email" id="email">
                <?php if (isset($errors['email'])) { ?>
                    <p><?= $errors['email'] ?></p>
                <?php } ?>
                <label for="password" class="mt-3">Mot de passe</label>
                <input type="password" name="password" id="password">
                <?php if (isset($errors['password'])) { ?>
                    <p><?= $errors['password'] ?></p>
                <?php } ?>
                <label for="passwordVerif" class="mt-3">Confirmation mot de passe</label>
                <input type="password" name="passwordVerif" id="passwordVerif">
            </div>
            <div class="d-flex mt-3 mb-4 justify-content-around w-50-lg mx-auto">
                <label for="cgu">J'accepte les conditions d'utilisation.</label>
                <input type="checkbox">
            </div>
            <div class="d-flex justify-content-center w-50-lg mx-auto">
                <input type="submit" name="validForm" value="Créer mon compte" class="btn border-white border-5 text-white w-75 mb-3">
            </div>
        </form>
        <div>
            <p class="text-center">Ou</p>
            <div class="d-flex justify-content-center w-50-lg mx-auto">
                <a href="connexion.php" class="btn border-white border-5 text-white w-75">Connexion</a>

            </div>
            <?php if (isset($success)) { ?>
                <p><?= $success ?></p>
            <?php } ?>
        </div>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>