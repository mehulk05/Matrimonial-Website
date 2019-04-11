<?php
$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");



$email=$_REQUEST["email"];
echo $email;


$result = mysqli_query($db,"SELECT * FROM `approved_user` where email='$email'") or die(mysqli_error($db));

$row = mysqli_fetch_array($result);

require 'PHPMailer-master/PHPMailerAutoload.php';


$url="../lo.php";


$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  
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
  $mail->FromName = "WedingBells Support";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$row["psd"];
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
  
  

	
