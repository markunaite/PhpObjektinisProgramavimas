<?php 
 require_once("logged_session.php");
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
    <form action="test2.php" method="POST">
            <p>Kokiu bendru terminu dažnai vadinama 1848-1849 m. Europą supurčiusi revoliucinių judėjimų banga?</p>

            <div class="laukas">
                <input type="radio" id="ats1" name="answer1" value="1">
                <label for="ats1">Darbininkų pavasaris</label>
                <input type="radio" id="ats2" name="answer1" value="2">
                <label for="ats2">Europos pavasaris</label>
                <input type="radio" id="ats3" name="answer1" value="3">
                <label for="ats3">Tautų pavasaris</label><br>
                <input type="submit" name="Submit" value="Kitas" />
            </div>    
    </form>  
</body>
</html>
