<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "donor_login";

// using the method (mysqli_connect()) that has four param in order.
$conne = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if (!$conne) {
    die("Connection failed: " . mysqli_connect_error());
}

  $nameF = $_POST['firstN'];
  $lastN = $_POST['lastN'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $phone = $_POST['password'];
  

  $sql = "INSERT INTO  (firstN,lastN,email,password,gender,profile,age,phone) VALUES ('$nameF','$lastN','$gender','$age','$email','$password',' $phone','$phone')";
  
  $result = mysqli_query($conne , $sql);

  header("Location: index-insert.php");
