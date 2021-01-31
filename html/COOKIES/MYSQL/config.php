<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
<?php

$host = "phpmyadmin_db";
$dbname = "imone";
$dbuser = "mopsas";
$dbpasswd = "koldunas";

$connection = mysqli_connect($host, $dbuser, $dbpasswd, $dbname);

if(mysqli_connect_errno()){
   die("connection failed: "
      . mysqli_connect_error()
      . " (" . mysqli_connect_errno()
     . ")");
}


// $dbcnx = mysqli_connect($host, $dbuser, $dbpasswd, $dbname);
// if (!$dbcnx) {
//     exit("Serveris nepasiekiamas: ".mysqli_error());
// }
// print_r($dbcnx);
// if(!@mysqli_select_db($dbname, $dbcnx)) {
//     exit("DB yra nepasiekiama: ".mysqli_error());
// }
?>
</body>
</html>