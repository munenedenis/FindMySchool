<?php include ('header.php'); ?>



 <br/><p> This are the Performance details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> for the last 5 years</p>

<div id="one">
            <ol>
                <li>
                    <h2><span>2006 kcse results</span></h2>
                    <div>
                        <figure>
                            <img src="img/1.jpg" alt="image" />
                            <figcaption>Assassini!</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2007 kcse results</span></h2>
                    <div>
                        <figure>
                            <img src="img/2.jpg" alt="image" />
                            <figcaption>Couldn't find an image of a Khajit thief! Fail!</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2008 kcse results</span></h2>
                    <div>
                        <figure>
                            <img src="img/3.jpg" alt="image" />
                            <figcaption>That's one angry looking red dude.</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2009 kcse results</span></h2>
                    <div>
                        <figure>
                            <img src="img/4.jpg" width="768" alt="image" />
                            <figcaption>Was fun for a couple of hours or so...</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>2010 kcse results</span></h2>
                    <div>
                        <figure>
                            <img src="img/5.jpg" alt="image" />
                            <figcaption>Not as good as Hot Pursuit.</figcaption>
                        </figure>
                    </div>
                </li>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>
<table><tr><td>


<tr><th colspan="4">2006 kcse results</th></tr><tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2006' AND SchoolName ='$schools' ORDER BY 'GradeAttained'")or Die(mysql_error());
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
?>
</td>
<td>


<tr><th colspan="4">2007 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2007' AND SchoolName ='$schools'")or Die(mysql_error());
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
?>
</td>
<td>

  
<tr><th colspan="4">2008 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2008' AND SchoolName ='$schools'")or Die(mysql_error());
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
?>


</td>
<td>


  
<tr><th colspan="4">2009 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2009' AND SchoolName ='$schools'")or Die(mysql_error());
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
?>


</td>

<td>
<tr><th colspan="4">2010 kcse results</th></tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>
<?php
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2010' AND SchoolName ='$schools'")or Die(mysql_error());
 while($row = mysql_fetch_array($sql))
{
echo "<tr><td>".$row['Gender']."</td><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>";
}
?>
</td></tr></table>


<?php include('footer.php'); ?>