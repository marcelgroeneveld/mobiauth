<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'mobiauth';
$DATABASE_PASS = '2O9n9f*n';
$DATABASE_NAME = 'mobiauth';



$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$JsonOutArray[] = array();
if ($stmt = $con->prepare('SELECT gebruiker_id, Voornaam, achternaam, Email FROM Gebruikers')) {
    // Bind parameters (s = string, i = int, b = blob)
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $voornaam, $achternaam, $email);
        echo 'ja';
    }
    while ($stmt->fetch()) {
        $JsonOutArray[] = array(
            "uid" => $id,
            "voornaam" => $voornaam,

        );
    }
    json_encode($JsonOutArray);
    return $JsonOutArray;


}
$stmt->close();

