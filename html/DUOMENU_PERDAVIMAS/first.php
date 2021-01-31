<?php

$filename = array('all.php', 'auth.php',
'auth.txt', 'base.txt',
'chat.txt', 'config.php',
'count.txt', 'count_new.txt',
'create.php', 'dat.db');

$filename = array('all.php', 'auth.php', 'auth.txt', 'base.txt', 'chat.txt', 'config.php', 'count.txt', 'count_new.txt', 'create.php', 'dat.db' );
$url = implode('&filename[]=', $filename);
$url = 'second.php?filename[]='.$url;
echo '<a href="'.$url.'">Nuoroda i faila second.php</a>';

?>

<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

$filename = array('all.php', 'auth.php',
'auth.txt', 'base.txt',
'chat.txt', 'config.php',
'count.txt', 'count_new.txt',
'create.php', 'dat.db');

?>

<form action="second.php" method="POST">

<?php

// cikle formuojame pasleptus laukus su masyvo elementais

foreach($filename as $name){
echo '<input type=hidden name=filename[] value=$name>';

}

?>
<input type="submit" value="Persiusti masyva">

</form>
</body>
</html>

