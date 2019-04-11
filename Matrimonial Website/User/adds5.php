<?php


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        

$c = 0; // Our counter
$n = 2;


$result = mysqli_query($db,"SELECT * FROM advertisement") or die(mysqli_error($db));

while($row3 = mysqli_fetch_array($result))
{ 
    $id = $row3['id'];
$fname=$row3['fn'];
$lname=$row3['ln'];
$contact=$row3['contact'];
$subject=$row3['subject'];
$Discription=$row3['Discription'];
$img1 = $row3['image'];
    
    
    if($c % $n == 0 ) // If $c is divisible by $n...
  {
    // New table row
      echo '</div> <div class="row">';
  }
  $c++;
    
       echo'<div class="table-responsive"> ';
echo '<div class="col-xs-4 form-group">';
echo'<div class="card">';
  echo '<img src = "data:image/jpeg;base64,'.base64_encode($img1). '" height="100" width ="100" />' ;
  echo'<h3>'.$fname. '<br>  '.$lname. '</h3>';
  echo '<p class="price">'.$contact.'</p>';
  echo '<h4 >Community : '.$subject.'</h4>';
  echo'<p><form action ="view_add.php"><button name= "btn2" id ="btn2" type="submit" value = "'.$id.'">View Details</button></form></p></div></div>';


    
}
?>


