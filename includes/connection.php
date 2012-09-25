<?php
$connection = mysql_connect("localhost","root","");
if (!$connection){
die("Database connection failed: " . mysql.error());
}
$db_select = mysql_select_db("lidsdb",$connection);
if(!$db_select){
die("Database selection failed: " . mysql_error());
}
?>