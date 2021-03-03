<?php 
 require_once("logged_session.php");
 include("connect.php"); 
 $_SESSION['question5'] = $_REQUEST['question5'];
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <title>Parduotuvė</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;500&display=swap" rel="stylesheet">
</head>

<body>

<?php
    $question1 = $_SESSION['question1'];
    $question2 = $_SESSION['question2'];
    $question3 = $_SESSION['question3'];
    $question4 = $_SESSION['question4'];
    $question5 = $_SESSION['question5'];

  $score = ($question1 + $question2 + $question3 + $question4 +$question5) / 5;


  $user_id = $_COOKIE["user_id"];
  $sql = "INSERT INTO vertinimas(user_id, vidurkis)  VALUES ($user_id, $score )";

  if ($connection->query($sql) === TRUE) {
  } else {
  echo "Error: " . $sql . "<br>" . $connection->error;
  }
?>

<strong>Jūsų įvertinimas <?php echo $score;?> </strong>

</body>
</html>