<?php require_once('head.php') ?>
<div id="error">
    <p>
        <?php
        if (!empty($_GET['err'])) {
            echo "Il y a une erreur, ";
            $err = $_GET['err'];
            if ($err == 'pwddif') {
                echo "les mots de passes sont différents";
            } elseif ($err == 'pseudoTaken') {
                echo "le pseudo est déjà pris";
            } elseif ($err == 'empty_pseudo') {
                echo "le pseudo n'est pas renseigné";
            } elseif ($err == 'empty_pwd') {
                echo "le mot de passe n'est pas renseigné";
            } elseif ($err == 'empty_mail') {
                echo "l'email n'est pas renseigné";
            } elseif ($err == 'empty_adress') {
                echo "il faut rentrer une adresse";
            }
        }
        ?>
    </p>
</div>

<div id="registerForm">
    <form action="registerPost.php" method="post">
        <p>Votre Email : <input type="text" name="mail" /></p>
        <p>Votre pseudo : <input type="text" name="pseudo" /></p>
        <p>Votre Adresses : <input type="text" name="adress" /></p>
        <p>Votre Mot de passe : <input type="password" name="pwd" /></p>
        <p>Confirmez le mot de passes : <input type="password" name="pwdconfirmation" /></p>
        <button type="submit" value="OK" id="registerBut">s'enregistrer</button>
    </form>
</div>
<?php require_once('footer.php') ?>