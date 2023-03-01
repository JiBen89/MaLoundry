<?php
$pwdhashed = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO `user`(`pseudo`, `mail`, `adress`, `pwd`) VALUES (:pseudo,:mail,:adress,:pwd)";
$res = $pdo->prepare($sql);
$exec = $res->execute(array(":pseudo" => $pseudo, ":mail" => $mail, ":adress" => $adress, ":pwd" => $pwdhashed));
if ($exec) {
    echo 'les données ont été mise dans la base de données';
} else {
    echo "Échec de l'opération d'insertion";
}
