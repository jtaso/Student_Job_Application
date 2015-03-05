<?php
/* This form primarily validates and communicates the data

  given by the form to the database we set up.*/

include("../../CommonMethods.php");

$errorString = array();

$debug = false;

$COMMON = new Common($debug); // common methods

//VARIABLES

$pos=$_POST['pos'];

$name=$_POST['name'];

$email=$_POST['email'];

$campusId=$_POST['campusid'];

$homeAddr=$_POST['homeAddr1'];

$umbcAddr=$_POST['umbcAddr1'];

$cellPhone=$_POST['umbcPhone'];

$major=$_POST['major'];

$credits=$_POST['credits'];

$hasJob=$_POST['workAtUMBC'];

$studentStatus=$_POST['studentStatus'];

$exp=$_POST['tutorExp'];

$coursesWanted = $_POST['coursesWanted'];
$classForWork = "";

if(!empty($coursesWanted))
  {
foreach($coursesWanted as $courses)
  {
$ClassforWorkSql = "INSERT INTO `ClassForWork` (login, classForWork)"." VALUES('$campusId', '$courses')";
$rs = $COMMON->executeQuery($ClassforWorkSql, $_SERVER["SCRIPT_NAME"]);

  }

  }

else
{
  array_push($errorString, "Please select courses of interest.");

}

$coursesTaken = $_POST['coursesTaken'];
$takenClasses = "";

if(!empty($coursesTaken))
  {
foreach($coursesTaken as $courses2)
{
$takenClasses .= $courses2 . " ";
}

  }


// Hours

$max=$_POST['maxHours'];

$min=$_POST['minHours'];

// Note: If this is not checked form will NOT submit.

$consent=$_POST['consent'];

//Check for Errors.

// Only if work == 'Yes'

if($hasJob == "Yes")

{

 $job=$_POST['umbcJob'];

 if($job == null)

    {array_push($errorString, "Please enter your job title.");}

}

if(!is_numeric($max) or !is_numeric($min))
{
  array_push($errorString, "Please enter your available work hours.");

}

if($min > $max)
 {
array_push($errorString, "Your available work hours seem off, please try again");
 }

if(!is_numeric($credits))

{

 array_push($errorString, "Please type the amount of credits you have earned.");

}

// Only if studentStatus == 'Current Student'

if ($studentStatus == "Current Student")

{

    $gpa=$_POST['gpa'];

    if(!is_numeric($gpa) or $gpa == null)

      {

        array_push($errorString, "Please enter your GPA as of this Semester.");

      }
    if($gpa > 4 or $gpa < 0)
      {array_push($errorString, "Please enter a GPA between 0 and 4.0");}

    $reference=$_POST['refer'];

   
    if($reference == null)

    {

      // array_push($errorString, "Please enter one or more UMBC faculty as a reference.");

    }

}


//If Errors exist. Print Specific Errors.

if(count($errorString) != 0)

 {

    echo "<font family=sans-serif size=15 color=red> ERROR: </font> <br>";

    foreach ($errorString as $error)      

     {

   echo"<font family=sans-serif size=15>" . $error . "<br> </font>";

     }

 }

// Database input if everything clears.

else
{

$personalSql = "INSERT INTO `PersonalInformation` (login , name, email, umbcAddr, homeAddr, cellPhone)"." Values('$campusId', '$name', '$email', '$umbcAddr', '$homeAddr', '$cellPhone')"; 

$standingSql = "INSERT INTO `StudentStanding` (login, major, gpa, takenClasses,
credits, studentStatus)"." VALUES('$campusId', '$major', '$gpa', '$takenClasses', '$credits', '$studentStatus')";

$pastExpSql = "INSERT INTO `StudentPastExp` (login, hasJob, job, tutorExp)"." VALUES('$campusId', '$hasJob', '$job', '$exp')";

$studentAvailibilitySql = "INSERT INTO `StudentAvailibility` (login, min, max, pos)"." VALUES('$campusId', '$min', '$max', '$pos')";

$rs = $COMMON->executeQuery($personalSql, $_SERVER["SCRIPT_NAME"]);
$rs = $COMMON->executeQuery($studentAvailibilitySql, $_SERVER["SCRIPT_NAME"]);
$rs = $COMMON->executeQuery($standingSql, $_SERVER["SCRIPT_NAME"]);
$rs = $COMMON->executeQuery($pastExpSql, $_SERVER["SCRIPT_NAME"]);

echo "<font family=sans-serif size=15 >Your Application has been Successfully Submitted</font>";

}

?>