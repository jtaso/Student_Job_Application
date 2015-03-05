</head>
<body>
<br><h1>APPLICANT INFORMATION</h1></br>
<?php

include("CommonMethods.php");

/* This form primarily validates and communicates the data
  given by the form to the database we set up.*/

 $debug = false;
 $COMMON = new Common($debug); // common methods

 $id = $_POST['ID'];

 $infoSql = "SELECT * FROM PersonalInformation WHERE login = '$id'";
 $availabilitySql = "SELECT * FROM StudentAvailibility WHERE login = '$id'";
 $expSql = "SELECT * FROM StudentPastExp WHERE login = '$id'";
 $standingSql = "SELECT * FROM StudentStanding WHERE login = '$id'";
 $classWork = "SELECT * FROM ClassForWork WHERE login = '$id'";


 $info = $COMMON->executeQuery($infoSql, "SELECT FROM PersonalInformation WHERE login = '$id'");    
 $avail = $COMMON->executeQuery($availabilitySql, "SELECT FROM StudentAvailibility WHERE login = '$id'");
 $exp = $COMMON->executeQuery($expSql, "SELECT FROM StudentPastExp WHERE login = '$id'");
 $standing = $COMMON->executeQuery($standingSql, "SELECT FROM StudentStanding WHERE login = '$id'");
 $class = $COMMON->executeQuery($classWork, "SELECT FROM ClassForWork WHERE login = '$id'");


echo ("<h2>Personal Information</h2>");
echo "<table border='1'>
  <tr>
  <th> Student ID </th>
  <th> Name </th>
  <th> UMBC Address </th>
  <th> Home Address </th>
  <th> Cell Phone </th>
  <th> Email </th>
  </tr>";

  $field1 = array("login","name","umbcAddr","homeAddr","cellPhone", "email");
  while($row = mysql_fetch_array($info)){
  echo "<tr>";

   foreach($field1 as $query){
      echo "<td>" . $row[$query] . "</td>" ;
   }
   echo "</tr>";
 }
echo "</table>";

echo ("<h2> Student Standing </h2>");
echo "<table border='1'>
  <tr>
  <th> Status </th>
  <th> Major </th>
  <th> GPA </th>
  <th> Classes Taken </th>
  <th> Credits Taken </th>
  </tr>";

  while($row = mysql_fetch_array($standing)){
  echo "<tr>";
  echo "<td>" . $row['studentStatus'] . "</td>" ;
  echo "<td>" . $row['major'] . "</td>" ;
  echo "<td>" . $row['gpa'] . "</td>" ;
  echo "<td>" . $row['takenClasses'] . "</td>" ;
  echo "<td>" . $row['credits'] . "</td>";
  echo "</tr>";
 }
echo "</table>";

echo ("<h2> Past Experience </h2>");
echo "<table border='1'>
  <tr>
  <th> Has Job </th>
  <th> Job </th>
  <th> Tutor Experience </th>
  <th> References </th>
  </tr>";

  while($row = mysql_fetch_array($exp)){
  echo "<tr>";
  echo "<td>" . $row['hasJob'] . "</td>" ;
  echo "<td>" . $row['job'] . "</td>" ;
  echo "<td>" . $row['tutorExp'] . "</td>" ;
  echo "<td>" . $row['references'] . "</td>" ;
  echo "</tr>";
 }
echo "</table>";

echo ("<h2> Student Availibility </h2>");
echo "<table border='1'>
  <tr>
  <th> min </th>
  <th> max </th>
  <th> pos </th>
  </tr>";

  while($row = mysql_fetch_array($avail)){
  echo "<tr>";
  echo "<td>" . $row['min'] . "</td>" ;
  echo "<td>" . $row['max'] . "</td>" ;
  echo "<td>" . $row['pos'] . "</td>" ;
  echo "</tr>";
 }
echo "</table>";

echo ("<h2> Class to work for </h2>");
echo "<table border='1'>
  <tr>
  <th> Class </th>
  </tr>";

  while($row = mysql_fetch_array($class)){
  echo "<tr>";
  echo "<td>" . $row['classForWork'] . "</td>" ;
  echo "</tr>";
 }
echo "</table>";
?>

</body>
</html>
