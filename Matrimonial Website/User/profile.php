<?php
session_start();
$email = $_GET['btn1'];


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo $email;
  $sql="SELECT * FROM approved_user WHERE email ='$email'";

  	$result = mysqli_query($db,$sql) or die(mysqli_error($db));

	while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['first_name'];
$lname=$row3['surname'];
$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];
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
}
?>

/* personal Info */

<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><center><h2>Your Profile Information</h2></center> </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">dob:</div></td>
    <td valign="top"><?php echo $dob ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
 
   <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $addr ?></td>
  </tr>
</table>
<hr>



<button type="button" id="formButton" style="width:95%" ><h3>physical Qualities!</h3></button><br><br>
<div id="toggle" style="display:none">
<form id="form1" >
<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><h2>physical Qualities</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Body type:</div></td>
    <td width="165" valign="top"><?php echo $body_type ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Height:</div></td>
    <td valign="top"><?php echo $height ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Skin Tone:</div></td>
    <td valign="top"><?php echo $skin ?></td>
  </tr>
  
</table>
  </form>
  </div>
 

<hr>
<button type="button" id="community" style="width:80%" width="150" ><h3>Community</h3></button><br>
<div id="comm" align="center" style="display:none">
<form id="form1" >
<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><h2>Community</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Sub_community:</div></td>
    <td width="165" valign="top"><?php echo $Sub_community?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Maritial Status:</div></td>
    <td valign="top"><?php echo $marital_Status ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Manglik:</div></td>
    <td valign="top"><?php echo $manglik ?></td>
  </tr>
  
</table>
  </form>
  </div>
<hr>


<button type="button" id="Education" style="width:65%" ><h3>Education And Occupation</h3></button><br>
<div id="edu" align="center" style="display:none">
<form id="form1" >
<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><h2>Education And Occupation</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Highest Educationn Level :</div></td>
    <td width="165" valign="top"><?php echo $edu_level?></td>
  </tr>
  <tr>
    <td valign="top"><div align="l hbceft">Education Field :</div></td>
    <td valign="top"><?php echo $edu_field ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">University of last Attended Course :</div></td>
    <td valign="top"><?php echo $univ ?></td>
  </tr>
   <tr>
    
    <td width="82" valign="top"><div align="left">College/school last attended :</div></td>
    <td width="165" valign="top"><?php echo $clg?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Your Work  :</div></td>
    <td valign="top"><?php echo $work ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Work As :</div></td>
    <td valign="top"><?php echo $work_as ?></td>
  </tr>
  
   <tr>
    <td valign="top"><div align="left">Incomme :</div></td>
    <td valign="top"><?php echo $incom ?></td>
  </tr>
  
  
</table>
  </form>
  </div>
<hr>

<button type="button" id="Lifestyle"  style="width:45%"><h3>Lifestyle </h3></button><br>
<div id="life" align="center" style="display:none">
<form id="form1" >
<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><h2>Lifestyle </h2> </td>
	
  <tr>
    <td width="82" valign="top"><div align="left">diet:</div></td>
    <td width="165" valign="top"><?php echo $diet ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Activities you like :</div></td>
    <td valign="top"><?php echo $activities ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Do you like smoking :</div></td>
    <td valign="top"><?php echo $smoke ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Mother Tounge :</div></td>
    <td valign="top"><?php echo $lang ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Your Family Type :</div></td>
    <td valign="top"><?php echo $family ?></td>
  </tr>
  
   <tr>
    <td valign="top"><div align="left">Number of Brothers  :</div></td>
    <td valign="top"><?php echo $bro ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Number of Sisters :</div></td>
    <td valign="top"><?php echo $sis ?></td>
  </tr>
 
</table>
</form>
  </div>
<hr>
 



 

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<script>
jQuery(document).ready(function(){
    jQuery('#formButton').on('click', function(event) {        
         jQuery('#toggle').toggle('show');
    });
});


jQuery(document).ready(function(){
    jQuery('#community').on('click', function(event) {        
         jQuery('#comm').toggle('show');
    });
});

jQuery(document).ready(function(){
    jQuery('#Education').on('click', function(event) {        
         jQuery('#edu').toggle('show');
    });
});

jQuery(document).ready(function(){
    jQuery('#Lifestyle').on('click', function(event) {        
         jQuery('#life').toggle('show');
    });
});
</script>

