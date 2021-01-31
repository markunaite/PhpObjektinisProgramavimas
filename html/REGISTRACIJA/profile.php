<?php
session_start();
if(@$_SESSION['user']) {
    header('Location: index.php');
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
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"> <?= $_SESSION['user']['email'] ?></a>
        <a href="logout.php" class="logout">Iseiti</a>
</form>
</body>
</html>