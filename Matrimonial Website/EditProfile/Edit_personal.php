<?php
session_start();
$u_id = $_SESSION['id'];
//echo $UserName;

$db = mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
	
	$url="signUp_physical1.php";
	
	$fn=mysqli_real_escape_string($db,$_POST['fn']);
	$ln=mysqli_real_escape_string($db,$_POST['ln']);
	$dob=mysqli_real_escape_string($db,$_POST['dob']);
	$age=mysqli_real_escape_string($db,$_POST['age']);
	$cn=mysqli_real_escape_string($db,$_POST['cn']);
//$add=mysqli_real_escape_string($db,$_POST['add']);
$zip=mysqli_real_escape_string($db,$_POST['zip']);

$state = mysqli_real_escape_string($db,$_POST['state']);


$gender=mysqli_real_escape_string($db,$_POST['gender']);


		
	mysqli_query($db,"UPDATE `approved_user`
    SET first_name ='$fn', 
    surname ='$ln', 
    dob = '$dob',
   
    contact_num ='$cn' ,
    gender ='$gender',
    Age='$age',
    `state` ='$state', 
    `zip_code` ='$zip' 
    WHERE u_id='$u_id' ");

	

	if(mysqli_affected_rows($db)>=0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();

	}
	else
	{
	    echo("Error description: " . mysqli_error($db));
	}


mysqli_close($db);

?>