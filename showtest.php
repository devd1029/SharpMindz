<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="css/sublist.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);

if (!isset($_SESSION['login']))
{
   $_SESSION['logwarn']="please Login first";
   header('location:index.php');
  
}
 if(!isset($subid))
   {
	   $_SESSION['logwarn']="please Select Subject first";
	   header('location:index.php');
   }
   
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo '<div id=content>';

while($row=mysql_fetch_row($rs))
{    echo'<section class=subjects>';


	echo "<a href=quiz.php?testid=$row[0]&subid=$subid><p class=subtext>$row[2]</p></a>";
    echo '</section>';
}
echo '</div>';
?>
</body>
</html>
