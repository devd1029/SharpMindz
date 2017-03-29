<?php

require('fpdf.php');
include"connection.php";
session_start();
 
class PDF extends FPDF
{
	
	
	
// Page header
function Header()
{
  
    	//include"config.php";
	$user=$_SESSION['login'];
$this->Image('certificate.jpg',0,0,210,290);
$result=mysql_query("SELECT * from mst_user where login='$user'");
 while($row=mysql_fetch_array($result))

  {		
	   $user_id=$row[0];
	   $username=$row[1]; 
	   $name=$row[2];
	   $institute=$row[4];
   }
  $i=0;   

     $sql="select distinct login  from mst_result ORDER BY score desc ";
	 $query=mysql_query($sql);
	    while($row=mysql_fetch_array($query))
		   {
			    $userid=$row['login'];
			    
			      $sql1="select max(score) , count(score) from mst_result where login='$userid' ORDER BY score DESC " ;
					$query1=mysql_query($sql1);
				 while($row1=mysql_fetch_array($query1))
		                       { 
								$i=$i+1;
	                             
								 
								  if($userid==$user)
								  {
									  $rank=$i;
									   $maxx=$row1[0];
								      $totalqz=$row1[1];
									
								  }
							   } 
		   }   
$this->SetFont('Arial','B','U',10);

//$this->Cell(0,10,"                                                                   ||  The Sharpmindz    ||");



		$this->Ln();
$this->Cell(40,290,"                                                              CERTIFICATE OF MERIT"); 

$this->Cell(-10,330,"This is to Certify  that Mr/Miss ".$name." ."); 
$this->Cell(10,340,"Students of : ".$institute);
$this->Ln();
$this->Cell(-30,-330,"                     Has Participated and Successfully answered ".$totalqz." Tests and scored ".$maxx." Points ");
$this->Ln();
$this->Cell(20,350,"                       in Sharpmindz mcq Quiz Ranking In __".$rank."__ Position  ");



}

function Footer()
{
    // Position at 1.5 cm from bottom
   
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//for($i=1;$i<=40;$i++)
  //  $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
 

?>



