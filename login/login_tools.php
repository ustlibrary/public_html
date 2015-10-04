<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="utf-8">

</head>
<body>
<?php
$ust_id = $_POST['ust_id'];
	$pwd = $_POST['pass'];
	$_SESSION['ust_id']=$ust_id;
	$_SESSION['pass']=$pwd;
function load($page='../ust_test')
{
	$url='http://'.$_SERVER['HTTP_HOST'].
	dirname($_SERVER['PHP_SELF']);
	$url=rtrim($url ,'^\/');
	$url .='/' .$page ;
	header("Location: $url");
	exit();
}
function validate($conn,$ust_id = '', $pwd = '')
{
	$errors=array();
	if(empty($ust_id))
	{
		$errors[]='Enter your UST ID.' ;
	}
	else
	{
		$e=mysqli_real_escape_string($conn,trim($ust_id));
	}
	if(empty($pwd))
	{
		$errors[]='Enter your password.' ;
	}
	else
	{$p=mysqli_real_escape_string($conn,trim($pwd));}
	if(empty($errors))
	{
		$q="SELECT ust_id ,first_name,last_name	FROM users 	WHERE ust_id ='$e' AND pass ='$p'";
		$r=mysqli_query($conn,$q);
		if(mysqli_num_rows($r) == 1)
		{
			$row =mysqli_fetch_array($r,MYSQLI_ASSOC);
			return array(true ,$row);
		}
		else{
			

			$errors[]='UST ID and password not found.' ;
		}
	}
	return array(false,$errors) ;
}
?>
</body>
</html>