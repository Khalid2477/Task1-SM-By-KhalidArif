<?php
	// Database connection
  $host = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "motors";
	$conn = mysqli_connect($host,$dbUser,$dbPass,$dbName);


  if (isset($_POST['submit'])){
  if (!empty($_POST['m1']) && !empty($_POST['m2']) && !empty($_POST['m3']) && !empty($_POST['m4']) && !empty($_POST['m5']) && !empty($_POST['m6']) ) {
  $m1 = $_POST['m1'];
  $m2 = $_POST['m2'];
  $m3 = $_POST['m3'];
  $m4 = $_POST['m4'];
  $m5 = $_POST['m5'];
  $m6 = $_POST['m6'];

  $query = "INSERT INTO motors (m1,m2,m3,m4,m5,m6) VALUES ('$m1','$m2','$m3','$m4','$m5','$m6')";

  $run = mysqli_query($conn,$query) or die(mysqli_error());

  if ($run) {
    echo "Submitted successfully";
  }else {
    echo "not submitted";
  }

}}
?>
