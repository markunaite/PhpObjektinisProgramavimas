<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Line-up</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    </head>

<body>
<?php    

    $team = $_GET['team'];
    echo '<h1>' . $team . ' Line-up</h1>'
?>
 
    <?php
$host    = "phpmyadmin_db";
$user    = "mopsas";
$pass    = "koldunas";
$db_name = "PSG_zaidejai";


$connection = mysqli_connect($host, $user, $pass, $db_name);


if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

echo '<table class="data-table">
        <tr class="data-heading">         
            <td>Name</td>
            <td>Picture</td>
        </tr>'; 

//išsiima duomenis iš DB

$players = mysqli_query($connection, "SELECT * FROM players WHERE team='$team'");

// eina ciklas per visus komandos žaidejus
    
foreach($players as $player) {
    echo '<tr>';    
    echo '<td> <a href="player.php?id=' . $player['ID'] . '">' . $player['Name'] . '</a> </td>';     
    echo '<td> <img class="players" src="' . $player['Picture'] .'"  alt="'.$player['Name'].'" /></td>';     
    echo '</tr>';
}

echo "</table>";
?>

<p class="link"><a href="index.php">Go back to previous page</a></p>

</body>
</html>