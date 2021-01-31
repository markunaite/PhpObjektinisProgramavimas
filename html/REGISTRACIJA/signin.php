<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE login = '$login' and password = '$password' ");
if(mysqli_num_rows($checkUser)> 0) {
    $user = mysqli_fetch_assoc($checkUser);
    $_SESSION['user'] = [
        "id"=>$user['id'],
        "full_name"=>$user['full_name'],
        "avatar"=>$user['avatar'],
        "email"=>$user['email']
    ];
} else {
    $_SESSION['message'] = "registracija sekminga";
    header('Location: ../index.php');
}
?>
<pre>
    <?php
    print_r($checkUser);
    print_r($user);
    ?>
    </pre>