<!DOCTYPE html>
<html>
    <head>
        <title>Insert</title>
    </head>
    <body>
        <?php

$mysqli = mysqli_connect("phpmyadmin_db", "mopsas", "koldunas", "Uzd01");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

}else{

$sql = "INSERT INTO testTable (testField) VALUES ('".$_POST["testfield"]."')";

$res = mysqli_query($mysqli, $sql);

if($res === TRUE){

echo "A record has been inserted.";

}else{

printf("Could not insert record: %s\n". mysqli_error($mysqli));

}

mysqli_close($mysqli);

}
?>

<?php

$mysqli = mysqli_connect("phpmyadmin_db", "mopsas", "koldunas", "Uzd01");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

}else{

$sql = "SELECT * FROM testTable";

$res = mysqli_query($mysqli, $sql);

if($res){

$number_of_rows = mysqli_num_rows($res);

printf("Result set has %d rows.\n", $number_of_rows);

}else{

printf("Could not retrieve record: %s\n". mysqli_error($mysqli));

}

mysqli_free_result($res);

mysqli_close($mysqli);

}
?>
    </body>
</html>