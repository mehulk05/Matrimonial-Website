<?php


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        

$c = 0; // Our counter
$n = 3;


$result = mysqli_query($db,"SELECT * FROM approved_user  LIMIT 6;") or die(mysqli_error($db));

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
      echo '</div> <div class="row">';
  }
  $c++;
  //  echo'<div class="table-responsive">';
echo '<div class="col-xs-4 form-group">';
  echo '<div class="card">';
  echo '<img src = "data:image/jpeg;base64,'.base64_encode($img1). '" height="100" width ="100" />' ;
  echo'<h3>'.$fname. '<br>  '.$lname. '</h3>';
  echo '<p class="price">'.$contact.'</p>';
  echo '<h4 >Community : '.$Sub_community.'</h4>';
  echo'<p><form action ="view_prof.php"><button name= "btn2" id ="btn2" type="submit" value = "'.$id.'">View Details</button></form></p>
</div>';
echo'</div>';

    
}
?>


