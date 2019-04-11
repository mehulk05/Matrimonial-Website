<?php

session_start();
$email = $_SESSION['user'];

//if(!empty($_GET['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName     = 'wedding';
    
    //Create connection and select DB
    $db = mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
    
    //Check connection
    if($db->connect_error)
	{
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image FROM user_profile WHERE email = '$email'");
    
    if($result->num_rows > 0)
	{
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }
	else{
        echo 'Image not found...';
    }
?>