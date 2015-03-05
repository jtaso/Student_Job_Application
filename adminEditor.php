<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Edit Applicant Information</h1>
<h2>Please type in the new information for this applicant</h2>
<?php

include("CommonMethods.php");
$debug = false;
$COMMON = new Common($debug);

 $id = $_POST['ID'];

 $debug = false;
 $COMMON = new Common($debug); // common methods
 $infoSql = "SELECT * FROM PersonalInformation WHERE login = '$id'";
 $availabilitySql = "SELECT * FROM StudentAvailibility WHERE login = '$id'";
 $expSql = "SELECT * FROM StudentPastExp WHERE login = '$id'";
 $standingSql = "SELECT * FROM StudentStanding WHERE login = '$id'";
 $classWork = "SELECT * FROM ClassForWork WHERE login = '$id'";

 $info = $COMMON->executeQuery($infoSql, "SELECT  FROM PersonalInformation WHERE login = '$id'");    
 $avail = $COMMON->executeQuery($availabilitySql, "SELECT FROM StudentAvailibility WHERE login = '$id'");
 $exp = $COMMON->executeQuery($expSql, "SELECT FROM StudentPastExp WHERE login = '$id'");
 $standing = $COMMON->executeQuery($standingSql, "SELECT FROM StudentStanding WHERE login = '$id'");
 $class = $COMMON->executeQuery($classWork, "SELECT FROM ClassForWork WHERE login = '$id'");

 $field = array("login","name","email","cellPhone, Status, Major, GPA, Classes, Credits, Position");

	$num_rows=mysql_num_rows ($info);

	echo"<table border = '1'>
	<tr>
	<th> Campus ID </th>
	<th> Name </th>
	<th> Home Address </th>
	<th> Cell Phone </th>
	<th> Email </th>
	<th> Status </th>
	<th> Major </th>
	<th> GPA </th>
	<th> Classes Taken </th>
	<th> Credits </th>
	<th> hasJob</th>
	<th> Job </th>
	<th> Tutor Exp </th>
	<th> References </th>
	<th> Min Hours </th>
	<th> Max Hours </th>
	<th> Position </th>
	<th> Class to Work For </th>
	</tr>";

	$infoArr = array();

for ($num=0; $num<$num_rows; $num=$num+1)
{
	$rows=mysql_fetch_array($info);

	echo "<tr>";

	echo "<td>".$rows['login']."</td>";
	echo "<td>".$rows['name']."</td>";
	echo "<td>".$rows['homeAddr']."</td>";
	echo "<td>".$rows['cellPhone']."</td>";
    echo "<td>".$rows['email']."</td>";

	$rows=mysql_fetch_array($standing);
	echo "<td>".$rows['studentStatus']."</td>";
	echo "<td>".$rows['major']."</td>";
	echo "<td>".$rows['gpa']."</td>";
	echo "<td>".$rows['takenClasses']."</td>";
	echo "<td>".$rows['credits']."</td>";

	$rows = mysql_fetch_array($exp);
	echo "<td>".$rows['hasJob']."</td>";
	echo "<td>".$rows['job']."</td>";
	echo "<td>".$rows['tutorExp']."</td>";
	echo "<td>".$rows['references']."</td>";
	
	$rows=mysql_fetch_array($avail);
	echo "<td>".$rows['min']."</td>";
	echo "<td>".$rows['max']."</td>";
	echo "<td>".$rows['pos']."</td>";

	$rows=mysql_fetch_array($class);
	echo "<td>".$rows['classForWork']."</td>";
	echo"</tr>";	
}

$field = array("login","name","homeAddr", "cellPhone", "email", "studentStatus", "major", "gpa", "takenClasses", "credits",
	"hasJob", "job", "tutorExp", "references", "min", "max", "pos", "classForWork");

$new_data = array();
$entered = array(); //store the columns with new data

echo"<tr>";

foreach($field as $value){
	echo"<td><input type='text' name= '$value' placeholder= 'new info'></td>";

    if($_POST['$value'] != null)
	{ 
	$data = $_POST['$value'];
	  array_push($entered, $value);
	  array_push($new_data, $data);
	}
}

for ($i = 0; $i < count($entered); $i++){

	$col = $entered[i];

	echo "<br><td><form action= 'adminEdit.php' method='POST'>";
	if ($col == "login" || $col == "name" || $col = "homeAddr" 
		|| $col = "cellPhone" || $col = "email"){
		$sql="UPDATE PersonalInformation SET $col = '".$new_data[i]."' WHERE login='$id'";
		$result=mysql_query($sql)or die ("Cannot update the data");
	} else if ($col = "studentStatus" || $col = "major" || $col = "gpa" 
		|| $col = "takenClasses" || $col = "credits") {
		$sql="UPDATE StudentStanding SET '$col' = '$new_data[i]' WHERE login='$id'";
		$result=mysql_query($sql)or die ("Cannot update the data");
	} else if ($col = "hasJob" || $col = "job" || $col = "tutorExp" || $col = "references") {
		$sql="UPDATE StudentPastExp SET '$col' = '$new_data[i]' WHERE login='$id'";
		$result=mysql_query($sql)or die ("Cannot update the data");
	} else if ($col = "min" || $col = "job" || $col = "job" || $col = "pos") {
		$sql="UPDATE StudentAvailibility SET '$col' = '$new_data[i]' WHERE login='$id'";
		$result=mysql_query($sql)or die ("Cannot update the data");
	} else if ($col = "classForWork") {
		$sql="UPDATE ClassForWork SET '$col' = '$new_data[i]' WHERE login='$id'";
		$result=mysql_query($sql)or die ("Cannot update the data");
	}
	echo "</form></td></br>";
	
}	

echo"</tr>";
echo"</table>";
echo "<br><td><form action= 'adminEdit.php' method='POST'>";
echo "<Input type = 'Submit' name='Submit' value = 'Submit' style='height:30px; width:90px'>";
echo "</form></td></br>";
?>


</body>
</html>
