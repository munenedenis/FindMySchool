<?php include('header.php'); ?>
    
    <!-- The Landing Page Slider-->

<div class="center">
   <h2><form name="kcpemarks" action="dttblstest.php" method="get">If I scored &nbsp&nbsp<input class="input-small" type="text" placeholder="500" id="kcpemarks" name="kcpemarks">&nbsp&nbspMarks<br /> 
    In my final KCPE results ...<br />
    which Secondary schools would Accept me<br /> </form></h2>
                   
 <!--    <div class="btn-group">
          <a href="results.html" class="btn btn-info">View Schools</a> 
      <a href="sp_results.html" class="btn btn-info">Be More Specific</a> -->
     <!--   </div>
-->
        </div>



<hr><br />
<h5> OR TRACK YOUR SCHOOLS PERFOMANCE OVER THE YEARS <h5/><br />
<hr>


<div class="schoollist1"> <!-- primary schools -->
          <label>PRIMARY SCHOOLS</label><form name="schools" action="prischools.php" method="get">
            <select name="County" onChange="window.location.href= 'prischools.php?SchoolName='+this.form.SchoolName.options[this.form.SchoolName.selectedIndex].value">

<?php
//get category id from the database 
 
 echo $_GET['Primary_School_Name']; $schools=$_GET['Primary_School_Name'];
 $query = mysql_real_escape_string($location);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT Primary_School_Name FROM kcpe2010 GROUP BY Primary_School_Name");
 while($row = mysql_fetch_array($sql))
 {
 echo "<option value=\"".$row['Primary_School_Name']."\">".$row['Primary_School_Name']."</option> \n  ";
 }

?>

</select>
</form>

<div class="schoollist2">
        <!-- secondary schools -->
          <LABEL>SECONDARY SCHOOLS</LABEL><form name="schools" action="secschools.php" method="get">
            <select name="SchoolName" onChange="window.location.href= 'secschools.php?SchoolName='+this.form.SchoolName.options[this.form.SchoolName.selectedIndex].value">

<?php
//get category id from the database 
 
 echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];
 $query = mysql_real_escape_string($location);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT SchoolName FROM kcseresults GROUP BY SchoolName");
 while($row = mysql_fetch_array($sql))
 {
 echo "<option value=\"".$row['SchoolName']."\">".$row['SchoolName']."</option> \n  ";
 }

?>

</select>
</form>

        </div>

   <?php include('footer.php'); ?>