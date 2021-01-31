<?php
session_start();
if(@$_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;500;700&display=swap" rel="stylesheet">
</head>
<body>
<form action="signup.php" method="POST" enctype="form-data">
    <label>Vardas_Pavarde</label>
    <input type="text" name="full_name" placeholder="Iveskite savo varda ir pavarde">
    <label>Login</label>
    <input type="text" name="login" placeholder="Iveskite savo login">
    <label>Pastas</label>
    <input type="email" name="email" placeholder="Iveskite savo el.pasta">
    <label>Profilio nuotrauka</label>
    <input type="file" name="avatar">
    <label>Slaptazodis</label>
    <input type="password" name="password" placeholder="Iveskite savo slaptazodi">
    <label>Slaptazodzio patvirtinimas</label>
    <input type="password" name="password_confirm" placeholder="Pakartokite savo slaptazodi">
    <button>Prisijungti</button>
    <p>
        Jus jau turite paskyra - <a href="index.php">Autorizuokites</a>
    </p>

    <?php 
    if(@$_SESSION['message']) {
        echo '<p class="msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>
    </form>
</body>
</html>

