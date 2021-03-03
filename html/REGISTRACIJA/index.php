<?php
session_start();
if(@$_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Autorizacija ir registracija</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <form action="" method="POST">   

        <label>Login</label>
        <input type="text" placeholder="Iveskite savo login">
        <label>Slaptazodis</label>
        <input type="password" placeholder="Iveskite savo slaptazodi">
        <button>Ieiti</button>
        <p>Jus neturite account? - <a href="register.php">Registruokites</a></p>

        <?php
        if(@$_SESSION['message']) {
            echo '<p class="msg">'.$_SESSION['message'].'</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>