<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forma</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="first"><br><br>
        <input type="text" name="second"><br><br>
        <input type="submit" name="submit" value="Send"><br><br>
    </form>
    <hr>

    <p><b>Forma PHP priemones</b></p>

<?php

$masFormStart = array('action'=>'index.php', 'method'=>'POST');

echo '<pre>';
print_r($masFormStart);
echo '</pre>';

function formStart($masyvas) {
    echo '<form action="'.$masyvas['action'].'" method="'.$masyvas['method'].'">';
}
function inputText1() {
    echo '<input type="text" name="newFirst"><br><br>';
}
function inputText2() {
    echo '<input type="text" name="newSecond"><br><br>';
}
function submit() {
    echo '<input type="submit" name="submit" value="Paspausti">';
}
function formEnd() {
    echo '</form>';
}
function getMas($arr) {
    $str = '';
    foreach($arr as $name=>$value) {
        $str.=$name. '-"'.$value.'" ';
    }
    return $str;
}
formStart($masFormStart);
inputText1();
inputText2();
echo submit();
formEnd();
echo '<hr>';

?>
</body>
</html>
