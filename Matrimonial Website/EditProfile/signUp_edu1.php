<?php

session_start();
$u_id = $_SESSION['id'];



//if(!empty($_GET['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName     = 'wedding';
    
    //Create connection and select DB
    $db = mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
    
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


$lang=$row3['lang'];
$family=$row3['family'];
$bro=$row3['bro'];
$sis=$row3['sis'];

$bms=$row3['Brother_Status'];
$sms=$row3['Sister_Status'];

$f_n=$row3['father Name'];
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
  <button class="tablinks" onclick="openCity(event, 'edu')" >Personal Information</button>
  <button class="tablinks" onclick="openCity(event, 'edu')" >Physical Qualities</button>
  <button class="tablinks" onclick="openCity(event, 'edu')" >Community</button>
  <button class="tablinks" onclick="openCity(event, 'edu')" id="defaultOpen">Education and Occupation</button>
  <button class="tablinks" onclick="openCity(event, 'edu')">Lifestyle and Family Value</button>
<button class="tablinks" onclick="openCity(event, 'edu')">Profile Pic</button>
</div>
              
                    <div class="tabcontent" id="edu">
                       <form method="POST" id="signup-form" class="signup-form" action="signUp_edu.php">
                        
                        <h2 class="form-title"><center>Education and Occupation</center> </h2>
                        <div class="row">
                            <div class="col-xs-3 form-group">
                            Highest Educationn Level <br>
                                <div class="selectdiv">
                         <select class="form-control" id="hedu" name="hedu"  value="<?php echo $edu_level ?>" required>
        <option value="Doctrate">Doctrate</option>
        <option value="Master">Master</option>
        <option value="Honor's degree">Honor's degree</option>
        <option value="Bachelors">Bachelors</option>
        <option value="Undergraduate">Undergraduate</option>
        <option value="Diploma">Diploma</option>
        <option value="High School">High School</option>
        <option value="Less than high school">Less than high school</option>
                                </select></div>
                            </div>   
                           <div class="col-xs-3 form-group">
                        
                            Education Field<br>
                            <input type="text" class="form-input" name="edufd" id="edufd" value="<?php echo $edu_field ?>"  placeholder="field" required/>
                        </div>
                            
                            <div class="col-xs-3 form-group">
                        
                            University of last Attended Course<br>
                            <input type="text" class="form-input" name="uni" id="uni" value="<?php echo $univ ?>" placeholder="university" required/></div>
                                <div class="col-xs- 3 form-group">
                        
                            College/school last attended<br>
                            <input type="text" class="form-input" name="clg" id="clg" value="<?php echo $clg ?>"  placeholder="college/school" required/>
                        </div>
                                
                        
                           </div>
                           <div class ="row">
                            
                            <div class="col-xs-3 form-group">
                             Work At <br>
                                <div class="selectdiv">
                         <select class="form-control" id="wk" name="wk" value="<?php echo $work ?>" required>
        <option value="Private Company">Private Company</option>
        <option value="Governmnet/Public Sector">Government/ Public Sector</option>
        <option value="Defense/Civil Sector">Defense/ Civil Sector</option>
        <option value="Business/Self Employeed">Business/ Self Employeed</option>
                             <option value="">Others</option>
        <option value="Not Working">Not Working</option>
                                </select></div>
                            </div> 
                              
                            <div class="col-xs-3 form-group">
                        
                            Work As<br>
                            <input type="text" class="form-input" name="as" id="as" value="<?php echo $work_as ?>" placeholder="employment type" required/>
                        </div>
                                <div class="col-xs-3 form-group">
                                    
                                    
                        Income 
                             <br>       
                        <div class="selectdiv">
                         <select class="form-control" id="ic" name="ic" value="<?php echo $incom ?>" required>
        <option value="0">0</option>
        <option value="below 1 lakh">below 1 lakh</option>
        <option value="1 lakh-2 lakh">1 lakh-2 lakh</option>
        <option value="2 lakh-4 lakh">2 lakh-4 lakh</option>
        <option value="4 lakh-7 lakh">4 lakh-7 lakh</option>
        <option value="7 lakh-10lakh">7 lakh-10lakh</option>
        <option value="10lakh-15lakh">10lakh-15lakh</option>
        <option value="15lakh-20lakh">15lakh-20lakh</option>
        <option value="20lakh-30lakh">20lakh-30lakh</option>
        <option value="30lakh-50lakh">30lakh-50lakh</option>
        <option value="50lakh-75lakh">50lakh-75lakh</option>
        <option value="75lakh-1crore">75lakh-1crore</option>
        <option value="greater than 1 crore">greater than 1 crore</option>
        
                                    </select>
                                    </div>
                            </div> 
                           
                           <div class="col-xs-3 form-group">
                        
                            Add something more!<br>
                            <input type="text" class="form-input" name="des" id="des" value="<?php echo $des ?>" placeholder="description" />
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