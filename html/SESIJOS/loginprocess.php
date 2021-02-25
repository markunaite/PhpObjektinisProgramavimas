<?php

session_start();
include("connect.php"); 

if(isset($_REQUEST['sub']))
{
	$a = $_REQUEST['login'];
	$b = $_REQUEST['password'];

	$res = mysqli_query($connection,"SELECT * FROM users WHERE login='$a' AND password='$b';");
	$result=mysqli_fetch_array($res);
	if($result)
	{
		$_SESSION["login"]="1";
		header("location:test1.php");
	} else	
	{
		header("location:index.php?err=1");	
	}
}
?>
