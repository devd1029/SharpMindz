<?php
extract($_POST);
extract($_SESSION);

 $_SESSION[$i]=$_POST[$i];
 echo $_SESSION[$i];
?>