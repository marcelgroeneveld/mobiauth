<?php
include("auth.php");
$deurnaam = $_POST['device_name'];
$org_id   = $_POST['org_id'];




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    echo 'error';
}
if ($stmt = $con->prepare('SELECT gebruiker_id, Voornaam, achternaam, Email, Organisatie FROM Gebruikers')) {
    // Bind parameters (s = string, i = int, b = blob)
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $voornaam, $achternaam, $email, $organisatie);

    }
