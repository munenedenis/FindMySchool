

<?php

$qweri=mysql_query("SELECT County FROM `kcpe2010` WHERE KNEC_Code IN (SELECT SUBSTRING(IndexNumber, 1, 6) FROM f1selection); ");
?>
<select name="County" size=9>

<?php
while($list=mysql_fetch_array($qweri))


{
echo 
"<option value=" .$list['County'] . ">" . $list['County'] . "</option>";
}

echo "</select> "
?>

