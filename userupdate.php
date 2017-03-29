<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">

<?php
 include("header.php");
 session_start();
 extract($_POST);
include("database.php");
		  $login=$_SESSION['login'];
		  echo $login;
if (isset($_POST['submit'])) {
 $u_id=$_SESSION['u_id'];
$lid = $_POST['lid'];
$name = $_POST['name'];
$email = $_POST['email'];
$insist = $_POST['insist'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$query = mysql_query("update mst_user set
name='$name', login='$lid', name='$name',email='$email',institute='$insist', address='$address', phone='$phone' where user_id='$u_id'", $connection);
}

?>
</div><?php

$query1 = mysql_query("select * from mst_user where login='$login'", $connection);
while ($row1 = mysql_fetch_array($query1)) 
{
   $lid=$row1[1];
   $name=$row1[2];
   $email=$row1[3];
   $institute=$row1[4];
   $address=$row1[6];
   $phone=$row1[7];
   $_SESSION['u_id']=$row1[0];

}
echo $u_id;
	echo "<form class='form' method='POST'>";
	echo "<h2>Update Form</h2>";
	echo "<hr/>";

	 echo '<table width="301" border="0" align="left">';
			   echo ' <tr>';
				echo '<td class="style7">Profile Picture</td>';
			  
			   echo '<td class="style7"><input type="text" placeholder="Choose Profile pic"></td>';
			   echo "<td><input type=file id=profile name=file Onchange=upload();></td>";
			   echo ' <td class="fans" id="warn" width="200px"></td>';
			echo ' </tr>';
			  echo ' <tr>';
			  echo ' <td class="style7">userame</td>';
			   echo "<td><input name=lid type=text id=lid onblur=return check(); value=$lid></td>";
			   echo ' <td class="fans" id="warn" width="200px"></td>';
			echo ' </tr>';
			  echo '<tr>';
			  echo ' <td class="style7">Name</td>';
			   echo "<td><input name=name type=text id=name onblur=return check(); value=$name></td>";
			   echo ' <td class="fans" id="warn" width="200px"></td>';
			 echo '</tr>';
			  echo '<tr>';
			  echo ' <td class="style7">Institute/College</td>';
			   echo "<td><input type=text name=insist id=insist onblur=check() value=$institute></td>";
			   echo '<td class="fans" id="warninsist" width="200px"></td>';
			 echo '</tr>';
			 echo '<tr>';
			  echo ' <td class="style7">Password</td>';
			   echo "<td><input type=password name=pass onblur=check() ></td>";
			   echo '<td class="fans" id="warnpass" width="200px"></td>';
			echo ' </tr>';
			echo ' <tr>';
			 echo '  <td valign="top" class="style7">Address</td>';
			  echo " <td><textarea name=address id=address onblur=check() value=$address>$address</textarea></td>";
			 echo '  <td class="fans" id="warnadd" width="200px"></td>';
			 echo '</tr>';
			 echo '<tr>';
			  echo ' <td valign="top" class="style7">Phone</td>';
			  echo " <td><input name=phone type=text id=phone onblur=check() value=$phone></td>";
			  echo ' <td class="fans" id="warnphone" width="200px"></td>';
			 echo '</tr>';
			 echo '<tr>';
			   echo '<td valign="top" class="style7">E-mail</td>';
			   echo "<td><input name=email type=email id=email onblur=check()  value=$email disable></td>";
			   echo '<td class="fans" id="warnemail" width="200px"></td>';
			 echo '</tr>';
			 echo '<tr>';
			   echo '<td>&nbsp;</td>';
				  echo '<input class=submit type=submit name=submit value=update />';
			  echo ' </td>';
			echo ' </tr>';
		   echo '</table>';

	echo "</form>";



if (isset($_POST['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>