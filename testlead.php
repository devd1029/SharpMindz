<html>
<body>
<?php 
	session_start();
	$test=1; 
	$_SESSION['time']="dekho";
	echo $_SESSION['time'];
	?>
	<a href="devd1.php"><input type="button" value="click to start the timer"></a>
	
</body>
</html>