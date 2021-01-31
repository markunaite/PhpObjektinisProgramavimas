<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
<body>
<?php

$filename = "text.txt";
define("FIRST", 1);

if(empty($_POST)) {
    ?>
     <table>
            <form method="POST">
                <tr>
                    <td>Vardas:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Slaptažodis:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                    <td><input type="submit" name="Toliau"></td>
                </tr>
            </form>
        </table>
<?php
}
else {
    $arr = file($filename);
    $i = 0;
    $temp = array();
    foreach($arr as $line) {
        $data = explode("::", $line);
        $temp['name'][$i] = $data[0];
        $temp['password'][$i] = $data[1];
        $temp['email'][$i] = $data[2];
        $temp['url'][$i] = $data[3];

        $i++;
    }
    if(!in_array($_POST['name'], $temp['name'])) {
        exit("Vartotojo su tokiu vardu nera");
    }

    $index = array_search($_POST['name'], $temp['name']);
    if($_POST['pass'] != $temp['password'][$index]) {
        exit("Slaptazodis neatitinka");
    }

    include "2.php";
    ?>
<table>
    <form method="POST">    
        <input type="hidden" name="name" value='<?=htmlspecialchars($temp['name'][$index]);?>'>
        <input type="hidden" name="pass" value='<?=htmlspecialchars($temp['password'][$index]);?>'>
        <input type="hidden" name="edit" value="edit">

        <tr>
            <td>Slaptazodis:</td>
            <td><input type="password" name="passw" value='<?=htmlspecialchars($temp['password'][$index]);?>'>
        </td>
        </tr>

        <tr>
            <td>Slaptazodis:</td>
            <td><input type="password" name="pass_again" value='<?=htmlspecialchars($temp['password'][$index]);?>'>
        </td>
        </tr>

        <tr>
            <td>El.patas:</td>
            <td><input type="text" name="email" value='<?=htmlspecialchars($temp['email'][$index]);?>'>
        </td>
        </tr>

        <tr>
            <td>URL:</td>
            <td><input type="text" name="url" value='<?=htmlspecialchars($temp['url'][$index]);?>'>
        </td>
        </tr>

        <tr>
            <td>&nbsp</td>
            <td><input type="submit" value="Readguoti">
        </td>
        </tr>
</form>
</table>
<?php
}
?>
</body>
</html>