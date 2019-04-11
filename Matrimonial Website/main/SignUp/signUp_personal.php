<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");
	

	$fn=mysqli_real_escape_string($db,$_POST['fn']);
	$ln=mysqli_real_escape_string($db,$_POST['ln']);
	
	$dob=mysqli_real_escape_string($db,$_POST['dob']);
	$age=mysqli_real_escape_string($db,$_POST['age']);
	$cn=mysqli_real_escape_string($db,$_POST['cn']);
$add=mysqli_real_escape_string($db,$_POST['add']);

$state = mysqli_real_escape_string($db,$_POST['state']);


$gender=mysqli_real_escape_string($db,$_POST['gender']);

	$url="../sig2.php";	
		
	mysqli_query($db,"UPDATE user_profile
    SET first_name ='$fn', surname='$ln', dob = '$dob',age='$age', contact_num = '$cn' , addr = '$add' ,state = '$state', gender = '$gender' WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();

	}
	


mysqli_close($db);

?>