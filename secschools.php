<?php include ('header.php'); ?>



 <br/><p> This are the Performance details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> for the last 5 years</p>

<div id="one">
            <ol>
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
echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'>2006 kcse results</th></tr><tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";
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
 echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'>2007 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";
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
 echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'2008 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";

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
 echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'>2009 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";

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
 echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'>2010 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";

 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
}

elseif (mysql_num_rows($sqk) > 8) 
{
 echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'><thead><tr><th colspan='4'>2010 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr></thead><tbody>";

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



<?php include('footer.php'); ?>