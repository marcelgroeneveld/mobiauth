<?php

echo 'test';

if(PHP_SESSION_NONE){
    session_start();
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'mobiauth';
$DATABASE_PASS = '2O9n9f*n';
$DATABASE_NAME = 'mobiauth';



$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    echo 'error';

}
if ( !isset($_POST['username'], $_POST['password']) ) {
    echo 'false';
}


$username = $_POST['username'];
$password = $_POST['password'];

if ($stmt = $con->prepare('SELECT uid, password, voornaam, achternaam, 2fa, FROM users WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob)
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $voornaam, $achternaam, $tfa);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['uid'] = $id;
            $_SESSION['voornaam'] = $voornaam;
            $_SESSION['achternaam'] = $achternaam;
            $_SESSION['tfa'] = $tfa;
            echo 'true';
        } else {
            // Hier is wachtwoord onjuist
            echo 'false';
        }
    } else {
        // hier is gebruikersnaam niet juist
        echo 'false';
    }

    $stmt->close();
}
