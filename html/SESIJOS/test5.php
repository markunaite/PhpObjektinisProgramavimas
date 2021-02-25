<?php 
 require_once("logged_session.php");

 $_SESSION['answer4'] = $_REQUEST['answer4'];
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
    <form action="result.php" method="POST">
    <p>Kokioje valstybėje 1968 m. vyko „(...) pavasaris“ – masinių protestų prieš komunizmą ir demokratinių reformų laikotarpis? Praleistas žodis – tos valstybės sostinė.</p>

        <div class="laukas">
            <input type="radio" id="ats1" name="answer5" value="1">
            <label for="ats1">Lenkijoje</label>
            <input type="radio" id="ats2" name="answer5" value="2">
            <label for="ats2">Vengrijoje</label>
            <input type="radio" id="ats3" name="answer5" value="3">
            <label for="ats3">Čekoslovakijoje</label><br>
            <input type="submit" name="Submit" value="Kitas" />
        </div>
    </form>
</body>
</html>