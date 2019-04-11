<?php


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        
$c = 0; // Our counter
$n = 3;
$age = mysqli_real_escape_string($db,$_POST['age']);

switch($age) {
  case 1  :  $age = " Age >= 18 AND Age < 22 AND ";  break; 
  case 2  :  $age = " Age >= 22 AND Age < 26 AND ";  break;  
  case 3  :  $age = " Age >= 26 AND Age < 40 AND ";  break;   
  case 4  :  $age = " Age >= 40 AND "; break;
  default : $age=""; break;
}






$fn=  mysqli_real_escape_string($db,$_POST['fn']);

$sub_com=  mysqli_real_escape_string($db,$_POST['sub_com']);

$as= mysqli_real_escape_string($db,$_POST['as']);
$id= mysqli_real_escape_string($db,$_POST['id']);






//$result = mysqli_query($db,"SELECT * FROM approved_user WHERE (first_name LIKE '%" . $fn .  "%'  OR   " .$age. " ") or die(mysqli_error($db));
/*
$j =!empty($fn) + !empty($sub_com) + !empty($as);
echo $j;
if ( $j == 3 )  
{
    echo $fn. " ". $sub_com. " ".$as;
$sql1 = "SELECT * FROM approved_user WHERE (first_name = '$fn') AND (sub_com = '$sub_com') AND (work_as = '$as') ";
    

}

if( $j <= 2 )  
{
    echo $fn. " ". $sub_com. " ".$as."  <2";
*/
$sql1 = "SELECT * FROM approved_user WHERE ".$age. " (first_name = '$fn' OR '$fn'='') AND (sub_com = '$sub_com' OR '$sub_com'='') AND (work_as = '$as' OR '$as'='') AND (id = '$id' OR '$id'='') "; 

//}



$result = mysqli_query($db, $sql1) ; 
$rowcount=mysqli_num_rows($result);
if($rowcount > 0){
while($row3 = mysqli_fetch_array($result))
{ 
$id = $row3['id'];
$fname=$row3['first_name'];
$lname=$row3['surname'];
$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];
$email = $row3['email'];
$addr = $row3['add'];

$Sub_community=$row3['sub_com'];


$edu_level=$row3['edu_level'];

$work_as=$row3['work_as'];
$img1 = $row3['img'];
    

    if($c % $n == 0 ) // If $c is divisible by $n...
  {
    // New table row
      echo '</tr>';
  }
  $c++;
    

    
 echo '<td>';
   echo '<div class="card">';
  echo '<img src = "data:image/jpeg;base64,'.base64_encode($img1). '" height="100" width ="100" />' ;
  echo'<h1>'.$fname. '<br>  '.$lname. '</h1>';
  echo '<p class="price">'.$contact.'</p>';
  echo '<h2 >Community : '.$Sub_community.'</h2>';
  echo'<p><form action ="view_prof.php"><button name= "btn2" id ="btn2" type="submit" value = "'.$id.'">View Details</button></form></p>
</div></td>';

echo'</div>';
}
}
else{
    echo " No data available as per following filters!! ";
}
//$result = mysqli_query($db,"SELECT * FROM approved_user WHERE age = '$age'") or die(mysqli_error($db));



?>


