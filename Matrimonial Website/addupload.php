<?php

//$db=mysqli_connect("localhost","u757577044_root	","r00000t","u757577044_wb");
/*	if ($db->connect_error) {
   echo "error";
} 
else

    echo "connected";
}
*/
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
	
	
$fname=mysqli_real_escape_string($db,$_POST['fname']);
$lname=mysqli_real_escape_string($db,$_POST['lname']);
$contact=mysqli_real_escape_string($db,$_POST['contact']);
$subject=mysqli_real_escape_string($db,$_POST['subject']);
$description=mysqli_real_escape_string($db,$_POST['description']);
$image = $_FILES['image']['tmp_name'];
$imagecontent =addslashes(file_get_contents($image));

echo $fname. " ".$lname. " ".$email." ".$subject." ".$description;
$url="index.html";
	
	
	mysqli_query($db,"INSERT INTO `request_add`(`fn`, `ln`, `subject`, `image`, `contact`, `Discription`) VALUES ('$fname','$lname','$subject','$imagecontent','$contact','$description')");

	

	if(mysqli_affected_rows($db)>0)
	{
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();



	}
	


mysqli_close($db);

?>
/*
	$an=mysqli_real_escape_string($db,$_POST['fname']);
	echo $an;
	$ln=mysqli_real_escape_string($db,$_POST['lname']);
	echo $ln;
	$contact=mysqli_real_escape_string($db,$_POST['contact']);
	echo $contact;
	$sub=mysqli_real_escape_string($db,$_POST['subect']);
	echo $sub;
	$dis=mysqli_real_escape_string($db,$_POST['message']);
	echo $dis;
	*/
	
	
	
/*	$img = $_FILES['foto']['tmp_name'];
	


$imagecontent =addslashes(file_get_contents($img));


	$url="add.php";	
		
	$sql="INSERT INTO `advertisement` (fn, ln, subject, image, contact, Discription) 
	VALUES('$fn', '$ln', '$sub','$imagecontent','$contact','$dis' )";

	
if ($db->query($sql) === TRUE) {
	
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();

	}
	
	
	else {
	     ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
    echo "Error: " . $sql . "<br>" . $db->error;
}


mysqli_close($db);

?>