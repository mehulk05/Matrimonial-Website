<?php



$db=mysqli_connect("localhost","id8399726_root","r00000t","id8399726_wedding");
        

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql="SELECT * FROM `approved_user` WHERE id = '$UserName'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

  while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['first_name'];
$lname=$row3['surname'];
$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];

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
$img1 = $row3['img'];
}

  //Get image data from database
   
?>



<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>




<div class="main">

 <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container1" style="width: 100%; ">

              
                 <td style="color:lightblue; " ><center> </td>
  
           </div>

  <tr > 
  <td colspan="18"  > 
    <center>
<h2 style="float: center;color: lightblue; margin-top: 15"><b>Your Profile Information</b></h2></center>
</td>
<td>
    <button  class="w3-button w3-yellow" style="float:right; width:150px;"><h3><b><a href="../EditProfile/EditProfile.php">Edit Profile</b></h></a> </button></p>
   </td>
  </tr>

<table width="498" border="0"  cellpadding="0" style="color: lightblue; ">
  <b>



  <tr>

    <td width="209" rowspan="5" colspan="2">

      <?php 
       echo '<div class="col-sm-3">';
   echo '<div class="card" style="margin-bottom:25">';

     echo '<img src =  "data:image/jpeg;base64,'.base64_encode($img1). '" height="180"  alt="no image found" width ="150" /><br>' ;?>  </td>

    <td width="122" valign="top"><div align="left">FirstName:</div></td>
    <td width="65" valign="top" style="color: yellow; "><b><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"  style="color: yellow; "><b><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">dob:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $dob ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $contact ?></td>

<tr></tr>
    <br>
    <br>
  </tr>
 
</table>
<br>


<br>

<button  type="button" id="formButton" style="width:75% ;color: darkblue;" ><h3 style="float: center;color: darkblue;"><b>Physical Qualities!</h3></button><br><br>
<div id="toggle" style="display:none">
<form id="form1" >
<table width="398" height="200" border="0" align="center" cellpadding="0" style="color: lightblue;">
  <tr>
    <td height="26" colspan="2"><h2 style="float: center;color: white;">physical Qualities</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Body type:</div></td>
    <td width="165" valign="top" style="color: yellow; "><b><?php echo $body_type ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Height:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $height ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Skin Tone:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $skin ?></td>
  </tr>
  
</table>
  </form>
  </div>
 

<hr>
<button type="button" id="community" style="width:75%" width="150" ><h3 style="float: center;color: darkblue;"><b>Community</h3></button><br><br>
<div id="comm" align="center" style="display:none">
<form id="form1" >
<table width="398" height="200" border="0" align="center" cellpadding="0" style="color: lightblue;">
  <tr>
    <td height="28" colspan="2"><h2 style="float: center;color: white;">Community</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Sub_community:</div></td>
    <td width="165" valign="top" style="color: yellow; "><b><?php echo $Sub_community?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Maritial Status:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $marital_Status ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Manglik:</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $manglik ?></td>
  </tr>
  
</table>
  </form>
  </div>
<hr>


<button type="button" id="Education" style="width:75%" ><h3 style="float: center;color: darkblue;"><b>Education And Occupation</h3></button><br><br>
<div id="edu" align="center" style="display:none">
<form id="form1" >
<table width="498" height="350" border="0" align="center" cellpadding="0" style="color: lightblue;">
  <tr>
    <td height="26" colspan="2"><h2 style="float: center;color: white;">Education And Occupation</h2></center> </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Highest Educationn Level :</div></td>
    <td width="165" valign="top" style="color: yellow; "><b><?php echo $edu_level?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Education Field :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $edu_field ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">University of last Attended Course :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $univ ?></td>
  </tr>
   <tr>
    
    <td width="82" valign="top"><div align="left">College/school last attended :</div></td>
    <td width="165" valign="top" style="color: yellow; "><b><?php echo $clg?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Your Work  :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $work ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Work As :</div></td>
    <td valign="top"style="color: yellow; "><b><?php echo $work_as ?></td>
  </tr>
  
   <tr>
    <td valign="top"><div align="left">Incomme :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $incom ?></td>
  </tr>
  
  
</table>
  </form>
  </div>
<hr>

<button type="button" id="Lifestyle"  style="width:75%"><h3 style="float: center;color: darkblue;"><b>Lifestyle </h3></button><br><br>
<div id="life" align="center" style="display:none">
<form id="form1" >
<table width="498" height="300" border="0" align="center" cellpadding="0" style="color: lightblue;">
  <tr>
    <td align="center" height="26" colspan="2"><h2 style="float: center;color: white;">Lifestyle </h2> </td>
  
  <tr>
    <td width="82" valign="top"><div align="left">diet:</div></td>
    <td width="165" valign="top" style="color: yellow; "><b><?php echo $diet ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Activities you like :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $activities ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Do you like smoking :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $smoke ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Mother Tounge :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $lang ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Your Family Type :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $family ?></td>
  </tr>
  
   <tr>
    <td valign="top"><div align="left">Number of Brothers  :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $bro ?></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Number of Sisters :</div></td>
    <td valign="top" style="color: yellow; "><b><?php echo $sis ?></td>
  </tr>
</tr>

 
</table>
</form>
  </div>

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

