<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="utf-8">
<title></title>
</heaad>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	require('../php/db_connect.php');
	require('login_tools.php');
	$ust_id = $_POST['ust_id'];
	$pwd = $_POST['pass'];
	list($check,$data)=	validate($conn,$ust_id ,$pwd );
	if($check)
	{
		session_start();
		$_SESSION['ust_id']=$data['ust_id'];
		$_SESSION['first_name']=$data['first_name'];
		$_SESSION['last_name']=$data['last_name'];
		
		load('../ust_test/test.php');
	}
	else{$errors =$data ;}
	mysqli_close($conn);
}
include('login/login.php');
?>
</body>
</html>