<?php

$courses = array("201",
		  "202",
		  "203", 
		  "304", 
		  "313",
		  "331",
		  "341",
		  "345",
		  "411",
		  "421",
		  "441",
		  "426",
		  "431",
		  "435",
		  "445",
		  "451",
		  "455",
		  "456",
		  "461",
		  "471",
		  "481",
		  "483",
		  "291",
		  "299",
		  "404",
		  "437",
		  "445",
		  "455",
		  "461",
		  "479",
		  "481",
		  "483",
		  "498",
		  "499");
echo"<table id='courseTable'>";
echo"<br>";
echo"<tr>Please select courses of interest:</tr>";
echo"<td>";
echo"<br><br>";
for ($i=0; $i < 12; $i++)  
{
 
 echo "<input type=checkbox name=coursesWanted[]"." value=".$courses[$i].">".$courses[$i]."<br>";

         
}
echo"</td>";

echo "<td>";
echo"<br><br>";
for($i = 12; $i < 24; $i++)
  {   
  echo "<input type=checkbox name=coursesWanted[]"." value=".$courses[$i].">".$courses[$i]."<br>";

  }
echo"</td>";

echo"<td>";

for($i = 24; $i < 34; $i++)
  {
 echo "<input type=checkbox name=coursesWanted[]"." value=".$courses[$i].">".$courses[$i]."<br>";

  }

echo "</td>";
echo"</table>";

echo"<br>";

?>
