<?php
  $fnumber = $_POST['firstNumber'];
  $snumber = $_POST['secondNumber'];
  if($fnumber >= $snumber) {
    echo $fnumber."is greater"."<br>";
  }
  else {
    echo $snumber."is greater"."<br>";
  }
?>
