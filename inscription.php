<?php
include 'controllers/inscriptionCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mx-5 mb-3 p-5">
        <div class="text-center">
            <h2>Créer un compte</h2>
            <p>Bienvenue sur Univers Rp ! Remplissez le formulaire pour créer votre compte gratuit.</p>
        </div>

        <form action="" method="POST">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">
            <label for="email" class="mt-3">Adresse e-mail</label>
            <input type="email" name="email" id="email">
            <label for="password" class="mt-3">Mot de passe</label>
            <input type="password" name="password" id="password">
            <label for="confirmedPassword" class="mt-3">Confirmation mot de passe</label>
            <input type="password" name="confirmedPassword" id="confirmedPassword">
            <div class="d-flex mt-3 mb-4">
                <label for="cgu">J'accepte les conditions d'utilisation.</label>
                <input type="checkbox">
            </div>
            <div class="d-flex justify-content-center">
                <input type="button" value="Créer mon compte" class="btn border-white border-5 text-white w-75 mb-3">
            </div>
        </form>
        <div>
            <p class="text-center">Ou</p>
            <div class="d-flex justify-content-center">
                <a href="connexion.php" class="btn border-white border-5 text-white w-75">Connexion</a>
            </div>
        </div>
    </div>
</main>
<?php
include 'Includes/footer.php'
?>