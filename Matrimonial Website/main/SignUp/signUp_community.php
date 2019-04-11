<?php
session_start();
$email = $_SESSION['user'];
$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");
	

	$sub=mysqli_real_escape_string($db,$_POST['sub']);
	$ms=mysqli_real_escape_string($db,$_POST['ms']);
	
	$mg=mysqli_real_escape_string($db,$_POST['mg']);
	 

	$url="../sig4.php";
	
		
	mysqli_query($db,"UPDATE user_profile
    SET sub_com ='$sub',maritial_stat='$ms', manglik = '$mg' WHERE email= '$email'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>