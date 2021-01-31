<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
    <?php
    if(isset($_COOKIE['user'])) {
        echo "Prieiga prie jusu slaptu duomenu";
    } else {
        echo "<html><head>
        <meta http-equiv='Refresh' content='0;url=1.php'>
        </head></html>";
    }
?>
    </body>
    </html>