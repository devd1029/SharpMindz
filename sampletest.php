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
  alert("hello bhie");
  var x=<?php include "checkanswer.php";?>;
  console.log(x);
}
</script>
<body>
<?php
include("header.php");
include("database.php");
   // $n=0;
	$i=0;
	$query = mysql_query("select * from mst_question where test_id=8",$connection) or die(mysql_error());
	//$row= mysql_fetch_row($query);
	$numrow= mysql_fetch_row($query);
	if(!isset($_SESSION['qn']))
{
	$_SESSION['qn']=0;
	$_SESSION['trueans']=0;
	
}
	if($numrow>0)
	{  $j=0;
       $i=0;
		while ($row = mysql_fetch_array($query))
	   {
          $n=$_SESSION['qn']+1;
		 $_SESSION['qn']=$_SESSION['qn']+1;
	     //mysql_data_seek($query,$_SESSION['qn']);
	     echo "<form name=myfm  id='myform' method=post action=sampletest.php>";
        $j=$j+1;
		
		// $i=$row[1];
		 echo "<table width=100% id='quiztable'>"; 
	     echo "<tR><td><span class=style2>Question ".  $n .": $row[2]</span></style>";
         echo "<tr><td class=style8><input type=radio name=$i  id=radio1 value=1>$row[3]";
         echo "<tr><td class=style8> <input type=radio name=$i id=radio2 value=2>$row[4]";
         echo "<tr><td class=style8><input type=radio name=$i id=radio3 value=3>$row[5]";
         echo "<tr><td class=style8><input type=radio name=$i id=radio4 value=4>$row[6]";
         
		 
  
        if(isset($_POST[$i]))
		{   
			echo $_POST[$i];
			$x= $row['test_id'];
		 $_SESSION['name']=$_POST[$i];
		}
			
		  if($_SESSION['qn']<mysql_num_rows($query)-1)
		  { 
		     $submit='Next Question';
		  }	
		 else
		 {
		  echo "<tr><td><input type=submit name=submit value='Get Result'>";
		 }
          if(isset($_POST['submit']))
           {
	          
			for($i=1 ; $i<3 ; $i++)
            {
				echo $_POST[$i];
				
			}				
	   
	          $query = mysql_query("select * from mst_question where test_id=8",$connection) or die(mysql_error());
	          $numrow= mysql_fetch_row($query); 
                $i=0;			  
               while ($row = mysql_fetch_array($query))
	          { $abc=$_POST[$i];
		       
		       $i=$i+1;
		         echo "<br>value of radio button is".$abc;
				 
		  
                if($ans[$i]==$row[7])
                 {
					$_SESSION['trueans']=$_SESSION['trueans']+1;
				 }
                    echo "<h1 class=head1> Result</h1>";
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";				 
			  }
           }
		 echo "</table></form>";
	    }
		
	}
   

   
?>
<script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" >
		   $('[name=a]').click(function(){
			 $('myform').submit();
				alert("hi");
				
			});
		</script>
</body>
</html>