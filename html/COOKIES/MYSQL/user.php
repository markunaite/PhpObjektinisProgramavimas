<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>

<?php
require_once("config.php");
$query = "SELECT * from userlist order by name";
$usr = mysqli_query($connection, $query);
if(!$usr) {
    exit("Klaida".mysqli_error());
}
while($user = mysqli_fetch_array($usr)) {
    echo "<a href=userlist.php?id_user=$user[id_user]>$user[name]</a><br>";
}
?>
</body>
</html>