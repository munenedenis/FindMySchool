<?php include ('header.php'); ?>

<div cellpadding="0" cellspacing="0" border="0" class="display" id="example"> <!-- display school details. -->

 <br/><p> This are the details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> </p>







<?php

 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT * FROM kcseresults where SchoolName =$schools;");
 while($row = mysql_fetch_array($sql))
 {
 echo "<div style='width:250px; float:left;''>
      <div>".$row['Year']."</div>
      <div>".$row['DistrictName']."</div>
      <div>".$row['County']."</div>
      <div>".$row['Gender']."</div>
      <div>".$row['GradeAtained']."</div>
      <div>".$row['MeanGrade']."</div>
      <div>".$row['Frequency']."</div>

      </div>";
}
?>


</div>

<?php include('footer.php'); ?>