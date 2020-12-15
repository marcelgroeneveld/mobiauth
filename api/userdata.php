<?php
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

