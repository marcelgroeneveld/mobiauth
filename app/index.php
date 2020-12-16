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

    <title>Login</title>
</head>
<body>
<section id="login_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="images/Mobiauth.png" class="logo mx-auto d-block" alt="MobiAuth_Logo">
            </div>
            <div class="col-12 inputs_login">
                <form action="login_process.php" method="post">
                    <input type="text" class="input_login mx-auto d-block" placeholder="E-mail" name="email">
                    <input type="password" class="input_login mx-auto d-block" placeholder="Wachtwoord" name="password">
                    <input type="submit" class="input_login button_login mx-auto d-block" value="Login">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>