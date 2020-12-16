<?php
require_once 'config.inc.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM Gebruikers WHERE Email = '$email' AND Wachtwoord = '$password'");

if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['email'] = $email;
    header("Location:card.php");
} else {
    header("Location:index.php");
    exit;
}
?>
