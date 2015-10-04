<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="utf-8">
<title></title>
</heaad>
<body>
<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	require('../php/db_connect.php');
	require('login_tools.php');
	
	list($check,$data)=	validate($conn,$ust_id ,$pwd );
	if($check)
	{
		session_start();
		$ust_id = $_SESSION['ust_id'];
		$pwd = $_SESSION['pass'];
		$_SESSION['first_name']=$data['first_name'];
		$_SESSION['last_name']=$data['last_name'];
		
		load('../ust_test/test.php');
	}
	else{$errors =$data ;}
	mysqli_close($conn);
}
include('../ust_test/index.php');
?>
</body>
</html>