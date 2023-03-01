<?php
require_once('head.php');
require("../db/db.php");
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];


$stmt = $pdo->prepare("SELECT mail, pwd FROM user WHERE mail=?");
$stmt->execute([$mail]);
$userExist = $stmt->fetch();

if ($userExist) {
    $req = $pdo->prepare("SELECT pwd FROM user WHERE mail=?");
    $req->execute([$mail]);
    $hashed = $req->fetch();

    if (password_verify($pwd, $hashed[0])) {
        header('location: accueil.php');
        session_start();
        $_SESSION['mail'] = $mail;
    } else {
        header('location: ../../index.php?err=wrongPwd');
    }
} else {
    header('location: ../../index.php?err=uknownUser');
}

require_once('footer.php');
