<?php
session_start();
$UserName = $_SESSION['id'];
$db=mysqli_connect("localhost","root","root","wedding");
	

	$sub=mysqli_real_escape_string($db,$_POST['sub']);
	$ms=mysqli_real_escape_string($db,$_POST['ms']);
	
	$mg=mysqli_real_escape_string($db,$_POST['mg']);
	 

	$url="signUp_edu1.php";
	
		
	mysqli_query($db,"UPDATE approved_user
    SET sub_com ='$sub',maritial_stat='$ms', manglik = '$mg' WHERE id = '$UserName'");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>