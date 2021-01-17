<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'mobiauth';
$DATABASE_PASS = '2O9n9f*n';
$DATABASE_NAME = 'mobiauth';

$deurnaam = $_POST['device_name'];
$org_id   = $_POST['org_id'];

$phoneID = $_POST['id'];


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    echo 'error';
}
if ($stmt = $con->prepare('SELECT Voornaam, Achternaam FROM Gebruikers WHERE phoneID = ?')) {
    // Bind parameters (s = string, i = int, b = blob)
    $stmt->bind_param('s', $phoneID);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($voor, $achter);
        $stmt->fetch();

        echo $voor. ' '.$achter;
    } else {
        echo 'false';
    }

}

