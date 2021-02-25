<?php 
 require_once("logged_session.php");

 $_SESSION['answer1'] = $_REQUEST['answer1'];
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

    <h2>· Testas apie pavasarį ·</h2>
    <form action="test3.php" method="POST">
        <p>Šis nuo 1995 m. vykstantis festivalis šiemet buvo atidarytas virtualiu būdu. Koks tai festivalis?</p>

        <div class="laukas">
            <input type="radio" id="ats1" name="answer2" value="1">
            <label for="ats1">Kino pavasaris</label>
            <input type="radio" id="ats2" name="answer2" value="2">
            <label for="ats2">Džiazo pavasaris</label>
            <input type="radio" id="ats3" name="answer2" value="3">
            <label for="ats3">Poezijos pavasaris</label><br>
            <input type="submit" name="Submit" value="Kitas" />
        </div>
        
    </form>
</body>
</html>

