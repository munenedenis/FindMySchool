<?php include ('header.php'); ?>

<div cellpadding="0" cellspacing="0" border="0" class="display" id="example"> <!-- display school details. -->

 <br/><p> This are the details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> </p>




<?php

 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT * FROM kcseresults WHERE SchoolName ='$schools'")or Die(mysql_error());
 
 $total = mysql_num_rows($sql);
 $mean = "0";


 while($row = mysql_fetch_array($sql))
 {
  $MeanGrade = $mean + $row['MeanGrade'];
 echo "<div style='width:250px; float:left;''>
      <div class='yearbase'>".$row['Year']."</div><br />
      <div>".$row['DistrictName']."</div><br />
      <div>".$row['County']."</div><br />
      <div>".$row['Gender']."</div><br />
      <div>".$row['GradeAttained']."</div><br />
      <div>".$MeanGrade."</div><br />
      <div>".$row['Frequency']."</div><br />

      </div>";
}
$MeanGrade = $mean/$total;
?>


</div>

<?php include('footer.php'); ?>