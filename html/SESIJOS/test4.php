<?php 
 require_once("logged_session.php");

 $_SESSION['answer3'] = $_REQUEST['answer3'];
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
    <form action="test5.php" method="POST">
        <p>Kokios lietuviškos poemos pirmoji dalis vadinasi „Pavasario linksmybės“?</p>

            <div class="laukas">
                <input type="radio" id="ats1" name="answer4" value="1">
                <label for="ats1">Ponas Tadas</label>
                <input type="radio" id="ats2" name="answer4" value="2">
                <label for="ats2">Eglė, žalčių karalienė</label>
                <input type="radio" id="ats3" name="answer4" value="3">
                <label for="ats3">Metai</label><br>
                <input type="submit" name="Submit" value="Kitas" />
            </div>
    </form>
</body>
</html>