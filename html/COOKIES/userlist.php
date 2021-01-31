<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Email</title>
    </head>
    <body>

<?php
$filename = "text.txt";
$arr = file($filename);
foreach($arr as $line) {
    $data = explode("::", $line);
    $data[3] = trim($data[3]);
    echo "Vardas - ".htmlspecialchars($data[0])."<br>";
if(!empty($data[2]))
    echo "El_pastas - ".htmlspecialchars($data[2])."<br>";
if(!empty($data[3]))
    echo "URL - ".htmlspecialchars($data[3])."<br>";

    echo "<br>";
}
?>
</body>
</html>