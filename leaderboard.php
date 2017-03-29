<html>
<head>
     <title>Leader-board</title>
	 <link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
  include("header.php");
  include("database.php");
  $sql="select distinct login  from mst_result ORDER BY score desc ";
                  echo "<h1 class=head1> Leader-board </h1>";
  if($query=mysql_query($sql))
  {
	  
	  
	  if(mysql_num_rows($query)==null)
	  {
		              echo "<h1 class=head1> Leader-board </h1>";
                   
	                     echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
                         	exit;
                        
	  }
	  else
	  {
   		  $i=0;
              echo'<table id="leadertable"  align=center>
								    <tr class=style2>
									    <td>Rank</td>
									    <td>name</td>
										<td>no test ans</td>
									   <td>score</td>   
									</tr>';
		    while($row=mysql_fetch_array($query))
		   {
			    $userid=$row['login'];
			    
			      $sql1="select max(score) , count(score) from mst_result where login='$userid' ORDER BY score DESC " ;
			   $x=0;

			   if($query1=mysql_query($sql1))
			   {
				      
					  if(mysql_num_rows($query1)==null)
	                    {
		                 echo"i think there is no data found";
	                    }
						else
						{      
									
									
							    while($row1=mysql_fetch_array($query1))
		                       {  $i=$i+1;
	                              $maxx=$row1[0];
								  $totalqz=$row1[1];
								  
			                     
								  echo"<tr class=style8>";
								  echo" <tr><td>$i</td>";
								  echo"<td>$userid</td>";
								  echo"<td>$totalqz</td>";
								  echo"<td>$maxx</td></tr>";   
								
								
		                       } 
                            		$x=$row1[0];				   
						}
				     
			   }
			   else
			   {
				  
			   }
			    
			  
			 
			}                       
	         
		   echo'</table>';	
		        
	    }
	  
  } 
  else
  {
	  echo"query failed";
  }


?>
</body>
</html>