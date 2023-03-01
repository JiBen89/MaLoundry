<?php
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$adress = $_POST['adress'];
$pwd = $_POST['pwd'];
$pwdconfirmation = $_POST['pwdconfirmation'];
require("../db/db.php");

if (empty($pseudo) or !isset($pseudo)) {
    header('location:register.php?err=empty_pseudo');
}
if (empty($mail) or !isset($mail)) {
    header('location:register.php?err=empty_mail');
} elseif (empty($pwd) or !isset($pwd)) {
    header('location: register.php?err=empty_pwd');
} elseif (empty($adress) or !isset($adress)) {
    header('location: register.php?err=empty_adress');
} elseif ($pwd != $pwdconfirmation) {
    header('location: register.php?err=pwddif');
} else {
    $stmt = $pdo->prepare("SELECT * FROM user WHERE pseudo=?");
    $stmt->execute([$pseudo]);
    $userExist = $stmt->fetch();
    if ($userExist) {
        header('location:register.php?err=pseudoTaken');
    } else {
        require('insertUser.php');
        header('location: ../../index.php');
    }
}
