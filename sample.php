<!DOCTYPE HTML>
<html>
<head>
<title>sharpmindz.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

</head>
<script type="text/javascript">
function quiz()
{	
 alert("hello");
 
}
</script>
<body>
<?php
include("header.php");
include("database.php");
session_start();
   // $n=0;
	$i=0;
	$sql="select * from mst_question where test_id=8";
	$query = mysql_query($sql,$connection) or die(mysql_error());
	$row= mysql_fetch_row($query);
	
	if(!isset($_SESSION['qn']))
  {
	$_SESSION['qn']=0;
	$_SESSION['trueans']=0;
	
}
	if($row!=0)
	{ 
		while ($row = mysql_fetch_array($query))
	   {    
	     echo "<form name=myfm method=post id='quizform' action=sample.php>";
    	 $i=$i+1;
		 echo "<table width=100% id='quiztable'>"; 
	     echo "<tR><td><span class=style2>Question ".  $n .": $row[2]</span></style>";
         echo "<tr><td class=style8><input type=radio name=$i onclick=quiz() value=1>$row[3]";
         echo "<tr><td class=style8> <input type=radio name=$i id=radio2 value=2>$row[4]";
         echo "<tr><td class=style8><input type=radio name=$i id=radio3 value=3>$row[5]";
         echo "<tr><td class=style8><input type=radio name=$i id=radio4 value=4>$row[6]";	
	   }
	}	   
	if(isset($_POST[$i]))
	{   echo $_POST[$i];
        echo $i;
		$_SESSION['name']=$_POST[$i];
		echo $_SESSION['name'];
		
	}
		 
	
		  echo "<tr><td><input type=submit name=submit value='Get Result'>";
    
	   	 
 ?>  
</table>
</form> 
</body>

</html>