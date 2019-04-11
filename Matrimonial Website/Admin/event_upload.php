<?php
session_start();

$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");


$image = $_FILES['event_2']['tmp_name'];


$imagecontent =addslashes(file_get_contents($image));

	
	
	
	
	
	$url="index4.php";
    
	
			
mysqli_query($db,"INSERT INTO events(image) VALUES ('$imagecontent')");

	
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

