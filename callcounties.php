

<?php
$qweri=mysql_query("SELECT County FROM `kcpe2010` WHERE KNEC_Code IN (SELECT SUBSTRING(IndexNumber, 1, 6) FROM f1selection); ");

echo "<form><select name="County" size=9>"

while($list=mysql_fetch_array($qweri))

{
echo 
"<option value=" .$list['County'] . ">" . $list['County'] . "</option>";
}

echo "</select></form> "
?>

