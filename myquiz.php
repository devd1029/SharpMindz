<?php
include("database.php");
include ("header.php");
$rs=mysql_query("select * from mst_question where test_id=8 ") or die(mysql_error());
$row= mysql_fetch_row($rs);	
 echo "<form name=myfm method=post action=quiz.php>";
	while($row = mysql_fetch_array($rs)){
		echo "<table width=100% id='quiztable'> ";
	echo "<tR><td>Question $row[1]: $row[2]</style>";
    echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]</td></tr>";
    echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]</td></tr>";
    echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]</td></tr>";
    echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]</td></tr>";
	echo "</table>";
	echo "</from>";
	}
?>