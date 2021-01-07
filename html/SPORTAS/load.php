<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Paris Saint-Germain Line-up</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    </head>

<body>

<h1>Statistics</h1>

<?php

$host    = "phpmyadmin_db";
$user    = "mopsas";
$pass    = "koldunas";
$db_name = "PSG_zaidejai";


$connection = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
//iš failo path.txt įkelia duomenis į DB
$file = fopen("path.txt","r");
while ($data = fgetcsv ($file)){
     print_r($data);
     $sql = "INSERT INTO players(ID, Name, Picture, Team)  VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";

    if ($connection->query($sql) === TRUE) {
    echo "New player added successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
$connection->close();
fclose($file);
?>
</body>
</html>