<?php
session_start();
//calling the connection page
include ('../SERVER/connection.php');

//when assigning to the button submit.
if(isset($_POST['submit'])) {
    $firstN = trim($_POST['firstN']);
    $profile = trim($_POST['profile']);
    $gender = trim($_POST['gender']);
    $lastN = trim($_POST['lastN']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $password = trim($_POST['password']);

$insert = mysqli_query($db, "INSERT INTO user_login VALUE (NULL,'$firstN', '$lastN', '$email', '$password', '$gender','$profile','$age','$number' )");

 echo "<pre>";
  var_dump($insert);
 echo "</pre>";

//I can display information here
if($insert > 0) {
    echo $firstN. " Information is inserted";
} else {
    echo $firstN. " Information is not inserted";
}
//Automatically the page will refresh after 5 sec based on the time set.
header( "refresh:0; url=log-in.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor-page</title>
    <link rel="stylesheet" href="./sign-up.css">
    <style>
      input[type="email"] {
  border: 2px solid black;
  border-radius: 4px;
}

      input.sbttn {
      width: 100%;
      background-color: #ff0000;
      font-size: 24px;
      color: #fff;
      font-weight: 500;
      border: none;
      text-align: center;
      }


      /* ---==== */

form input[type="password"] {
  padding: 1.5rem 0;
  border: 2px solid #999;
  margin-bottom: 1.5rem;
}

form input[type="password"]:hover {
  border-bottom-color: #444;
}

form input[type="password"]:focus {
  border-bottom-color: #4b7bec;
}

.password-meter {
  width: 100%;
}

.password-meter__bar {
  width: 33.333%;
  height: 1rem;
  background: #eee;
  margin-bottom: 1rem;
  position: relative;
}

.password-meter__bar__inner {
  width: 0;
  height: 100%;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
}

.password-meter__label {
  color: #666;
  font-size: 1.2rem;
}

.password-meter__label span {
  font-weight: bold;
}


      

    </style>
</head>
<body>
    <nav>
        <img src="../images/Group 54.png" alt="" />
        <div class="right-nav">
          <ul>
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../howi-it-works.html">HOW IT WORKS</a></li>
            <li><a href="../Campaings/Campaings.html">CAMPAING</a></li>
            <li><a href="./sign-up.css">APPOINTMENT</a></li>
            <li><a href="../contact.html">CONTACT US</a></li>
          </ul>
          <input class="input" type="search" placeholder="Search  blood types" />
          <div class="log">
            <a href="../LOG-IN-OUT/log-in.html">LOG IN</a>
            <a href="../LOG-IN-OUT/sign-up.html">SIGN UP</a>
          </div>
        </div>
      </nav>
      <!-- ================================sign-up section==================================== -->
      <section>
         <div class="log-in">
           <h1>Blood Donation Branch
            Registration</h1>
            <form action="" method="post">
                <div class="log-in-info">
  
                <div class="profile-pic-div">
                  <img src="../images/dog.jpg" id="photo">
                  <input type="file" id="file" name="profile">    
                  <label for="file" id="uploadBtn">Choose Photo</label>
                </div>
                <h2 class="img-title" >upload Photo</h2>
                <div class="log-col first">
                     <input type="text" name="firstN" placeholder="First name:" required>
                     <select class="selector" name="gender" id="gender"  required>
        
                      <option >Gender</option>
                      <option >Male</option>
                      <option >Female</option>
                      <option >Other</option>
                    </select>
  
                </div>
                <div class="log-col first">
                     <input type="text" name="lastN" placeholder="Last name :"  required>
                     <input type="number" name="age" placeholder="Age:"  required>
                </div>
                <div class="log-col first">
                     <input type="email" name="email" placeholder="Email: " required>
                     <input type="number" name="number" placeholder="Phone number:" required>
                </div>
                <div class="log-col first">
                  <div>
                      <input id="password" name="password" class="js--password"type="password" placeholder="Enter your password here." />
                     <div class="password-meter">
                       <!-- password-check-->
                      <div class="password-meter__bar">
                        <div class="password-meter__bar__inner js--password-bar"></div>
                      </div>
                      <p class="password-meter__label">
                        Password Strength: <span class="js--password-text"></span>
                      </p>
                      </div>
                  </div>
                     <input type="text" class="block-item">
                </div>
                </div>
                
                  <input class="sbttn" type="submit" name="submit" value="Register">
            </form>
           
         </div>
      </section>

      <!-- ======================================navbar-section================================ -->

      <footer>
        <div class="footer-wraper">
          <div class="main-footer">
            <div class="footer-col">
              <p class="footer-heading">Contact Us</p>
  
              
          <p>
            support@donation.com<br>
            helpme@donation.com<br>
          </p>
  
          <p>
            Road-2,3/A East Shibgonj<br>
          Sylhet-3100, Bangladesh<br>
          </p>
  
          <p>
            Office:  (+880) 0823 560 433<br>
            Cell:  (+880) 0723 161 343<br>
          </p>
  
            </div>
            <div class="footer-col middle-fo">
              <p class="footer-heading center">Supporting links</p>
              <div class="middle-disc">
                <div>
    
                     <p> Thalassemia Cell </p>
  
                      <p>Elofrosis</p>
  
                      <p>Myelodysasia Blood</p>
  
                      <p>Count Hemolytimia</p> 
  
                      <p>Ychromas Eosis</p> 
  
                </div>
                <div>
  
                  <p>Hyrcoagulable </p>
  
                  <p>Thrombo Xtosis</p>
                  
                  <p>Sicklenemiaxs</p> 
  
                  <p>Aplastic</p>
  
                  <p>Aplastic</p>
  
                </div>
              </div>
            </div>
            <div class="footer-col subscrib">
              <p class="footer-heading">Subscribe to our news:</p>
              <form action="">
                <input type="text" placeholder="Enter your email" />
                <a href="">Subscribe</a>
              </form>
            </div>
          </div>
          <div class="last-footer">
            <img src="./images/Group 54.png" alt="" />
            <p>@social donors 2011-2022 Terms & Conditions Privacy</p>
            <div class="social-icons">
              <a href="#"><img src="./images/instagram-ico.svg" alt="" /></a>
              <a href="#"><img src="./images/twitter-ico.svg" alt="" /></a>
              <a href="#"><img src="./images/facebook-ico.svg" alt="" /></a>
              <a href="#"><img src="./images/yootube-ico.svg" alt="" /></a>
            </div>
          </div>
        </div>
      </footer>
  
    <script src="./upload.js"></script>
    <script src="./passCheck.js"></script>

</body>
</html>