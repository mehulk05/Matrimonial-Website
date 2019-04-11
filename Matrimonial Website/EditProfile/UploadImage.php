<?php

session_start();
$UserName = $_SESSION['id'];


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");

$image = $_FILES['foto']['tmp_name'];


$imagecontent =addslashes(file_get_contents($image));

	
	
	$url="../User/profile1.php";
	//$url="signUp_personal.html"
	
			
mysqli_query($db,"UPDATE approved_user SET img='$imagecontent' WHERE u_id= '$UserName'");

	
	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	else
    {
        echo "empty";
    }
mysqli_close($db);
?>
