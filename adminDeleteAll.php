<?php

header('Location: http://userpages.umbc.edu/~aashil1/CMSC331/project 1/adminEdit.php');

 include("CommonMethods.php");
 $debug = true;
 $COMMON = new Common($debug); // common methods
 $conn = mysql_connect("studentdb.gl.umbc.edu", "aashil1", "aashil1") or die("Could not connect to MySQL");


 $infoSql = "DELETE FROM PersonalInformation";
 $availabilitySql = "DELETE FROM StudentAvailibility";
 $expSql = "DELETE FROM StudentPastExp";
 $standingSql = "DELETE FROM StudentStanding";
 $classWork = "DELETE FROM ClassForWork";

  //$sql = "SELECT * FROM Input1"; 
  $rs = mysql_query($infoSql, $conn); 
  $rs = mysql_query($availabilitySql, $conn); 
  $rs = mysql_query($expSql, $conn); 
  $rs = mysql_query($standingSql, $conn); 
  $rs = mysql_query($classWork, $conn); 
?>

