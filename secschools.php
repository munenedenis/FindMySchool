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
        
            <section class="tabs">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                <label for="tab-1" class="tab-label-1">Reviews</label>
        
                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">Ratings</label>
        
                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">More</label>
                  
                <div class="clear-shadow"></div>
                
                <div class="content">
                    <div class="content-1">
                        <h2>Write a Review</h2>
                        <p>Write a line of your own opinion about this school</p>
                        <div id="comment_form">
                            <form>
    
        <h6>Write a Review about This School</h6>
   
        <label>Your Name</label><input type="text" name="name" id="name" value="" placeholder="Name">
  
        <label>Your Email</label><input type="email" name="email" id="email" value="" placeholder="Email">
   
        <label>Your Mind</label><textarea rows="10" cols="5" name="comment" id="comment" placeholder="Be the first to review this school"></textarea>
  
        <Label>Post it</Label><input type="submit" name="submit" value="Add Comment">
  
    </form>
</div>
                    </div>
                    <div class="content-2">
                        <h2>Services</h2>
                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
                        <h3>Excellence</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                    </div>
                    <div class="content-3">
                        <h2>Portfolio</h2>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
                        <h3>Examples</h3>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
                    </div>
                    
                </div>
            </section>
  

<?php include('footer.php'); ?>