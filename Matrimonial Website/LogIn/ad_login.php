<?php

$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
      $UserName=mysqli_real_escape_string($db,$_POST['u_id']);
      $password=mysqli_real_escape_string($db,$_POST['u_pswd']);
      $query=mysqli_query($db,"SELECT * FROM admin_prof WHERE ad_id='$UserName' And ad_pswd='$password'");
     
      $url="../Admin/index.php";
      $count= mysqli_fetch_array($query,MYSQLI_ASSOC);
    
      if($count > 0 )
      {
         $_SESSION['email']=$UserName;
          header('Location: '. $url);
         
        
      }
else
{
    print("bye");
}
	


mysqli_close($db);


?>