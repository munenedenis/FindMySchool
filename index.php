<?php echo "<?㼼浸⁬敶獲潩㵮ㄢ〮•湥潣楤杮∽瑵ⵦ∸㸿?".">"; ?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
    <!-- new element added-->    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Find My School</title>
    <!-- new element added-->    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Find My School">
    <!-- new element added-->    <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
  <meta name="author" content="Code 4 Kenya | http://code4kenya.org">

  <link rel="stylesheet" href="css/style.css"> <!--for boilerplate -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!--for bootstrap -->
  <link rel="stylesheet" href="css/mystyle.css"> <!--overides bootstrap -->

  
    <!-- new element added-->    <link rel="shortcut icon" href="../favicon.ico"> 

      <!-- new element added-->    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <!-- new element added-->    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
  
  

  <script src="js/libs/modernizr-2.5.3.min.js"></script>



    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-5722599-10']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      
      $(function() {
        $("#c-cur-down").click(function() {
          _gaq.push(["_trackPageview", "/current/download.html"]);
        });
        $("#c-cur-open").click(function() {
          _gaq.push(["_trackPageview", "/current/open.html"]);
        });
      });
    </script>
</head>



<body class="">
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  

  
<div class="container">


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
<h4> OR TRACK YOUR SCHOOLS PERFOMANCE OVER THE YEARS <h4/><br />
<hr>


<div class="schoollist1"> <!-- primary schools -->
          <label>PRIMARY SCHOOLS</label><form name="schools" action="schools.php" method="get">
            <select name="County">

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
          <LABEL>SECONDARY SCHOOLS</LABEL><form name="schools" action="schools.php" method="get">
            <select name="County" onChange="window.location=document.schools.websites.options[document.schools.websites.selectedIndex].value">

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

    </div> <!-- /container -->
<footer style="float;right;">
              
  <a href="http://www.code4kenya.org">&copy; code4kenya 2012</a>
      
</footer>
  


  <script type="text/javascript" src="js/data.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.0.min.js"><\/script>')</script>
  
  <script src="js/bootstrap.min.js"></script>
  
    
  <script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  
</body>
</html>
