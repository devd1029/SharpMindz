<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from student where regnum='$regnum'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Registration Number Already Exists</div>";
	echo "<br><br><div class=head2>Sign up again (Enter your Own Reg Num)</div>";
	echo "<br><br><div class=head2>(*Note-If problem continuous contact admininistrative Email:sawantdevdatt@gmail.com)</div>";
	echo "<br><div class=head1><a href=signup.php>Signup</a></div>";
	
	exit;
}
	$regnum=$_POST['regnum'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];


$query="insert into mst_user(regnum,name,password,email,contact) values('$regnum','$name','$password','$email','$contact')"or die(mysql_error());
$rs=mysql_query($query)or die("Could Not Perform the Query".mysql_error());
echo "<br><br><br><div class=head1>Your Login ID(user name) :  $regnum Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>

