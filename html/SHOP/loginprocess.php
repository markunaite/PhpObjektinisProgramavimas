<?php

session_start();
include("connect.php"); 

if(isset($_REQUEST['sub']))
{
	$a = $_REQUEST['login'];
	$b = $_REQUEST['password'];

	$res = mysqli_query($connection, "SELECT * FROM vartotojai WHERE login='$a' AND slaptazodis='$b';");
	$result=mysqli_fetch_array($res);
	if($result)
	{
		$_SESSION["login"]="1";			
		setcookie ("user_id", $result["id"], time() + 3600 * 4);
		header("location:products.php");
	} else	
	{
		header("location:index.php?err=1");	
	}
}
?>
