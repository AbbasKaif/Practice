<?php
  $username = $_POST["name"];
  $fee = $_POST["fees"];
  $pass = $_POST["password"];
  $gen = $_POST["gender"];
  $cntry = $_POST["country"];
  $quali = $_POST["qualification"];
  $addrs = $_POST["address"];
  $con = mysqli_connect("localhost","root","","ictdb");
  if(!$con) {
    echo "Server could not be connected";
  }
  $s = "insert into registrationDetails values('".$username."','.$fee.','".$pass."','".$gen."','".$cntry."','".implode(" " , $quali)."','".$addrs."')";
  $check = mysqli_query($con , $s);
  if($check != 0) {
    echo "Registration Successful!";
  }
  else {
    echo "Registration Failed!";
  }
?>
