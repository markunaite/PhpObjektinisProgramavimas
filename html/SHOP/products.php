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

<h2>· prekės ·</h2>

<?php
$user_id = $_COOKIE["user_id"];

if(!empty($_POST["product_id"])) {    
    
    $product_id = $_POST["product_id"];

    $sql = "INSERT INTO cart_userid(user_id, product_id)  VALUES ($user_id, $product_id )";

    if ($connection->query($sql) === TRUE) {
    echo "<p>Prekė įdeta į krepšelį</p>";
    } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
    }
}


$products = mysqli_query($connection, "SELECT * FROM produktai p inner join produkto_kategorija k on k.ID = p.kategorijos_id left join sub_kategorija s ON s.ID = p.sub_id;");

echo '<table class="data-table">
        <tr class="data-heading">                     
            <th>Produktas</th>
            <th>Produkto kategorija</th>
            <th>Sub-kategorija</th>
            <td />
        </tr>'; 
    
foreach($products as $product) {
    echo '<tr>';    
    echo '<td>' . $product['pavadinimas'] . '</a> </td>';     
    echo '<td>' . $product['kategorijos_pavadinimas'] . '</td>';     
    echo '<td>' . $product['sub_kategorijos_pavadinimas'] . '</td>';     
    echo '<td><form action="products.php" method="post"><input type="hidden" name="product_id" value="'. $product['id'] .'" /><input type="submit" name="Submit" value="Įsidėti į krepšelį" /></form></td>';     
    echo '</tr>';
}

echo "</table>";


$cart = mysqli_query($connection, "SELECT COUNT(*)FROM cart_userid WHERE user_id ='$user_id'");
if (mysqli_fetch_row($cart)[0] > 0) {
    echo '<button><a href="cart.php"><p class="btn">Baigti apsipirkti</p></a></button>';
}
echo mysqli_fetch_row($cart)[0];
?>

<button><a href="question1.php"><p class="btn">į klausimyną</p></a></button>

<!-- <p class="link"><a href="index.php">Go back to previous page</a></p> -->

</body>
</html>