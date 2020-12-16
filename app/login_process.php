<?php
require_once 'config.inc.php';

if(isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($stmt = $con->prepare('SELECT Email, Wachtwoord FROM Gebruikers WHERE Email = ?')) {
        // Bind parameters (s = string, i = int, b = blob)
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($email, $wachtwoord);
            $stmt->fetch();
            if (password_verify($_POST['password'], $wachtwoord)) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:card.php");
            } else {
                // Hier is wachtwoord onjuist
                header("Location:index.php");
            }
        } else {
            // hier is gebruikersnaam niet juist
            header("Location:index.php");
        }

        $stmt->close();
    }else {
    }

}


