<html>
<head>
  <script type="text/JavaScript" language="JavaScript">
   function quiz()
     { 
	 alert("hi"); 
    
   }
    function quizz()
     { alert('function is called'); 
   }
</script>
</head>
<body>
  <?php
if(isset($_POST['m']))	
echo "option you selected is ".$_POST['m'];
$m='m';

echo'<form action="" method="POST">';
 echo"male<input type=radio name=$m value=male onClick=quizz()><br>";
  echo"female<input type=radio name=$m value=female onchange='quizz()'><br>";
  if(isset($_POST['m']))	
echo "option you selected is ".$_POST['m'];
  echo"<input type=submit value=click ok onclick=quiz()>";

  echo"</form>";
  ?>
</form>
  </body>
</html>