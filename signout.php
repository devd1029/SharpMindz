<?php
session_start();
session_destroy();
header("Location: index.php");
echo "Log-Out Sucessfull-Thank you for using our website";

?>
