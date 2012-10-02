<?php include ('header.php'); ?>



 <br/><p> This are the Performance details for <?php echo $_GET['Primary_School_Name']; $schools=$_GET['Primary_School_Name'];?> for the last 5 years</p>

<div id="one">
            <ol>
                <li>
                    <h2><span>2006 kcpe results</span></h2>
                    <div>
                      <figure>
                       

<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcpe2010 WHERE Year = '2006' AND Primary_School_Name ='$schools' ORDER BY 'Range_Of_Marks_Attained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2006 kcpe results</th></tr><tr><th>Range Of Marks Attained</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Range_Of_Marks_Attained']."</td><td>".$row['No_Of_Children_In_Range']."</td></tr>";
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
 $sql = mysql_query("SELECT * FROM kcpe2010 WHERE Year = '2007' AND Primary_School_Name ='$schools' ORDER BY 'Range_Of_Marks_Attained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2007 kcpe results</th></tr><tr><th>Range Of Marks Attained</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Range_Of_Marks_Attained']."</td><td>".$row['No_Of_Children_In_Range']."</td></tr>";
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
 $sql = mysql_query("SELECT * FROM kcpe2010 WHERE Year = '2008' AND Primary_School_Name ='$schools' ORDER BY 'Range_Of_Marks_Attained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2008 kcpe results</th></tr><tr><th>Range Of Marks Attained</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Range_Of_Marks_Attained']."</td><td>".$row['No_Of_Children_In_Range']."</td></tr>";
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
 $sql = mysql_query("SELECT * FROM kcpe2010 WHERE Year = '2009' AND Primary_School_Name ='$schools' ORDER BY 'Range_Of_Marks_Attained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2009 kcpe results</th></tr><tr><th>Range Of Marks Attained</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Range_Of_Marks_Attained']."</td><td>".$row['No_Of_Children_In_Range']."</td></tr>";
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
 $sql = mysql_query("SELECT * FROM kcpe2010 WHERE Year = '2010' AND Primary_School_Name ='$schools' ORDER BY 'Range_Of_Marks_Attained'")or Die(mysql_error());
 if( mysql_num_rows($sql) > 0 )
 {
echo "<table><tr><th colspan='4'>2010 kcpe results</th></tr><tr><th>Range Of Marks Attained</th><th>No.Of Children</th></tr>";
while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Range_Of_Marks_Attained']."</td><td>".$row['No_Of_Children_In_Range']."</td></tr>";
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