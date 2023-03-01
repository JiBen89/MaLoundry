<footer>
    <div class="container">
        <button type="button" value="Retour" onclick="history.go(-1)">Retour</button>
        <a href="<?php if (isset($_SESSION['mail'])) {
                        echo "http://localhost/maloundry/assets/php/acceuil.php";
                    } else {
                        echo "http://localhost/maloundry/index.php";
                    } ?>">
            <a href="http://localhost/maloundry/assets/php/disconect.php"><button type="button" value="deconnexion" id="buttonDisconect"> Déconexion</button></a>
            <?php
            if (isset($_SESSION['pseudo'])) {
                echo "<p> Connecté en tant que :" . $_SESSION['pseudo'] . "    </p>";
            }
            ?>
    </div>
</footer>
</body>

</html>