<?php
  $username = $_POST["name"];
  $fee = $_POST["fees"];
  $pass = $_POST["password"];
  $cfrmpass = $_POST["confirmPassword"];
  $gen = $_POST["gender"];
  $cntry = $_POST["country"];
  $quali = $_POST["qualification"];
  $addrs = $_POST["address"];
  echo "Name: ".$username."<br />";
  echo "Fees: ".$fee."<br />";
  echo "Password: ".$pass."<br />";
  echo "Confirmed Password: ".$cfrmpass."<br />";
  echo "Gender: ".$gen."<br />";
  echo "Country: ".$cntry."<br />";
  foreach($quali as $n) {
	echo "Qualification: ".$n."<br />";
  }
  echo "Address: ".$addrs."<br />";
?>


