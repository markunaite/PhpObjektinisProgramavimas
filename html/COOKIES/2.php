<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
<?php
if(!defined('FIRST')) {
    exit();
}

if(isset($_POST['edit'])) {
    $_POST['name'] = trim($_POST['name']);
    $_POST['passw'] = trim($_POST['passw']);
    $_POST['pass_again'] = trim($_POST['pass_again']);

    if(empty($_POST['name'])) {
        exit();
    }
    if(empty($_POST['name'])) {
        exit("Laukas vardas neuzpildytas");
    }
    if(empty($_POST['passw'])) {
        exit("Vienas is slaptazodziu lauku yra neuzpildytas");
    }
    if(empty($_POST['pass_again'])) {
        exit("Vienas is slaptazodziu lauku yra neuzpildytas");
    }
    if($_POST['passw'] != $_POST['pass_again']) {
        exit("Slaptazodziai nesutampa");
    }

    if(!empty($_POST['email'])) {
        if(!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) {
            exit('Laukas "El_paštas" turi atitikti formatą somebody@somewhere.eu');
        }
    }

    $arr = file($filename);
    $linefile = array();
    foreach($arr as $line) {
        $data = explode("::", $line);
        if($data[0] == $temp['name'][$index]) {
            $linefile[] = $_POST['name']."::".$_POST['passw']."::".$_POST['email']."::".$_POST['url'];
            $temp['password'][$index] = $_POST['passw'];
            $temp['email'][$index] = $_POST['email'];
            $temp['url'][$index] = $_POST['url'];
        }
        else {
            $linefile[] = trim($line);
        }
    }

    $fd = fopen($filename, "w");
    if(!$fd) {
        exit("Ivyko klaida irasant i faila");
    }
    fwrite($fd, implode("\r\n", $linefile));
    fclose($fd);
}
?>
</body>
</html>