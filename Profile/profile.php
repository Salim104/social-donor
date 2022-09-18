<?php 
session_start();
include('../SERVER/connection.php');

$conn = mysqli_connect('localhost','root','','social_donor');


$sql ="SELECT * FROM user_login";// SQL statement
$result = mysqli_query($conn,$sql);


while($records = mysqli_fetch_assoc($result)){
  //
  $password = $records['password'];
  $email = $records['email'];
  $firstN = $records['firstN'];
  $lastN = $records['lastN'];
  $age= $records['age'];
  $phone= $records['phone'];
  $id= $records['id'];



  mysqli_query($db, "UPDATE user_login SET firstN='$firstN', lastN='$lastN', age='$age', phone='$phone', password='$password' WHERE id='$id'");

  

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor-page</title>
    <link rel="stylesheet" href="./profile.css">
</head>
<body>
  <nav>
    <img src="../images/Group 54.png" alt="" />
    <div class="right-nav">
      <ul>
        <li><a href="../Dashboard/dashboard.html">DASHBOARD</a></li>
        <li><a href="../howi-it-works.html">HOW IT WORKS</a></li>
        <li><a href="../Campaings/Campaings.html">CAMPAING</a></li>
        <li><a href="../contact.html">CONTACT US</a></li>
      </ul>
      <input class="input" type="search" placeholder="Search  blood types" />
      <div class="log">
        <div class="log-inner">
          <a href="../Profile/profile.html" class="profile-btn"> Profile</a>
          <img src="../images/profile-logo.svg" alt="" srcset="">
        </div>
        <div class="log-inner">
          <a href="../Profile/setting.html" class="profile-btn">Setting</a>
          <img src="../images/setting-logo.svg" alt="" srcset="">
        </div>
      </div>
      <a href="../index.html" class="log-out">LOG OUT</a>
    </div>
  </nav>
      <!-- ================================profile section==================================== -->
      <section class="profile">
             <div class="profile-container">
                 <div class="first-info">
                     <img src="../images/profile-img.png" alt="">
                     <div class="pro-info">
                        <h2>User Name : <?php echo $firstN?></h2>
                        <p>Email: <?php echo $email?></p>
                        <p>Blood type: BO </p>
                     </div>
                 </div>
                 <div class="last-info">
                      <p class="input-list"><span>First name:</span><?php echo $firstN?> </p>
                      <p class="input-list"><span>Last name:</span> <?php echo $lastN?> </p>
                      <p class="input-list"><span>age:</span> <?php echo $age?></p>
                      <p class="input-list"><span>Phone:</span><?php echo $phone?></p>
                 </div>
                 <button><a href="../index.html">Back</a></button>
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
  
    
</body>
</html>