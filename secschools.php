<?php include ('header.php'); ?>



 <br/><p> This are the Performance details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> for the last 5 years</p>

<div id="one" style="margin-left:auto; margin-right:auto;">
            <ol style="margin-left: auto; margin-right:auto;">
                <li>
                    <h2><span>2006 kcse results</span></h2>
                    <div>
                      <figure>
                       

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2006' AND SchoolName ='$schools' ORDER BY 'GradeAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table cellpadding='0' cellspacing='0' border='0' id='background-image'><thead><tr><th colspan='4'>2006 kcse results</th></tr><tr><th>Gender</th><th>Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</tbody></table>

                      </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2007 kcse results</span></h2>
                    <div>
                        <figure>
                            

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2007' AND SchoolName ='$schools'")or Die(mysql_error());
 if (mysql_num_rows($sql) > 0 ) 
 {
 echo "<table cellpadding='0' cellspacing='0' border='0' id='background-image'><thead><tr><th colspan='4'>2007 kcse results</th></tr><th>Gender</th><th> Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}
else
{
  echo "This School did not enroll for national exams that year.";
}
?>
</tbody></table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2008 kcse results</span></h2>
                    <div>
                        <figure>
                            
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2008' AND SchoolName ='$schools'")or Die(mysql_error());
if (mysql_num_rows($sql) > 0 ) {
 echo "<table cellpadding='0' cellspacing='0' border='0' id='background-image'><thead><tr><th colspan='4'>2008 kcse results</th></tr><th>Gender</th><th> Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";

 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}
else
{
  echo "This School did not enroll for national exams that year.";
}
?>
</tbody></table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2009 kcse results</span></h2>
                    <div>
                        <figure>
                            
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2009' AND SchoolName ='$schools'")or Die(mysql_error());
 if (mysql_num_rows($sql) > 0 ) {
 echo "<table cellpadding='0' cellspacing='0' border='0' id='background-image'><thead><tr><th colspan='4'>2009 kcse results</th></tr><th>Gender</th><th> Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";

 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}
else
{
  echo "This School did not enroll for national exams that year.";
}
?></tbody></table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2010 kcse results</span></h2>
                    <div>
                        <figure>

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2010' AND SchoolName ='$schools'")or Die(mysql_error());
 if (mysql_num_rows($sql) > 0 ) {
 echo "<table cellpadding='0' cellspacing='0' border='0' id='background-image'><thead><tr><th colspan='4'>2010 kcse results</th></tr><th>Gender</th><th> Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";

 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}

elseif (mysql_num_rows($sql) > 7) 
{
 echo "<table><thead><tr><th colspan='4'>2010 kcse results</th></tr><th>Gender</th><th> Grade<br />Attained</th><th>Mean<br />Grade</th><th>Number of<br />Students</th></tr></thead><tbody>";

 while($row = mysql_fetch_array($sql))
{
echo "<tr style='font-size:8px; height:7px;'><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}

else
{
  echo "This School did not enroll for national exams that year.";
}
?>
</tbody></table>

                        </figure>
                    </div>
                </li>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>








<div id="comment_form">
    <div>
        <h6>Write a Review about This School</h6>
    </div>
    <div><br />
        <label>Your Name</label><input type="text" name="name" id="name" value="" placeholder="Name">
    </div><br />
    <div>
        <label>Your Email</label><input type="email" name="email" id="email" value="" placeholder="Email">
    </div><br/>
    <div>
        <label>Your Word</label><textarea rows="10" cols="5" name="comment" id="comment" placeholder="Be the first to review this school"></textarea>
    </div><br />
    <div>
        <Label>Post it</Label><input type="submit" name="submit" value="Add Comment">
    </div><br />
    
</div>










<?php include('footer.php'); ?>