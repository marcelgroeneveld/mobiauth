<?php
define("ROOT", __DIR__ . "/");

if(PHP_SESSION_NONE){
    session_start();
}


if (isset($login_vereist) && ($_SESSION['loggedin'] != TRUE)){
Header("Location: login");

}