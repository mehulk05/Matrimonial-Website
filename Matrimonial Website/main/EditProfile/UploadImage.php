<?php

session_start();
$UserName = $_SESSION['id'];


$db=mysqli_connect("localhost","root","root","wedding");

	if(isset($_POST["submit"]))
	{
	
	$image = $_FILES['image']['tmp_name'];
	print_r($_FILES['image']);
        $imgContent = addslashes(file_get_contents($image));
	
	
	
	
	$url="../User/profile1.php";
	//$url="signUp_personal.html"
	
			
	 $insert = $db->query("UPDATE `approved_user` SET `img` ='$imgContent' WHERE `id`= '$UserName'");

	}
	if($insert)
	{
	
	
 ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
  //echo "You are a validated user.";
  }
  else{
    echo "Sorry, your credentials are not valid, Please try again.";
  }
			
?>
