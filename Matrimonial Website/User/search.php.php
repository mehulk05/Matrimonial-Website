<?php


$db=mysqli_connect("localhost","root","root","wedding");

$fn=mysqli_real_escape_string($db,$_POST['fn']);

$sub_com=mysqli_real_escape_string($db,$_POST['sub_com']);

$as=mysqli_real_escape_string($db,$_POST['as']);


  
  $sql="SELECT * FROM `approved_user` WHERE first_name = '$fn' AND sub_com= '$sub_com' AND
work_as = '$as'";

$result = mysqli_query($db,$sql) or die(mysqli_error($db));

while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['first_name'];
$lname=$row3['surname'];
$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];
$email = $row3['email'];
$addr = $row3['add'];
    
$body_type=$row3['body_type'];
$height=$row3['height'];
$skin=$row3['skin_tone'];

$Sub_community=$row3['sub_com'];
$marital_Status=$row3['maritial_stat'];
$manglik=$row3['manglik'];


$edu_level=$row3['edu_level'];
$edu_field=$row3['edu_field'];
$univ=$row3['univ'];
$clg=$row3['colg'];
$work=$row3['work'];
$work_as=$row3['work_as'];
$incom=$row3['incom'];

$diet=$row3['diet'];
$activities=$row3['activities'];
$smoke=$row3['smoke'];
$lang=$row3['lang'];
$family=$row3['family'];
$bro=$row3['bro'];
$sis=$row3['sis'];
   
  
    echo '<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><center><h2>Your Profile Information</h2></center> </td>
	<td> <form action= "profile.php"> <button name="btn1" id = "btn1" type ="submit" value=" '. $email . ' " > View </button> 
                  </form>"</div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="' . $picture. '" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top">'. $fname.'</td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top">'. $lname. '</td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top">'. $gender .'</td>
  </tr>
  <tr>
    <td valign="top"><div align="left">dob:</div></td>
    <td valign="top">'. $dob .'</td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top">'. $contact. '</td>
  </tr>
 
   <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top">'. $addr .'</td>
  </tr>
</table>';


}
?>


