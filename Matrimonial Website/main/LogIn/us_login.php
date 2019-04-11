<?php

$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");

      $UserName=mysqli_real_escape_string($db,$_POST['u_id']);
      $password=mysqli_real_escape_string($db,$_POST['u_pswd']);
      $query=mysqli_query($db,"SELECT * FROM approved_user WHERE u_id='$UserName' And psd='$password'");
     
      $url="../User/about.php";
      $url1 = "../lo.php";
      $count= mysqli_fetch_array($query,MYSQLI_ASSOC);
    
      if($count > 0 )
      {
	  session_start();
	   
         $_SESSION['id']=$UserName;
		
		 
          header('Location: '. $url);
         
        
      }
	  else{
	       header('Location: '. $url1);
	  }


mysqli_close($db);


?>