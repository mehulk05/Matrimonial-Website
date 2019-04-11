<?php
session_start();
$email = $_SESSION['user'];

$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");

$image = $_FILES['foto']['tmp_name'];


$imagecontent =addslashes(file_get_contents($image));

	
	
	
	
	
	$url="../lo.php";
    
	
			
mysqli_query($db,"UPDATE user_profile SET img='$imagecontent' WHERE email= '$email'");

	
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
