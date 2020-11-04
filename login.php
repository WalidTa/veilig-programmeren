<?php
 include "db.php";

 $username = $_POST["username"];
 $password = $_POST["password"];
  // print "username = ". $username ."<br>"."password = " . $password ;

$myConn = new DB;
$query = "SELECT * FROM user WHERE username = '$username'";

$result = $myConn->executeSQL($query);  gettype($result);
  if (!empty($result)){
    echo "<br> Login as $username <br>";
    ($result);
  } else {
    echo "<br> Invalid login! <br>"; }  ?>
