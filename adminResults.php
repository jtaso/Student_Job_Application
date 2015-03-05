<?php

include("../../CommonMethods.php");

$COMMON = new Common(false);

$sortby = $_POST['sort'];

if($sortby == "gpa")
  {

    echo"<h1>SORTED RESULTS by GPA:</h1>";

    $sql = "SELECT * FROM `StudentStanding`"." ORDER BY gpa DESC";
    
    $resource = mysql_query($sql);
    $length = mysql_num_rows($resource);
    
    echo"</table>";
  echo"<table border = '1'>";
  echo"<tr>";
  echo"<th>Campus ID</th>";
    
    echo"<th>Student Status</th>";
    echo"<th>Major</th>";
    echo"<th>GPA</th>";
    echo"<th>Classes Taken</th>";
    echo"<th>Credits</th>";

  echo"</tr>";

    for($i = 0; $i<$length; $i++)
      {


    
echo"<tr>";    

	echo"<td>".mysql_result($resource, $i,"login")."</td>";
	
	echo"<td>".mysql_result($resource, $i, "studentStatus")."</td>";
	echo"<td>".mysql_result($resource, $i, "major")."</td>";
	echo"<td>".mysql_result($resource, $i, "gpa")."</td>";
	echo"<td>".mysql_result($resource, $i, "takenClasses")."</td>";
	echo"<td>".mysql_result($resource, $i, "credits")."</td>";
	      
    echo"</tr>";
      }
 echo"</table>";

  }

else if($sortby == "credits")
  {
    echo"<h1>SORTED RESULTS by CREDITS:</h1>";
     
    $sql = "SELECT * FROM `StudentStanding`"." ORDER BY credits DESC";
    $resource = mysql_query($sql);
    $length = mysql_num_rows($resource);

  echo"<table border = '1'>";
  echo"<tr>";

  echo"<th>Campus ID</th>";

    
    echo"<th>Student Status</th>";
    echo"<th>Major</th>";
    echo"<th>GPA</th>";
    echo"<th>Classes Taken</th>";
    echo"<th>Credits</th>";

  echo"</tr>";

    for($i = 0; $i<$length; $i++)
      {

    
echo"<tr>";    

	echo"<td>".mysql_result($resource, $i,"login")."</td>";
	
	echo"<td>".mysql_result($resource, $i, "studentStatus")."</td>";
	echo"<td>".mysql_result($resource, $i, "major")."</td>";
	echo"<td>".mysql_result($resource, $i, "gpa")."</td>";
	echo"<td>".mysql_result($resource, $i, "takenClasses")."</td>";
	echo"<td>".mysql_result($resource, $i, "credits")."</td>";
	      
    echo"</tr>";
      }
 echo"</table>";

  }

else if($sortby == "courses")
  {
 echo"<h1>SORTED RESULTS by COURSES:</h1>";
    
    $sql = "SELECT * FROM `ClassForWork`"." ORDER BY classForWork DESC";
    $resource = mysql_query($sql);
    $length = mysql_num_rows($resource);

    echo"<table border = '1'>";
    echo"<th>Campus Id</th>";
    echo"<th>Class Desired</th>";

    for($i = 0; $i < $length; $i++)
      {
	echo"<tr>";
	echo"<td>".mysql_result($resource, $i, "login")."</td>";
	echo"<td>".mysql_result($resource, $i, "classForWork")."</td>";
	echo"</tr>";
	
      }
    echo"</table>";
  }

else
  { 
    header('Location:http://userpages.umbc.edu/~a127/CMSC331/phpCode/adminSort.html');
  
  }

?>