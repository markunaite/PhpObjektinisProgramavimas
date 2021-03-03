<?php 
 require_once("logged_session.php");
 $_SESSION['question3'] = $_REQUEST['question3'];

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

    <h2>· klausimai ·</h2>
    <form action="question5.php" method="POST">
            

            <div class="laukas">

            <p class="questions">Kaip vertinate mūsų tinklapio dizainą?</p>

                <input type="radio" id="mark1" name="question4" value="1">
                <label for="mark1">Blogai</label>
                <input type="radio" id="mark2" name="question4" value="2">
                <label for="mark2">Patenkinimai</label>
                <input type="radio" id="mark3" name="question4" value="3">
                <label for="mark3">Vidutiniškai</label>
                <input type="radio" id="mark4" name="question4" value="4">
                <label for="mark4">Gerai</label>
                <input type="radio" id="mark5" name="question4" value="5">
                <label for="mark5">Puikiai</label><br>
                <input type="submit" name="Submit" value="Kitas" />
            </div>    
    </form>  
</body>
</html>
