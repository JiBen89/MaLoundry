<?php require_once('assets/php/head.php') ?>
<?php
if (isset($_GET['err'])) {
    if ($_GET['err'] == 'wrongPwd') {
        echo '<p id="error">mauvais mot de passe </p>';
    } elseif ($_GET['err'] == 'uknownUser') {
        echo '<p id="error">ce mail n\' est pas dans notre base de donnés !</p>';
    }
}
?>
<br>
<div id="bloc">
    <form action="assets/php/login.php" method="post">
        <div class="container box mail">
            <p>Votre Email : </p>
            <input type="text" name="mail" />
        </div>
        <div class="container box pwd">
            <p>Votre Mot de passe : </p>
            <input type="password" name="pwd" />
        </div>
        <br>
        <br>
        <button type="submit" value="OK">connexion</button>
    </form>
    <a href="assets/php/register.php">
        <button>s'enregistrer</button>
    </a>
</div>

<?php require_once('assets/php/footer.php') ?>