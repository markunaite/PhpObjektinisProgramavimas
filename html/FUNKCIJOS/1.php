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

suma(3, 18);

    function showSum($pirmas, $antras) {
        $suma = $pirmas + $antras;

        echo 'Suma: ';
        echo $suma;
    }
?>
</body>
</html>