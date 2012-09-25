<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
<link rel="stylesheet" href="css/bootstrap.min.css"> <!--for bootstrap -->
  <link rel="stylesheet" href="css/mystyle.css"> <!--overides bootstrap -->


    <title>Form 1 selection</title>
    <style type="text/css">
      @import "media/css/demo_page.css";
      @import "media/css/demo_table.css";
    </style>
    <script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
       <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
    <script class="jsbin" src="http://datatables.net/download/build/jquery.dataTables.nightly.js"></script>
  

<script type="text/javascript">
$(document).ready(function(){
  $('#example').dataTable( {
    "aaSorting": [[ 0, "desc" ]]
  });
});


</script>


<script type="text/javascript">
$(document).ready(function() {
    $("#example tbody tr").live( 'click',function() {     
     $(this).toggleClass('row_selected');    

    } );
} );
</script>

  </head>
  <body id="dt_example">

    <div id="container">


<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.php">Find A School</a>
          <div class="nav-collapse collapse">
            <ul class="nav" style="float:right;">
              <li class="active">
                <a href="./results.php">Find A School</a>
              </li>
              <li class="disabled">
                <a href="#">Compare Schools</a>
              </li>
              <li class="disabled">
                <a href="#">Compare Counties</a>
              </li>
            </ul>
          </div>
          </div>
         </div>
        </div>



<header style="margin-top:50px;">
     
    </header> 


<h1><form name="kcpemarks" action="dttblstest.php" method="get">Try Different Marks?&nbsp<input class="input-small" required type="text" placeholder="500" id="kcpemarks" name="kcpemarks">  <input type="submit" name="xsubmit" value="submit"> </form></h1>
<p>with <?php echo $_GET['kcpemarks']; $marks=$_GET['kcpemarks'];?> Marks, These secondary schools would accept you. </p>
<br />
<hr align="center">

      

   <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <thead>
          <tr>
            <th>Total</th>
            <th>School Name</th>
            <th>Gender</th>
            <th>Category</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>

<?php $query=mysql_real_escape_string($_GET['kcpemarks']); ?>

          <?php
require_once('config.php');
$sql=mysql_query("SELECT * FROM f1selection WHERE Total <= $query group by SchoolCode ORDER BY Total ASC" );
while($row=mysql_fetch_array($sql)){
echo "<tr style='text-align:left;'>
<td>".$row['Total']."</td>
<td>".$row['SchoolName']."</td>
<td>".$row['Gender']."</td>
<td>".$row['Category']."</td>
<td>".$row['Option']."</td>
</tr>";
}
          ?>
          
        </tbody>
        <tfoot>
          <tr>
            <th>Total</th>
            <th>School Name</th>
            <th>Gender</th>
            <th>Category</th>
            <th>Option</th>
          </tr>
        </tfoot>
      </table>


<footer style="float;right;">
              
  <a href="http://www.code4kenya.org">&copy; code4kenya 2012</a>
      
</footer>


    </div>
  </body>
</html>