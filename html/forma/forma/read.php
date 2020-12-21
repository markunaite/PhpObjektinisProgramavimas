<!DOCTYPE html>
<html lang="en">

<head>
    <title>read</title>
</head>

<body>

    <?php
$email = file("email.txt");
for ($id = 0; $i <count($email); $i++) {
    echo $email[$i]. "<br>";
}
?>

</body>
</html>