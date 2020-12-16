<?php
if(PHP_SESSION_NONE){
    session_start();
}

$db_host = 'localhost';
$db_name = 'mobiauth';
$db_password = '2O9n9f*n';
$db_user = 'mobiauth';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>