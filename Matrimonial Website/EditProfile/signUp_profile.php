<?php
session_start();
$UserName = $_SESSION['id'];
 


$db=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql="SELECT * FROM `approved_user` WHERE u_id = '$UserName'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

  while($row3 = mysqli_fetch_array($result))
{ 
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
                    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'personal')" >Personal Information</button>
  <button class="tablinks" onclick="openCity(event, 'physical')" >Physical Qualities</button>
  <button class="tablinks" onclick="openCity(event, 'community')">Community</button>
  <button class="tablinks" onclick="openCity(event, 'edu')">Education and Occupation</button>
  
  <button class="tablinks" onclick="openCity(event, 'lifestyle') ">Lifestyle and Family Value</button>
                        
<button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile Pic</button>
</div>
                    
                    <div class="tabcontent" id="personal">
                    <form method="POST" id="signup-form" class="signup-form" action="signUp_personal.php">
                      
                        <h2 class="form-title">Add Personal Details</h2>
                          <div class="row">
                            <div class="col-xs-3 form-group">
                        
                            Your Name
                            <input type="text" class="form-input" name="fn" id="fn" placeholder="Name" required/>
                        </div>
                        
                          
                            <div class="col-xs-3 form-group">
                            Your Surname
                            <input type="text" class="form-input" name="ln" id="ln" placeholder=" Surname" required/>
                        </div>
                              
                              <div class="col-xs-3 form-group">
                              Your Birth-date
                                  <input type="date" class="form-input" name="dob" id="dob" required/>
                              </div>
                              
                              <div class="col-xs-3 form-group">
                              Your Contact Number
                                  <input type="number"
                                    class="form-input"
                                         name="cn" id="cn" required/>
                              </div>
                        </div>
                        <div class = "row">
                              <div class="col-xs-3 form-group">
                              Your Address
                                  <input type="text"
                                    class="form-input"
                                         name="add" id="add" required/>
                              </div>
                        
                        </div>
                          
                        <div class="form-input">
                            Gender <br>
                            <input type="radio"  name="gender" id="gender" value = "male">Male 
                            <input type="radio"  name="gender" id="gender" value = "female"> Female
                            <input type="radio"  name="gender" id="gender" value = "others"> Others
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"/> 
                        </div>
                    </form>
                    </div>
                    
                    <div class="tabcontent" id = "physical">
                        
                    <form method="POST" id="signup-form" class="signup-form" action="signUp_physical.php">
                        
                        <h2 class="form-title">Physical Information</h2>
                        <div class="row">
                            <div class="col-xs-4 form-group">
                         Body type
                         <select class="form-control" id="bt" name="bt"required>
        <option value="slim">Slim</option>
        <option value="athletic">Athletic</option>
        <option value="average">Average</option>
        <option value ="heavy">Heavy</option>
      </select>
                            </div>
                            
                            <div class="col-xs-4 form-group">
                        Height 
                         <select class="form-control" id="ht" name="ht"required>
        <option value="134">134cm</option>
        <option value="137">137cm</option>
        <option value="139">139cm</option>
        <option value="142">142cm</option>
        <option value="144">144cm</option>
        <option value="147">147cm</option>
        <option value="149">149cm</option>
        <option value="152">152cm</option>
        <option value="154">154cm</option>
        <option value="157">157cm</option>
        <option value="159">159cm</option>
        <option value="162">162cm</option>
        <option value="164">164cm</option>
        <option value="167">167cm</option>
        <option value="169">169cm</option>
        <option value="172">172cm</option>
        <option value="174">174cm</option>
        <option value="177">177cm</option>
        <option value="179">179cm</option>
        <option value="182">182cm</option>                        
        <option value="184">184cm</option>
        <option value="187">187cm</option>
        <option value="189">189cm</option>
        <option value ="192">192cm</option>
        <option value= "194">194cm</option>
        <option value="197">197cm</option>
        <option value="199">199cm</option>
        <option value="202">202cm</option>        <option value="204">204cm</option>
        <option value="207"> 207cm</option>
        <option value="209">209cm</option>
        <option value ="212">212cm</option>
                                </select>
                            </div>
                            
                                  <div class="col-xs-4 form-group">
                       Skin tone 
                         <select class="form-control" id="st" name="st" required>
        <option value="very fair"> <div class="dot"></div> Very fair</option>
        <option value="fair"> <div class="dot"></div> Fair</option>
        <option value="tan"> <div class="dot"> </div>Tan</option>
        <option value="dark"> <div class="dot"></div> Dark</option>
      </select>
                            </div>
                          
                          
                            </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"  />
                        </div>
                    </form>
                    </div>
                    
                    <div class="tabcontent" id ="community">
                    <form method="POST" id="signup-form" class="signup-form" action="signUp_community.php">
                        
                        <h2 class="form-title"> Community </h2>
                        <div class="row">
                            <div class="col-xs-4 form-group">
                             Sub Community
                         <select class="form-control" id="sub" name="sub">
        <option value="Patel Leva">Patel Leva</option>
        <option value="Patel Kadva">Patel Kadva </option>
                                </select>
                        </div>
                            <div class="col-xs-4 form-group">
                             Maritial Status 
                         <select class="form-control" id="ms" name="ms">
        <option value="never married">Never Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow">Widowed</option>
        <option value="awaiting divorce">Awaiting Divorce</option>
                                </select>
                        </div>
                              <div class="col-xs-4 form-group">
                           Manglik
                         <select class="form-control" id="mg" name="mg">
        <option value="non manglik">Non Manglik</option>
        <option value="anshik manglik">Anshik Manglik</option>
        <option value="manglik">Manglik</option>
        
                                </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"  />
                        </div>
                        </form>
                       
                    </div>
                    
                    <div class="tabcontent" id="edu">
                       <form method="POST" id="signup-form" class="signup-form" action="signUp_edu.php">
                        
                        <h2 class="form-title">Education and Occupation </h2>
                        <div class="row">
                            <div class="col-xs-3 form-group">
                            Highest Educationn Level 
                         <select class="form-control" id="hedu" name="hedu">
        <option value="Doctrate">Doctrate</option>
        <option value="Master">Master</option>
        <option value="Honor's degree">Honor's degree</option>
        <option value="Bachelors">Bachelors</option>
        <option value="Undergraduate">Undergraduate</option>
        <option value="Diploma">Diploma</option>
        <option value="High School">High School</option>
        <option value="Less than high school">Less than high school</option>
                                </select>
                            </div>   
                           <div class="col-xs-3 form-group">
                        
                            Education Field
                            <input type="text" class="form-input" name="edufd" id="edufd" placeholder="field"/>
                        </div>
                            
                            <div class="col-xs-6 form-group">
                        
                            University of last Attended Course
                            <input type="text" class="form-input" name="uni" id="uni" placeholder="university"/>
                        </div>
                           </div>
                           <div class ="row">
                            <div class="col-xs- 3 form-group">
                        
                            College/school last attended
                            <input type="text" class="form-input" name="clg" id="clg" placeholder="college/school"/>
                        </div>
                            <div class="col-xs-3 form-group">
                            Your Work  
                         <select class="form-control" id="wk" name="wk">
        <option value="Private Company">Private Company</option>
        <option value="Governmnet/Public Sector">Government/ Public Sector</option>
        <option value="Defense/Civil Sector">Defense/ Civil Sector</option>
        <option value="Business/Self Employeed">Business/ Self Employeed</option>
        <option value="Not Working">Not Working</option>
                                </select>
                            </div> 
                              
                            <div class="col-xs-3 form-group">
                        
                            As
                            <input type="text" class="form-input" name="as" id="as" placeholder="employment type"/>
                        </div>
                                <div class="col-xs-4 form-group">
                        Income
                         <select class="form-control" id="ic" name="ic">
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
                           </div><br>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"  />
                        </div>
                        </form>     
                    </div>
                    
                    <div class="tabcontent" id="lifestyle">
                    
                       <form method="POST" id="signup-form" class="signup-form" action="signUp_life.php">
                        
                        <h2 class="form-title">Lifestyle </h2> 
                           
                           <div class="row">
                            <div class="col-xs-3 form-group">
                            Diet 
                         <select class="form-control" id="dt" name="dt">
        <option value="Veg">Veg</option>
        <option value="Non-Veg">Non-Veg</option>
        <option value="Occationally Non-Veg">Occationally Non-Veg</option>
        <option value="Eggetarian">Eggetarian</option>
        <option value="Jain">Jain</option>
        <option value="Vegan">Vegan</option>
                                </select>
                            </div>
                        <div class="col-xs-3 form-group">
                            Activities you like 
                         <select class="form-control" id="act" name="act">
        <option value="travelling">travelling</option>
        <option value="music">music</option>
        <option value="sports">sports</option>
                                </select>
                            </div>
                              <div class="col-xs-3 form-group">
                            Do you like smoking 
                         <select class="form-control" id="smok" name="smok">
        <option value="yes">yes</option>
        <option value="no">no</option>
        <option value="Occasionaly">occassionaly</option>
                                </select>
                            </div> 
                                <div class="col-xs-3 form-group">
                        
                            Mother Tounge
                            <input type="text" class="form-input" name="mt" id="mt" placeholder="eg. Gujarati"/>
                               </div>
                           </div>
                           <div class="row">
                           <div class="col-xs-3 form-group">
                            Your Family Type 
                         <select class="form-control" id="ft" name="ft">
        <option value="Joint Family">Joint Family</option>
        <option value="Nuclear Family">Nuclear Family</option>
        <option value="Others">Others</option>

                                </select>
                            </div>
                              <div class="col-xs-3 form-group"> 
                               Number of Brothers 
                            <input type="number" class="form-input" name="brs" id="brs" placeholder="eg.0"/>
                               </div>
                               <div class="col-xs-3 form-group">
                               Number of Sisters 
                            <input type="number" class="form-input" name="sis" id="sis" placeholder="eg.0"/>
                           </div>
                           </div>
                             <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Save"  />
                        </div>
                        </form>
                    </div>
                
                    <div class="tabcontent" id="Profile">
                        
                         
                          <div align="center">
                              
                        <h2 class="form-title">Profile Pic</h2>
                        <div class="row">
                            <div class="form-title"
                        style="align:center">
                          
      
	   
	 
	


        <?php 
        echo '<center>';
       
       echo '<div class="col-sm-3" align="center>';
   echo '<div class="card" style="margin-bottom:25 ; margin-left:125;float:center;">';

     echo '<img src =  "data:image/jpeg;base64,'.base64_encode($img1). '" height="180" align="center" alt="no image found" width ="150" /><br>' ;?>
       
        Select image to upload:<br><br>
                                
        <form method="POST" id="signup-form" class="signup-form" action="UploadImage.php" enctype="multipart/form-data" >
        <input type="file" name="foto" id="foto"/><br><br>
		
		
		 <div class="form-group">
                           <center><input type="submit" name="submit" id="submit" class="form-submit" value="Save"  /></center> 
                        </div>
                       </form>     
	  </div>
                
                </div>
            </div>
                        </center>
        
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