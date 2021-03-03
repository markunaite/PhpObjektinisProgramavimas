<?php 
 require_once("logged_session.php");
 include("connect.php"); 
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

<?php
$user_id = $_COOKIE["user_id"];


$items = mysqli_query($connection, "SELECT * FROM cart_userid c inner join produktai p on p.id =c.product_id where c.user_id='$user_id'");

echo '<table class="data-table">
        <tr class="data-heading">                     
            <th>Produkto pavadinimas</th>
        </tr>'; 
    
foreach($items as $item) {
    echo '<tr>';    
    echo '<td>' . $item['pavadinimas'] . '</a> </td>';         
    echo '</tr>';
}

echo "</table>";

$sql = "DELETE FROM cart_userid WHERE user_id = '$user_id';";

if ($connection->query($sql) === TRUE) {
echo "<p>Ačiū, kad pirkote</p>";
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}
?>

</body>
</html>