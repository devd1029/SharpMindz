<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Subject List</title>
<style type="text/css" rel="stylesheet">
a{
     text-decoration: none;
	color: #FFFFFF;
	font-family: "Agency FB";
	font-size: 15px;
	font-weight: lighter;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="css/sublist.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aguafina-script:n4:default;bad-script:n4:default.js" type="text/javascript"></script>
</head>
<body>
 <div id="back">
<?php
if(!isset($_SESSION['login']))
{   echo"please first select the subject or test";
	header("location: index.php");
	$_SESSION['logwarn']="please login In-order to Select Subject";
	
}
include("header.php");
include("database.php");

echo "<h2 class=subhead> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from mst_subject ORDER BY sub_name ASC");
echo "<center>";
echo '<div id=content>';
while($row=mysql_fetch_row($rs))
{    echo'<section class=subjects>';

	echo "<a href=showtest.php?subid=$row[0]>
	<p class=subtext>$row[1]</p></a>";
    echo'</section>';

	}
echo "</div>";
echo "</center>";
?>
</div>
</body>
</html>
