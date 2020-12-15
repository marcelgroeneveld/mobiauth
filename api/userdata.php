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
        $stmt->bind_result($id, $voornaam, $achternaam, $email, $wachtwoord);
        $stmt->fetch();

        while ($row_data = $stmt->fetch_assoc()) {

            $JsonOutArray[] = array(
                "uid" => $row_data['gebruiker_id'],
                "voornaam" => $row_data['Voornaam']

            );
        }
        return $JsonOutArray;
    }
}
$stmt->close();

