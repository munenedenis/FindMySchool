<?php include('header.php'); ?>
    
  
          

<header class="center">
  
  <br/><h2 style="padding:50px 50px;">
  <form name="kcpemarks" action="dttblstest.php" method="get" autocomplete="off">If I scored &nbsp&nbsp
  <input class="input-small" type="number" pattern="[0-9]{3}" placeholder="500" id="kcpemarks" name="kcpemarks" autofocus required min="100" max="500">&nbsp&nbspMarks 
    In my <br />final KCPE results ...<br />
    Which Secondary schools would Accept me?<br />      
 <script>$(document).trigger('autofocus_ready');</script> 
  
<button class="btn-large" type="submit" id="kcpemarks" action="dttblstest.php">Find Out</button>
</form></h2>

</header>

<div class="extra">
<br />
<h5> TRACK YOUR SCHOOLS PERFOMANCE OVER THE YEARS <h5/><br />
<hr>

<div class="prisec">
<div class="schoollist1"> <!-- primary schools -->
          <form name="schools" action="prischools.php" method="get">
            <select name="PrimarySchoolName" onChange="window.location.href= 'prischools.php?PrimarySchoolName='+this.form.PrimarySchoolName.options[this.form.PrimarySchoolName.selectedIndex].value">

<?php
//get category id from the database 
 
 echo $_GET['PrimarySchoolName']; $schools=$_GET['PrimarySchoolName'];
 $query = mysql_real_escape_string($location);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT PrimarySchoolName FROM kcperesults GROUP BY PrimarySchoolName");
 echo "<option value='select a primary school'>Select a primary school</option> \n  ";
 while($row = mysql_fetch_array($sql))
 {
 echo "<option value=\"".$row['PrimarySchoolName']."\">".$row['PrimarySchoolName']."</option> \n  ";
 }

?>

</select>
</form>

</div>
<div class="schoollist2">
        <!-- secondary schools -->
         <form name="schools" action="secschools.php" method="get">
            <select name="SchoolName" onChange="window.location.href= 'secschools.php?SchoolName='+this.form.SchoolName.options[this.form.SchoolName.selectedIndex].value">

<?php
//get schools list from the database 
 
 echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];
 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT SchoolName FROM kcseresults GROUP BY SchoolName");
 echo "<option value='select a secondary school'>Select a Secondary school</option> \n  ";
 while($row = mysql_fetch_array($sql))
 {
 echo "<option value=\"".$row['SchoolName']."\">".$row['SchoolName']."</option> \n  ";
 }

?>

</select>
</form>

</div>
</div>
</div> <!--extra -->
   <?php include('footer.php'); ?>