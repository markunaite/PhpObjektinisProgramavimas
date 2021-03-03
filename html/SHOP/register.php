
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
<h2>· registracija ·</h2>

<form action="signup.php" method="POST" enctype="form-data">
    <div class="card">
    <label>Vardas</label>
    <input type="text" name="name" placeholder="Įveskite savo vardą">
    <label>Pavardė</label>
    <input type="text" name="surname" placeholder="Įveskite savo pavardę">
    <label>Login</label>
    <input type="text" name="login" placeholder="Įveskite savo login">
    <label>Slaptažodis</label>
    <input type="password" name="password" placeholder="Įveskite savo slaptažodį">
    <input type="submit" value="Užsiregistruoti" name="sub">
    <p>
        Susikūrėte paskyrą - <a href="index.php">Prisijunkite</a>
    </p>
    </div>

    <?php 
    if(@$_SESSION['message']) {
        echo '<p class="msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>
    </form>
</body>
</html>