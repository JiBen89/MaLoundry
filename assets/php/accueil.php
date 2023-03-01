<?php require_once('head.php');
require("../db/db.php");
$mail = $_SESSION['mail'];
$stmt = $pdo->prepare("SELECT role FROM user WHERE mail=:mail");
$stmt->execute(['mail' => $mail,]);
$role = $stmt->fetch();

$stmt = $pdo->prepare("SELECT id FROM user WHERE mail=:mail");
$stmt->execute(['mail' => $mail,]);
$id = $stmt->fetch();
$_SESSION['id'] = $id[0];

$stmt = $pdo->prepare("SELECT pseudo FROM user WHERE mail=:mail");
$stmt->execute(['mail' => $mail,]);
$pseudo = $stmt->fetch();
$_SESSION['pseudo'] = $pseudo[0];

if ($role[0] == 1) {
    header('location: washer.php');
} elseif ($role[0] == 2) {
    header('location: classicUser.php');
} elseif ($role[0] == 0) {
?>
<div class="container">
    <h1>Quel rôle souhaite tu occuper à maloundry <?php echo $_SESSION['pseudo'] ?></h1>
</div>
<form action="washer.php" class="container" method="POST">
    <input type="hidden" name="role" value="1">
    <button type="submit" value="OK" id="choice">Washer</button>
</form>
<form action="classicUser.php" class="container" method="POST">
    <input type="hidden" name="role" value="2">
    <button type="submit" value="OK" id="choice">Utilisateur</button>
</form>
<?php  } ?>
<?php require_once('footer.php') ?>