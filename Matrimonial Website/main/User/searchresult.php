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
    

    

  echo '<div class="col-sm-3">';
   echo '<div class="card">';
  echo '<img src = "data:image/jpeg;base64,'.base64_encode($img1). '" height="100" width ="100" />' ;
  echo'<h1>'.$fname. '  '.$lname. '</h1>';
  echo '<p class="price">'.$contact.'</p>';
  echo 'Address : '.$addr;
  echo'<p><form action ="view_prof.php"><button name= "btn2" id ="btn2" type="submit" value = "'.$id.'">View Details</button></form></p>
</div></td>';

echo'</div>';
}