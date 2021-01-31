<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Something</title>
    </head>
    <body>
<?php
session_start();
?>

<form method="POST">
    Vardas: <input type="text" name="name" value='<?= @$_SESSION['name'];?>'><br>
    Slaptazodis: <input type="password" name="password" value='<?= @$_SESSION['password'];?>'><br>
    <input type="submit" value="siusti">
</form>

<?php
if(!empty($_POST['name']) && !empty($_POST['password'])) {
    require_once("config.php");

    if(!get_magic_quotes_gpc()) {
        $_POST['name'] = mysql_escape_string($_POST['name']);
        $_POST['password'] = mysql_escape_string($_POST['password']);
    }

    $query = "select count(*) from userlist where name = '$_POST[name]' and pass = '$_POST[password]'";
    $usr = mysql_query($query);
    if(!$usr) {
        exit("Klaida");
    }
    $total = mysql_result($usr, 0);
}

if (@$total > 0) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
}
if(isset($_SESSION['name'])) {
    require_once("config.php");

    echo "Labas, ".$_SESSION['name']."!<br>";
    echo "Prieiga prie jusu slaptu duomenu<br>";

    $query = "select * from userlist where name = '$_SESSION[name]'";
    $usr = mysql_query($query);
    if(!$usr) {
        exit(mysql_error());
    }
    $user = mysql_fetch_array($usr);
    echo "Jusu el. pastas: ".$user['email']."<br>";
    echo "Jusu url: ". $user['url']."<br>";
}
?>
</body>
</html>