<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
<?php
require_once("config.php");
$query = "SELECT * from userlist where id_user = $_GET[id_user]";
$usr = mysqli_query($query);
if(!$usr) {
    exit("Klaida".mysql_error());
}
$user = mysqli_fetch_array($usr);
echo "Vartotojo vardas - $user[name]<br>";
if(!empty($user['email'])) {
    echo "Email - $user[email]<br>";
}
if(!empty($user['url'])) {
    echo "URL - $user[url]<br>";
}
?>
</body>
</html>