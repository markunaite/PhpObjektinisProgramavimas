<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lygiavimas</title>
</head>
<body>

</pre>

<?php

$filename = array("all.php", "auth.php",
"auth.txt", "base.txt",
"chat.txt", "config.php",
"count.txt", "count_new.txt",
"counter.dat", "create.txt", "dat.db");

$max_lenght = 0;
foreach($filename as $name){
    $lenght = strlen($name);
    if($lenght > $max_lenght){
        $max_lenght = $lenght;

    }

}

echo "<pre>";
foreach ($filename as $name){
    printf("%{$max_lenght}s\n",$name);
}

echo "</pre>";

?>

</body>
</html>