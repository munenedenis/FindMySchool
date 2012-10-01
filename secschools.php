<?php include ('header.php'); ?>

<div cellpadding="0" cellspacing="0" border="0" class="display" id="example"> <!-- display school details. -->

 <br/><p> This are the details for <?php echo $_GET['SchoolName']; $schools=$_GET['SchoolName'];?> </p>


<table><tr><th>Gender</th><th>GradeAttained</th><th>MeanGrade</th><th>Frequency</th></tr>

<?php

 $query = mysql_real_escape_string($schools);
 require_once ('config.php');
 
 $sql = mysql_query("SELECT * FROM kcseresults WHERE Year = '2006' AND SchoolName ='$schools'")or Die(mysql_error());
 
// $total = mysql_num_rows($sql);

// $mean = "0";

 while($row = mysql_fetch_array($sql))
 {
//  $MeanGrade = $mean + $row['MeanGrade'];

echo "<tr><td>".$row['GradeAttained']."</td><td>".$row['MeanGrade']."</td><td>".$row['Frequency']."</td></tr>
     ";

/* echo "<div style='width:250px; float:left;''>
      <div class='yearbase'></div><br />
      <div></div><br />
      <div></div><br />
      <div>".$row['GradeAttained']."</div><br />
      <div>".$MeanGrade."</div><br />
      <div></div><br />

      </div>"; 

*/
}
//$MeanGrade = $mean/$total;
?>


</div>

<?php include('footer.php'); ?>