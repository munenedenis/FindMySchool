<?php include ('header.php'); ?>



 <br/><p> This are the Performance details for <?php echo $_GET['PrimarySchoolName']; $schools=$_GET['PrimarySchoolName'];?> for the last 5 years</p>

<div id="one" style="margin-left:auto; margin-right:auto;">
            <ol>
                <li>
                    <h2><span>2006 kcpe results</span></h2>
                    <div>
                      <figure>
                       

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcperesults WHERE Year = '2006' AND PrimarySchoolName ='$schools' ORDER BY 'RangeOfMarksAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2006 kcpe results</th></tr><tr><th>Gender</th><th>Range Of Marks</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['RangeOfMarksAttained']."</td><td>".$row['NoOfChildrenInRange']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</table>

                      </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2007 kcpe results</span></h2>
                    <div>
                        <figure>
                            

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcperesults WHERE Year = '2007' AND PrimarySchoolName ='$schools' ORDER BY 'RangeOfMarksAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2007 kcpe results</th></tr><tr><th>Gender</th><th>Range Of Marks</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['RangeOfMarksAttained']."</td><td>".$row['NoOfChildrenInRange']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2008 kcpe results</span></h2>
                    <div>
                        <figure>
                            
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcperesults WHERE Year = '2008' AND PrimarySchoolName ='$schools' ORDER BY 'RangeOfMarksAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2008 kcpe results</th></tr><tr><th>Gender</th><th>Range Of Marks</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['RangeOfMarksAttained']."</td><td>".$row['NoOfChildrenInRange']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2009 kcpe results</span></h2>
                    <div>
                        <figure>
                            
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcperesults WHERE Year = '2009' AND PrimarySchoolName ='$schools' ORDER BY 'RangeOfMarksAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2009 kcpe results</th></tr><tr><th>Gender</th><th>Range Of Marks</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['RangeOfMarksAttained']."</td><td>".$row['NoOfChildrenInRange']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</table>

                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2010 kcpe results</span></h2>
                    <div>
                        <figure>

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcperesults WHERE Year = '2010' AND PrimarySchoolName ='$schools' ORDER BY 'RangeOfMarksAttained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2010 kcpe results</th></tr><tr><th>Gender</th><th>Range Of Marks</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['RangeOfMarksAttained']."</td><td>".$row['NoOfChildrenInRange']."</td></tr>";
}
}
else{
  echo"<p>This school did not enroll for national exams that year</p>";
     }
?>
</table>

                        </figure>
                    </div>
                </li>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>



<?php include('footer.php'); ?>