<?php

session_start();
$email = $_SESSION['id'];
 //echo "hello".  $_SESSION['email']; 
//echo  $UserName;
echo $email;

    
    //Create connection and select DB
    $db =mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
    
    //Check connection
    if($db->connect_error)
	{
       die("Connection failed: " . $db->connect_error);
    }


 $sql="SELECT * FROM `approved_user` WHERE u_id = '$email'";
  	$result = mysqli_query($db,$sql) or die(mysqli_error($db));

	while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['first_name'];
$lname=$row3['surname'];
$age=$row3['Age'];
$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];
$addr=$row3['add'];
$st=$row3['state'];
$zip=$row3['zip_code'];


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
	?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit You Profile</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap css-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- dropsown style-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- skin colour circles style-->

    <!-- Tab button style -->
<style>
         /* skin colour circles style */

    .dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
} 

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ffcc99;
  background-color: crimson;
    color: white;

}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
 

}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: darkred;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: darkred;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
    
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}



    









</style>
<style>
      
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
      </style>

</head>
<body>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
} 

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ffcc99;
  background-color: crimson;
    color: white;

}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
 

}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: darkred;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: darkred;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
    
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap css-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- dropsown style-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- skin colour circles style-->

    <!-- Tab button style -->
<style>
    /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
</style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                
                
                <div class="signup-content">
                     <p style = "font-size:22px; color:red; text-align:center">Wedding Bells <strong>!</strong></p>
                    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'personal')" id="defaultOpen">Personal Information</button>
  <button class="tablinks" onclick="openCity(event, 'personal')">Physical Qualities</button>
  <button class="tablinks" onclick="openCity(event, 'personal')">Community</button>
  <button class="tablinks" onclick="openCity(event, 'persoanl')">Education and Occupation</button>
  <button class="tablinks" onclick="openCity(event, 'personal')">Lifestyle and Family Value</button>             
<button class="tablinks" onclick="openCity(event, '')"> Profile Pic</button>
</div>
                    
                    <div class="tabcontent" id="personal">
                    <form method="POST" id="signup-form" class="signup-form" action="Edit_personal.php">
                     
                        <h2 class="form-title"><center>Add Personal Details</center></h2>
                          <div class="row">
                            <div class="col-xs-3 form-group">
                        
                          Name<br>
                            <input type="text" class="form-input" name="fn" id="fn"  value="<?php echo $fname ?>" placeholder="Name" required/>
                        </div>
                        
                          
                            <div class="col-xs-3 form-group">
                            Surname<br>
                            <input type="text" class="form-input" name="ln" id="ln"  value="<?php echo $lname ?>" placeholder=" Surname" required/>
                        </div>
                              
                             
                              
                              <div class="col-xs-3 form-group">
                            Age<br>
                            <input type="number" class="form-input" name="age" id="age" value= value="<?php echo $age ?>" min="18" required/>
                        </div>
                                                          <div class="col-xs-3 form-group">
                             Parent/Relative Contact Number<br>
                                  <input type="number"
                                    class="form-input"
                                         name="cn" id="cn"  value="<?php echo $contact ?>" required/>
                              </div>
                              
                        </div>
                        <div class = "row">
                              <div class="col-xs-3 form-group">
                              Address <br>
                                  <input type="text"
                                    class="form-input"
                                         name="add" id="add"   value="<?php echo $addr ?>" required/>
                              </div>
                            <div class="col-xs-3 form-group">
                              State<br>
                                  <input type="text"
                                    class="form-input"
                                         name="state" id="state"   value="<?php echo $st ?>" required/>
                              </div>
                            <div class="col-xs-3 form-group">
                              Country<br>
                                  <input type="text"
                                    class="form-input"
                                         name="cont" id="cont" required/>
                                          </div>
                                          <div class="col-xs-3 form-group">
                              Birth-date<br>
                                  
                                  <input type="date" class="form-input" max="2000-12-31" name="dob" id="dob"  value="<?php echo $dob ?>" required/>
                             
                            </div>
                            
</div>
                        
                        <div class = "row">
                          <div class="col-xs-3 form-group">
                        <div class="form-input">
                            Gender <br>
                            <input type="radio"  name="gender" id="gender" value = "M" required>Male 
                            <input type="radio"  name="gender" id="gender" value = "F"> Female
                            <input type="radio"  name="gender" id="gender" value = "O"> Others
                        </div>
                        </div>
                        <div class="col-xs-3 form-group">
                            Pincode<br>
                            <input type="number" name="zip" id="zip"  value="<?php echo $zip ?>"  required/>
                            </div>
                            </div>
                        <br>
                        
                        <div class="form-group" >
                           <center> <input type="submit" name="submit" id="submit" class="form-submit" value="Save"/> </center>
                        </div>
                    </form>
                    </div>
                    
                  
            
                    </div>
                
                   
                </div>
                </div>
            
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
           
}
     document.getElementById("defaultOpen").click();</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


