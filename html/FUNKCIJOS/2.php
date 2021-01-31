<!DOCTYPE html>
<html lang="en">
    <head>
        <title>funkcijos</title>
    </head>
<body>
<?php
function suma($pirmas, $antras) {
    echo $pirmas + $antras;
}
function showSum() {
    echo 'Suma: ';
    suma(5, 16);
}

showSum();
?>
</body>
</html>