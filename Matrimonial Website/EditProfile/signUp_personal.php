<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	

	$url="signUp_physical.html";
	
	$fn=mysqli_real_escape_string($db,$_POST['fn']);
	$ln=mysqli_real_escape_string($db,$_POST['ln']);
	
	$dob=mysqli_real_escape_string($db,$_POST['dob']);
	$cn=mysqli_real_escape_string($db,$_POST['cn']);
$add=mysqli_real_escape_string($db,$_POST['add']);
$gender=mysqli_real_escape_string($db,$_POST['gender']);


		
$sql="UPDATE approved_user
    SET first_name ='$fn', surname='$ln', dob = '$dob', contact_num = '$cn' , addr = '$add' , gender = '$gender' WHERE email= '$email'";


    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    $rows = mysqli_num_rows($result);

if($rows>=1)
 {
  
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

else{
    echo "Sorry, your credentials are not valid, Please try again.";
  }

	/*mysqli_query($db,"UPDATE user_profile
    SET first_name ='$fn', surname='$ln', dob = '$dob', contact_num = '$cn' , addr = '$add' , gender = '$gender' WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>0)
	{
 



	}

else{
    echo "eroor";
}
	


mysqli_close($db);

*/

?>