<?php
session_start();
$expected=mktime(0,0,0,1,2,2016);
$current=time();
echo $current;
echo"<br>";
$difference=$current-$expected;
echo $difference;
   

?>
         
        <link rel="stylesheet" href="css/countdown.css">

    <h1 id="countheading">Countdown</h1>
<div id="clockdiv">
  
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
<p id="demo"></p>

<?php

if (isset($_SESSION['time']))
 {
	echo '<script src="js/countdown.js"></script>';
	unset($test);
	unset($_SESSION['time']);
 }

?>