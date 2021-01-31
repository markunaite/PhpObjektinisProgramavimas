<?php

$host    = "phpmyadmin_db";
$user    = "mopsas";
$pass    = "koldunas";
$db_name = "users";


$connect = mysqli_connect($host, $user, $pass, $db_name);


if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

?>