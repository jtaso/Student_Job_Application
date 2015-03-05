<html>
  <head>
    <title>Computer Science Help Center</title>
    <link type="text/css" rel="stylesheet" href="Index.css"/>
    <link href="http://assets2-my.umbc.edu/images/favicon.ico?1397221455" rel="icon" type="image/x-icon">
  </head>
  

  <body>
      <div class = "logo">
          <img src="http://www.umbc.edu/umbcstyle/images/horiz.jpg" alt="umbcLogo"/>
      </div>
      <div class="title">
          <h1>   CSEE Undergraduate Application for Employment</h1>
      </div>
    
    <form method="POST" action="confirm.php">
 
	    <font family="sans-serf" size="2" color="red">* REQUIRED</font>
     
      
      <table width="100%" bgcolor="#cccccc" style="border: 1px solid black">
        <tr>
          <td nowrap><b>

        <tr>
          <td>
      <font family="sans-serif" size="3"><b>Please select
   the position for which you are applying:</b>&nbsp;</font>
          </td>
        </tr>
	<tr>
	      
   <td> <input type="radio" name="pos" value="Grader" required >Grader
   <input type="radio" name="pos" value="Tutor" >Tutor
   <input type="radio" name="pos" value="LabAssistant" >Lab Assistant</td>
          </tr>
          <br>
          </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
	  <td>
	  <tr>
	  <td>
	
	  </td>
	  </tr>
            <?php include('courses2.php') ?>  
          </td>
        </tr>
      </table>
&nbsp;
      <table id="idTable" width="100%" style="border: 1px solid black">
        <tr> 
          <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* Name: </td>
                <td width="100%"><input type="text" style="width: 100%" name="name" value="" required></td>
              </tr>
            </table>
          </td>
	</tr>
	<tr>
          <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* UMBC Email Address: </td>
                <td width="100%"><input type="text" style="width: 100%" name="email" value="" required></td>
              </tr>
            </table>
          </td>
        </tr>
       </tr>
        <tr> 
        <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* Campus ID (on campus card): </td>
                <td width="100%"><input type="text" style="width: 100%" name="campusid" value="" required></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
 <tr>
          <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* Cell Phone: </td>
                <td width="100%"><input type="text" style="width: 100%" name="umbcPhone" value=""required></td>
              </tr>
            </table>
          </td>
        </tr>
          <td colspan="4">
            <table width="100%">
              <tr>
                <td nowrap>* Home Address: </td>
                <td width="100%"><input type="text" style="width: 100%" name="homeAddr1" value="" required></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td colspan="4">
            <table width="100%">
              <tr>
                <td nowrap>UMBC Address: </td>
                <td width="100%"><input type="text" style="width: 100%" name="umbcAddr1" value=""></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>  
	 </tr>
      </table> 
&nbsp;
      <table width="100%">
        <tr>
          <td nowrap>* Major: </td>
          <td width="100%"><input type="text" style="width: 100%" name="major" value="" required></td>
        </tr>
      </table>
      <table width="100%">
        <tr>
          <td nowrap>* Total credits (as of the beginning of this semester): </td>
          <td width="100%"><input type="text" style="width: 100%" name="credits" value="" required></td>
        </tr>
      </table>
      <table width="100%">
        <tr>
          <td nowrap><br>* List CMSC Courses previously taken:</td>
        </tr>
      </table>
            
      <table width="100%" >
        <tr>
          <td>
	  <?php include('courses.php')?>
          </td>
        </tr>
      </table>
&nbsp;
      <table width="100%">
        <tr>
          <td>* Are you currently working on campus at UMBC?   
            <input type="radio" name="workAtUMBC" value="Yes" required> Yes
            <input type="radio" name="workAtUMBC" value="No" > No
          </td>
        </tr>
      </table>

      <table width="100%">
        <tr>
          <td nowrap>If <b>Yes</b>, please list department and job title: </td>
          <td width="100%"><input type="text" style="width: 100%" name="umbcJob" value=""></td>
        </tr>
      </table>
&nbsp;  
      <table width="100%">
        <tr>
          <td><i>Please select one:</i>
          </td>
        </tr>
      </table>

      <table width="100%">
        <tr>
          <td>
            <input type="radio" name="studentStatus" value="Current Student" required>
          </td>
          <td width="100%">
            <table width="100%">
              <tr>
                <td nowrap>I attended UMBC before this semester.  My GPA is: 
                  <td width="100%"><input type="text" style="width: 100%" name="gpa" value=""></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="studentStatus" value="Transfer Student" >
          </td>
          <td width="100%">This is my first semester at UMBC, but I have transfer credits (You must submit
            a copy of your transcript to Dawn Block in the ITE building - room 208).  
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="studentStatus" value="First Semester" >
          </td>
          <td width="100%">
            This is my first semester in college.
          </td>
        </tr>
      </table>
&nbsp;
<br style="page-break-after:always;">

      <table width="100%">
        <tr>
          <td>
            What tutoring or grading experience (formal or informal, paid or unpaid) do you have?  List
            the course or program, the semester and the nature of the experienc
e (involved in self-paced
            course, ran lab, one-to-one tutoring, helped friend, etc...)  If you had a faculty supervisor,
            name him or her.
          </td>
        </tr>
      </table>
&nbsp;
      <table width="100%" style="border: 1px solid black">
        <tr>
          <td>
            <textarea rows="8" style="width: 100%" name="tutorExp"></textarea>
          </td>
        </tr>
      </table>
&nbsp;
      <table width="100%">
        <tr>
          <td>
            If this is not your first semester at UMBC, list one or more UMBC faculty or staff members, 
            preferably who know you personally, and who are familiar with your course, tutoring
            and/or grading work.
          </td>
        </tr>
      </table>
&nbsp;
      <table width="100%" style="border: 1px solid black">
        <tr>
          <td>
            <textarea rows="8" style="width: 100%" name="refer"></textarea>
          </td>
        </tr>
      </table>
&nbsp;
      <table width="100%">
        <tr>
          <td>
            Approximately how many hours per week are you available to work?
          </td>
        </tr>
      </table>

      
      <table width="100%">

        <tr> 
          <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* Maximum: </td>
                <td width="100%"><input type="text" style="width: 100%" name="maxHours" value="" required></td>
              </tr>
            </table>
          </td>
          <td width="50%">
            <table width="100%">
              <tr>
                <td nowrap>* Minimum:</td>
                <td width="100%"><input type="text" style="width: 100%" name="minHours" value="" required></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>

      <table width="100%">
        <tr>
          <td>
            <i>Graders are generally assigned 8&ndash;10 hours per week.  Tutors can work any amount of hours
              but usually do not exceed 10 hours per week</i>
          </td>
        </tr>
      </table>

<br><br>
<center><table width="75%">
 <tr>
  <td><input type="checkbox" name="consent" required >
  <td width="15">&nbsp;</td>
  <td>The hard copy of this form requires the submittal of a hard copy of your UMBC transcript.
By checking this box, you consent to the hiring individual(s) within the department to electronically review your 
transcript for the sole purpose of determining eligibility for a position.  
<b>Note: this is required in order to submit this online form.</b>
</td>
</tr>
</table>
</center>
<br><br>
<center>Please review information carefully before submitting form.<br><br>
<input type="submit" value="Submit Form"></center>
<br><br>
    </form>
  </body>
</html>

