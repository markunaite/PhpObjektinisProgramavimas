<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lygiavimas</title>
</head>
<body>

<?php

$filename = array("all.php", "auth.php",
"auth.txt", "base.txt",
"chat.txt", "config.php",
"count.txt", "count_new.txt",
"counter.dat", "create.txt", "dat.db");

$total = count($filename);
$half = $total/2;


$max_lenght_first = 0;
for ($i =0; $i < $half; $i++){
    $lenght = strlen($filename[$i]);
    if ($lenght > $max_lenght_first){
        $max_lenght_first = $lenght;

    }
}

$max_lenght_second = 0;
for ($i = $half; $i < $total; $i++){
    $lenght = strlen($filename[$i]);
    if ($lenght > $max_lenght_second){
        $max_lenght_second = $lenght;

    }

}

echo "<pre>";
for ($i = 0; $i < $half; $i++) {
    printf($filename[$i] .
        str_repeat(" ", $max_lenght_first - strlen($filename[$i])) .
        "%{$max_lenght_second}s\n",
        $filename[$half + $i]);
}

echo "</pre>";
?>
 </body>
 </html>