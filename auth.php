<?php

if(PHP_SESSION_NONE){
    session_start();
}
$username = $_POST['username'];
$password = $_POST['password'];

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

if ($stmt = $con->prepare('SELECT uid, password FROM accounts WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $username);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['uid'] = $id;
            echo 'true';
        } else {
            // Incorrect password
            echo 'false';
        }
    } else {
        // Incorrect username
        echo 'false';
    }

    $stmt->close();
}
