<?php

$id = $_GET['btn2'];

$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql="SELECT * FROM `advertisement` WHERE id = '$id'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

  while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['fn'];
$lname=$row3['ln'];
$contact=$row3['contact'];
$subject=$row3['subject'];
$Discription=$row3['Discription'];

$img1 = $row3['image'];
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

              
                 <td style="color:grey; " ><center> </td>
  
           </div>

  <tr > 
 
  
  </tr>

<table width="498" border="0"  cellpadding="0" style="color: grey; ">
  <b>



  <tr>

    <td width="209" rowspan="5" colspan="2">

      <?php 
       echo '<div class="col-sm-3">';
   echo '<div class="card" style="margin-bottom:25">';

     echo '<img src =  "data:image/jpeg;base64,'.base64_encode($img1). '" height="180"  alt="no image found" width ="150" /><br>' ;?>  </td>

    <td width="122" valign="top"><div align="left">FirstName:</div></td>
    <td width="65" valign="top" style="color: blue; "><b><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"  style="color: blue; "><b><?php echo $lname ?></td>
  </tr>

  <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top" style="color: blue; "><b><?php echo $contact ?></td>

</tr>
 <tr>
    <td valign="top"><div align="left">Subject:</div></td>
    <td valign="top" style="color: blue; "><b><?php echo $subject ?></td>

</tr>
 <tr>
    <td valign="top"><div align="left">Discription:</div></td>
    <td valign="top" style="color: blue; "><b><?php echo $Discription ?></td>

</tr>
<tr></tr>
<br>
<br>
<br>
<tr>
    <td value="top"><div align="left">
        <form action="ad_v.php">
        <input type="submit" value="Back">
        </form>
        </div>
        
    </td>
</tr>
    <br>
    <br>
  </tr>
 
 
</table>
<br>

      
<br>



