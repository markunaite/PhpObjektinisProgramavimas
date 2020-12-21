<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test</title>
    </head>
    <body>
<?php

$mysqli = mysqli_connect("phpmyadmin_db","mopsas", "koldunas", "Uzd01");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

} else {

printf("Host information: %s\n", mysqli_get_host_info($mysqli));

} 
?>

<?php
$mysqli = mysqli_connect("phpmyadmin_db","mopsas", "koldunas", "Uzd01");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

} else{

$sql = "CREATE TABLE testTABLE"

. "(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, testField VARCHAR(75))";

$res = mysqli_query($mysqli, $sql);

if($res == TRUE){

echo "Table testTable successfully created.";

} else {

printf("Could not create table: %s\n", mysqli_error($mysqli));

}

mysqli_close($mysqli);
}
?>
<form action="insert.php" method="POST">

<p>Text to Add:<br>

<input type="text" name="testfield" size="30">

<p><input type="submit" name="submit" value="insert record"></p>

</form>


    </body>
</html>