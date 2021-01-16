<?php
include("../auth.php");

header('Content-Type: application/json');

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$JsonOutArray[] = array();
if ($stmt = $con->prepare('SELECT gebruiker_id, Voornaam, achternaam, Email, Organisatie FROM Gebruikers')) {
    // Bind parameters (s = string, i = int, b = blob)
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $voornaam, $achternaam, $email, $organisatie);

    }
    $d = array();


    while ($stmt->fetch()) {

        $d[] = array('uid' => "$id",
            'voornaam' => "$voornaam",
            'achternaam' => "$achternaam",
            'email' => "$email",
            'organisatie' => "$organisatie");


    }
    $json = json_encode($d);
    $output = json_encode(['data' => $d]);
    echo $output;

}
$stmt->close();

