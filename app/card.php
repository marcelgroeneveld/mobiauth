<?php
require_once 'session.inc.php';
require_once 'config.inc.php';

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$result1 = $conn->query("SELECT * FROM Gebruikers WHERE Email = '$email' AND Wachtwoord = '$password'");

$row1 = mysqli_fetch_array($result1);

$uid = $row1['0'];

$result2 = $conn->query("SELECT Organisaties.Organisatie_naam FROM Organisaties INNER JOIN Gebruikers ON Organisaties.Organisatie_id=Gebruikers.Organisatie WHERE Gebruikers.Gebruiker_id = '$uid'");

$row2 = mysqli_fetch_array($result2);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Kaart</title>
</head>
<body>
<section id="card_section">
    <div class="container">
        <div class="row text-white">
            <div class="col-12">
                    <p>Welkom: <?=$row1['1']?> <?=$row1['2']?></p>
                    <p>Organisatie: <?=$row2['0']?></p>
            </div>
            <div class="col-12 click_card">
                <p class="text-center">Eigendom van MobiAuth B.V.</p>
                <a href="print.php">
                <img src="images/rfid.png" class="card rounded mx-auto d-block" alt="empty_card">
                </a>
                <div class="alert alert-danger mt-5" role="alert">
                    Klik op uw pas om naar de vingerafruk verificatie te gaan.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>