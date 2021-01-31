<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>
        <table>
            <form method="POST">
                <tr>
                    <td>Vardas:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Slaptažodis:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>Slaptažodis:</td>
                    <td><input type="password" name="pass_again"></td>
                </tr>
                <tr>
                    <td>El_paštas:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>URL:</td>
                    <td><input type="text" name="url"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Registruotis"></td>
                </tr>
            </form>
        </table>

        <?php

        if(!empty($_POST['name'])) {
            $_POST['name'] = trim($_POST['name']);
        }
        if(!empty($_POST['pass'])) {
            $_POST['pass'] = trim($_POST['pass']);
        }
        if(!empty($_POST['name'])) {
            $_POST['pass_again'] = trim($_POST['pass_again']);
        }
        if(!empty($_POST['name']))
        exit();

        if(empty($_POST['name']))
            exit('Laukas "Vardas" neužpildytas');
        if(empty($_POST['pass']))
            exit('Vienas iš slaptažodžių laukų nėra užpildytas');
        if(empty($_POST['pass_again']))
            exit('Vienas iš slaptažodžių laukų nėra užpildytas');

        if($_POST['pass'] != $_POST['pass_again'])
            exit('Slaptažodžiai nesutampa');

        if(!empty($_POST['email'])) {
            if(!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) {
                exit('Laukas "El_paštas" turi atitikti formatą somebody@somewhere.eu');
            }
        }
        require_once("config.php");

            $_POST['name'] = mysqli_escape_string($connection, $_POST['name']);
            $_POST['pass'] = mysqli_escape_string($connection, $_POST['pass']);
            $_POST['email'] = mysqli_escape_string($connection, $_POST['email']);
            $_POST['url'] = mysqli_escape_string($connection, $_POST['url']);
        

        $query = "SELECT COUNT(*) FROM userlist WHERE name ='$_POST[name]'";
        $usr = mysqli_query($connection, $query);
        if(!$usr)
        exit("Klaida - ". mysql_error());
        $total = mysqli_fetch_array($usr);
        if($total > 0) {
            exit("Sis vartotojo vardas jau uzregistruotas");
        }

        $query = "INSERT INTO userlist
                    VALUES(NULL,
                    '$_POST[name]',
                    '$_POST[email]',
                    '$_POST[url]')";
        if(mysqli_query($connection, $query)) {
            echo "<html><head>
            <meta http-equiv='Refresh' content='0;url=$_SERVER[PHP_SELF]'>
            </head></html>";
        }  else {
            exit("KLaida pildant duomenis = ".mysqli_error());
        }
        ?>
        </body>
        </html>