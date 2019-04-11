<?php

session_start();
$u_id = $_SESSION['id'];
 

//if(!empty($_GET['id'])){
   
    //Create connection and select DB
    $db =mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
    
    //Check connection
    if($db->connect_error)
  {
       die("Connection failed: " . $db->connect_error);
    }


 $sql="SELECT * FROM `approved_user` WHERE u_id = '$u_id'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

  while($row3 = mysqli_fetch_array($result))
{ 
$fname=$row3['first_name'];
$lname=$row3['surname'];

$dob=$row3['dob'];
$gender=$row3['gender'];
$contact=$row3['contact_num'];
$addr=$row3['add'];

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

$lang=$row3['lang'];
$family=$row3['family'];
$bro=$row3['bro'];
$sis=$row3['sis'];

$bms=$row3['Brother_Status'];
$sms=$row3['Sister_Status'];

$f_n=$row3['father_Name'];
$f_p=$row3['father_profession'];
$m_n=$row3['mother'];
$m_p=$row3['mother_profession'];
$img1 = $row3['img'];

} 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>

      <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                
                <div class="signup-content">
                     <p style = "font-size:22px; color:red; text-align:center">Wedding Bells <strong>!</strong></p>
                    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'lifestyle')" >Personal Information</button>
  <button class="tablinks" onclick="openCity(event, 'lifestyle')" >Physical Qualities</button>
  <button class="tablinks" onclick="openCity(event, 'lifestyle')" >Community</button>
  <button class="tablinks" onclick="openCity(event, 'lifestyle')" >Education and Occupation</button>
  <button class="tablinks" onclick="openCity(event, 'lifestyle')" id="defaultOpen">Lifestyle and Family Value</button>
<button class="tablinks" onclick="openCity(event, 'lifestyle')">Profile Pic</button>
</div>
                    
            
                    <div class="tabcontent" id="lifestyle">
                    
                       <form method="POST" id="signup-form" class="signup-form" action="signUp_life.php">
                        
                        <h2 class="form-title">Lifestyle </h2> 
                           
                           <div class="row">
                          
        
                                <div class="col-xs-3 form-group">
                        
                            Mother Tounge<br>
                            <div class="selectdiv">
                         <select class="form-control" id="mt" name="mt" value="<?php echo $lang ?>" required>
        <option value="Hindi">Hindi</option>
        <option value="Gujarati">Gujarati</option>
        <option value="Punjabi">Punjabi</option>
                             <option value="Malayalam">Malayalam</option>
                             <option value="Kannad">Kannad</option>
                             <option value="Urdu">Urdu</option>
                             <option value="Sanskrit">Sanskrit</option>
                             <option value="English">English</option>
                            <option value="Bengali">Bengali</option>
                                </select></div>
                                
                                 
</div>
                          <div class="col-xs-3 form-group">
                            Your Family Type <br><div class="selectdiv">
                         <select class="form-control" id="ft" name="ft" value="<?php echo $family ?>" required>
        <option value="Joint Family">Joint Family</option>
        <option value="Nuclear Family">Nuclear Family</option>
        <option value="Others">Others</option>

                               </select></div>
                               </div>
                            
                              <div class="col-xs-3 form-group"> 
                               Number of Brothers <br>
                            <input type="number" class="form-input" name="brs" id="brs" value="<?php echo $bro ?>" placeholder="eg.0" required/>
                               </div>
                               
                                <div class="col-xs-3 form-group">
                              Brothers Maratial Status  <br>
                            <input type="text" class="form-input" name="BMS" id="BMS" value="<?php echo $bms ?>" placeholder="NONE/Name :: Status">
                           </div></div>
                            <div class="row">
                               <div class="col-xs-3 form-group">
                               Number of Sisters <br>
                            <input type="number" class="form-input" name="sis" id="sis" value="<?php echo $sis ?>" placeholder="eg.0" required/>
                           </div>
                               <div class="col-xs-3 form-group">
                              Sisters Maratial Status  <br>
                            <input type="text" class="form-input" name="SMS" id="SMS" value="<?php echo $sms ?>"  placeholder="Name :: Status">
                           </div>
                           
                           </div>
                           <div class="row">
                           <div class="col-xs-3 form-group">
                               Father's Name <br>
                            <input type="text" class="form-input" name="f_n" id="f_n" value="<?php echo $f_n ?>"  required/>
                           </div>
                            <div class="col-xs-3 form-group">
                               Father's Profession <br>
                            <input type="text" class="form-input" name="f_p" id="f_p" value="<?php echo $f_p ?>"  required/>
                           </div>
                            <div class="col-xs-3 form-group">
                               Mother's Name <br>
                            <input type="text" class="form-input" name="m_n" id="m_n" value="<?php echo $m_n ?>" required/>
                           </div>
                            <div class="col-xs-3 form-group">
                               Mother's Profession <br>
                            <input type="text" class="form-input" name="m_p" id="m_p" value="<?php echo $m_p ?>" required/>
                           </div>
                           </div>
                             <div class="form-group"><center>
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"  />
                        </center></div>
                        </form>
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