<?php
header('Location: http://userpages.umbc.edu/~aashil1/CMSC331/project 1/adminEdit.php');

 include("CommonMethods.php");
 $debug = true;
 $COMMON = new Common($debug); // common methods
 $conn = mysql_connect("studentdb.gl.umbc.edu", "aashil1", "aashil1") or die("Could not connect to MySQL");


  $id = $_POST['ID'];
echo $id;

 $infoSql = "DELETE FROM PersonalInformation WHERE login = '$id'";
 $availabilitySql = "DELETE FROM StudentAvailibility WHERE login = '$id'";
 $expSql = "DELETE FROM StudentPastExp WHERE login = '$id'";
 $standingSql = "DELETE FROM StudentStanding WHERE login = '$id'";
 $classWork = "DELETE FROM ClassForWork WHERE login = '$id'";

  $rs = mysql_query($infoSql, $conn); 
  $rs = mysql_query($availabilitySql, $conn); 
  $rs = mysql_query($expSql, $conn); 
  $rs = mysql_query($standingSql, $conn); 
  $rs = mysql_query($classWork, $conn); 






?>
