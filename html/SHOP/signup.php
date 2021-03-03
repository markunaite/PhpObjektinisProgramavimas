<?php

session_start();
include("connect.php"); 

if(isset($_REQUEST['sub']))
{
	$login = $_REQUEST['login'];
	$password = $_REQUEST['password'];
    $vardas = $_REQUEST['name'];
    $pavarde = $_REQUEST['surname'];

	$sql = "INSERT INTO vartotojai  (vardas, pavarde, slaptazodis, login) VALUES('$vardas', '$pavarde', '$password', '$login');";
	
    if ($connection->query($sql) === TRUE) {
       header("location:index.php");
    } else {
        header("location:register.php?err=1");	
    }
}
?>
