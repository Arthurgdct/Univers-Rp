<?php
include 'controllers/profilCtrl.php'
?>
<main>
    <div class="border border-white border-5 rounded mt-5 mx-5 p-5">
        <div class="text-center">
            <h2><?= $user ?></h2>
            <p>Changer de mot de passe:</p>
        </div>
        <form action="" method="post">
            <label for="actualpassword">Mot de passe actuel</label>
            <input type="password" name="actualpassword" id="actualpassword">
            <label for="password" class="mt-3">Nouveau mot de passe</label>
            <input type="password" name="password" id="password">
            <label for="confirmPassword" class="mt-3">Confirmation mot de passe</label>
            <input type="password" name="confirmPassword" id="confirmPassword">
            <div class="d-flex justify-content-center mt-5">
                <input type="button" value="Modifier" class="btn border-white border-5 text-white w-75 mb-3">
            </div>
        </form>
    </div>
</main>

<?php
include 'Includes/footer.php'
?>