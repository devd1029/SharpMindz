<?php
$connection=mysql_connect("localhost","root","") or die("Could not Connect to the MySql".mysql_error());
mysql_select_db("exam",$connection)  or die("Could connect to Database".mysql_error());
?>
