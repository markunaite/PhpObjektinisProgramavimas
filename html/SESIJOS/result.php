<?php 
 require_once("logged_session.php");

 $_SESSION['answer5'] = $_REQUEST['answer5'];
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <title>Testas</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;500&display=swap" rel="stylesheet">
</head>

<body>

<?php
    $is_correct_answer1 = $_SESSION['answer1'] === '3';
    $is_correct_answer2 = $_SESSION['answer2'] === '1';
    $is_correct_answer3 = $_SESSION['answer3'] === '2';
    $is_correct_answer4 = $_SESSION['answer4'] === '3';
    $is_correct_answer5 = $_SESSION['answer5'] === '3';

    $score = 0;
    if($is_correct_answer1) {
        $score++;
    }

    if($is_correct_answer2) {
        $score++;
    }

    if($is_correct_answer3) {
        $score++;
    }

    if($is_correct_answer4) {
        $score++;
    }

    if($is_correct_answer5) {
        $score++;
    }    
?>

<strong>Teisingai atsakyta <?php echo $score;?> is 5</strong>
<strong>Tavo pazymys <?php echo $score*2;?></strong>

</body>
</html>