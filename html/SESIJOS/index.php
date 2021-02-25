<?php
session_start();
if(@$_SESSION['user']) {
    header('Location: test1.php');
}
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <title>Testas</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;500&display=swap" rel="stylesheet">
</head>

<body>

<h2>Prisijunkite</h2>

<form action="loginprocess.php" method="POST">
<div class="login">
        <label>vartotojo vardas</label>
        <input type="text" name="login" placeholder="vartotojo vardas">
        <label>slaptažodis</label>
        <input type="password" name="password" placeholder="slaptažodis">
        <input type="submit" value="Login" name="sub">
        </div>
        <?php 
if(isset($_REQUEST["err"]))
	$msg="Neteisingas prisijungimo vardas arba slaptažodis";
?>
<br>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>
</p>
    </form>
</body>
</html>
