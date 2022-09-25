<?php
include 'controllers/connexionCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mx-3 p-5">
        <div class="text-center">
            <p>Entrer vos identifiants ici pour vous connecter.</p>
        </div>
        <form action="" method="post">
            <div class="d-flex flex-column">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
                <label for="password" class="mt-3">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <input type="button" value="Connexion" class="btn border-white border-5 text-white w-75 mb-3">
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