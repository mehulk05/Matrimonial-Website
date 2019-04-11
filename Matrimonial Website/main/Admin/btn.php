<?php

session_start();
    $id = $_GET['btn1'];
 $_SESSION['id'] = $id;
$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");
        


	
$url="modify.php";


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
  $mail->Body = "Welcome dear user!! We, Wedding Bells team on behalf of whole brahmin samaj welcome you in our family with great pleasure. We are excited to help you find your soul-mate. Thanks for submiting required documents and following are details you would require to login.<i>This is your login Id is :</i>".$u_id." and password is : ".$password;
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

