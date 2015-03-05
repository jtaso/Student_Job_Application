<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href=AdminEdit.css">
</head>

<body>


<h1>List of Applicants</h1>


<?php

include("CommonMethods.php");
$debug = false;
$COMMON = new Common($debug);

 $infoSql = "SELECT * FROM PersonalInformation";
 $availabilitySql = "SELECT * FROM StudentAvailibility";
 $expSql = "SELECT * FROM StudentPastExp";
 $standingSql = "SELECT * FROM StudentStanding";
 $classWork = "SELECT * FROM ClassForWork";

 $info = $COMMON->executeQuery($infoSql, $_SERVER["SCRIPT_NAME"]);
 $avail = $COMMON->executeQuery($availabilitySql, "SELECT DISTINCT * FROM StudentAvailibility");
 $exp = $COMMON->executeQuery($expSql, "SELECT DISTINCT * FROM StudentPastExp"); 
 $standing = $COMMON->executeQuery($standingSql, "SELECT DISTINCT * FROM StudentStanding");
 $class = $COMMON->executeQuery($classWork, "SELECT DISTINCT * FROM ClassForWork");

 $field = array("login","name","email","cellPhone, Status, Major, GPA, Classes, Credits, Position");

$num_rows=mysql_num_rows ($info);

echo"<table border = '1'>
<tr>
<th> Edit </th>
<th> Print </th>
<th> Delete </th>
<th> Campus ID </th>
<th> Name </th>
<th> Email </th>
<th> Cell Phone </th>
<th> Status </th>
<th> Major </th>
<th> GPA </th>
<th> Classes Taken </th>
<th> Credits </th>
<th> Position </th>
</tr>";


for ($num=0; $num<$num_rows; $num=$num+1)
{


$rows=mysql_fetch_array($info);


echo "<tr>";

echo "<td>";
echo "<form name = 'print' method = 'post' action = 'adminEditor.php' >";
echo "<button name='ID' value= ".$rows['login']." type=submit>EDIT</button>";
echo "</form>";
echo "</td>";

echo "<td>";
echo "<form name = 'Edit' method = 'post' action = 'adminPrint.php' >";
echo "<button name='ID' value= ".$rows['login']." type=submit>PRINT</button>";
echo "</form>";
echo "</td>";

echo "<td>";
echo "<form name = 'Delete' method = 'post' action = 'adminDelete.php' >";
echo "<button name='ID' value= ".$rows['login']." type=submit>DELETE</button>";
echo "</form>";
echo "</td>";

	echo "<td>".$rows['login']."</td>";
	echo "<td>".$rows['name']."</td>";
	echo "<td>".$rows['email']."</td>";
	echo "<td>".$rows['cellPhone']."</td>";

	$rows=mysql_fetch_array($standing);
	echo "<td>".$rows['studentStatus']."</td>";
	echo "<td>".$rows['major']."</td>";
	echo "<td>".$rows['gpa']."</td>";
	echo "<td>".$rows['takenClasses']."</td>";
	echo "<td>".$rows['credits']."</td>";

	$rows=mysql_fetch_array($avail);
	echo "<td>".$rows['pos']."</td>";
	
}
?>

<TABLE BORDER="0">
<TR>
 <TD><form action= "adminDeleteAll.php" method="POST">
	<Input type = "Submit" name = "Submit4"  value = "Delete All" style="height:30px; width:90px">
 </form></TD>

</tr>
</TABLE>

</body>

</html>


