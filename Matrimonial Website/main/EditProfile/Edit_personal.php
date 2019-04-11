<?php
session_start();
$UserName = $_SESSION['id'];
//echo $UserName;
$db=mysqli_connect("localhost","root","root","wedding");
	

	$fname=mysqli_real_escape_string($db,$_POST['fn']);
	$lname=mysqli_real_escape_string($db,$_POST['ln']);
	
  $gender=mysqli_real_escape_string($db,$_POST['gender']);
	$dob=mysqli_real_escape_string($db,$_POST['dob']);
	$age=mysqli_real_escape_string($db,$_POST['age']);
	$contact=mysqli_real_escape_string($db,$_POST['cn']);

    


	$url="signUp_physical1.php";
	
		
	mysqli_query($db,"UPDATE `approved_user`
    SET first_name ='$fname', surname='$lname' ,dob ='$dob' , age ='$age' ,contact_num ='$contact',  gender = '$gender'
		WHERE  id = '$UserName'");

	

	if(mysqli_affected_rows($db)>=0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	else
	{
		echo "not";
	}
	


mysqli_close($db);
?>