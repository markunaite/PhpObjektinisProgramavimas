<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Read message</title>
</head>

<body>
    <table>
        <tr>
            <td>
                <?php
                if(!file_exists("tekstas.txt")) {
                    exit("No message!");
                } else {
                    $fp = $fopen("tekstas.txt", "r+");
                    $n = $file("tekstas.txt");
                    fclose($fp);
                    for($i=0; $i<count($n); $i++) {
                        echo $n[$i]."<br>";
                    }
                    unlink("skaicius.txt");
                    unlink("tekstas.txt");
                    exit;
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>