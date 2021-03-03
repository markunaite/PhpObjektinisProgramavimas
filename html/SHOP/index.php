<?php
session_start();
if(@$_SESSION['user']) {
    header('Location: products.php');
}
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <title>Parduotuvė</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Neuton:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<body>

<h2>· Prisijunkite ·</h2>

<form action="loginprocess.php" method="POST">
<div class="card">
        <label>vartotojo vardas</label>
        <input type="text" name="login" placeholder="vartotojo vardas">
        <label>slaptažodis</label>
        <input type="password" name="password" placeholder="slaptažodis"><br>
        <input type="submit" value="Login" name="sub"><br>
        <p class="footer">Neturite paskyros? - <a href="register.php">Užsiregistruokite</a></p>
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
