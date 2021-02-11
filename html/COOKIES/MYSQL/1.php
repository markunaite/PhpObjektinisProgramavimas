<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
    <?php
    if(!empty($_POST)) {
        require_once("config.php");
  
        $_POST['name'] = mysqli_escape_string($connection, $_POST['name']);
        $_POST['password'] = mysqli_escape_string($connection, $_POST['password']);

    $query = "SELECT count(*) from userlist WHERE name= '$_POST[name]' and pass = '$_POST[password]'";
    $usr = mysqli_query($connection, $query);
    if(!$usr) {
        exit("Klaida autorizacijoje");
    }
    $total = mysqli_fetch_array($usr);
        if(mysqli_num_rows($usr)>0) {
            setcookie("user", urlencode($_POST['name']), time() + 60);
            echo "<html><head>
            <meta http-equiv='Refresh' content='0;url=$_SERVER[PHP_SELF]'>
            </head></html>";
        }
        print_r($total);
    }
    ?>
    <form method="post">
    Vardas: <input type="text" name="name" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'];?>"><br>
    Slaptazodis: <input type="password" name="password" value=""><br>
    <input type="submit" name="submit" value="siusti">
    </form>

    <?php

    if(isset($_COOKIE['user'])) {
        require_once("config.php");
        echo "Labas, ".$_COOKIE['user']."!<br>";
        echo "Prieiga prie jusu slaptu duomenu<br>";
        $query = "SELECT * from userlist where name = '$_COOKIE[user]'";
        $usr = mysqli_query($connection, $query);
        if(!$usr) {
            exit(mysqli_error());
        }
        $user = mysqli_fetch_array($usr);
        echo "Jusu el pastas: ".$user['email']."<br>";
        echo "Jusu URL: ".$user['url']."<br>";
    }
    ?>
    </body>
    </html>