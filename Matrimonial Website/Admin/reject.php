<?php

session_start();
    $id = $_GET['btn2'];
 $_SESSION['id'] = $id;
$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        


	
$url="modifyrejectuser.php";


$sql="SELECT * FROM user_profile WHERE id ='$id'";


$result = mysqli_query($db,$sql) or die(mysqli_error($db));

$row3 = mysqli_fetch_array($result);
 
$password=$row3['psd'];
   
$id = $row3['id'];

$email = $row3['email'];

$u_id = $row3['u_id'];


require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "weddingbells1306@gmail.com";
  $mail->Password = "dscdsc2222";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "weddingbells1306@gmail.com";
  $mail->FromName = "Wedding Bells";
  
  $mail->addAddress($email);
  
  $mail->isHTML(true);
 
  $mail->Subject = "LogIn Details";
  $mail->Body = "Due to insufficient or incomplete steps Registeration is not successful.Please try again after 15-3 minutes";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
      echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
      echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
       
  }




mysqli_close($db);


?>

