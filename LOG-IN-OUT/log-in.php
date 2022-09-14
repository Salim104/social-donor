<?php
$hosthost="localhost";
$user="root";
$password="";
$db="social_donor";

$conn = mysqli_connect ($hosthost, $user, $password);
 mysqli_select_db($conn,$db);


if(isset($_POST['submit'])){  
    $email = trim($_POST['email']); 
    $password = trim($_POST['password']);

$sql="select * from user_login where email='".$email."'AND 
password='".$password. "' limit 1";

$result = mysqli_query($conn,$sql); 
if (mysqli_num_rows($result) ==1) {
echo "You have Successfully Logged IN"; 
// header('location: sign-up.php'); 
header( "location:../Profile/profile.php");

//redirect to index page after inserting;
}else{ echo "You have Entered Incorrect Password";
exit();
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor-page</title>
    <link rel="stylesheet" href="./log-in.css">

        <style>
      input.Sbttn {
      width: 100%;
      background-color: #ff0000;
      font-size: 24px;
      color: #fff;
      font-weight: 500;
      border: none;
      text-align: center;
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
            <li><a href="./log-in.html">APPOINTMENT</a></li>
            <li><a href="../contact.html">CONTACT US</a></li>
          </ul>
          <input class="input" type="search" placeholder="Search  blood types" />
          <div class="log">
            <a href="./log-in.html">LOG IN</a>
            <a href="./sign-up.html">SIGN UP</a>
          </div>
        </div>
      </nav>
      <!-- ================================Log-in section==================================== -->
      <section>
         <div class="log-in">
               <div class="log-col first">
                  <img src="../images/login-img.png" alt="">
               </div>
               <div class="log-col last-col">
                     <div class="inner-form">
                        <h1>Welcome Back</h1>
                        <form action="" method="Post">
                            <input type="text" name="email" placeholder="Enter email:" required>
                            <input type="password" name="password" placeholder="Password:" required>
                              <input class="Sbttn" type="submit" name="submit" value="Login">
                        </form>
                      
                     </div>
               </div>
         </div>
      </section>

      <!-- ====================================navbar-section================================ -->

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


    
</body>
</html>