<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<title>Message</title>
</head>

<body>
    <table width="100%" height="100%" > <tr> <td align="center">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        Message: <br><textarea name="mes"></textarea><br><br>
        <input type="hidden" name="yes" value="1">
        <input type="reset" value="Clean">
        <input type="submit" value="Send">
        </form>

<?php
if(!empty($_GET['yes'])) {
    if(!empty($_GET['mes'])) {
        $mes = ($_GET['mes']);
    } else {
        exit("Input message!");
    }
    if(!file_exists("skaicius.txt")) {
        $fp = fopen("skaicius.txt", "w");
        fputs($fp, 1);
        fclose($fp);
        $n[0]=1;
    } else {
        $fp =@fopen("skaicius.txt", "r");
        $n = file("skaicius.txt");
        $n[0]++;
        fputs($fp, $n[0]);
        fclose($fp);
    }

    $dat = date("d m y H:i");
    $fp = fopen("tekstas.txt", "a");
    fwrite($fp, $n[0].".".$dat."\n".$mes."\n\n");
    fclose($fp);
    exit("Your message is accepted.");
}

?>

    </td></tr></table>
</body>

</html>