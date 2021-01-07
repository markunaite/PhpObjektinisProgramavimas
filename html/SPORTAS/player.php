<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Statistics</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    </head>

<body>

<h1>Statistics</h1>

<?php
//pagal id is url nuskiatomas failas is statistics aplankalo i masyva
$player_statistics = explode("\n", file_get_contents('statistics/' . $_GET['id'] . '.txt'));
$successful_passes = 0;

// sukuriamas ciklas, kuriame pasakome, jeigu skaičius yra lygus 1, tai tada perdavimas yra tikslingas,
// ir kiekvieną kartą padarius gerą perdavimą, suma padidėja vienetu

foreach($player_statistics as $pass) {    
    if ($pass == '1') {
        $successful_passes = $successful_passes + 1;
    }
}

// vidurkis yra paskaičiuojamas, kiek gerų perdavimų buvo padaryta, o funkcija count nurodo, kiek apskritai 
//žaidėjas padarė pasų


$avg = $successful_passes * 100 / count($player_statistics);
?>
<p>Total passes: 
    <?php echo count($player_statistics); ?>
</p>
<p>Successful passes: 
    <?php
echo $successful_passes; ?> 
 </p>

 <!-- Tas pats kaip ir su vidurkiu, tik count (kiek iš viso perdavimų padaryta) minusuoja iš tikslingų-->

 <p>Missed passes: <?php
 echo count($player_statistics) - $successful_passes; ?>
 <p>
     <p> Average: 

<?php

echo $avg;

?>
</p>

<?php

$host    = "phpmyadmin_db";
$user    = "mopsas";
$pass    = "koldunas";
$db_name = "PSG_zaidejai";


$connection = mysqli_connect($host, $user, $pass, $db_name);
$player_id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM players WHERE ID='$player_id'");
$player = mysqli_fetch_assoc($result);
$team = $player['Team'];
echo '<p class="link"><a href="team.php?team=' . $team . '">Go back to previous page</a></p>'
?>

</body>
</html>