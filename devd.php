<?php

$expected=mktime(0,0,0,1,2,2016);
$current=time();
echo $current;
echo"<br>";
$difference=$current-$expected;
echo $difference;

?>
timised code. It should work now!

<body>
<div id="divCounter"></div>
<script>
var hoursleft = 0;
var minutesleft = 10;
var secondsleft = 0; 
var finishedtext = "Countdown finished!";
var end;
if(localStorage.getItem("end")) {
    end = new Date(localStorage.getItem("end"));
} else {
    end = new Date();
    end.setMinutes(end.getMinutes()+minutesleft);
    end.setSeconds(end.getSeconds()+secondsleft);
}
var counter = function () {
    var now = new Date();
    var diff = end - now;
    diff = new Date(diff);
    var sec = diff.getSeconds();
    var min = diff.getMinutes(); 
    if (min < 10) {
        min = "0" + min;
    }
    if (sec < 10) { 
        sec = "0" + sec;
    }     
    if(now >= end) {     
        clearTimeout(interval);
        localStorage.setItem("end", null)
        document.getElementById('divCounter').innerHTML = finishedtext;
    } else {
        var value = min + ":" + sec;
        localStorage.setItem("end", end);
        document.getElementById('divCounter').innerHTML = value;
    }
}
var interval = setInterval(counter, 1000);
</script>
</body>

