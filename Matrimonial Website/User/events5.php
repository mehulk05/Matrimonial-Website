<?php


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        

$c = 0; // Our counter
$n = 2;


$result = mysqli_query($db,"SELECT * FROM events") or die(mysqli_error($db));

while($row3 = mysqli_fetch_array($result))
{ 

$img1 = $row3['image'];
    
    
    if($c % $n == 0 ) // If $c is divisible by $n...
  {
    // New table row
      echo '</div> <div class="row">';
      }
  $c++;
    
     echo'<div class="table-responsive"> ';
echo '<div class="col-xs-4 form-group">';
  echo '<div class="card">';
  echo '<img src = "data:image/jpeg;base64,'.base64_encode($img1). '" height="350" width ="340"  />' ;
  echo'</div>';
echo'</div>';

    
}
?>


